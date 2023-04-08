<?php

namespace App\Http\Controllers\Api\V2;

use App\Http\Controllers\Controller;
use App\Http\Resources\V2\ProductMiniCollection;
use App\Models\Product;
use Illuminate\Http\Request;
use Exception;

class OfferController extends Controller
{
    public function todayOffer()
    {
        
       try{
            $today_offer_products = Product::query()
            ->where('published', 1)
            ->where('approved', 1)
            ->where('offer_title', 'today_offer')
            ->orderBy('created_at', 'desc')
            ->paginate(10);
        return new ProductMiniCollection($today_offer_products);
       }catch(\Exception $e){
           return response()->json([
               'message' => $e->getMessage(),
            ]);
       }
    }
    
    public function byMoreSaveMore()
    {
        // save_more_buy_more
        try {
            $buy_more_save_more_products = Product::query()
                ->where('published', 1)
                ->where('approved', 1)
                ->where('offer_title', 'save_more_buy_more')
                ->orderBy('created_at', 'desc')
                ->paginate(10);
            return new ProductMiniCollection($buy_more_save_more_products);
        } catch (\Exception $e) {
            return response()->json([
                'message' => $e->getMessage(),
            ]);
        }
    }
    
    public function upToFiftyPercent()
    {
        try {
            $up_to_fifity_percent = Product::query()
                ->where('published', 1)
                ->where('approved', 1)
                ->whereBetween('discount',[5.00,50.00])
                ->where('discount_type', 'percent')
                ->orderBy('created_at', 'desc')
                ->paginate(10);
            return new ProductMiniCollection($up_to_fifity_percent);
        } catch (\Exception $e) {
            return response()->json([
                'message' => $e->getMessage(),
            ]);
        }
    }
    
    public function upToSeventyPercent()
    {
        try {
            $up_to_seventy_percent = Product::query()
                ->where('published', 1)
                ->where('approved', 1)
                ->whereBetween('discount', [50.00, 70.00])
                ->where('discount_type', 'percent')
                ->orderBy('created_at', 'desc')
                ->paginate(10);
            return new ProductMiniCollection($up_to_seventy_percent);
        } catch (\Exception $e) {
            return response()->json([
                'message' => $e->getMessage(),
            ]);
        }
    }
    
    public function buyOneGetOne()
    {
        try {
            $buy_one_get_one_products = Product::query()
                ->where('published', 1)
                ->where('approved', 1)
                ->where('offer_title', 'buy_one_get_one')
                ->orderBy('created_at', 'desc')
                ->paginate(10);
            return new ProductMiniCollection($buy_one_get_one_products);
        } catch (\Exception $e) {
            return response()->json([
                'message' => $e->getMessage(),
            ]);
        }
    }
}
