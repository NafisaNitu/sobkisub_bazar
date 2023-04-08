<?php

namespace App\Http\Controllers\Api\V2;

use Illuminate\Http\Request;
use App\Models\Language;
use App\Http\Resources\V2\LanguageCollection;
use Cache;

class LanguageController extends Controller
{
    public function getList(Request $request)
    {
        return Cache::rememberForever('app.languages', function () {
            return new LanguageCollection(Language::all()); 
        });
    }
    
    public function changeLanguage(Request $request)
    {
        try {
            session()->put('locale', $request->locale);
           
            $language = Language::where('code', $request->locale)->first();
            flash(translate('Language changed to ') . $language->name)->success();
            return response()->json([
                'success' => true,
                'message' => 'Language changed to ' . $language->name,
    
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'error' => $e->getMessage(),
            ]);
        }
    }
}
