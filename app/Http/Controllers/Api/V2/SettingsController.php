<?php

namespace App\Http\Controllers\Api\V2;

use App\Http\Resources\V2\SettingsCollection;
use App\Models\AppSettings;

class SettingsController extends Controller
{
    public function index()
    {
      try{
        return new SettingsCollection(AppSettings::all());
      }catch(\Exception $e){
          return response()->json([
                'status' => false,
                'message' => $e->getMessage(),
              ]); 
      }
        
    }
}
