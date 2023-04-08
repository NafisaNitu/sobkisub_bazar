<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\AddBannerSlider;
use App\Models\CustomerPackageBuy;
use App\Models\CustomerPackgeDayTime;
use App\Models\CustomerPackage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class AddBannerSliderController extends Controller
{

    /**
     * Display a listing of the resource.
     * add_banner_sliders
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        if (!Auth::user()->user_type == 'admin' || !Auth::user()->user_type == 'seller') {
            return abort(401, 'You are not unauthorized');
        }
        if (Auth::user()->user_type == 'admin') {
            $sliders = AddBannerSlider::orderBy('id', 'desc')->paginate(10);
            return view('backend.ad_slider_banner.index', compact('sliders'));
        } else if (Auth::user()->user_type == 'seller') {
           $count_upload_image =  CustomerPackageBuy::where('user_id',Auth::user()->id)->sum('remaining_uploads');
           
            $sliders = AddBannerSlider::where('user_id', Auth::user()->id)
                ->orderBy('priority', 'desc')
                ->paginate(10);
                // dd($sliders);
            return view('frontend.user.seller.add_banner_slider.index', compact('sliders','count_upload_image'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $count_upload_image =  CustomerPackageBuy::where('user_id',Auth::user()->id)->sum('remaining_uploads');
         $get_packages = CustomerPackageBuy::where('user_id',Auth::user()->id)->get();
        
         $buy_package = $get_packages->count();
         
        if (!Auth::user()->user_type == 'seller' || !Auth::user()->user_type == 'admin') {
            return abort(401, 'You are not unauthorized');
        }
        
        if(Auth::user()->user_type == 'seller' && $buy_package > 0){
            if($count_upload_image > 0){
                return view('frontend.user.seller.add_banner_slider.create',compact('get_packages'));
            }else{
                return redirect()->route('customer_packages_list_show');
            }
            
        }else{
            flash('Please At First Buy any package')->warning();
            return redirect()->route('customer_packages_list_show');
        }
        
    }
    
    
    public function createAddBannerByAdmin()
    {
        return view('backend.ad_slider_banner.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (!Auth::user()->user_type == 'seller' || !Auth::user()->user_type == 'admin') {
            return abort(401, 'You are not unauthorized');
        }
        // dd($request->all());
       
        
        $request->validate([
            'title' => 'required',
            'image' => 'required',
            'button_text' => 'nullable',
            'button_link' => 'nullable',
            'priority' => 'nullable',
            'is_paid' => 'nullable',
            'is_offer' => 'nullable',
        ]);
        
        $buy_customer_pacakge_id = CustomerPackageBuy::where('id',$request->buy_package_id)->first();
         
        $customer_package = CustomerPackage::where('id',$buy_customer_pacakge_id->customer_package_id)->first();
        
        $customer_package_day_time = CustomerPackgeDayTime::where('id',$buy_customer_pacakge_id->customer_package_day_amount_id)->first();
        
        
        $end_date = Carbon::now()->addDay($customer_package_day_time->days);
        $end_date->toDateString();
     
        
        if($customer_package->name == 'Gold' || $customer_package->name == 'gold' || $customer_package->name == 'GOLD' ){
            $customer_package_name = 'gold';
        }
        
        $addBannerSlider = new AddBannerSlider();
        $addBannerSlider->title = $request->title;
        $addBannerSlider->user_id = Auth::user()->id;
        $addBannerSlider->button_text = $request->button_text;
        $addBannerSlider->button_link = $request->button_link;
        $addBannerSlider->image = $request->image;
        $addBannerSlider->package_name = $customer_package_name;
        $addBannerSlider->end_package_date = $end_date->toDateString(); 
        
        if($addBannerSlider->save()){
             $buy_customer_pacakge_id->remaining_uploads -= 1;
             $buy_customer_pacakge_id->save();
        }
        
        return redirect()->route('approved_ad_banner.index')->with('success','Slider Add successfully!');
    }
    
     public function storeAddBannerByAdmin(Request $request)
    {
        if ( !Auth::user()->user_type == 'admin') {
            return abort(401, 'You are not unauthorized');
        }
        $request->validate([
            'title' => 'required',
            // 'image' => 'required',
            'button_text' => 'nullable',
            'button_link' => 'nullable',
            'priority' => 'nullable',
            'package_name' => 'nullable',
            'end_package_date' => 'nullable',
            
        ]);

        $addBannerSlider = new AddBannerSlider();
        $addBannerSlider->title = $request->title;
        $addBannerSlider->user_id = Auth::user()->id;
        $addBannerSlider->button_text = $request->button_text;
        $addBannerSlider->button_link = $request->button_link;
        $addBannerSlider->image = $request->image;
        $addBannerSlider->is_paid = $request->is_paid;
        $addBannerSlider->package_name = $request->package_name;
        $addBannerSlider->end_package_date = $request->end_package_date;
        $addBannerSlider->save();
        return back()->with('success','Data has been created succcessfully.');
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
        if (!Auth::user()->user_type == 'seller' || !Auth::user()->user_type == 'admin') {
            return abort(401, 'You are not unauthorized');
        }
        $slider = AddBannerSlider::find($id);
        return view('frontend.user.seller.add_banner_slider.update',compact('slider'));
    }
    
    public function editByAdmin($id)
    {
        if (!Auth::user()->user_type == 'admin') {
            return abort(401, 'You are not unauthorized');
        }
        $slider = AddBannerSlider::find($id);
        return view('backend.ad_slider_banner.update',compact('slider'));
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
        if (!Auth::user()->user_type == 'seller' || !Auth::user()->user_type == 'admin') {
            return abort(401, 'You are not Unauthorized');
        }

        $request->validate([
            'title' => 'required',
            'image' => 'required',
            'button_text' => 'nullable',
            'button_link' => 'nullable',
            'priority' => 'nullable',
             'is_paid' => 'nullable',
            'is_offer' => 'nullable',
        ]);

        $addBannerSlider = AddBannerSlider::find($id);
        $addBannerSlider->title = $request->title;
        $addBannerSlider->button_text = $request->button_text;
        $addBannerSlider->button_link = $request->button_link;
        $addBannerSlider->image = $request->image;
        $addBannerSlider->is_paid = $request->is_paid;
        if ($request->is_paid == 0) {
            $addBannerSlider->is_offer = 1;
        }else{
            $addBannerSlider->is_offer = 0;
        }
        
        // $addBannerSlider->priority = $request->priority;

        //image insert
        // if ($request->has('image')) {
        //     $destination = 'uploads/adsliderbanner/' . $addBannerSlider->image;
        //     if (File::exists($destination)) {
        //         File::delete($destination);
        //     }
        //     $image = $request->file('image');
        //     $reImage = time() . '.' . $image->getClientOriginalExtension();
        //     $dest = public_path('uploads/adsliderbanner/');
        //     $image->move($dest, $reImage);

        //     // save in database
        //     $addBannerSlider->image = $reImage;
        // }
        $addBannerSlider->save();
        return back()->with('success','Slider Updated successfully!');
    }


    public function updateAddBannerByAdmin(Request $request,$id)
    {
        if ( !Auth::user()->user_type == 'admin') {
            return abort(401, 'You are not unauthorized');
        }
        $request->validate([
            'title' => 'required',
            // 'image' => 'required',
            'button_text' => 'nullable',
            'button_link' => 'nullable',
            'priority' => 'nullable',
            'package_name' => 'nullable',
            'end_package_date' => 'nullable',
            
        ]);

        $addBannerSlider =  AddBannerSlider::find($id);
        $addBannerSlider->title = $request->title;
        $addBannerSlider->user_id = Auth::user()->id;
        $addBannerSlider->button_text = $request->button_text;
        $addBannerSlider->button_link = $request->button_link;
        $addBannerSlider->image = $request->image ?? '';
        $addBannerSlider->is_paid = $request->is_paid;
        $addBannerSlider->package_name = $request->package_name;
        $addBannerSlider->end_package_date = $request->end_package_date;
        $addBannerSlider->save();
        return back()->with('success','Data has been updated succcessfully.');
    }
    
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        if (!Auth::user()->user_type == 'seller' || !Auth::user()->user_type == 'admin') {
            return abort(401, 'You are not unauthorized');
        }

        $addBannerSlider = AddBannerSlider::find($id);
        // $destination = 'uploads/adsliderbanner/' . $addBannerSlider->image;
        // if (File::exists($destination)) {
        //     File::delete($destination);
        // }
        $addBannerSlider->delete();
        return back()->with('success','Slider Delete successfully.');
    }
    public function approvedByAdmin(Request $request)
    {
        // dd($request->toArray());
        $id = $request->id;
        $approved = $request->approved;
        AddBannerSlider::where('id',$id)->update([
            'approved_by_admin' => $approved
        ]);
        return 1;
    }
    public function updatePriority(Request $request)
    {
        $id = $request->id;
        $priority = $request->priority;
        AddBannerSlider::where('id',$id)->update([
            'priority' => $priority
        ]);
       return 1;
       
    }
}
