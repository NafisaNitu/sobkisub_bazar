<?php

namespace App\Http\Controllers\Api\V2;

use App\Models\AddBannerSlider;

use App\Http\Resources\V2\PackageCollection;
use Illuminate\Http\Request;


class PackageController extends Controller
{
   public function advertisement()
   {
       $advertisement = AddBannerSlider::query();
       return new PackageCollection($advertisement->where('approved_by_admin',1)->where('package_name','silver')->get());
   }
   public function corporate()
   {
        $corporate = AddBannerSlider::query();
       return new PackageCollection($corporate->where('approved_by_admin',1)->where('package_name','gold')->get());
   }
   public function platinum()
   {
       $platinum = AddBannerSlider::query();
       return new PackageCollection($platinum->where('approved_by_admin',1)->where('package_name','platinum')->get());
   }
   public function adStore()
   {
       $ad_store = AddBannerSlider::query();
       return new PackageCollection($ad_store->where('approved_by_admin',1)->where('package_name','bronze')->get());
   }
   
}