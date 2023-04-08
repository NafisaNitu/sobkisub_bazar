@if(get_setting('topbar_banner') != null)
<div class="position-relative top-banner removable-session z-1035 d-none" data-key="top-banner" data-value="removed">
    <a href="{{ get_setting('topbar_banner_link') }}" class="d-block text-reset">
        <img src="{{ uploaded_asset(get_setting('topbar_banner')) }}" class="w-100 mw-100 h-50px h-lg-auto img-fit">
    </a>
    <button class="btn text-white absolute-top-right set-session" data-key="top-banner" data-value="removed" data-toggle="remove-parent" data-parent=".top-banner">
        <i class="la la-close la-2x"></i>
    </button>
</div>
@endif
<!-- Top Bar -->


<style>
    .navbar {
        padding: 0.5rem 0rem;
    }
    .header-text-style{
        color: #1c1c1c; 
        font-size: 13px;
    }
    .icon-social-style{
        color: #fff;
        font-size: 16px;
        background: #000;
        padding: 3px 5px;
    }
    .icon-social-style-f:hover{
        background: #1877f2;
    }
    .icon-social-style-in:hover{
        background: #EE3567;
    }
    .icon-social-style-t:hover{
        background: #1DA1F2;
    }
    .icon-social-style-link:hover{
        background: #0077B5;
    }
    .icon-social-style-y:hover{
        background: #fE4444;
    }
    
    .aiz-category-menu .sub-cat-menu2 {
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
     .menu-btn-style-new {
            /*background-image: linear-gradient(to right top, #ec3768, #d02877, #ad2581, #852986, #572c84); */
            background: #fff; 
            /*padding: 16px 0px;*/
            width: 217px;
            border: none;
            border-radius: 25px;
            font-family: 'Roboto', sans-serif;
            font-weight: bold;
            font-size: 15px;
            color: #000;
            text-align: left;
    }
    .menu-btn-style-new:hover{
            background: #572c84;
            color:#fff;
    }
     @media only screen and (min-width:1024px) and (max-width:1440px){
       .menu-btn-style-new {
             width: 174px;
       }
                        
    }
    
     @media only screen and (min-width:1025px) and (max-width:1199px){
        .header-text-style{
            font-size: 12px;
        }
        .fs-md-15 {
            font-size: 14px!important;
        }
        .live-btn {
            font-size: 14px!important;
        }
        .get-app-btn {
            font-size: 14px!important;
        }
        .menu-btn-style-new {
            width: 144px;
            font-size: 12px;
       }
                        
    }
    
     @media only screen and (min-width:768px) and (max-width:1024px){
        .header-text-style{
            font-size: 11px;
        }
        .menu-btn-style-new {
            width: 144px;
            font-size: 12px;
       }
        
                        
    }
    
    @media only screen and (min-width:575px) and (max-width:768px){
        .header-text-style{
            font-size: 12px;
        }
       .pl-xs-0{
           padding-left: 0px!important;
       }
                        
    }
    
    @media only screen and (min-width:425px) and (max-width:575px){
        .header-text-style{
            font-size: 12px;
        }
        .menu-btn-style-new {
            width: 150px;
            font-size: 12px;
        }
        .pl-xs-0{
           padding-left: 0px!important;
       }
                        
    }
    @media only screen and (min-width:426px) and (max-width:472px){
        .header-text-style{
            font-size: 8px;
        }
                        
    }
    @media only screen and (min-width:375px) and (max-width:425px){
        .header-text-style{
            font-size: 8px;
        }
        .fs-xs-12{
            font-size: 12px!important;
        }
        .live-btn {
            font-size: 13px!important;
        }
        .get-app-btn {
            font-size: 13px!important;
        }
        .pl-xs-0{
           padding-left: 0px!important;
       }
       .menu-btn-style-new {
            width: 150px;
            font-size: 12px;
        }
                        
    }
    @media only screen and (min-width:320px) and (max-width:375px){
        .header-text-style{
            font-size: 6px;
        }
        .fs-xs-12{
            font-size: 12px!important;
        }
        .live-btn {
            font-size: 13px!important;
        }
        .get-app-btn {
            font-size: 13px!important;
        }
       .menu-btn-style-new {
            width: 135px;
            font-size: 11px;
        }
        .pl-xs-0{
           padding-left: 0px!important;
       }
        
                        
    }
    
    
</style>


<div class="top-navbar border-soft-secondary z-1035 header-top-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-12">
                <ul class="list-inline d-flex justify-content-between justify-content-lg-start mb-0">
                   
                    
                    <!--<li class="list-inline-item mr-3 border-left-0 pr-3 pl-0">-->
                    <!--        <a href="" class="text-reset d-inline-block pt-3">-->
                    <!--        <img src="{{ static_asset('assets/img/placeholder.jpg') }}" data-src="{{ static_asset('assets/img/flags/en.png') }}" class="mr-2 lazyload" alt="" height="11">-->
                    <!--            <span class="">English </span>                       -->
                    <!--        </a>-->
                    <!--    </li>-->
                        

                    
                   <!--@if(get_setting('show_language_switcher') == 'on')-->
                    <li class="list-inline-item dropdown mr-2 pl-0 d-flex" id="lang-change">

                        @php
                            if(Session::has('locale')){
                                $locale = Session::get('locale', Config::get('app.locale'));
                            }
                            else{
                                $locale = 'en';
                            }
                        @endphp
                        <a href="javascript:void(0)" class="dropdown-toggle text-reset py-2" data-toggle="dropdown" data-display="static">
                            <img src="{{ static_asset('assets/img/placeholder.jpg') }}" data-src="{{ static_asset('assets/img/flags/'.$locale.'.png') }}" class="mr-2 lazyload" alt="{{ \App\Models\Language::where('code', $locale)->first()->name }}" height="11">
                            <span class="header-text-style">{{ \App\Models\Language::where('code', $locale)->first()->name }}</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-left">
                            @foreach (\App\Models\Language::all() as $key => $language)
                                <li>
                                    <a href="javascript:void(0)" data-flag="{{ $language->code }}" class="dropdown-item @if($locale == $language) active @endif">
                                        <img src="{{ static_asset('assets/img/placeholder.jpg') }}" data-src="{{ static_asset('assets/img/flags/'.$language->code.'.png') }}" class="mr-1 lazyload" alt="{{ $language->name }}" height="11">
                                        <span class="language">{{ $language->name }}</span>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                    <!--@endif-->

                    @if(get_setting('show_currency_switcher') == 'on')
                    <!--<li class="list-inline-item dropdown ml-auto ml-lg-0 mr-1 pt-1" id="currency-change">-->
                    <li class="list-inline-item dropdown mr-3 pl-0 d-flex" id="currency-change">

                        @php
                            if(Session::has('currency_code')){
                                $currency_code = Session::get('currency_code');
                            }
                            else{
                                $currency_code = \App\Models\Currency::findOrFail(get_setting('system_default_currency'))->code;
                            }
                        @endphp
                        <a href="javascript:void(0)" class="dropdown-toggle text-reset py-2 header-text-style" data-toggle="dropdown" data-display="static">
                            {{ \App\Models\Currency::where('code', $currency_code)->first()->name }} {{ (\App\Models\Currency::where('code', $currency_code)->first()->symbol) }}
                        </a>
                        <ul class="dropdown-menu dropdown-menu-right dropdown-menu-lg-left">
                            @foreach (\App\Models\Currency::where('status', 1)->get() as $key => $currency)
                                <li>
                                    <a class="dropdown-item @if($currency_code == $currency->code) active @endif" href="javascript:void(0)" data-currency="{{ $currency->code }}">{{ $currency->name }} ({{ $currency->symbol }})</a>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                    @endif
                       @if (get_setting('helpline_number'))
                        <li class="list-inline-item mr-2 border-left-0 pr-2 pl-0">
                            <a href="tel:{{ get_setting('helpline_number') }}" class="text-reset d-inline-block py-2">
                                <i class="fa-solid fa-phone header-text-style"></i>
                                <span class="header-text-style">{{ get_setting('helpline_number') }}</span>    
                            </a>
                        </li>
                         <li class="list-inline-item border-left-0 pr-2 pl-0">
                            <a href="" class="text-reset d-inline-block py-2">
                                <i class="fa-regular fa-envelope header-text-style"></i>
                                <span class="header-text-style">info@sobkisubazar.com</span>    
                            </a>
                        </li>
                    @endif 
                    
                        
                    
                   
                </ul>
            </div>

            <div class="col-6 text-right d-none d-lg-block">
                <ul class="list-inline mb-0 h-100 d-flex justify-content-end align-items-center">
                    
                    @auth
                        @if(isAdmin())
                            <li class="list-inline-item mr-3 border-right border-left-0 pr-3 pl-0">
                                 {{-- <a href="{{ route('admin.dashboard') }}" class="text-reset d-inline-block py-2">{{ translate('My Panel')}}</a> --}}
                                 
                                 <a href="{{ route('admin.dashboard') }}" class="text-reset d-inline-block py-2">{{ $locale == 'en' ? 'My Panel' : 'আমার একাউন্ট' }}</a>
                            </li>
                        @else

                            <li class="list-inline-item mr-3 border-right border-left-0 pr-3 pl-0 dropdown">
                                <a class="dropdown-toggle no-arrow text-reset" data-toggle="dropdown" href="javascript:void(0);" role="button" aria-haspopup="false" aria-expanded="false">
                                    <span class="">
                                        <span class="position-relative d-inline-block">
                                            <i class="las la-bell fs-18"></i>
                                            @if(count(Auth::user()->unreadNotifications) > 0)
                                                <span class="badge badge-sm badge-dot badge-circle badge-primary position-absolute absolute-top-right"></span>
                                            @endif
                                        </span>
                                    </span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg py-0">
                                    <div class="p-3 bg-light border-bottom">
                                        <h6 class="mb-0">{{ translate('Notifications') }}</h6>
                                    </div>
                                    <div class="px-3 c-scrollbar-light overflow-auto " style="max-height:300px;">
                                        <ul class="list-group list-group-flush" >
                                            @forelse(Auth::user()->unreadNotifications as $notification)
                                                <li class="list-group-item">
                                                    @if($notification->type == 'App\Notifications\OrderNotification')
                                                        @if(Auth::user()->user_type == 'customer')
                                                        <a href="javascript:void(0)" onclick="show_purchase_history_details({{ $notification->data['order_id'] }})" class="text-reset">
                                                            <span class="ml-2">
                                                                {{translate('Order code: ')}} {{$notification->data['order_code']}} {{ translate('has been '. ucfirst(str_replace('_', ' ', $notification->data['status'])))}}
                                                            </span>
                                                        </a>
                                                        @elseif (Auth::user()->user_type == 'seller')
                                                            @if(Auth::user()->id == $notification->data['user_id'])
                                                                <a href="javascript:void(0)" onclick="show_purchase_history_details({{ $notification->data['order_id'] }})" class="text-reset">
                                                                    <span class="ml-2">
                                                                        {{translate('Order code: ')}} {{$notification->data['order_code']}} {{ translate('has been '. ucfirst(str_replace('_', ' ', $notification->data['status'])))}}
                                                                    </span>
                                                                </a>
                                                            @else
                                                                <a href="javascript:void(0)" onclick="show_order_details({{ $notification->data['order_id'] }})" class="text-reset">
                                                                    <span class="ml-2">
                                                                        {{translate('Order code: ')}} {{$notification->data['order_code']}} {{ translate('has been '. ucfirst(str_replace('_', ' ', $notification->data['status'])))}}
                                                                    </span>
                                                                </a>
                                                            @endif
                                                        @endif
                                                    @endif
                                                </li>
                                            @empty
                                                <li class="list-group-item">
                                                    <div class="py-4 text-center fs-16">
                                                        {{ translate('No notification found') }}
                                                    </div>
                                                </li>
                                            @endforelse
                                        </ul>
                                    </div>
                                    <div class="text-center border-top">
                                        <a href="{{ route('all-notifications') }}" class="text-reset d-block py-2">
                                            {{translate('View All Notifications')}}
                                        </a>
                                    </div>
                                </div>
                            </li>

                            <li class="list-inline-item mr-3 border-right border-left-0 pr-3 pl-0">
                              
                              <a href="{{ route('dashboard') }}" class="text-reset d-inline-block py-2">{{ $locale == 'en' ? 'My Panel' : 'আমার একাউন্ট' }}</a>
                            </li>
                        @endif
                        <li class="list-inline-item">
                          {{--  <a href="{{ route('logout') }}" class="text-reset d-inline-block py-2">{{ translate('Logout')}}</a> --}}
                          <a href="{{ route('logout') }}" class="text-reset d-inline-block py-2">{{ $locale == 'en' ? 'Logout' : ' লগ আউট ' }}</a>
                        </li>
                    @else
                         <div class="social-icons">

                        <ul class="list-inline my-md-1">
                            <li class="list-inline-item">
                                {{ $locale == 'en' ? 'Follow us' : 'সোশ্যাল মিডিয়া' }}</
                             </li>
                            <li class="list-inline-item">
                                <a href="https://www.facebook.com/sobkisubazar" target="_blank"
                                    class="facebook social-icons-hover"><i
                                        class="fa-brands fa-facebook-f icon-social-style icon-social-style-f"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="https://www.instagram.com/sobkisubazar/" target="_blank"
                                    class="instagram"><i class="fa-brands fa-instagram icon-social-style icon-social-style-in"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="https://twitter.com/SobkisuBazar" target="_blank" class="twitter">
                                    <i class="fa-brands fa-twitter icon-social-style icon-social-style-t"></i>
                                </a>
                            </li>
                           
                        
                            <li class="list-inline-item">
                                <a href="https://www.linkedin.com/company/sobkisubazar/"
                                    target="_blank" class="linkedin"><i class="fa-brands fa-linkedin-in icon-social-style icon-social-style-link"></i></a>
                            </li>

                            <li class="list-inline-item">
                                <a href="https://www.youtube.com/@sobkisubazar."
                                    target="_blank" class="youtube"><i class="fa-brands fa-youtube icon-social-style icon-social-style-y"></i></a>
                            </li>
            
                        </ul>
                    </div>
                    @endauth
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- END Top Bar -->
<header class="@if(get_setting('header_stikcy') == 'on') sticky-top @endif z-1020 bg-white border-bottom shadow-sm">
        <div class="position-relative logo-bar-area z-1 bg-white">
        <!--bg-white-->
         <div class="container">
                <div class="row">
                    <div class="col-md-12">
                     <div class="d-flex align-items-center">
     
                         <div class="col-auto col-xl-3 pl-0 pr-3 d-flex align-items-center">
                            <a class="d-block mr-3 ml-0" href="{{ route('home') }}">
                        @php
                            $header_logo = get_setting('header_logo');
                        @endphp
                        @if($header_logo != null)
                            <!--<img src="{{ uploaded_asset($header_logo) }}" alt="{{ env('APP_NAME') }}" class="mw-100 h-30px h-md-60px" height="40" >-->
                             <img src="{{ asset('public/logo_header.gif') }}" alt="{{ env('APP_NAME') }}" class="mw-100 h-60px h-md-70px" height="40" >
                            
                            <!--height="40"-->
                        @else
                            <!--<img src="{{ static_asset('assets/img/logo.png') }}" alt="{{ env('APP_NAME') }}" class="mw-100 h-30px h-md-45px" height="40">-->
                             <img src="{{ asset('public/logo_header.gif') }}" alt="{{ env('APP_NAME') }}" class="mw-100 h-60px h-md-70px" height="40" >
                        @endif
                    </a>

                    @if(Route::currentRouteName() != 'home')
                        <div class="d-none d-xl-block align-self-stretch category-menu-icon-box ml-auto mr-0">
                            <div class="h-100 d-flex align-items-center" id="category-menu-icon">
                                <div class="dropdown-toggle navbar-light bg-light h-40px w-50px pl-2 rounded border c-pointer">
                                    <span class="navbar-toggler-icon"></span>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
                <div class="d-lg-none ml-auto mr-0">
                    <a class="p-2 d-block text-reset" href="javascript:void(0);" data-toggle="class-toggle" data-target=".front-header-search">
                        <i class="las la-search la-flip-horizontal la-2x"></i>
                    </a>
                </div>

               <div class="flex-grow-1 mr-5 mt-2 front-header-search d-flex align-items-center">
                             <div class="position-relative flex-grow-1">
                        <form action="{{ route('search') }}" method="GET" class="stop-propagation">
                            <div class="d-flex position-relative align-items-center">
                                <div class="d-lg-none" data-toggle="class-toggle" data-target=".front-header-search">
                                    <button class="btn px-2" type="button"><i class="la la-2x la-long-arrow-left"></i></button>
                                </div>
                                <div class="input-group">
                                    <input type="text" class="border-0 border-lg form-control" style="font-size: 18px;" id="search" name="keyword" @isset($query)
                                        value="{{ $query }}"
                                    @endisset placeholder="{{translate('Search Your Product')}}" autocomplete="off">
                                    <div class="input-group-append d-none d-lg-block">
                                        <button class="btn btn-primary" type="submit"  style="background-color:#ff6a00!important;border-color:#ff6a00!important">
                                            <i style="line-height:20px !important;" class="la la-search la-flip-horizontal fs-18"></i>
                                        </button>
                                    </div>
                                </div>
                                
                            </div>
                        </form>
                        <div class="typed-search-box stop-propagation document-click-d-none d-none bg-white rounded shadow-lg position-absolute left-0 top-100 w-100" style="min-height: 200px">
                            <div class="search-preloader absolute-top-center">
                                <div class="dot-loader"><div></div><div></div><div></div></div>
                            </div>
                            <div class="search-nothing d-none p-3 text-center fs-16">

                            </div>
                            <div id="search-content" class="text-left">

                            </div>
                        </div>
                    </div>
                </div>

                <div class="d-none d-lg-none ml-3 mr-0">
                    <div class="nav-search-box">
                        <a href="#" class="nav-box-link">
                            <i class="la la-search la-flip-horizontal d-inline-block nav-box-icon"></i>
                        </a>
                    </div>
                </div>

                <div class="d-none d-lg-block ml-3 mr-0">
                    <div class="" id="compare">
                        @include('frontend.partials.compare')
                    </div>
                </div>

                <div class="d-none d-lg-block ml-3 mr-0">
                    <div class="" id="wishlist">
                        @include('frontend.partials.wishlist')
                    </div>
                </div>

                <div class="d-none d-lg-block  align-self-stretch ml-3 mr-0" data-hover="dropdown">
                    <div class="nav-cart-box dropdown h-100" id="cart_items">
                        @include('frontend.partials.cart')
                    </div>
                </div>
                
                
                 <div class="d-none d-lg-block ml-3 mr-0">
                    <div class="" >
                     <li class="list-inline-item mr-0">
                        <!--<a style="color:#FFFFFF !important;opacity:10 !important;" href="{{ route('customer_products.create')}}" class="opacity-60 fs-14 px-3 py-2 d-inline-block fw-600 hov-opacity-100 text-reset">-->
                        <!--     <button type="button" class="btn btn-warning btn-rounded">Post Your Ads</button>-->
                         
                        <!--</a>-->
                        
                         <style>
                            .adpost-btn{
                                background-color:#ff6a00;
                               color:#fff;
                               font-size: 16px;
                               font-family: 'Roboto', sans-serif;
                               border:0px;
                               font-weight: bold;
                               padding: 7px 10px;
                            }
                            .adpost-btn:hover{
                                background: #572c84;
                                color:#fff;
                            }
                            
                            
                             @media only screen and (min-width:768px) and (max-width:1024px){
                                .adpost-btn{
                                    font-size: 17px;
                                }
                            }
                            
                            
                        </style>
                          
                        <a href="https://adstore.sobkisubazar.com/" target="_blank">
                            <button type="button" class="btn adpost-btn">{{ $locale == 'en' ? 'All Offer | Ad Store' : 'অফার । এডস্টোর '}}</button>
                        </a>
                     
                    </li>
                    </div>
                </div>
                
               

            </div>
        </div>
        @if(Route::currentRouteName() != 'home')
        <div class="hover-category-menu position-absolute w-100 top-100 left-0 right-0 d-none z-3" id="hover-category-menu">
            <div class="container">
                <div class="row gutters-10 position-relative">
                    <div class="col-lg-3 position-static">
                        @include('frontend.partials.category_menu')
                    </div>
                </div>u
            </div>
        </div>
        @endif
    </div>
    </div>
    </div>
    
    <style>
        .menu-text-hover:hover {
            color: #552786;
        }
        
    </style>
    
    @if ( get_setting('header_menu_labels') !=  null )
    
    <div class="under-header-bg">
     <div class="container border-gray-200">
        <nav class="navbar navbar-expand-lg navbar-light">
            

             <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">-->
             <!--       <span class="navbar-toggler-icon"></span>-->
             <!--</button>-->
             <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
             </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                
                <ul class="navbar-nav ml-auto text-center" id="navbarSupportedContent">
                <!--<ul class="navbar-nav list-inline mb-0 ml-auto" id="navbarSupportedContent">-->
                <!--<ul class="list-inline mb-0 mobile-hor-swipe ml-auto" id="navbarSupportedContent">-->

                    
                     <li class="nav-item">
                    <!--<li class="nav-item list-inline-item mr-0">-->

                        <a style="font-family: 'Roboto', sans-serif; margin-top: 5px;"
                            href="{{ route('shops.create') }}"
                            class="fs-md-15 fs-16 fs-sm-13 fs-xs-12 px-3 py-2 d-inline-block hov-opacity-100 text-reset fw-600">
                            <span class="menu-text-hover">{{ $locale == 'en' ? 'Be a Seller' : 'বিক্রেতা'}}</span>
                        </a>
                    </li>
                     <li class="nav-item">
                        <a style="font-family: 'Roboto', sans-serif;margin-top: 5px;"
                            href="{{ route('user.registration') }}"
                            class="fs-md-15 fs-sm-13 fs-xs-12 fs-16 px-3 py-2 d-inline-block hov-opacity-100 text-reset fw-600">
                            <span class="menu-text-hover"> {{ $locale == 'en' ? 'Be a Customer' : 'ক্রেতা'}}</span>
                        </a>
                    </li>
                    
                     <li class="nav-item">
                        <a style="font-family: 'Roboto', sans-serif; margin-top: 5px;"
                            href="{{ route('orders.track') }}"
                            class="fs-md-15 fs-sm-13 fs-xs-12 fs-16 px-3  py-2 d-inline-block hov-opacity-100 text-reset fw-600">
                            <span class="menu-text-hover"> {{ $locale == 'en' ? 'Track My Order' : 'অর্ডার ট্র্যাক'}} </span>

                        </a>
                    </li>
                    
                    
                     <li class="nav-item">
                        <a style="font-family: 'Roboto', sans-serif; margin-top: 5px;"
                            href="{{ route('customer.care') }}"
                            class="fs-md-15 fs-sm-13 fs-xs-12 fs-16 px-3  py-2 d-inline-block hov-opacity-100 text-reset fw-600">
                            <span class="menu-text-hover"> {{ $locale == 'en' ? 'Customer Care' : 'কাস্টমার কেয়ার'}} </span>

                        </a>
                    </li>
                    
                   
                    
                     <style>
                            
                            .get-app-btn{
                             background: #ff6a00;
                               color:#fff;
                               font-size: 15px;
                               font-family: 'Roboto', sans-serif;
                               border:0px;
                               font-weight: bold;
                               padding: 6px 10px;
                            }
                           
                            .live-btn{
                                background: #ff6a00;
                               color:#fff;
                               font-size: 15px;
                               font-family: 'Roboto', sans-serif;
                               border:0px;
                               /*border-radius:10px;*/
                               font-weight: bold;
                               padding: 6px 10px;
                            }
                            .get-app-btn:hover{
                                background: #572c84;
                                color:#fff;
                            }
                            .live-btn:hover{
                                background: #572c84;
                                color:#fff;
                            }
                            
                            @media only screen and (min-width: 768px) and (max-width: 1024px){
                                .get-app-btn {
                                    font-size: 14px;
                                }
                                .live-btn {
                                    font-size: 14px;
                                }
                                .fs-md-15{
                                    font-size: 14px!important;
                                }
                            }
                        </style>
                        
                     <li class="nav-item">
                        <a href="{{ route('live') }}"  class="py-2 pl-4 pl-xs-0 d-inline-block fw-600 hov-opacity-100 text-reset">
                            <button type="button" class="btn btn-rounded live-btn"> {{ $locale == 'en' ? 'Live' : 'লাইভ'}}</button>
                        </a>
                    </li>    

                     <li class="nav-item">
                        <a href="{{ route('entertainment') }}"  class="py-2 pl-4 pl-xs-0 d-inline-block fw-600 hov-opacity-100 text-reset">
                            <button type="button" class="btn btn-rounded get-app-btn">{{ $locale == 'en' ? 'Entertainment' : 'বিনোদন'}}</button>
                        </a>
                    </li>
                    
                     <li class="nav-item">
                     <li class="list-inline-item mr-0">
                        <a href="https://play.google.com/store/apps/details?id=com.app.sobkisubazar" class="py-2 pl-4 pl-xs-0 d-inline-block fw-600 hov-opacity-100 text-reset">
                            <button type="button" class="btn btn-rounded get-app-btn">{{ $locale == 'en' ? 'Get Apps' : 'এপস '}}</button>
                        </a>

                    </li>
                    @if (!Auth::check())
                     <li class="nav-item">
                    
                            <a class="fs-18 py-2 pl-4 pl-xs-0 d-inline-block fw-600 hov-opacity-100 text-reset" href="{{ route('user.login') }}">
                                <button type="button" class="btn btn-rounded get-app-btn">{{ $locale == 'en' ? 'Log In' : 'লগইন '}}</button>
                            </a>
    
                        </li>
                       
                    @endif
                   

                       
                        
                 {{-- @foreach (json_decode( get_setting('header_menu_labels'), true) as $key => $value)
                    <li class="list-inline-item mr-0 py-1">
                        <a style="color:#8f8787 !important;opacity:10 !important; font-family: 'Roboto', sans-serif;"  href="{{ json_decode( get_setting('header_menu_links'), true)[$key] }}" class="opacity-60 fs-17 px-4 py-2 d-inline-block hov-opacity-100 text-reset">
                             <span class="menu-text-hover">{{ translate($value) }}</span>
                        </a>
                    </li>
                    
                 @endforeach --}}
                   
                </ul>
                </div>
                
            </nav>    
        
                   
                        
                 {{-- @foreach (json_decode( get_setting('header_menu_labels'), true) as $key => $value)
                    <li class="list-inline-item mr-0 py-1">
                        <a style="color:#8f8787 !important;opacity:10 !important; font-family: 'Roboto', sans-serif;"  href="{{ json_decode( get_setting('header_menu_links'), true)[$key] }}" class="opacity-60 fs-17 px-4 py-2 d-inline-block hov-opacity-100 text-reset">
                             <span class="menu-text-hover">{{ translate($value) }}</span>
                        </a>
                    </li>
                    
                 @endforeach --}}
                   
                </ul>
     
            </div>
        </div>
    @endif
</header>
