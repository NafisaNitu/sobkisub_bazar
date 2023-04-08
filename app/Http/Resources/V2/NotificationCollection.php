<?php

namespace App\Http\Resources\V2;

use Illuminate\Http\Resources\Json\ResourceCollection;

class NotificationCollection extends ResourceCollection
{
    public function toArray($request)
    {
    //  dd($this);
        return [
            'data' => $this->collection->map(function ($data) {
               
                $user_info = json_decode($data->data, true);
                if(auth()->user()->id == $user_info['user_id']){
                    return [
                        'id'      => $data->id,
                        'type' => $data->type,
                        'notifiable_type' => (string) $data->notifiable_type,
                        'notifiable_id' => (int)  $data->notifiable_id,
                        'data' =>  $user_info,
                        'read_at' =>  $data->read_at,
                    ];
                }
            }),
           
           
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
