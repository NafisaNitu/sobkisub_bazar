<?php

namespace App\Http\Controllers;
use App\Models\LiveStreaming;

use Illuminate\Http\Request;

class LiveStreamingController extends Controller
{
    public function index()
    {
        $live_streaming = LiveStreaming::where('id',1)->first();
        return view('backend.live_streaming.index', compact('live_streaming'));
    }
    
    public function edit($id)
    {
        $live_streaming = LiveStreaming::find($id);
        return view('backend.live_streaming.update', compact('live_streaming'));
    }
    public function update(Request $request, $id)
    {
        $live_streaming = LiveStreaming::find($id);
        $validated =  $request->validate([
            'skb_world_live' => 'nullable',
            'facebook_live' => 'nullable',
            'instragam_live' => 'nullable',
            'youtube_live' => 'nullable',
            'seller_live' => 'nullable',
        ]);

        $live_streaming->update($validated);
        return back()->with('success', 'Updated Successfully');
    }

}
