<div class="aiz-category-menu bg-white cat-hover rounded @if(Route::currentRouteName() == 'home') shadow-sm" @else shadow-lg id="category-sidebar" @endif>
    <div class="pr-3 pl-3 pt-lg-2 pt-md-1 pt-sm-1 pb-0 d-none d-lg-block rounded-top all-category position-relative text-left">
        <a href="{{ route('categories.all') }}" class="text-reset">
        <h1 class="fw-700 fs-18 mr-3 cat-font-size-sm mb-0" style="font-family: 'Roboto', sans-serif;"><i class="fa-solid fa-list" style="margin-right: 10px"> </i> {{ $locale == 'en' ? ' Categories' : ' ক্যাটেগরি'}}</h1>
       
            <!--<span class="d-none d-lg-inline-block">{{ translate('All Categories') }} ></span>-->
        </a>
    </div>
    <ul class="list-unstyled categories no-scrollbar pt-1 pb-lg-1 pb-md-0 pb-sm-0 mb-0 text-left">
        
        <style>
            .aiz-category-menu .category-nav-element:hover > a{
            position: relative;
            z-index: 10;
            background: #eceff1;
            color: #EE3567 !important;
            box-shadow: -2px 3px 5px rgb(0 0 0 / 0.1);
        }
        
         .aiz-category-menu .category-nav-element:hover > a .text-arrow-color{
             color: #EE3567 !important;
         }
        .text-arrow-color{
            color: #fff;
        }
         
            .cat-hova:hover{
                color: #EE3567;
               
            }
            .cat-menu-style{
                line-height: 25px;
                font-size: 14px; 
                font-family: 'Roboto', sans-serif;
            }
            
             @media only screen and (min-width:1024px) and (max-width:1440px){
                .cat-font-size-sm {
                    font-size: 18px !important;
                }
                
                .cat-menu-style{
                    font-size: 13px; 
                    line-height: 25px;
                }
                .aiz-category-menu .sub-cat-menu2{
                    left: calc(19% - 26px)!important;
                }
            }
            
             @media only screen and (min-width:1025px) and (max-width:1199px){
                .cat-font-size-sm {
                    font-size: 14px !important;
                }
                
                .cat-menu-style{
                    font-size: 12px; 
                    line-height: 17px;
                }
                .aiz-category-menu .sub-cat-menu2{
                    left: calc(19% - 26px)!important;
                }
            } 
            
             @media only screen and (min-width:768px) and (max-width:1024px){
                .cat-font-size-sm {
                    font-size: 14px !important;
                }
                
                .cat-menu-style{
                    font-size: 12px; 
                    line-height: 17px;
                }
            }
            
            
        </style>
        
        
        
        <style>
            .aiz-category-menu .sub-cat-menu2{
             display: none;
            position: absolute;
            width: calc(100% - 17%);
            left: calc(19% - 32px);
            height: calc(100% + 0px);
            overflow: hidden;
            top: 0;
            z-index: 9;
            background-color: #fff;
            overflow-y: auto;
        }
        
        </style>
        
        @foreach (\App\Models\Category::where('level', 0)->orderBy('order_level', 'asc')->get()->take(15) as $key => $category)
            <li class="category-nav-element" data-id="{{ $category->id }}">
                <a href="{{ route('products.category', $category->slug) }}" class="text-truncate text-reset py-1 pl-2 pr-1 d-block" >
                    <span class="cat-name cat-hova cat-menu-style" style="">{{ $category->getTranslation('name') }}    </span> <i class="fa-solid fa-chevron-right text-arrow-color" style="float: right; margin-top: 8px; font-size: 11px;"></i>
                </a>
                <!--@if(count(\App\Utility\CategoryUtility::get_immediate_children_ids($category->id))>0)-->
                    <div class="sub-cat-menu2 c-scrollbar-light rounded shadow-lg p-4">
                        <div class="c-preloader text-center absolute-center">
                            <i class="las la-spinner la-spin la-3x opacity-70"></i>
                        </div>
                    </div>
                <!--@endif-->
            </li>
            
        @endforeach
    </ul>
</div>
