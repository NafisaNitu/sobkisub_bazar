<?php

namespace App\Http\Controllers\Api\v2;

use App\Http\Controllers\Controller;
use App\Models\Ticket;
use Auth;
use Exception;
use Illuminate\Http\Request;
use Mail;
use App\Models\User;
use App\Mail\SupportMailManager;

class SupportTicketController extends Controller
{
    public function index()
    {
      
       try {
            $tickets = Ticket::where('user_id', Auth::user()->id)->orderBy('created_at', 'desc')->paginate(9);
            return response()->json($tickets);
        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'error' => $e->getMessage(),
            ]);
        }
           
    }
    
    public function store(Request $request)
    {
        //dd();
        $ticket = new Ticket;
        $ticket->code = max(100000, (Ticket::latest()->first() != null ? Ticket::latest()->first()->code + 1 : 0)) . date('s');
        $ticket->user_id = Auth::user()->id;
        $ticket->subject = $request->subject;
        $ticket->details = $request->details;
        //image insert
        if ($request->has('image')) {
            $image = $request->file('image');
            $reImage = time() . '.' . $image->getClientOriginalExtension();
            $dest = public_path('uploads/ticket/');
            $image->move($dest, $reImage);

            // save in database
            $ticket->files = $reImage;
        }
        // $ticket->files = $request->attachments;

        if ($ticket->save()) {
            return response()->json($ticket);
        } 
    }

    public function send_support_mail_to_admin($ticket)
    {
        $array['view'] = 'emails.support';
        $array['subject'] = 'Support ticket Code is:- ' . $ticket->code;
        $array['from'] = env('MAIL_FROM_ADDRESS');
        $array['content'] = 'Hi. A ticket has been created. Please check the ticket.';
        $array['link'] = route('support_ticket.admin_show', encrypt($ticket->id));
        $array['sender'] = $ticket->user->name;
        $array['details'] = $ticket->details;

        // dd($array);
        // dd(User::where('user_type', 'admin')->first()->email);
        try {
            Mail::to(User::where('user_type', 'admin')->first()->email)
            ->queue(new SupportMailManager($array));
        } catch (\Exception $e) {
            // dd($e->getMessage());
        }
    }
}
