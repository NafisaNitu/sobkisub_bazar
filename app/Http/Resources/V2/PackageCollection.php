<?php

namespace App\Http\Resources\V2;

use Illuminate\Http\Resources\Json\ResourceCollection;
use App\Models\Shop;
class PackageCollection extends ResourceCollection
{
    public function toArray($request)
    {
        return [
            'data' => $this->collection->map(function($data) {
                if($data->button_link != ''){
                    $get_shop_id = explode("/",$data->button_link);
                    $get_shop_id = $get_shop_id[4];
                    $shop_id_and_name = explode("-",$get_shop_id);
                    $id = end($shop_id_and_name);
                    $get_shop_details = Shop::where('id',$id)->first()->name;
                    
                }
                
                
                return [
                    'id' => $data->id,
                    'title' => $data->title,
                    'package_name' => $data->package_name,
                    'photo' => api_asset($data->image),
                    'button_link' => $data->button_link,
                    'shop_name' => $get_shop_details ?? null,
                    'shop_id'  => $id ?? null,
                   
                ];
            })
        ];
    }

    public function with($request)
    {
        return [
            'success' => true,
            'status' => 200
        ];
    }
}