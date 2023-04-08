<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HomeBanner;
use Illuminate\Support\Facades\File;
class HomeBannerController extends Controller
{
    
    public function index(){
     return view('backend.product.homebanner.index');
    }
     public function create(){
     return view('backend.product.homebanner.create');
    }
     public function store(Request $request){
      $banner = new HomeBanner;
        $banner->link = $request->input('link');

        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('public/uploads/homebanner/', $filename);
            $banner->image = $filename;
        }

        $banner->save();
        return  redirect()->route('homebanner.index');
    }
     public function editbanner($id){
         $banner = HomeBanner::find($id);
     return view('backend.product.homebanner.edit',compact('banner'));
    }
    
     public function updatebanner(Request $request, $id)
    {
        $banner = HomeBanner::find($id);
       
        $banner->link = $request->input('link');

        if($request->hasfile('image'))
        {
            $destination = 'public/uploads/homebanner/'.$banner->image;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('public/uploads/homebanner/', $filename);
            $banner->image = $filename;
        }

        $banner->update();
        return redirect()->back();
    }
    
    public function destroyall(Request $request){
        HomeBanner::truncate();
        return  redirect()->route('homebanner.index');
    }
     public function deletebanner($id){
         
      $banner = HomeBanner::find($id);
      $banner->delete();
      return redirect()->back();
        
    }
    
    
    
}