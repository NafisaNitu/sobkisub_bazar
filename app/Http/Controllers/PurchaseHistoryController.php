<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\ReturnProduct;
use App\Models\OrderDetail;
use Illuminate\Support\Facades\Storage;
use Auth;
use DB;
use Illuminate\Support\Facades\Http;
class PurchaseHistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Order::where('user_id', Auth::user()->id)->orderBy('code', 'desc')->paginate(9);
        return view('frontend.user.purchase_history', compact('orders'));
    }

    public function digital_index()
    {
        $orders = DB::table('orders')
                        ->orderBy('code', 'desc')
                        ->join('order_details', 'orders.id', '=', 'order_details.order_id')
                        ->join('products', 'order_details.product_id', '=', 'products.id')
                        ->where('orders.user_id', Auth::user()->id)
                        ->where('products.digital', '1')
                        ->where('order_details.payment_status', 'paid')
                        ->select('order_details.id')
                        ->paginate(15);
        return view('frontend.user.digital_purchase_history', compact('orders'));
    }

    public function purchase_history_details(Request $request)
    {
        $order = Order::findOrFail($request->order_id);
        $order->delivery_viewed = 1;
        $order->payment_status_viewed = 1;
        $order->save();
        return view('frontend.user.order_details_customer', compact('order'));
    }
    
     public function returnProduct(Request $request, $id)
    {
        $id = decrypt($id);
        $return_details = Order::find($id);
         
       $response = Http::withHeaders([
            'API-SECRET' => env('ECOURIER_API_SECRET'),
                'API-KEY' =>env('ECOURIER_API_KEY'),
                'USER-ID' => env('ECOURIER_USER_ID'),
                'Content-Type' => 'application/json',
        ])->post('https://backoffice.ecourier.com.bd/api/cancel-order', [
            "tracking" => $return_details->ecr_response_id,
            "comment" => "cancel order"
        ]);
        
        $response = json_decode($response, true);
        
        if($response['success'] == 'true'){
            return view('frontend.user.return.return_store', compact('return_details'));
        }else{
           return back()->with('error','This Order is not return or cancel');
        }
    }

    public function storeReturnProduct(Request $request, $id)
    {
        // dd($request->all());
        $request->validate([
            'cause_description' => 'required',
            'quantity' => 'required',
            'mobile_number' => 'required|max:11|min:11',
            'image' => 'required',
            'video' => 'nullable',
            "return_money" => 'required',
            "return_money_number" => 'required'
        ]);

        $return_details = new ReturnProduct();
        $return_details->customer_id = $request->customer_id;
        $return_details->return_product_id = $request->return_product_id; //order id
        $return_details->seller_id = $request->seller_id;
        $return_details->quantity = $request->quantity;
        $return_details->mobile_number = $request->mobile_number;
        $return_details->return_money = $request->return_money;
        $return_details->return_money_number = $request->return_money_number;
        $return_details->return_money_number = $request->return_money_number;
        $return_details->cause_description = $request->cause_description;
        $return_details->images = $request->image;
        if ($request->hasFile('video')) {
             $image = $request->file('video');
            $reImage = time() . '.' . $image->getClientOriginalName();
            $dest = public_path('/videos/');
            $image->move($dest, $reImage);
           
     
            // $isFileUploaded = Storage::disk('public')->put($filePath, file_get_contents($request->video));
     
            // File URL to access the video in frontend
            // $url = Storage::disk('public')->url($filePath);
        }

            $return_details->video = $request->video;
            $return_details->video_url = '';
     
        $return_details->save();
        return back()->with('success', 'Product Return submitted successfully.');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
