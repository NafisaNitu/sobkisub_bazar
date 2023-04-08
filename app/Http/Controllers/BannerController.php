<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AddBanner;
use Illuminate\Support\Facades\File;
class BannerController extends Controller
{
    
    public function index(){
     return view('backend.product.banner.index');
    }
     public function create(){
     return view('backend.product.banner.create');
    }
     public function store(Request $request){
      $banner = new AddBanner;
        $banner->name = $request->input('name');
         $banner->link = $request->input('link');
        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('public/uploads/banner/', $filename);
            $banner->image = $filename;
        }

        $banner->save();
        return  redirect()->route('banner.index');
    }
     public function editbanner($id){
         $banner = AddBanner::find($id);
     return view('backend.product.banner.edit',compact('banner'));
    }
     public function updatebanner(Request $request, $id)
    {
        $banner = AddBanner::find($id);
        $banner->name = $request->input('name');
         $banner->link = $request->input('link');
        

        if($request->hasfile('image'))
        {
            $destination = 'public/uploads/banner/'.$banner->image;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('public/uploads/banner/', $filename);
            $banner->image = $filename;
        }

        $banner->update();
        return redirect()->back();
    }
    
    
    public function destroyall(Request $request){
        AddBanner::truncate();
        
    }
     public function deletebanner(Request $request,$id ){
         
      $banner = AddBanner::find($id);
      $destination = 'public/uploads/banner/'.$banner->image;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
      $banner->delete();
      return redirect()->back();
        
    }
    
    
    
}