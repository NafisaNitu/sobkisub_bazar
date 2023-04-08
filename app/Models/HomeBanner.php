<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HomeBanner extends Model
{
protected $table = 'homebanners';

    protected $fillable = [
        'image',
        'link',
        'created_at'
    ];
}
