@php
    if(Session::has('locale')){
        $locale = Session::get('locale', Config::get('app.locale'));
    }
    else{
            $locale = 'en';
    }

    $featured_products = Cache::remember('featured_products', 3600, function (){ 
        return filter_products(\App\Models\Product::where('published', 1)->where('featured', '1'))->orderBy('created_at','desc')->limit(12)->get();
        
    });
@endphp


@if (count($featured_products) > 0)
    <section class="mt-lg-4 mt-sm-0 mt-xs-0 mb-lg-1">
        <div class="container">
            <div class="px-md-3 px-xs-0 py-md-2 py-xs-0 rounded section_bg">
                <div class="d-flex mb-lg-2 mb-xs-1 align-items-baseline border-bottom">
                    <h3 class="h5 fw-700 mb-0">
                        <span class="fs-sm-14-title border-secondary border-width-2 border-bottom pb-lg-2 pb-sm-1 pb-xs-1 d-inline-block" style="font-family: 'Roboto', sans-serif;border-color: #572c84 !important;">{{ $locale == 'en' ? 'New Arrivals' : 'নতুন পণ্যসমূহ'}}</span>
                    </h3>
                </div>

                <div class="aiz-carousel gutters-5 half-outside-arrow" data-items="6" data-xl-items="5" data-lg-items="4"  data-md-items="3" data-sm-items="2" data-xs-items="2" data-arrows='true' data-infinite='true' data-autoplay="true" autoplaySpped="2000">
                    @foreach ($featured_products as $key => $product)
                    <div class="carousel-box">
                        @include('frontend.partials.product_box_1',['product' => $product])
                    </div>
                    
                    @endforeach
                </div>
            </div>
        </div>
    </section>   
    
    @endif
    
  
    
    
    
