<?php

namespace App\Http\Resources\V2;

use Illuminate\Http\Resources\Json\ResourceCollection;
use App\Utility\CategoryUtility;

class SkbCategoryCollection extends ResourceCollection
{
    public function toArray($request)
    {
        dd($request);
        return [
            'id' => $this->id,
            'name' => $this->getTranslation('name'),
            'banner' => api_asset($this->banner),
            'icon' => api_asset($this->icon),
            'number_of_children' => CategoryUtility::get_immediate_children_count($this->id),
            'links' => [
                'products' => route('api.products.category', $this->id),
                'sub_categories' => route('subCategories.index', $this->id)
            ]
        ];
           
        
    }

    public function with($request)
    {
        return [
            'success' => true,
            'status' => 200
        ];
    }
}
