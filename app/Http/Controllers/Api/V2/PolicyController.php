<?php

namespace App\Http\Controllers\Api\V2;

use App\Http\Resources\V2\PolicyCollection;
use App\Models\Page;
use Illuminate\Http\Request;

class PolicyController extends Controller
{
    public function sellerPolicy()
    {
        return new PolicyCollection(Page::where('type', 'seller_policy_page')->get());
    }

    public function supportPolicy()
    {
        return new PolicyCollection(Page::where('type', 'support_policy_page')->get());
    }

    public function returnPolicy()
    {
        return new PolicyCollection(Page::where('type', 'return_policy_page')->get());
    }
    
    public function termsAndCondition()
    {
        return new PolicyCollection(Page::where('type', 'terms_conditions_page')->get());
    }
    
    public function aboutUS()
    {
        return new PolicyCollection(Page::where('type', 'custom_page')
            ->where('slug', 'aboutUs')->get());
    }
    
    public function privacyPolicy()
    {
        return new PolicyCollection(Page::where('type', 'privacy_policy_page')->get());
    }
    public function advertisementPolicy()
    {
        return new PolicyCollection(Page::where('type', 'custom_page')
            ->where('slug', 'ad-policy')->get());
    }
    public function customerPolicy()
    {
        return new PolicyCollection(Page::where('type', 'custom_page')
            ->where('slug', 'customerpolicy')->get());
    }
}
