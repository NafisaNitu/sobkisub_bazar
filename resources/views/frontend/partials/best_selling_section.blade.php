@php
    $best_selling_products = Cache::remember('best_selling_products', 86400, function () {
    
      return best_selling_products();
     
    });   
@endphp

 @php
    if(Session::has('locale')){
        $locale = Session::get('locale', Config::get('app.locale'));
    }
        else{
            $locale = 'en';
            }
    @endphp


@if (get_setting('best_selling') == 1)
    <section class="mt-lg-4">
        <div class="container">
            <div class="px-md-3 py-md-2 py-sm-0 rounded section_bg">
                <div class="d-flex mb-lg-2 mb-xs-1 align-items-baseline border-bottom">
                    <h3 class="h5 fw-700 mb-0">
                        <span class="fs-sm-14-title border-bottom border-width-2 border-primary pb-lg-2 pb-sm-1 pb-xs-1 d-inline-block" style="font-family: 'Roboto', sans-serif;border-color: #572c84 !important;">{{ $locale == 'en' ? 'Top Sell Product' : 'সর্বোচ্চ বিক্রিত পণ্য' }} </span>
                    </h3>
                    <!--<a href="javascript:void(0)" class="ml-auto mr-0 btn btn-primary btn-sm shadow-md">{{ translate('Top 20') }}</a>-->
                </div>
                <div class="aiz-carousel gutters-5 half-outside-arrow" data-items="6" data-xl-items="5" data-lg-items="4"  data-md-items="3" data-sm-items="2" data-xs-items="2" data-arrows='true' data-autoplay="true" autoplaySpped="2000" data-infinite='true'>
                <!--<div style="background: #fff;padding: 8px 10px 18px 10px;" class="aiz-carousel gutters-10 half-outside-arrow" data-items="6" data-xl-items="5" data-lg-items="4"  data-md-items="3" data-sm-items="2" data-xs-items="2" data-arrows='true' data-autoplay="true"  autoplaySpped="2000" data-infinite='true'>-->
                    @foreach ($best_selling_products as $key => $product)
                        <div class="carousel-box">
                            @include('frontend.partials.product_box_1',['product' => $product])
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endif

