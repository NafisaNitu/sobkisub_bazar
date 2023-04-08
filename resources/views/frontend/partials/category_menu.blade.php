<div class="aiz-category-menu bg-white rounded @if(Route::currentRouteName() == 'xyz') shadow-sm" @else shadow-lg" id="category-sidebar" @endif>
    <div class="p-3 bg-soft-primary d-none d-lg-block rounded-top all-category position-relative text-left">
        <a href="{{ route('categories.all') }}" class="text-reset">
        <span class="fw-600 fs-16 mr-3">{{ translate('All Categories') }}</span>
        
            <!--<span class="d-none d-lg-inline-block">{{ translate('All Categories') }} ></span>-->
        </a>
    </div>
    <ul class="list-unstyled categories no-scrollbar py-2 mb-0 text-left">
        @foreach (\App\Models\Category::where('level', 0)->orderBy('order_level', 'asc')->get()->take(15) as $key => $category)
            <li class="category-nav-element" data-id="{{ $category->id }}">
                <a href="{{ route('products.category', $category->slug) }}" class="text-truncate text-reset py-2 px-3 d-block">
                    
                    <span class="cat-name">{{ $category->getTranslation('name') }}</span>
                </a>
                @if(count(\App\Utility\CategoryUtility::get_immediate_children_ids($category->id))>0)
                    <div class="sub-cat-menu2 c-scrollbar-light rounded shadow-lg p-4">
                        <div class="c-preloader text-center absolute-center">
                            <i class="las la-spinner la-spin la-3x opacity-70"></i>
                        </div>
                    </div>
                @endif
            </li>
        @endforeach
    </ul>
</div>

<style>
    .aiz-category-menu .sub-cat-menu2{
        display: none;
        position: absolute;
        width: calc(100% - 25%);
        left: calc(26% - 25px);
        height: calc(100% + 0px);
        overflow: hidden;
        top: 0;
        z-index: 9;
        background-color: #fff;
        overflow-y: auto;
    }

 @media only screen and (min-width:768px) and (max-width:1024px){
    .aiz-category-menu .sub-cat-menu2{
         display: none;
    position: absolute;
    width: calc(100% - 18%);
    left: calc(21% - 25px);
    height: calc(98% + 0px);
    overflow: hidden;
    top: 0;
    z-index: 9;
    background-color: #fff;
    overflow-y: auto;
    }

}

</style>