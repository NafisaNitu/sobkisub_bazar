@if(get_setting('home_categories') != null) 
    @php $home_categories = json_decode(get_setting('home_categories')); @endphp
    @foreach ($home_categories as $key => $value)
        @php $category = \App\Models\Category::find($value); @endphp
        <section class="mb-lg-4 mb-sm-1 mb-xs-1">
            <div class="container">
                <div class="px-md-3 py-md-2 rounded section_bg">
                <div class="d-flex mb-lg-2 mb-sm-0 mb-xs-0 align-items-baseline border-bottom">
                        <h3 class="h5 fw-700 mb-0 home-product-title">     
                            <span class="fs-sm-14-title border-width-2 pb-3 d-inline-block border-bottom border-primary border-width-2" style="font-family: 'Roboto', sans-serif;border-color: #572c84 !important;">{{ $category->getTranslation('name') }}</span>
                        </h3>
                        <a href="{{ route('products.category', $category->slug) }}" class="ml-auto mr-0 btn btn-sm shadow-md fw-600 view-btn mt-2">{{ translate('View More') }}</a>
                    </div>
                <div class="row">
                    
                    
                    <style>
       
                    .home_category_title .line-h2 {
                        border-top: 1px solid hsla(0,0%,59.2%,.3);
                    }
                    .view-btn{
                        background-color: transparent;
                        border-color: #572c84; 
                        color: #572c84; 
                        font-size: 15px;
                    }
                    
                    .view-btn:hover{
                        background-color: #572c84;
                         border-color: #572c84; 
                        color: #fff; 
                    }
                    
                    
                     @media only screen and (min-width:768px) and (max-width:1024px){
                         .view-btn{
                            font-size: 13px;
                        }
                    }
                     @media only screen and (min-width:768px) and (max-width:991px){
                        .d-none-cat {
                            display: none !important;
                        }
                    }
                    @media only screen and (min-width:575px) and (max-width:768px){
                        .d-none-cat {
                            display: none !important;
                        }
                        .view-btn{
                            font-size: 10px;
                        }
                        .fs-sm-14-title{
                             font-size: 13px;
                         }
                    }
                     @media only screen and (min-width:425px) and (max-width:575px){
                        .d-none-cat {
                            display: none !important;
                        }
                        .view-btn{
                            font-size: 10px;
                        }
                        .fs-sm-14-title{
                             font-size: 13px;
                         }
                    }
                    
                    @media only screen and (min-width:375px) and (max-width:425px){
                        .d-none-cat {
                            display: none !important;
                        }
                        .view-btn{
                            font-size: 10px;
                        }
                        .sm-p-device{
                            padding: 5px;
                        }
                        .home-product-title{
                            font-size: 16px;
                        }
                        .fs-sm-14-title{
                             font-size: 13px;
                         }
                    }
                    
                     @media only screen and (min-width:320px) and (max-width:375px){
                        .d-none-cat {
                            display: none !important;
                        }
                        .view-btn{
                            font-size: 10px;
                        }
                        .sm-p-device{
                            padding: 5px;
                        }
                        .home-product-title{
                            font-size: 16px;
                        }
                        .fs-sm-14-title{
                             font-size: 13px;
                         }
                    }
                        

                    </style>
                    
                    
                        <div class="col-xl-3 col-lg-4 d-none-cat pr-0">
                           
                             @foreach (get_cached_products($category->id) as $key => $product)
                              <div class="" style="background: #fff; padding: 15px;box-shadow: 0 4px 6px -3px #9c9c9c; border-radius: 3px;">
                                    <a href="{{ route('products.category', $category->slug) }}" class="d-block d-none-cat">
                                        <img class="img-fit lazyload mx-auto h-140px h-md-300px hov-shadow-sm" width="100%"
                                            src="{{ static_asset('assets/img/m5.jpg') }}" data-src="{{ uploaded_asset($product->thumbnail_img) }}" alt=""
                                            onerror="this.onerror=null;this.src='{{ static_asset('assets/img/m5.jpg') }}';"> 
                                    </a>
                                    </div>
                                    @if ($key == 0)
                                        @break;
                                    @endif
                                @endforeach
                                
                        </div>
                    <div class="col-xl-9 col-lg-8 col-md-12 col-sm-12">
                        <!--<div style="background: #fff;box-shadow: 0 4px 6px -3px #9c9c9c; border-radius: 3px;" class="aiz-carousel gutters-5 half-outside-arrow sm-p-device" data-items="4" data-xl-items="4" data-lg-items="3" data-md-items="3" data-sm-items="2" data-xs-items="2" data-arrows='true' data-infinite='true' data-autoplay="true"  autoplaySpped="2000">-->
                        <div class="aiz-carousel gutters-5 half-outside-arrow sm-p-device" data-items="4" data-xl-items="4" data-lg-items="3" data-md-items="3" data-sm-items="2" data-xs-items="2" data-arrows='true' data-infinite='true'  autoplaySpped="2000">
                        <!--<div class="aiz-carousel gutters-10 half-outside-arrow" data-items="4" data-xl-items="3" data-lg-items="2" data-md-items="3" data-sm-items="2" data-xs-items="2" data-arrows='true' data-infinite='true' data-autoplay="true" autoplaySpped="2000">-->
                        @foreach (get_cached_products($category->id) as $key => $product)
                            <div class="carousel-box">
                                @include('frontend.partials.product_box_1',['product' => $product])
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
    @endforeach
@endif

