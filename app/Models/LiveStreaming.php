<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LiveStreaming extends Model
{
    use HasFactory;
    protected $table = 'live_streaming';
    protected $fillable = ['skb_world_live','facebook_live','instragam_live','youtube_live','seller_live'];
    
}
