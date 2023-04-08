<?php

namespace App\Http\Controllers\Api\V2;

use App\Models\Partner;

use App\Http\Resources\V2\PartnerCollection;
use Illuminate\Http\Request;


class PartnerController extends Controller
{
   public function index()
   {
       
       return new PartnerCollection(Partner::all());
   }
}