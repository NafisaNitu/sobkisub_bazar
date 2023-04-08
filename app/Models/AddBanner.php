<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AddBanner extends Model
{
protected $table = 'addbanners';

    protected $fillable = [
        'name',
        'link',
        'image',
        'created_at'
        
    ];
}
