<?php

namespace App\Http\Controllers\Api\V2;

use App\Http\Controllers\Controller;
use App\Models\LiveStreaming;
use Exception;

class LiveStreamingController extends Controller
{
    public function index()
    {
       
        try {
            $live_streaming = LiveStreaming::query()->where('id',1)->first();
            return response()->json([
                'success' => true,
                'data' => $live_streaming,
                'message' => 'All Live Streaming Link'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'data' => [],
                'errors' => $e->getMessage(),
            ]);
        }
       
    }
}
