<?php

namespace App\Http\Controllers\Api\V2;

use App\Http\Controllers\Controller;
use App\Http\Resources\V2\NotificationCollection;
use App\Models\Notification;
use Auth;
use Exception;


class NotificationController extends Controller
{
    public function index()
    {
        // dd(Notification::orderBy('created_at','desc')->paginate(15));
        // return new NotificationCollection(Notification::orderBy('created_at','desc')->paginate(15));


        $auth = Auth::id();

       
        try {
            if ($auth) {
                $notifications = Notification::orderBy('id', 'desc')->get();
                $all_notifications_by_user = [];
                foreach ($notifications as $key => $notification) {
                    $data = json_decode($notification->data);

                    if ($data->user_id == $auth) {
                        $all_notifications_by_user[] = [
                            'id' => $notification->id,
                            'type' => $notification->type,
                            'user_id' => $data->user_id,
                            'order_code' => $data->order_code,
                            'seller_id' => $data->seller_id,
                            'status' => $data->status,
                            'time' => $notification->created_at,
                            'notifiable_type' => $notification->notifiable_type,

                        ];
                    }
                }
                return response()->json([
                    'data' => $all_notifications_by_user,
                    'status' => 'true',
                    'message' => 'Data get By User',
                ],200);

            } else {
                return response()->json([
                    'status' => 'false',
                    'message' => 'please login first',
                ],401);
            }
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'false',
                'message' => 'please login first',
            ]);
        }
    }
}
