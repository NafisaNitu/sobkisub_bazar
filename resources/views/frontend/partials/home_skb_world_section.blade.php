 @php
    if(Session::has('locale')){
        $locale = Session::get('locale', Config::get('app.locale'));
    }
        else{
            $locale = 'en';
            }
    @endphp
        <section class="mb-lg-3 mb-sm-1 mb-xs-1">
            <div class="container">
                <div class="px-md-3 py-md-2 rounded section_bg">
                    <div class="d-flex mb-lg-2 mb-xs-1 align-items-baseline border-bottom">
                        <h3 class="h5 fw-700 mb-0 home-product-title">
                            <span class="fs-sm-14-title d-inline-block pb-lg-1 pb-sm-1 pb-xs-1 border-bottom border-primary border-width-2" style="font-family: 'Roboto', sans-serif;border-color: #572c84 !important;">{{ $locale == 'en' ? 'SKB World' : ' SKB ওয়ার্ল্ড '}}</span>
                        </h3>
                        <!--<a href="" class="ml-auto mr-0 btn btn-sm shadow-md w-500 view-btn mt-2">View More</a>-->
                    </div>
                <div class="row">
                    
                    
                    <style>
                    
                    
                    
                     @media only screen and (min-width:768px) and (max-width:1024px){
                         
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
                        .fs-sm-14-title{
                             font-size: 13px;
                         }
                    }
                     @media only screen and (min-width:425px) and (max-width:575px){
                        .d-none-cat {
                            display: none !important;
                        }
                        .fs-sm-14-title{
                             font-size: 13px;
                         }
                    }
                    
                    @media only screen and (min-width:375px) and (max-width:425px){
                        .d-none-cat {
                            display: none !important;
                        }
                        .fs-sm-14-title{
                             font-size: 13px;
                         }
                        .sm-p-device{
                            padding: 5px;
                        }
                        .home-product-title{
                            font-size: 16px;
                        }
                    }
                    
                     @media only screen and (min-width:320px) and (max-width:375px){
                        .d-none-cat {
                            display: none !important;
                        }
                        .fs-sm-14-title{
                             font-size: 13px;
                         }
                        .sm-p-device{
                            padding: 5px;
                        }
                        .home-product-title{
                            font-size: 16px;
                        }
                    }
                        

                    </style>
                    
                    
                        <div class="col-xl-3 col-lg-4">
                           
                              <div class="" style="box-shadow: 0 4px 6px -3px #9c9c9c;border-radius: 3px;">
                                    <a href="https://sobkisubazar.com/category/skbWorld" class="d-block d-none-cat">
                                       <img class="img-fluid lazyload mx-auto h-140px h-md-160px" width="100%" style="margin-top: 9px"
                                            src="{{ uploaded_asset($skb_world->banner) }}" data-src="{{ uploaded_asset($skb_world->banner) }}" alt=""
                                            onerror="this.onerror=null;this.src='{{ static_asset('assets/img/skb-test.png') }}';"> 
                                    </a>
                                    </a>
                                </div> 
                               
                                
                                
                        </div>
                        
                        
                    <div class="col-xl-9 col-lg-8 col-md-12 col-sm-12">
                        <div style="" class="aiz-carousel gutters-10 half-outside-arrow" data-ride="carousel" data-items="4"  data-xl-items="4" data-lg-items="3"  data-md-items="3" data-sm-items="3" data-xs-items="2" data-autoplay="true" data-arrows="true" data-autoplaySpped="2000" data-infinite="true">
                                  
                                  @foreach (\App\Models\Category::where('parent_id', 1280)->get() as $key => $skb_sub_category)
                                 
                                   <div class="carousel-box">
                                        <div class="aiz-card-box border border-light rounded my-2 has-transition" style="box-shadow: 0 4px 6px -3px #9c9c9c;border-radius: 3px;">
                                            <div class="img-position-hov position-relative img-position-hov">
                                                <a href="{{ route('products.category', $skb_sub_category->slug) }}" class="d-block">
                                                    <img
                                                        class="img-fit lazyload mx-auto h-100px h-md-160px" style="box-shadow: 0 4px 6px -3px #9c9c9c;border-radius: 3px;"
                                                        src="{{ uploaded_asset($skb_sub_category->icon) }}"
                                                        data-src="{{ uploaded_asset($skb_sub_category->icon) }}"
                                                        alt=""
                                                        onerror="this.onerror=null;this.src='{{ static_asset('assets/img/skb1.png') }}';">
                                                </a>
                                            </div>
                                       </div>
                                   </div>
                                   @endforeach
                                 
                           </div>

                </div>
            </div>
            </div>
            </div>
        </section>
 

