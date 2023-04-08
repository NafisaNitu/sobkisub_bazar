<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use Auth;
use Illuminate\Http\Request;

class PartnerController extends Controller
{
    public function index()
    {
        if (Auth::user()->user_type == 'admin') {
            $partners = Partner::orderBy('id', 'asc')->paginate(15);
          
            return view('backend.partner.index', compact('partners'));
        } 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (!Auth::user()->user_type == 'admin') {
            return abort(401, 'You are not unauthorized');
        }
        return view('backend.partner.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ( !Auth::user()->user_type == 'admin') {
            return abort(401, 'You are not unauthorized');
        }
        $request->validate([
            'name' => 'required',
            'image' => 'required',
        ]);

        $partner = new Partner();
        $partner->name = $request->name;
        $partner->image = $request->image;
   
        $partner->save();
        
        return back()->with('success','Partner Add successfully!');
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
        if (!Auth::user()->user_type == 'admin') {
            return abort(401, 'You are not unauthorized');
        }
        $partner = Partner::find($id);
        return view('backend.partner.update',compact('partner'));
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
        if (!Auth::user()->user_type == 'admin') {
            return abort(401, 'You are not Unauthorized');
        }

        $request->validate([
            'name' => 'required',
            'image' => 'required',
        ]);

        $partner = Partner::find($id);
        $partner->name = $request->name;
        $partner->image = $request->image;
        
        $partner->save();
        return back()->with('success','Partner Updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $partner = Partner::find($id);
        $partner->delete();
        return back()->with('success','Partner Delete successfully.');
    }
}
