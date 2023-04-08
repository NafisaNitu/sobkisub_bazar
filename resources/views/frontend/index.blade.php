@extends('frontend.layouts.app')

 @php
    if(Session::has('locale')){
        $locale = Session::get('locale', Config::get('app.locale'));
    }
    else{
        $locale = 'en';
    }
@endphp

<style>
    .section_bg{
        background: #fff;
        /*padding: 5px;*/
        /*box-shadow: 0 4px 6px -3px #9c9c9c; */
        border-radius: 3px;
    }
    .aiz-main-wrapper{
        background-color: #f4f4f4!important;
    }
    
    .aiz-category-menu .category-nav-element:hover > a {
        color: #fff;
    }   
    
  
  .navbar-toggler-icon {
    width: 1em!important;
    height: 1em!important;
  }

    .bannar1 {
        height: 400px;
        max-width: 100%;
        width: 100%;
        /*object-fit: cover;*/
    }
    
    .border-primary-2{
        border-color: #572c84!important;
    }
    .brand_bg{
        background: white;
        padding: 10px;
        width: 135px;
    }
    
    
    
    
         .categories-items {
            width: 100%;
            /*min-height: 295px;*/
        }
    
    .card-category-item {
        width: 11.7%;
        height: 147px;
        border-bottom: 1px solid #e2e2e2;
        background-color: #fff;
        margin: 5px;
        border-radius: 5px;
    }
    
    .align-left {
        float: left;
    }
    
    a {
        background-color: transparent;
    }
    
    .card-category-item-content {
        width: 100%;
        height: 100%;
        display: block;
        padding-top: 15px;
    }
    
    .card-category-item-image {
        margin: 0 auto;
        width: 80px;
        height: 80px;
    }
    
    .card-category-item-image .image {
        width: 100%;
        height: 100%;
    }
        
    
    .card-categories-name {
        text-align: center;
        margin-top: 10px;
    }
    
    .card-categories-name .text {
        margin: 8px 12px 0;
        font-size: 14px;
        color: #212121;
        line-height: 18px;
        height: 36px;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }
       
       
       
       .category-card-hover:hover {
        box-shadow: 0 2px 4px 0 rgba(0,0,0,.25);
        transform: all .3s ease-in-out;
    } 
        
        
        
        
    
    
    
    
    
    
    
    
    
    .border-bottom-c {
        border-bottom: 2px solid hsla(0,0%,59.2%,.3)!important;
    }
    
    .carousel-item {
        max-width: 100%;
        width: 100%;
        border-radius: 30px;
    }
    .social-icons ul li a:hover{
        background-color: #1DA1F2;
    }
    
    .h-md-38px{
        height: 38px!important;
    }
    
    .img-margin{
        margin-top: 2px;
        margin-bottom: 2px;
    }
    
  

    /*Custom Css Style section*/

    .menu-text-style{
        font-size: 19px;
        font-family: 'Roboto', sans-serif; 
        color: #fff;offe
    }

    .header-top-bg {
        /* background-color: #E5E5E5; */
        background-color: #e6e2e2 !important;
    }

    .under-header-bg {
        background-color: #eaeaea;
    }

    .search-bg {
        background-color: #f1f1f1 !important;
        border-color: #ccc !important;
    }

    .category-shadow-sm {
    box-shadow: 0 .125rem .25rem rgba(0,0,0,.075)!important;
    }

    .icon-hover:hover{
        color: #572c84;
    }

    .title-line{
        position: relative;
    }
    section .title-line::before {
        content: "";
        position: absolute;
        bottom: 24px;
        background: #BFBFBF;
        left: 12%;
        width: 88%;
        height: 4px;
        border-radius: 4px;
    }

    .title-line-cat{
        position: relative;
    }

    section .title-line-cat::before {
        content: "";
        position: absolute;
        bottom: 12px;
        background: #BFBFBF;
        left: 11%;
        width: 89%;
        height: 2px;
    }

    .social-icon-hover li a:hover{
        background-color: red;
    }

    /*End style*/
    
    .just-for-you-banner img{
        width: 100%;
        height: 100%;
    }

    .bannar2 {
        width: 100%;
        height: 400px;
    }

    .bannar3 {

        width: 100%;
        height: 350px;

    }


    .img_item {
        width: 100%;
        height: 100px;
        /*height:180px;*/
    }
    
      .aiz-category-menu .sub-cat-menu2{
            display: none;
            position: absolute;
            width: calc(100% - 17%)!important;
            left: calc(19% - 32px);
            height: calc(100% + 0px);
            overflow: hidden;
            top: 0;
            z-index: 9;
            background-color: #fff;
            overflow-y: auto;
        }
    
    @media only screen and (min-width:1024px) and (max-width:1440px){
         .bannar1 {
            height: 400px!important;
        }
        .h-sm-180px{
            height: 160px!important;
        }
        .menu-text-style{
            font-size: 16px;
        }
        .mobile-img-height{
             height: 350px!important;
         }
     
         .card-category-item {
            width: 11.6%;
        }
     
        .h-sm-30px{
            height: 34px!important;
        }
    
        .img-margin{
            margin-top: 0px;
            margin-bottom: 0px;
        }
        .aiz-category-menu .sub-cat-menu2{
            left: calc(19% - 26px)!important;
        }
        .fs-sm-14-title{
             font-size: 18px;
         }
                
    }
    
      @media only screen and (min-width:1025px) and (max-width:1199px){
            .bannar1 {
                height: 302px!important;
            }
            .aiz-category-menu .sub-cat-menu2{
                left: calc(19% - 26px)!important;
            }
        }  
    
     @media only screen and (min-width:768px) and (max-width:1024px){
         .bannar1 {
            height: 302px!important;
        }
        .h-sm-180px{
            height: 160px!important;
        }
        .menu-text-style{
            font-size: 16px;
        }
        .card-category-item-content {
            padding-top: 10px;
        }
        .card-categories-name {
            margin-top: 5px;
        }
        
        .card-category-item {
            width: 11.4%;
            height: 110px;
        }
         .card-categories-name .text {
            font-size: 13px;
        }
        
        .card-category-item-image {
            margin: 0 auto;
            width: 50px;
            height: 50px;
        }
                
    }
    
    
@media only screen and (min-width: 320px) and (max-width: 991.98px) {
    .bannar1{
        width:100%;
        height:150px;
    }
     .bannar2{
        
          width:100%;
        height:190px;
        
    }
        .bannar3{
         width:100%;
        height:190px;
        
    }
    .d-none-cat {
        display: none !important;
    }
    .mt-sm-0{
        margin-top: 0px;
    }
    .section_bg{
        background: transparent;
        padding: 0px;
        box-shadow: 0 0px 0px 0px transparent; 
        border-radius: 0px;
    }
    .brand_bg{
        background: white;
        padding: 10px;
        width: 105px;
    }
    
}

 @media only screen and (min-width:425px) and (max-width:768px){
    .half-outside-arrow .slick-next {
        right: 0px !important;
    }
    .half-outside-arrow .slick-prev {
        left: 0px !important;
    }
    
    .aiz-carousel .slick-arrow {
        width: 30px!important;
        height: 30px!important;
    }
     .menu-text-style{
        font-size: 14px;
     }
     .menu-btn-sm{
         padding-right: 15px!important;
         padding-left: 15px!important;
     }
     .fs-sm-14-title{
         font-size: 13px;
     }
     .mobile-img-height{
         height: 300px!important;
     }
     .h-sm-30px{
        height: 30px!important;
    }
    
    .img-margin{
        margin-top: 0px;
        margin-bottom: 0px;
    }
    .card-category-item {
        width: 15.2%;
        height: 75px;
        margin: 2px;
    }
    .card-category-item-content {
        padding-top: 5px;
    }
    .card-category-item-image {
        width: 28px;
        height: 30px;
    }
    .card-categories-name {
        margin-top: 5px;
    }
    .card-categories-name .text {
         margin: 0px; 
        font-size: 9px;
        line-height: 14px;
    }
    .d-none-cat {
        display: none !important;
    }
    .section_bg{
        background: transparent;
        padding: 0px;
        box-shadow: 0 0px 0px 0px transparent; 
        border-radius: 0px;
    }
      .brand_bg{
        background: white;
        padding: 10px;
        width: 105px;
    }

                        
}

@media only screen and (min-width:425px) and (max-width:575px){
    .half-outside-arrow .slick-next {
        right: 0px !important;
    }
    .half-outside-arrow .slick-prev {
        left: 0px !important;
    }
    .aiz-carousel .slick-arrow {
        width: 30px!important;
        height: 30px!important;
    }
     .menu-text-style{
        font-size: 14px;
     }
     .menu-btn-sm{
         padding-right: 15px!important;
         padding-left: 15px!important;
     }
     .fs-sm-14-title{
         font-size: 13px;
     }
     .mobile-img-height{
         height: 200px!important;
     }
     .h-sm-30px{
        height: 30px!important;
    }
    
    .img-margin{
        margin-top: 0px;
        margin-bottom: 0px;
    }
    .card-category-item {
        width: 15.2%;
        height: 75px;
        margin: 2px;
    }
    .card-category-item-content {
        padding-top: 5px;
    }
    .card-category-item-image {
        width: 28px;
        height: 30px;
    }
    .card-categories-name {
        margin-top: 5px;
    }
    .card-categories-name .text {
         margin: 0px; 
        font-size: 9px;
        line-height: 14px;
    }
    .section_bg{
        background: transparent;
        padding: 0px;
        box-shadow: 0 0px 0px 0px transparent; 
        border-radius: 0px;
    }
                        
}

@media only screen and (min-width:375px) and (max-width:425px){
    .half-outside-arrow .slick-next {
        right: 0px !important;
    }
    
    .half-outside-arrow .slick-prev {
        left: 0px !important;
    }
    .aiz-carousel .slick-arrow {
        width: 30px!important;
        height: 30px!important;
    }
     .menu-text-style{
        font-size: 14px;
     }
     
     .menu-btn-sm{
         padding-right: 15px!important;
         padding-left: 15px!important;
     }
     .fs-sm-14-title{
         font-size: 13px;
     }
     .mobile-img-height{
         height: 200px!important;
     }
     .h-sm-30px{
        height: 30px!important;
    }
    
    .img-margin{
        margin-top: 0px;
        margin-bottom: 0px;
    }
    .card-category-item {
        width: 15.2%;
        height: 75px;
        margin: 2px;
    }
    .card-category-item-content {
        padding-top: 5px;
    }
    .card-category-item-image {
        width: 28px;
        height: 30px;
    }
    .card-categories-name {
        margin-top: 5px;
    }
    .card-categories-name .text {
         margin: 0px; 
        font-size: 9px;
        line-height: 14px;
    }
    .d-none-cat {
        display: none !important;
    }
    .section_bg{
        background: transparent;
        padding: 0px;
        box-shadow: 0 0px 0px 0px transparent; 
        border-radius: 0px;
    }
      .brand_bg{
        background: white;
        padding: 10px;
        width: 105px;
    }
                        
}

@media only screen and (min-width:320px) and (max-width:375px){
    .bannar1 {
        height: 150px;
    }
  
     .menu-text-style{
        font-size: 14px;
     }
     
     .menu-btn-sm{
         padding-right: 15px!important;
         padding-left: 15px!important;
     }
     .fs-sm-14-title{
         font-size: 13px;
     }
     .half-outside-arrow .slick-next {
        right: 0px !important;
    }
    
    .half-outside-arrow .slick-prev {
        left: 0px !important;
    }
    .aiz-carousel .slick-arrow {
        width: 30px!important;
        height: 30px!important;
    }
    .mobile-img-height{
         height: 140px!important;
     }
     .h-sm-30px{
        height: 30px!important;
    }
    
    .img-margin{
        margin-top: 0px;
        margin-bottom: 0px;
    }
    .card-category-item {
        width: 15.2%;
        height: 75px;
        margin: 2px;
    }
    .card-category-item-content {
        padding-top: 5px;
    }
    .card-category-item-image {
        width: 28px;
        height: 30px;
    }
    .card-categories-name {
        margin-top: 5px;
    }
    .card-categories-name .text {
         margin: 0px; 
        font-size: 9px;
        line-height: 14px;
    }
    .d-none-cat {
        display: none !important;
    }
    .section_bg{
        background: transparent;
        padding: 0px;
        box-shadow: 0 0px 0px 0px transparent; 
        border-radius: 0px;
    }
    
    .border-bottom{
        border-bottom: 0px solid #dee2e6!important;
    } 
    .border-secondary{
        border-color: transparent !important;
    }
    .border-width-2{
        border-width: 0px !important;
    }
      .brand_bg{
        background: white;
        padding: 10px;
        width: 105px;
    }
}
   
                    
  .main-holder {
    margin-top: 10%;
    width: 100%;
    border-radius: 15px;
    box-shadow: 0 24px 45px -15px rgba(161, 159, 219, 0.41);
    background-color: #ffffff;
    padding-top: 60px;
    padding-bottom: 30px;
  }

  .card-img {
    width: 44px;
    height: 44px;
    margin-bottom: 5px;
    margin-top: 15px;
    margin-left: auto;
    margin-right: auto;
  }
  .card-text {
    font-family: Poppins;
    font-size: 12px;
    font-weight: normal;
    font-stretch: normal;
    font-style: normal;
    line-height: normal;
    letter-spacing: normal;
    text-align: center;
    color: #2b417b;
  }
  
.category {
  width: 30%;
  margin-left: 1%;
  margin-right: 1%;
  margin-bottom: 24px;
  border-radius: 5px;
  border-style: solid;
  border-width: 1px;
  box-shadow: 0 8px 15px -10px #8fbcff;
  padding-bottom: 15px;
}
}
@media only screen and (min-width: 992px) {
   .main-holder {
    margin-top: 5%;
    width: 100%;
    border-radius: 15px;
    box-shadow: 0 24px 45px -15px rgba(161, 159, 219, 0.41);
    background-color: #ffffff;
    padding-top: 60px;
    padding-bottom: 30px;
    padding-left: 2%;
    padding-right: 2%;
  }

  .card-img {
    width: 44px;
    height: 44px;
    margin-bottom: 5px;
    margin-top: 15px;
    margin-left: auto;
    margin-right: auto;
  }
  .card-text {
    font-family: Poppins;
    font-size: 12px;
    font-weight: normal;
    font-stretch: normal;
    font-style: normal;
    line-height: normal;
    letter-spacing: normal;
    text-align: center;
    color: #2b417b;
  }
  
.category {
  width: 19%;
  margin-left: 2.6%;
  margin-right: 2.6%;
  margin-bottom: 24px;
  border-radius: 5px;
  border-style: solid;
  border-width: 1px;
  box-shadow: 0 8px 15px -10px #8fbcff;
  padding-bottom: 5px;
}


.category-header {
  width: 50%;
  margin-left: auto;
  margin-right: auto;
  min-height: 5px;
  max-height: 5px;
   border-bottom-left-radius: 10px;
   border-bottom-right-radius: 10px;
}

.category-header-1 {
  background-color: #a68fff;
}

.category-header-2 {
  background-color: #8fbcff;
}


.category-header-3 {
  background-color: #ff8faa;
}

.category-header-4 {
  background-color: #a6cd74;
}

.category-header-5 {
  background-color: #fcc18a;
}

.category-header-6 {
  background-color: #6edddd;
}


.category-1 {
  border-color: #a68fff;
}

.category-2 {
  border-color: #8fbcff;
}


.category-3 {
  border-color: #ff8faa;
}

.category-4 {
  border-color: #a6cd74;
}

.category-5 {
  border-color: #fcc18a;
}

.category-6 {
  border-color: #6edddd;
}


    
</style>

@section('content')
   
  
    <div class="container">
            <div class="row position-relative">
                <div class="col-lg-2 col-md-2 col-sm-10 position-static d-none d-lg-block pr-0">
                    
                    @include('frontend.partials.category_menu_2')
                </div>

                <div class="col-lg-10">
                <!--<div class="col-lg-10 pr-0 pb-4">-->

                    
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
             
                
                 @foreach($banner as $key => $img)
                  <div class="carousel-item {{$key==0?'active':''}}">
                      <a href="{{$img->link}}">
                           <img class="d-block w-100 bannar1" src="{{asset('public/uploads/homebanner/'.$img->image)}}" alt="First slide">
                      </a>
                        
                  </div>
                  
                                      
    
    @endforeach
    

      
      
    <!--<div class="carousel-item active">-->
        
  <!--    <img class="d-block w-100 bannar1" src="{{asset('public/assets/homebanner/banner4.jpg')}}" alt="First slide">-->
  <!--  </div>-->
  <!--  <div class="carousel-item">-->
  <!--    <img class="d-block w-100 bannar1" src="{{asset('public/assets/homebanner/banner5.jpg')}}" alt="Second slide">-->
  <!--  </div> -->
  <!--  <div class="carousel-item">-->
  <!--    <img class="d-block w-100 bannar1" src="{{asset('public/assets/homebanner/banner7.png')}}" alt="Third slide">-->
  <!--  </div>-->
    <!-- <div class="carousel-item">-->
    <!--  <img class="d-block w-100 bannar1" src="{{asset('public/assets/img/Fashion-Nagar-Hat.jpg')}}" alt="Third slide">-->
    <!--</div>-->
    
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


{{-- Classified Product --}}
    @php
        $today = Carbon\Carbon::now();
        $today =  $today->toDateTimeString();
        
    @endphp
            <!--Under header Ads-->
               <section  class="mt-0">
                   <div class="row">
                   <div class="container">
                       <div class="pt-1 rounded">
                           <div class="aiz-carousel gutters-5 half-outside-arrow" data-ride="carousel" data-items="5"  data-xl-items="5" data-lg-items="4"  data-md-items="4" data-sm-items="3" data-xs-items="3" data-autoplay="true" slidesToShow="5" data-autoplaySpped="1500" data-infinite="true">
                                   @foreach($sliders as $slider)
                                   
                                     @if($today <= $slider->end_package_date)
                                     
                                       <div class="carousel-box">
                                            <div class="aiz-card-box border border-light rounded mt-2 has-transition" style="background: #fff;">
                                                <div class="position-relative">
                                                    <a href="{{$slider->button_link? $slider->button_link : '#'}}" class="d-block">
                                                        <img
                                                            class="img-fluid lazyload mx-auto h-80px h-md-120px h-sm-80px h-xs-80px hov-shadow-sm" 
                                                            src="{{ uploaded_asset($slider->image) }}"
                                                            data-src=""
                                                            alt=""
                                                            onerror="this.onerror=null;this.src='{{ static_asset('assets/img/l2.jpg') }}';"
                                                        >
                                                    </a>
                                                   
                                                </div>
                                           </div>
                                       </div>
                                     @endif
                                   @endforeach
                                   
                                       
                                       {{--     <div class="carousel-box">
                                        <div class="aiz-card-box border border-light rounded mt-2 has-transition">
                                            <div class="position-relative">
                                                <a href="" class="d-block">
                                                    <img
                                                        class="img-fluid lazyload mx-auto h-100px h-md-210px h-sm-100px hov-shadow-sm" width="100%"
                                                        src="{{ static_asset('assets/img/c4.jpg') }}"
                                                        data-src=""
                                                        alt=""
                                                        onerror="this.onerror=null;this.src='{{ static_asset('assets/img/c4.jpg') }}';"
                                                    >
                                                </a>
                                               
                                            </div>
                                       </div>
                                   </div>
                                   
                                    <div class="carousel-box">
                                        <div class="aiz-card-box border border-light rounded hov-shadow-sm mt-2 has-transition">
                                            <div class="position-relative">
                                                <a href="" class="d-block">
                                                    <img
                                                        class="img-fluid lazyload mx-auto h-100px h-md-210px h-sm-100px" width="100%"
                                                        src="{{ static_asset('assets/img/c5.jpg') }}"
                                                        data-src=""
                                                        alt=""
                                                        onerror="this.onerror=null;this.src='{{ static_asset('assets/img/c5.jpg') }}';"
                                                    >
                                                </a>
                                               
                                            </div>
                                       </div>
                                   </div>
                                   
                                    <div class="carousel-box">
                                        <div class="aiz-card-box border border-light rounded hov-shadow-sm mt-2 has-transition">
                                            <div class="position-relative">
                                                <a href="" class="d-block">
                                                    <img
                                                        class="img-fluid lazyload mx-auto h-100px h-md-210px h-sm-100px" width="100%"
                                                        src="{{ static_asset('assets/img/c2.jpg') }}"
                                                        data-src=""
                                                        alt=""
                                                        onerror="this.onerror=null;this.src='{{ static_asset('assets/img/c2.jpg') }}';"
                                                    >
                                                </a>
                                               
                                            </div>
                                       </div>
                                   </div>
                                   
                                    <div class="carousel-box">
                                        <div class="aiz-card-box border border-light rounded hov-shadow-sm mt-2 has-transition">
                                            <div class="position-relative">
                                                <a href="" class="d-block">
                                                    <img
                                                        class="img-fluid lazyload mx-auto h-100px h-md-210px h-sm-100px" width="100%"
                                                        src="{{ static_asset('assets/img/c1.jpg') }}"
                                                        data-src=""
                                                        alt=""
                                                        onerror="this.onerror=null;this.src='{{ static_asset('assets/img/c1.jpg') }}';"
                                                    >
                                                </a>
                                               
                                            </div>
                                       </div>
                                   </div>
                                    <div class="carousel-box">
                                        <div class="aiz-card-box border border-light rounded hov-shadow-sm mt-2 has-transition">
                                            <div class="position-relative">
                                                <a href="" class="d-block">
                                                    <img
                                                        class="img-fluid lazyload mx-auto h-100px h-md-210px h-sm-100px" width="100%"
                                                        src="{{ static_asset('assets/img/c3.jpg') }}"
                                                        data-src=""
                                                        alt=""
                                                        onerror="this.onerror=null;this.src='{{ static_asset('assets/img/c3.jpg') }}';"
                                                    >
                                                </a>
                                               
                                            </div>
                                       </div>
                                   </div>
                                       
                                       --}}
                                   
                                    
                           </div>

                       </div>
                   </div>
                   </div>
               </section>

        <style>
            .icon-hover:hover{
                background-color: #572c84;
                color: #fff;
                border-radius: 10px;
                .col-width{
                    width: 100px!important;
                }
                .menu-btn-sm{
                    padding-right: 15px;
                    padding-left: 15px;
                }
                .menu-btn-sm-0{
                    padding-right: 0px;
                    padding-left: 0px;
                }
                
                
        </style>
                         
                        
                         <!--<div class="mobile-hor-swipe">-->
                            
                         <!--         <div class="row">-->
                            
                         <!--   <div class="col mt-2 pl-lg-3 pr-lg-3 pl-sm-3 pr-sm-3"> -->
                         <!--              <a href="#" data-target="#food" data-toggle="modal"-->
                         <!--                   class="d-block text-reset shadow-md mb-2 menu-style-btn">-->
                         <!--                       <div class="text-truncat-2 menu-text-style fw-600 text-center py-3 icon-hover">{{ $locale == 'en' ? 'Food Mart' : 'ফুড মার্ট' }}</div>-->
                         <!--               </a>-->
                         <!--       <div id="food" class="modal fade">-->
                         <!--           <div class="modal-dialog modal-sm modal-dialog-centered">-->
                         <!--               <div class="modal-content">-->
                         <!--                   <div class="modal-header">-->
                         <!--                       <h4 class="modal-title h6">{{translate('Food Info')}}</h4>-->
                         <!--                       <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>-->
                         <!--                   </div>-->
                         <!--                   <div class="modal-body">-->
                         <!--                         <img src="https://static.vecteezy.com/system/resources/previews/004/243/615/original/creative-coming-soon-teaser-background-free-vector.jpg" alt="" width="260px">-->
                         <!--                   </div>-->
                         <!--                   <div class="modal-footer text-center">-->
                                               
                         <!--                       <button type="button" class="btn btn-link mt-2" data-dismiss="modal">{{translate('Cancel')}}</button>-->
                                               
                         <!--                   </div>-->
                         <!--               </div>-->
                         <!--           </div>-->
                         <!--       </div>-->
                         <!--   </div>-->
                         <!--   <div class="col mt-2 pl-lg-3 pr-lg-3 pl-sm-3 pr-sm-3"> -->
                         <!--              <a href="#" data-target="#food" data-toggle="modal"-->
                         <!--                   class="d-block text-reset shadow-md mb-2 menu-style-btn" style="">-->
                         <!--                       <div class="text-truncat-2 menu-text-style fw-600 text-center py-3 icon-hover">{{ $locale == 'en' ? 'Food Mart' : 'ফুড মার্ট' }}</div>-->
                         <!--               </a>-->
                         <!--       <div id="food" class="modal fade">-->
                         <!--           <div class="modal-dialog modal-sm modal-dialog-centered">-->
                         <!--               <div class="modal-content">-->
                         <!--                   <div class="modal-header">-->
                         <!--                       <h4 class="modal-title h6">{{translate('Food Info')}}</h4>-->
                         <!--                       <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>-->
                         <!--                   </div>-->
                         <!--                   <div class="modal-body">-->
                         <!--                         <img src="https://static.vecteezy.com/system/resources/previews/004/243/615/original/creative-coming-soon-teaser-background-free-vector.jpg" alt="" width="260px">-->
                         <!--                   </div>-->
                         <!--                   <div class="modal-footer text-center">-->
                                               
                         <!--                       <button type="button" class="btn btn-link mt-2" data-dismiss="modal">{{translate('Cancel')}}</button>-->
                                               
                         <!--                   </div>-->
                         <!--               </div>-->
                         <!--           </div>-->
                         <!--       </div>-->
                         <!--   </div>-->
                         <!--   <div class="col mt-2 pl-lg-3 pr-lg-3 pl-sm-3 pr-sm-3"> -->
                         <!--              <a href="#" data-target="#food" data-toggle="modal"-->
                         <!--                   class="d-block text-reset shadow-md mb-2 menu-style-btn">-->
                         <!--                       <div class="text-truncat-2 menu-text-style fw-600 text-center py-3 icon-hover">{{ $locale == 'en' ? 'Food Mart' : 'ফুড মার্ট' }}</div>-->
                         <!--               </a>-->
                         <!--       <div id="food" class="modal fade">-->
                         <!--           <div class="modal-dialog modal-sm modal-dialog-centered">-->
                         <!--               <div class="modal-content">-->
                         <!--                   <div class="modal-header">-->
                         <!--                       <h4 class="modal-title h6">{{translate('Food Info')}}</h4>-->
                         <!--                       <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>-->
                         <!--                   </div>-->
                         <!--                   <div class="modal-body">-->
                         <!--                         <img src="https://static.vecteezy.com/system/resources/previews/004/243/615/original/creative-coming-soon-teaser-background-free-vector.jpg" alt="" width="260px">-->
                         <!--                   </div>-->
                         <!--                   <div class="modal-footer text-center">-->
                                               
                         <!--                       <button type="button" class="btn btn-link mt-2" data-dismiss="modal">{{translate('Cancel')}}</button>-->
                                               
                         <!--                   </div>-->
                         <!--               </div>-->
                         <!--           </div>-->
                         <!--       </div>-->
                         <!--   </div>-->
                         <!--   <div class="col mt-2 pl-lg-3 pr-lg-3 pl-sm-3 pr-sm-3"> -->
                         <!--              <a href="#" data-target="#food" data-toggle="modal"-->
                         <!--                   class="d-block text-reset shadow-md mb-2 menu-style-btn">-->
                         <!--                       <div class="text-truncat-2 pl-2 menu-text-style fw-600 text-center py-3 icon-hover">{{ $locale == 'en' ? 'Food Mart' : 'ফুড মার্ট' }}</div>-->
                         <!--               </a>-->
                         <!--       <div id="food" class="modal fade">-->
                         <!--           <div class="modal-dialog modal-sm modal-dialog-centered">-->
                         <!--               <div class="modal-content">-->
                         <!--                   <div class="modal-header">-->
                         <!--                       <h4 class="modal-title h6">{{translate('Food Info')}}</h4>-->
                         <!--                       <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>-->
                         <!--                   </div>-->
                         <!--                   <div class="modal-body">-->
                         <!--                         <img src="https://static.vecteezy.com/system/resources/previews/004/243/615/original/creative-coming-soon-teaser-background-free-vector.jpg" alt="" width="260px">-->
                         <!--                   </div>-->
                         <!--                   <div class="modal-footer text-center">-->
                                               
                         <!--                       <button type="button" class="btn btn-link mt-2" data-dismiss="modal">{{translate('Cancel')}}</button>-->
                                               
                         <!--                   </div>-->
                         <!--               </div>-->
                         <!--           </div>-->
                         <!--       </div>-->
                         <!--   </div>-->
                         <!--   <div class="col mt-2 pl-lg-3 pr-lg-3 pl-sm-3 pr-sm-3"> -->
                         <!--              <a href="#" data-target="#food" data-toggle="modal"-->
                         <!--                   class="d-block text-reset shadow-md mb-2 menu-style-btn">-->
                         <!--                       <div class="text-truncat-2 pl-2 menu-text-style fw-600 text-center py-3 icon-hover">{{ $locale == 'en' ? 'Food Mart' : 'ফুড মার্ট' }}</div>-->
                         <!--               </a>-->
                         <!--       <div id="food" class="modal fade">-->
                         <!--           <div class="modal-dialog modal-sm modal-dialog-centered">-->
                         <!--               <div class="modal-content">-->
                         <!--                   <div class="modal-header">-->
                         <!--                       <h4 class="modal-title h6">{{translate('Food Info')}}</h4>-->
                         <!--                       <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>-->
                         <!--                   </div>-->
                         <!--                   <div class="modal-body">-->
                         <!--                         <img src="https://static.vecteezy.com/system/resources/previews/004/243/615/original/creative-coming-soon-teaser-background-free-vector.jpg" alt="" width="260px">-->
                         <!--                   </div>-->
                         <!--                   <div class="modal-footer text-center">-->
                                               
                         <!--                       <button type="button" class="btn btn-link mt-2" data-dismiss="modal">{{translate('Cancel')}}</button>-->
                                               
                         <!--                   </div>-->
                         <!--               </div>-->
                         <!--           </div>-->
                         <!--       </div>-->
                         <!--   </div>-->
                         <!--   </div>-->
                         <!--   </div>-->
                            
                            
                            
                            
        
                             
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
        
                        
                        
                        
                <!--<div class="mobile-hor-swipe">-->
                <!--        <div class="row">-->
                            
                <!--            <div class="col mt-2 pr-0"> -->
                            <!--<div class="col mt-2 pl-lg-3 pr-lg-3 pl-sm-3 pr-sm-3"> -->
                <!--                       <a href="#" data-target="#food" data-toggle="modal"-->
                <!--                            class="d-block text-reset shadow-md mb-2 menu-style-btn">-->
                                            <!--class="d-block text-reset shadow-md mb-2" style="background-image: linear-gradient(to right top, #ec3768, #d02877, #ad2581, #852986, #572c84); border-radius: 10px;">-->
                <!--                        <div class="text-truncat-2 pl-2 menu-text-style fw-600 text-center py-3 icon-hover">{{ $locale == 'en' ? 'Food Mart' : 'ফুড মার্ট' }}</div>-->
                <!--                        </a>-->
                <!--                <div id="food" class="modal fade">-->
                <!--                    <div class="modal-dialog modal-sm modal-dialog-centered">-->
                <!--                        <div class="modal-content">-->
                <!--                            <div class="modal-header">-->
                <!--                                <h4 class="modal-title h6">{{translate('Food Info')}}</h4>-->
                <!--                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>-->
                <!--                            </div>-->
                <!--                            <div class="modal-body">-->
                <!--                                  <img src="https://static.vecteezy.com/system/resources/previews/004/243/615/original/creative-coming-soon-teaser-background-free-vector.jpg" alt="" width="260px">-->
                <!--                            </div>-->
                <!--                            <div class="modal-footer text-center">-->
                                               
                <!--                                <button type="button" class="btn btn-link mt-2" data-dismiss="modal">{{translate('Cancel')}}</button>-->
                                               
                <!--                            </div>-->
                <!--                        </div>-->
                <!--                    </div>-->
                <!--                </div>-->
                <!--            </div>-->

                <!--            <div class="col mt-2 p-0"> -->

                <!--                <a href="#" data-target="#global_market" data-toggle="modal"-->
                <!--                    class="d-block text-reset shadow-md mb-2 menu-btn-sm menu-style-btn">-->
                                   
        
                <!--                        <div class="text-truncat-2 menu-text-style fw-600 text-center py-3 icon-hover">{{ $locale == 'en' ? 'Global Market' : 'গ্লোবাল মার্কেট'  }}</div>-->
                                
                <!--                </a>-->

                <!--            </div>        -->
                           

                <!--            <div id="global_market" class="modal fade">-->
                <!--                <div class="modal-dialog modal-sm modal-dialog-centered">-->
                <!--                    <div class="modal-content">-->
                <!--                        <div class="modal-header">-->
                <!--                            <h4 class="modal-title h6">{{translate('Global Market Info')}}</h4>-->
                <!--                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>-->
                <!--                        </div>-->
                <!--                        <div class="modal-body">-->
                <!--                             <p class="">If you are not logged in. Please <a href="{{route('user.login')}}">Login</a> First</p>-->
                <!--                            <form method="post" action="{{route('store.global_market')}}">-->
                <!--                                @csrf-->
                <!--                              <div class="form-group">-->
                <!--                                <label for="link">Please Share Your Global Market Link</label>-->
                <!--                                <input type="link" name="link" id="link" class="form-control"  placeholder="Enter Your Global Market Link" required>-->
                <!--                              </div>-->
                                              
                <!--                              <button type="submit" class="btn btn-success">Submit</button>-->
                <!--                            </form>-->
                <!--                        </div>-->
                <!--                        <div class="modal-footer text-center">-->
                                           
                <!--                            <button type="button" class="btn btn-link mt-2" data-dismiss="modal">{{translate('Cancel')}}</button>-->
                                           
                <!--                        </div>-->
                <!--                    </div>-->
                <!--                </div>-->
                <!--            </div>-->
                            
                            
                <!--            <div class="col mt-2 p-0"> -->
                <!--                       <a href="#" data-target="#job" data-toggle="modal"-->
                <!--                            class="d-block text-reset shadow-md mb-2 menu-style-btn">-->
                <!--                                <div class="text-truncat-2 pl-2 menu-text-style fw-600 text-center py-3 icon-hover">{{ $locale == 'en' ? 'Job Market' : 'জব মার্কেট ' }}</div>-->
                <!--                        </a>-->
                <!--                <div id="job" class="modal fade">-->
                <!--                    <div class="modal-dialog modal-sm modal-dialog-centered">-->
                <!--                        <div class="modal-content">-->
                <!--                            <div class="modal-header">-->
                <!--                                <h4 class="modal-title h6">{{translate('Job Info')}}</h4>-->
                <!--                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>-->
                <!--                            </div>-->
                <!--                            <div class="modal-body">-->
                <!--                                  <img src="https://static.vecteezy.com/system/resources/previews/004/243/615/original/creative-coming-soon-teaser-background-free-vector.jpg" alt="" width="260px">-->
                <!--                            </div>-->
                <!--                            <div class="modal-footer text-center">-->
                                               
                <!--                                <button type="button" class="btn btn-link mt-2" data-dismiss="modal">{{translate('Cancel')}}</button>-->
                                               
                <!--                            </div>-->
                <!--                        </div>-->
                <!--                    </div>-->
                <!--                </div>-->
                <!--            </div>-->


                         
                <!--            <div class="col mt-2 pl-lg-0 pr-lg-0 pl-sm-0 pr-sm-0"> -->
                <!--                 <div class="">-->
                <!--                       <a href="#" data-target="#ticket" data-toggle="modal"-->
                <!--                            class="d-block text-reset shadow-md mb-2 menu-style-btn">-->
                <!--                                <div class="text-truncat-2 pl-2 menu-text-style fw-600 text-center py-3 icon-hover">{{ $locale == 'en' ? 'Tickets & Tours' : ' টিকেট & ট্যুর ' }}</div>-->
                <!--                        </a>-->
                <!--                </div>-->
                <!--                <div id="ticket" class="modal fade">-->
                <!--                    <div class="modal-dialog modal-sm modal-dialog-centered">-->
                <!--                        <div class="modal-content">-->
                <!--                            <div class="modal-header">-->
                <!--                                <h4 class="modal-title h6">{{translate('Ticket Info')}}</h4>-->
                <!--                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>-->
                <!--                            </div>-->
                <!--                            <div class="modal-body">-->
                <!--                                  <img src="https://static.vecteezy.com/system/resources/previews/004/243/615/original/creative-coming-soon-teaser-background-free-vector.jpg" alt="" width="260px">-->
                <!--                            </div>-->
                <!--                            <div class="modal-footer text-center">-->
                                               
                <!--                                <button type="button" class="btn btn-link mt-2" data-dismiss="modal">{{translate('Cancel')}}</button>-->
                                               
                <!--                            </div>-->
                <!--                        </div>-->
                <!--                    </div>-->
                <!--                </div>-->
                <!--            </div>-->

                           
                <!--            <div class="col mt-2 pl-lg-3 pr-lg-3 pl-sm-3 pr-sm-3"> -->
                <!--                <a href="#" data-target="#medicine" data-toggle="modal"-->
                <!--                    class="d-block text-reset shadow-md mb-2 menu-style-btn">-->
                <!--                        <div class="text-truncat-2 pl-2 menu-text-style fw-600 text-center py-3 icon-hover"> {{ $locale == 'en' ? 'Medicine' : ' মেডিসিন ' }} </div>-->
                <!--                </a>-->
                <!--            </div>-->
                        
                <!--            <div id="medicine" class="modal fade">-->
                <!--                <div class="modal-dialog modal-sm modal-dialog-centered">-->
                <!--                    <div class="modal-content">-->
                <!--                        <div class="modal-header">-->
                <!--                            <h4 class="modal-title h6">{{translate('Medicine Info')}}</h4>-->
                <!--                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>-->
                <!--                        </div>-->
                <!--                        <div class="modal-body">-->
                <!--                             <p class="">If you are not logged in. Please <a href="{{route('user.login')}}">Login</a> First</p>-->
                <!--                            <form action="{{route('store.medicine')}}" method="POST" enctype="multipart/form-data">-->
                <!--                                @csrf-->
                <!--                              <div class="form-group">-->
                <!--                                <label for="image">Presciption Image or PDF</label>-->
                <!--                                <input type="file" name="image" id="image" class="form-control" required>-->
                <!--                              </div>-->
                                              
                <!--                              <button type="submit" class="btn btn-success">Submit</button>-->
                <!--                            </form>-->
                <!--                        </div>-->
                <!--                        <div class="modal-footer text-center">-->
                                           
                <!--                            <button type="button" class="btn btn-link mt-2" data-dismiss="modal">{{translate('Cancel')}}</button>-->
                                           
                <!--                        </div>-->
                <!--                    </div>-->
                <!--                </div>-->
                <!--            </div>-->

                <!--        </div>-->
                <!--</div>        -->
                        






                    
                </div>

            </div>
            
       </div>
      

    </div>
     {{-- Featured Categories --}}
    
      <!--<div class="mb-4">-->
      <!--              <div class="container">-->
                        
                  
      <!--                       @if (count($featured_categories) > 0)-->
      <!--                  <ul class="list-unstyled mb-0 row gutters-5">-->
      <!--                      @foreach ($featured_categories as $key => $category)-->
      <!--                          <li class="minw-0 col-4 col-md mt-3">-->
      <!--                              <a href="{{ route('products.category', $category->slug) }}" class="d-block rounded bg-white p-2 text-reset shadow-sm">-->
      <!--                                  <img-->
      <!--                                      src="{{ static_asset('assets/img/placeholder.jpg') }}"-->
      <!--                                      data-src="{{ uploaded_asset($category->banner) }}"-->
      <!--                                      alt="{{ $category->getTranslation('name') }}"-->
      <!--                                      class="lazyload img-fit"-->
      <!--                                      height="78"-->
      <!--                                      onerror="this.onerror=null;this.src='{{ static_asset('assets/img/placeholder-rect.jpg') }}';"-->
      <!--                                  >-->
      <!--                                  <div class="text-truncate fs-12 fw-600 mt-2 opacity-70">{{ $category->getTranslation('name') }}</div>-->
      <!--                              </a>-->
      <!--                          </li>-->
      <!--                      @endforeach-->
      <!--                  </ul>-->
      <!--              @endif-->
 

                        
      <!--              </div>-->
      <!--          </div>-->
    
    
    
    
    {{-- Featured categories Ends --}}  
    
    
    <style>
    .pad-lef{
        padding-left:0px !important;
       
    }
    
    .boxx {
  display: flex;
  align-items: center;
  justify-content: center;
  background: #fff;
  margin: 8px 0;
  padding: 30px;
  width: 100%;
  min-height: 108px;
   /*min-height: 100px;*/
  
  
  /* .boxx {*/
  /*display: flex;*/
  /*align-items: center;*/
  /*justify-content: center;*/
  /*background: #fff;*/
  /*margin: 20px 0;*/
  /*padding: 0px;*/
  /*width: 100%;*/
  /*min-height: 70px;*/
  
  
  
  /*border: 2px #ccc solid;*/
   box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px !important;
  /*border: 1px solid red !important;*/
  /*border-radius: 10px !important;"*/
  border-radius: 0px !important;"
 
  color: #fff;
}
      @media only screen and (min-width:768px) and (max-width:1260px){
         .boxx{
             min-height: 110px ;
             padding:30px ;
         }
        
      }
        @media only screen and (min-width:1024px) and (max-width:1208px){
         .boxx{
             min-height: 110px;
             padding:20px;
         }
        
      }
      
        
    </style>
    
    
    
    
    
    
    
    
    
    
    
   


    {{-- Banner section 1 --}}
   <!--@if (get_setting('home_banner1_images') != null)-->
   <!-- <div class="mb-4">-->
   <!--    <div class="container">-->
   <!--           <h3 class="mb-3" style="text-align:center">Premium Service</h3>-->
   <!--         <div class="row gutters-10">-->
              
   <!--             @php $banner_1_imags = json_decode(get_setting('home_banner1_images')); @endphp-->
   <!--             @foreach ($banner_1_imags as $key => $value)-->
   <!--                 <div class="col-lg-3 mb-3">-->
   <!--                     <div class="mb-3 mb-lg-0">-->
   <!--                         <a href="{{ json_decode(get_setting('home_banner1_links'), true)[$key] }}" class="d-block text-reset">-->
   <!--                             <img src="{{ static_asset('assets/img/placeholder-rect.jpg') }}" data-src="{{ uploaded_asset($banner_1_imags[$key]) }}" alt="{{ env('APP_NAME') }} promo" class="img-fluid lazyload w-100">-->
   <!--                         </a>-->
   <!--                     </div>-->
   <!--                 </div>-->
   <!--             @endforeach-->
   <!--         </div>-->
   <!--         </div>-->
      
   <!-- </div>-->
   <!-- @endif-->
   

    
        <style>
   @media only screen and (min-width: 992px) {
        .marleft{
            margin-left:210px !important;
        }
    }
     @media only screen and (min-width: 1024px ) and (max-width:1100px) {
        /*.marleft{*/
        /*    margin-left:150px !important;*/
        /*}*/
        .marleft{
            max-width:720px;
        }
    }
    @media only screen and (min-width: 1100px ) and (max-width:1280px) {
    
        .marleft{
            max-width:800px;
        }
    }
      @media only screen and (min-width: 1920px){
        .marleft{
            margin-left:310px !important;
        }
    }
    </style>
    
    
    
    <!--Menu Section-->
    
      <section  class="mb-lg-3 mb-xs-1 mb-sm-1 mt-lg-3 mt-sm-2">
            <div class="container">
                       
                  <ul class="list-inline mb-0 mobile-hor-swipe">
                      <li class="list-inline-item mr-0">
                                
                                <a href="https://sobkisubazar.com/category/skbWorld" class="py-2 d-inline-block fw-600 hov-opacity-100">  
                                                   
                                    <button type="button" class="menu-btn-style-new d-flex justify-content-between text-center">
                                         <img
                                                        class="img-fluid lazyload h-40px h-md-38px h-sm-30px" style="margin-right: 5px;"
                                                        src="{{ static_asset('assets/img/skb-world-icon.png') }}"
                                                        data-src=""
                                                        alt=""
                                                        onerror="this.onerror=null;this.src='{{ static_asset('assets/img/skb-world-icon.png') }}';"
                                                    >
                                    <span class="m-auto">    {{ $locale == 'en' ? 'SKB World' : 'SKB ওয়ার্ল্ড' }}  </span>
                                        
                                        <div class="m-auto text-white">
                                             <i class="fa-solid fa-chevron-right"></i>
                                        </div>
                                        </button>
                                </a>
                                
                                
                                
                            </li>
                            
                            
        
                            <li class="list-inline-item mr-0">
                                
                                <a href="#"  data-target="#food" data-toggle="modal" class="py-2 pl-3 d-inline-block fw-600 hov-opacity-100">  
                                                   
                                    <button type="button" class="menu-btn-style-new d-flex justify-content-between text-center">
                                         <img
                                                        class="img-fluid lazyload h-40px h-md-38px h-sm-30px" style="margin-right: 5px;"
                                                        src="{{ static_asset('assets/img/food.png') }}"
                                                        data-src=""
                                                        alt=""
                                                        onerror="this.onerror=null;this.src='{{ static_asset('assets/img/food.png') }}';"
                                                    >
                                    <span class="m-auto">    {{ $locale == 'en' ? 'Food Mart' : 'ফুড মার্ট' }}  </span>
                                        
                                        <div class="m-auto text-white">
                                             <i class="fa-solid fa-chevron-right"></i>
                                        </div>
                                        </button>
                                </a>
                                
                                <div id="food" class="modal fade">
                                    <div class="modal-dialog modal-sm modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title h6">{{translate('Food Mart')}}</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                            </div>
                                            <div class="modal-body">
                                                  <img src="https://static.vecteezy.com/system/resources/previews/004/243/615/original/creative-coming-soon-teaser-background-free-vector.jpg" alt="" width="240px">
                                            </div>
                                            <div class="modal-footer text-center">
                                               
                                                <button type="button" class="btn btn-link mt-2" data-dismiss="modal">{{translate('Cancel')}}</button>
                                               
                                            </div>
                                        </div>
                                    </div>
                                </div>
        
                            </li>
                            
                                <li class="list-inline-item mr-0">
                                
                               
                                 <a href="#"  data-target="#job_market" data-toggle="modal" class="py-2 pl-2 d-inline-block fw-600 hov-opacity-100">  
                                                   
                                    <button type="button" class="menu-btn-style-new d-flex justify-content-between text-center">
                                         <img
                                                        class="img-fluid lazyload h-40px h-md-38px h-sm-30px" style="margin-right: 5px;"
                                                        src="{{ static_asset('assets/img/job.png') }}"
                                                        data-src=""
                                                        alt=""
                                                        onerror="this.onerror=null;this.src='{{ static_asset('assets/img/job.png') }}';"
                                                    >
                                       <span class="m-auto"> {{ $locale == 'en' ? 'Job Market' : 'জব মার্কেট '  }} </span>
                                        <div class="m-auto text-white">
                                             <i class="fa-solid fa-chevron-right"></i>
                                        </div>
                                       </button>
                                </a>
                                
                                
                               <div id="job_market" class="modal fade">
                                    <div class="modal-dialog modal-sm modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title h6">{{translate('Job Market')}}</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                            </div>
                                            <div class="modal-body">
                                                  <img src="https://static.vecteezy.com/system/resources/previews/004/243/615/original/creative-coming-soon-teaser-background-free-vector.jpg" alt="" width="240px">
                                            </div>
                                            <div class="modal-footer text-center">
                                               
                                                <button type="button" class="btn btn-link mt-2" data-dismiss="modal">{{translate('Cancel')}}</button>
                                               
                                            </div>
                                        </div>
                                    </div>
                                </div>
        
                            </li>
                            
                            <li class="list-inline-item mr-0">
                                
                                <a href="#"  data-target="#global_market" data-toggle="modal" class="py-2 pl-2 d-inline-block fw-600 hov-opacity-100">

                                                   
                                    <button type="button" class="menu-btn-style-new d-flex justify-content-between text-center">
                                        <img
                                                        class="img-fluid lazyload h-40px h-md-38px h-sm-30px" style="margin-right: 5px;"
                                                        src="{{ static_asset('assets/img/global.png') }}"
                                                        data-src=""
                                                        alt=""
                                                        onerror="this.onerror=null;this.src='{{ static_asset('assets/img/global.png') }}';"
                                                    >
                                        <span class="m-auto">{{ $locale == 'en' ? 'Global Market' : 'গ্লোবাল মার্কেট' }}</span>
                                         <div class="m-auto text-white">
                                             <i class="fa-solid fa-chevron-right"></i>
                                        </div>
                                        
                                        </button>
                                </a>
                                
                                
                                      <div id="global_market" class="modal fade">
                                <div class="modal-dialog modal-sm modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title h6">{{translate('Global Market')}}</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                        </div>
                                        <div class="modal-body">
                                             <p class="">If you are not logged in. Please <a href="{{route('user.login')}}">Login</a> First</p>
                                            <form method="post" action="{{route('store.global_market')}}">
                                                @csrf
                                              <div class="form-group">
                                                <label for="link">Please Share Your Global Market Link</label>
                                                <input type="link" name="link" id="link" class="form-control"  placeholder="Enter Your Global Market Link" required>
                                              </div>
                                              
                                              <button type="submit" class="btn btn-success">Submit</button>
                                            </form>
                                        </div>
                                        <div class="modal-footer text-center">
                                           
                                            <button type="button" class="btn btn-link mt-2" data-dismiss="modal">{{translate('Cancel')}}</button>
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
        
                            </li>
                            
                            
                               <li class="list-inline-item mr-0">
                                
                                <a href="#"  data-target="#ticket" data-toggle="modal" class="py-2 pl-2 d-inline-block fw-600 hov-opacity-100">

                                                   
                                    <button type="button" class="menu-btn-style-new d-flex justify-content-between text-center">
                                        <img
                                                        class="img-fluid lazyload h-40px h-md-38px h-sm-30px" style="margin-right: 5px;"
                                                        src="{{ static_asset('assets/img/tour.png') }}"
                                                        data-src=""
                                                        alt=""
                                                        onerror="this.onerror=null;this.src='{{ static_asset('assets/img/tour.png') }}';"
                                                    >
                                       <span class="m-auto">{{ $locale == 'en' ? 'Ticket & Tour' : ' টিকেট & ট্যুর ' }}</span>
                                        <div class="m-auto text-white">
                                             <i class="fa-solid fa-chevron-right"></i>
                                        </div>
                                       </button>
                                </a>
                                
                                    <div id="ticket" class="modal fade">
                                    <div class="modal-dialog modal-sm modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title h6">{{translate('Ticket & Tour')}}</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                            </div>
                                            <div class="modal-body">
                                                  <img src="https://static.vecteezy.com/system/resources/previews/004/243/615/original/creative-coming-soon-teaser-background-free-vector.jpg" alt="" width="240px">
                                            </div>
                                            <div class="modal-footer text-center">
                                               
                                                <button type="button" class="btn btn-link mt-2" data-dismiss="modal">{{translate('Cancel')}}</button>
                                               
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </li>
                            
                            <li class="list-inline-item mr-0">

                                 <a href="#"  data-target="#medicine" data-toggle="modal" class="py-2 pl-2 d-inline-block fw-600 hov-opacity-100">

                                                   
                                    <button type="button" class="menu-btn-style-new d-flex justify-content-between text-center">
                                        <img
                                                        class="img-fluid lazyload h-40px h-md-38px h-sm-30px" style="margin-right: 5px;"
                                                        src="{{ static_asset('assets/img/medicine.png') }}"
                                                        data-src=""
                                                        alt=""
                                                        onerror="this.onerror=null;this.src='{{ static_asset('assets/img/medicine.png') }}';"
                                                    >
                                       <span class="m-auto">{{ $locale == 'en' ? 'Medicine' : ' মেডিসিন ' }}</span>
                                       <div class="m-auto text-white">
                                             <i class="fa-solid fa-chevron-right"></i>
                                        </div>
                                       </button>
                                </a>
                                
                             <div id="medicine" class="modal fade">
                                <div class="modal-dialog modal-sm modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title h6">{{translate('Medicine Info')}}</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                        </div>
                                        <div class="modal-body">
                                             <p class="">If you are not logged in. Please <a href="{{route('user.login')}}">Login</a> First</p>
                                            <form action="{{route('store.medicine')}}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                              <div class="form-group">
                                                <label for="image">Presciption Image or PDF</label>
                                                <input type="file" name="image" id="image" class="form-control" required>
                                              </div>
                                              
                                              <button type="submit" class="btn btn-success">Submit</button>
                                            </form>
                                        </div>
                                        <div class="modal-footer text-center">
                                           
                                            <button type="button" class="btn btn-link mt-2" data-dismiss="modal">{{translate('Cancel')}}</button>
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                      </li>
                  </ul>      
            </div>
        </section>    
    
    
    
    <!--Offer Section-->
    
     <section class="mb-lg-4 mb-sm-0 mb-xs-0">
                   <div class="container " >
                       <div class="px-md-3 py-md-2 rounded section_bg">
                            <div class="d-flex mb-lg-2 mb-xs-1 align-items-baseline border-bottom">
                                <h3 class="h5 fw-700 mb-0">
                                <!--<h3 class="h5 fw-700 mb-0 title-line-cat">-->

                                    <span class="fs-sm-14-title offer-color border-bottom border-primary border-width-2 pb-lg-2 pb-sm-1 pb-xs-1 d-inline-block" style="border-color: #572c84 !important;">{{ $locale == 'en' ? 'Offer' : ' অফার '}}</span>
                                    <!--{{ translate('Classified Ads') }}-->
                                </h3>
                            </div>
                            <!--<div style="background: #fff;padding: 20px;">-->
                           <div style="" class="aiz-carousel gutters-5 half-outside-arrow" data-ride="carousel" data-items="6"  data-xl-items="5" data-lg-items="4"  data-md-items="3" data-sm-items="3" data-xs-items="3" data-autoplay="true"  data-autoplaySpped="2000" data-infinite="true">
                                   <div class="carousel-box">
                                        <div class="aiz-card-box border border-light rounded my-2 hov-shadow-md has-transition">
                                            <div class="img-position-hov position-relative img-position-hov">
                                                <a href="{{ route('today_offer') }}" class="d-block">
                                                    <img
                                                        class="img-fit lazyload mx-auto h-100px h-md-210px hov-shadow-sm"
                                                        src="{{ static_asset('assets/img/1TodayDeals.jpg') }}"
                                                        data-src=""
                                                        alt=""
                                                        onerror="this.onerror=null;this.src='{{ static_asset('assets/img/1TodayDeals.jpg') }}';">
                                                </a>
                                            </div>
                                       </div>
                                   </div>
                                   
                                   
                                   
                                   <div class="carousel-box">
                                        <div class="aiz-card-box border border-light rounded my-2 has-transition">
                                            <div class="position-relative">
                                                <a href="{{ route('buy_more_save_more')}}" class="d-block">
                                                    <img
                                                        class="img-fit lazyload mx-auto h-100px h-md-210px hov-shadow-sm"
                                                        src="{{ static_asset('assets/img/2BuyMoreSaveMore.jpg') }}"
                                                        data-src=""
                                                        alt=""
                                                        onerror="this.onerror=null;this.src='{{ static_asset('assets/img/2BuyMoreSaveMore.jpg') }}';">
                                                </a>
                                            </div>
                                       </div>
                                   </div>
                                   
                                   
                                   
                                   <div class="carousel-box">
                                        <div class="aiz-card-box border border-light rounded my-2 has-transition">
                                            <div class="position-relative">
                                                <a href="{{ route('up_to_10') }}" class="d-block">
                                                    <img
                                                        class="img-fit lazyload mx-auto h-100px h-md-210px hov-shadow-sm"
                                                        src="{{ static_asset('assets/img/3Upto50Sale.jpg') }}"
                                                        data-src=""
                                                        alt=""
                                                        onerror="this.onerror=null;this.src='{{ static_asset('assets/img/3Upto50Sale.jpg') }}';">
                                                </a>
                                             </div>
                                       </div>
                                   </div>
                                   
                                   
                                   
                                   
                                    <div class="carousel-box">
                                        <div class="aiz-card-box border border-light rounded my-2 has-transition">
                                            <div class="position-relative">
                                                <a href="{{route('up_to_70')}}" class="d-block">
                                                    <img
                                                        class="img-fit lazyload mx-auto h-100px h-md-210px hov-shadow-sm"
                                                        src="{{ static_asset('assets/img/4MegaSale_After50Percent.jpg') }}"
                                                        data-src=""
                                                        alt=""
                                                        onerror="this.onerror=null;this.src='{{ static_asset('assets/img/4MegaSale_After50Percent.jpg') }}';">
                                                </a>
                                            </div>
                                       </div>
                                   </div>
                                   
                                   
                                   
                                   
                                   <div class="carousel-box">
                                        <div class="aiz-card-box border border-light rounded my-2 has-transition">
                                            <div class="position-relative">
                                                <a href="{{ route('buy_one_get_one') }}" class="d-block">
                                                    <img
                                                        class="img-fit lazyload mx-auto h-100px h-md-210px hov-shadow-sm"
                                                        src="{{ static_asset('assets/img/5BuyOneGetOne.jpg') }}"
                                                        data-src=""
                                                        alt=""
                                                        onerror="this.onerror=null;this.src='{{ static_asset('assets/img/5BuyOneGetOne.jpg') }}';">
                                                </a>   
                                            </div>
                                       </div>
                                   </div>
                                   
                                   
                                   
                                   
                                   <div class="carousel-box">
                                        <div class="aiz-card-box border border-light rounded my-2 has-transition">
                                            <div class="position-relative">
                                                <a href="#" class="d-block">
                                                    <img
                                                        class="img-fit lazyload mx-auto h-100px h-md-210px hov-shadow-sm"
                                                        src="{{ static_asset('assets/img/6CouponOffer.png') }}"
                                                        data-src=""
                                                        alt=""
                                                        onerror="this.onerror=null;this.src='{{ static_asset('assets/img/6CouponOffer.png') }}';">
                                                </a>
                                            </div>
                                       </div>
                                   </div>
                           </div>
                       </div>
                       <!--</div>-->
                   </div>
               </section>
    
    
    
    {{-- Classified Product --}}
    @if(get_setting('classified_product') == 1)
        @php
            $classified_products = Cache::remember('advertisement', 86400, function () {
            return \App\Models\AddBannerSlider::where('approved_by_admin',1)
                                                ->where('package_name','silver')
                                                ->get();
        
        
    });
        @endphp
           @if (count($classified_products) > 0)
     
               <section  class="mb-0">
                   <div class="container">
                        <div class="px-md-3 py-md-2 rounded section_bg">
                            <div class="d-flex mb-lg-2 mb-xs-1 align-items-baseline border-bottom">

                            <!--<div class="d-flex mb-2 align-items-baseline title-line">-->

                                <h3 class="h5 fw-700 mb-0">
                                    <span class="d-inline-block fs-sm-14-title border-bottom border-primary border-width-2 pb-lg-2 pb-sm-1 pb-xs-1" style="border-color: #572c84 !important;">{{ $locale == 'en' ? 'Advertisement' : 'বিজ্ঞাপন' }} </span>
                                    <!--{{ translate('Classified Adssss') }}-->
                                    
                                </h3>
                                <!--<a href="{{ route('customer.products') }}" class="ml-auto mr-0 btn btn-primary btn-sm shadow-md">{{ translate('View More') }}</a>-->
                            </div>
                           <div class="aiz-carousel gutters-5 half-outside-arrow" data-ride="carousel" data-items="6"  data-xl-items="5" data-lg-items="4"  data-md-items="3" data-sm-items="3" data-xs-items="3"  data-arrows="true" data-autoplay="true" data-autoplaySpped="2000" data-infinite="true">
                               @foreach ($classified_products as $key => $classified_product)
                                   <div class="carousel-box">
                                        <div class="aiz-card-box border border-light rounded my-2 hov-shadow-md has-transition">
                                            <div class="position-relative">
                                                <div class="" style="background: #f7f7f7">
                                                <a href="{{$classified_product->button_link ? $classified_product->button_link : '#' }}" class="d-block">
                                                    <img
                                                        class="img-fluid lazyload mx-auto h-100px h-md-210px hov-shadow-sm" width="100%"
                                                        src="{{ static_asset('assets/img/placeholder.jpg') }}"
                                                        data-src="{{ uploaded_asset($classified_product->image) }}"
                                                        alt="advertisement"
                                                        onerror="this.onerror=null;this.src='{{ static_asset('assets/img/placeholder.jpg') }}';" 
                                                    >
                                                </a>
                                                </div>
                                                <!--<div class="absolute-top-left pt-2 pl-2">-->
                                                <!--    @if($classified_product->conditon == 'new')-->
                                                <!--       <span class="badge badge-inline badge-success">{{translate('new')}}</span>-->
                                                <!--    @elseif($classified_product->conditon == 'used')-->
                                                <!--       <span class="badge badge-inline badge-danger">{{translate('Used')}}</span>-->
                                                <!--    @endif-->
                                                <!--</div>-->
                                                
                                                 <!--<div class="absolute-top-right aiz-p-hov-icon">-->
                                                 <!--       <a href="javascript:void(0)" onclick="addToWishList()" data-toggle="tooltip" data-title="" data-placement="left">-->
                                                 <!--           <i class="la la-heart-o"></i>-->
                                                 <!--       </a>-->
                                                 <!--       <a href="javascript:void(0)" onclick="addToCompare()" data-toggle="tooltip" data-title="" data-placement="left">-->
                                                 <!--           <i class="las la-sync"></i>-->
                                                 <!--       </a>-->
                                                 <!--       <a href="javascript:void(0)" onclick="showAddToCartModal()" data-toggle="tooltip" data-title="" data-placement="left">-->
                                                 <!--           <i class="las la-shopping-cart"></i>-->
                                                 <!--       </a>-->
                                                 <!--   </div>-->
                                                
                                                
                                            </div>
                                         {{--   <div class="p-md-3 p-2 text-left bg-white">
                                                <div class="fs-15 mb-1">
                                                    <span class="fw-700" style="color: #572c84;">{{ single_price($classified_product->unit_price) }}</span>
                                                </div>
                                                <h3 class="fw-600 fs-13 text-truncate-2 lh-1-4 mb-0 h-35px">
                                                    <a href="{{ route('customer.product', $classified_product->slug) }}" class="d-block text-reset">{{ $classified_product->getTranslation('name') }}</a>
                                                </h3>
                                            </div> --}}
                                            
                                       </div>
                                   </div>
                               @endforeach
                           </div>
                       </div>
                   </div>
               </section>
           @endif
       @endif
       
       
       
       
       
     
    
       
       
       
       
       
       
        {{-- Best Selling  --}}
    <div id="section_best_selling">

    </div>
       
       
        
     {{-- Featured Product --}}
    <div id="section_best_sellers">

    </div>
    
    
    
    
    
    
      {{-- ad store 2 --}}
       
        <!-- Category wise product / Corporate banner -->
            
<div  class="mb-0">
                <div class="container ">
                            <div class="d-flex mt-lg-3 mt-sm-1 mt-xs-1 align-items-baseline">
                                <h3 class="h5 fw-700 mb-0">

                                    <!--{{ translate('Classified Ads') }}-->
                                </h3>
                            </div>
                    <div class="row">
                      <!--<div class="col-lg-2"></div>-->
                   <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="aiz-carousel dots-inside-bottom mobile-img-auto-height" data-arrows="false" data-dots="true" data-autoplay="true" data-fade="true" data-speed="1000" style="box-shadow: 0 4px 6px -3px #9c9c9c; border-radius: 3px;">
                        <!--<div class="aiz-carousel dots-inside-bottom mobile-img-auto-height" data-arrows="false" data-dots="true" data-autoplay="true" style="border:1px solid #4682B4;">-->

                       @php  $slider_images = Cache::rememberForever('sliders-corporate', function(){
            return \App\Models\AddBannerSlider::where('approved_by_admin',1)
                                                ->where('package_name','gold')
                                                ->get();
        }); @endphp
                            @foreach ($slider_images as $key => $value)
                                    <div class="carousel-box" style="width: 100%; display: inline-block;">
                                    <a href="#">
                                                        <img
                                                            class="d-block mw-100 img-fluid shadow-sm overflow-hidden mobile-img-height"
                                                            src="{{ uploaded_asset($value->image) }}"
                                                            data-src=""
                                                            alt=""
                                                            onerror="this.onerror=null;this.src='{{ static_asset('assets/img/l2.jpg') }}';"
                                                        >
                                                    </a>
                                </div>
                            @endforeach
                        </div>             
                </div>
                
            </div>
        </div>
    </div>
    
    
    
    
    
    
 <!--start catagory first row-->

         
<div class="mb-2 mt-2">
        <div class="container d-none-cat">
            
            <div class="d-flex mb-1 align-items-baseline border-bottom">
                                <h3 class="h5 fw-700 mb-0">
                                <!--<h3 class="h5 fw-700 mb-0 title-line-cat">-->

                                    <span class="fs-sm-14-title offer-color border-bottom border-primary border-width-2 pb-lg-2 pb-sm-1 pb-xs-1 d-inline-block" style="border-color: #572c84 !important;">{{ $locale == 'en' ? 'Categories' : 'ক্যাটেগরি'}}</span>
                                    <!--{{ translate('Classified Ads') }}-->
                                </h3>
                            </div>
            
            
 
         <div class="container">
             <div class="row">
                 <div class="category-card-content category_items-all">
      
      
        
        <div class="categories-items">
          
          <div class="card-category-item category-card-hover align-left">
            <a class="card-category-item-content" href="https://sobkisubazar.com/category/skbworld">
               <div class="card-category-item-image">
                  <img class="image shadow-sm" src="{{ static_asset('assets/img/skb-world3.png') }}" alt="">
               </div>
              <div class="card-categories-name">
                <span class="text">
                  {{ $locale == 'en' ? 'SKB World' : 'SKB ওয়ার্ল্ড'   }}
                </span>
              </div>
            </a>
          </div>
          
          
          
          
           @foreach (\App\Models\Category::where('level', 0)->orderBy('order_level', 'asc')->get()->take(15) as $key => $category)

          <div class="card-category-item category-card-hover align-left" data-id="{{ $category->id }}">
            <a class="card-category-item-content" href="{{ route('products.category', $category->slug) }}">
               <div class="card-category-item-image">
                  <img class="image" src="{{ uploaded_asset($category->icon) }}"
                data-src="{{ uploaded_asset($category->icon) }}" alt="">
               </div>
              <div class="card-categories-name">
                <span class="text">
                 {{ $category->getTranslation('name') }}
                </span>
              </div>
            </a>
          </div>
          
                  @endforeach

          
         
          
          
        </div>
      
    </div>
                 
                 
                 
            
                    
                </div>
                </div>
                </div>
                
                <!--end catagory first row-->
                
    
    
    
    
    
    
        
{{-- Most Popular Brands Section --}}
        
  @php
    $brands = App\Models\Brand::limit(20)->get();
 
@endphp
    <section  class="mb-lg-2 mb-sm-0 mb-xs-0 mt-lg-2 mt-sm-1 mt-xs-1">
                   <div class="container">
                      <div class="rounded">
                            <div class="d-flex align-items-baseline border-bottom">
                                <h3 class="h5 fw-700 mb-0">
                                    <span class="fs-sm-14-title pb-lg-1 pb-sm-1 pb-xs-1 d-inline-block border-bottom border-primary border-width-2" style="border-color: #572c84 !important;">  {{ $locale == 'en' ? 'Shop by Brands' : ' ব্র্যান্ড অনুযায়ী শপিং করুন ' }}  </span>

                                </h3>
                            </div>
                           <div class="aiz-carousel gutters-5 half-outside-arrow" data-ride="carousel" data-items="9"  data-xl-items="8" data-lg-items="6"  data-md-items="5" data-sm-items="3" data-xs-items="3"  data-arrows="true" data-autoplay="true" autoplaySpped="2000" data-infinite="true">
                                   @foreach ($brands as $brand)
                                     <div class="carousel-box">
                                        <div class="aiz-card-box border-light rounded hov-shadow-md my-2 has-transition brand_bg">
                                            <div class="position-relative">
                                                <a href="{{route('products.brand',$brand->slug)}}" class="d-block d-flex justify-content-between">
                                                    <img
                                                        class="img-fluid lazyload mx-auto h-60px h-md-70px"  
                                                        src="{{ uploaded_asset($brand->logo) }}" style=""
                                                        data-src=""
                                                        alt=""
                                                        onerror="this.onerror=null;this.src='{{ static_asset('assets/img/placeholder.jpg') }}';"
                                                    >
                                                </a>
                                               
                                            </div>
                                       </div>
                                   </div>
                                   @endforeach
                                 
                           </div>
                       </div>
                   </div>
               </section>
    

       
       
       
        {{-- Best sellers --}}
    <!--<div id="section_feature_product">-->

    <!--</div>-->
       
       
       
       
       
 
  <!--<div class="mb-4">-->
        
  <!--      <div class="container">-->
            
  <!--              {{-- Banner Section 2 --}}-->
  <!--  @if (get_setting('home_banner2_images') != null)-->
  <!--  <div class="mb-4">-->
  <!--      <div class="container">-->
  <!--          <div class="row gutters-10">-->
  <!--              @php $banner_2_imags = json_decode(get_setting('home_banner2_images')); @endphp-->
  <!--              @foreach ($banner_2_imags as $key => $value)-->
  <!--                  <div class="col-xl-4 col-md-4 col-lg-4 col-12 mb-3">-->
  <!--                      <div class="mb-3 mb-lg-0">-->
  <!--                          <a href="{{ json_decode(get_setting('home_banner2_links'), true)[$key] }}" class="d-block text-reset">-->
  <!--                              <img src="{{ static_asset('assets/img/placeholder-rect.jpg') }}" data-src="{{ uploaded_asset($banner_2_imags[$key]) }}" alt="{{ env('APP_NAME') }} promo" class="img-fluid lazyload w-100">-->
  <!--                          </a>-->
  <!--                      </div>-->
  <!--                  </div>-->
  <!--              @endforeach-->
  <!--          </div>-->
  <!--      </div>-->
  <!--  </div>-->
  <!--  @endif-->
            
  <!--      </div>-->
        
  <!--  </div> -->
 
      
    
    
    
                       
    
  <!--   <div class="mb-2">-->
  <!--      <div class="container">-->
            
  <!--          <div class="row">-->
                
  <!--              <div class="col">-->
  <!--                  <h3 class="" style="text-align:center">Our Product Categories</h3>-->
  <!--              </div>-->
  <!--          </div>-->
            
            
  <!--         <div class="row mb-3">-->
                
  <!--              <div class="col">-->
  <!--               <div class="main-holder d-flex flex-wrap justify-content-center align-items-center">-->
  <!--    <div class="d-flex flex-wrap col-12">-->
        <!-- card 1 starts -->
  <!--        @foreach (\App\Models\Category::where('level', 0)->orderBy('order_level', 'desc')->limit(12)->get() as $key => $category)-->
         
  <!--      <a  href="{{ route('products.category', $category->slug) }}" class="category category-1 d-flex flex-column justify-content-center align-item-center">-->
  <!--        <div class="category-header category-header-1"></div>-->
  <!--        <img src="{{ uploaded_asset($category->banner) }}" class="img-responsive card-img" style="width:44px;" />-->
  <!--        <p class="card-text">{{$category->name}}</p>-->
  <!--      </a>-->
  <!--      @endforeach-->
                <!-- card 1 ends -->
       
       
       
  <!--    </div>-->
  <!--</div>-->
  <!--              </div>-->
  <!--          </div>-->
  
  
               
  
            
            
  <!--          </div>-->
            
  <!--          </div>-->
            
            <!--start catagory first row-->
            
            <div  class="">
                <style>
                @media screen and (max-width:768px){
                     .catcon{
                         padding-left:15px;
                         
                     }
                    
                } 
                   
                </style>
                <div class="container catcon">
                     
             <div class="row">
                    @php 
                     $banner = App\Models\AddBanner::take(20)->limit(18)->get();
                   @endphp
                
                  
                 @foreach($banner as $key => $img)
                  <div class="col-lg-2 col-md-4 col-sm-6 col-6  catcon" >
                      <!--pad-lef-->
                      
                      <div class=" rounded"  >
                         
                         
                           <a class="itemss" href="">
                         <!--<a class="itemss" href="{{$img->links}}">-->
                           
                           <!--<div class="boxx" >-->
                           <!--    <div class="row">-->
                           <!--        <a href="{{$img->link}}">-->
                           <!--           <img class="img_item" src="public/uploads/banner/{{$img->image}}" alt="">-->
                           <!--             <div >-->
                           <!--                 <h6  class=" ml-3 text-center" style="color:#000">{{$img->name}}</h6>-->
                           <!--             </div> -->
                           <!--        </a>-->
                                        
                                        
                           <!--    </div>-->
                          
                             
                                
                           <!--  </div>-->
                                        
                                      
                                       
                                   
                           <!--Previous Category menu -->
                           <!--<div class="boxx" >-->
                           <!--    <img class="img_item" src="public/uploads/banner/{{$img->image}}" alt="">-->
                           <!--    <div class="row">-->
                           <!--        <div class="col-12 text-center mb-2">-->
                           <!--              <img class="img_item "  src="{{asset('public/uploads/banner/'.$img->image)}}" alt="">-->
                           <!--        </div>-->
                           <!--        <div class="col-12 text-center " >-->
                           <!--            <h6>{{$img->name}}</h6>-->
                                       
                           <!--        </div>-->
                                  
                           <!--    </div>-->
                               
                                <!--margin-left:40px;-->
                                
                           <!-- </div>-->
                            
                        
                                
                            
                         
                           
                       
                               
                           {{-- <div style="height:150px;width:120px;" >
                                <img class="img_item  ml-3" style="height:80px;width:80px;margin-top:30px;" src="{{asset('public/uploads/banner/'.$img->image)}}" alt="">
                                <!--margin-left:40px;-->
                            </div> --}}
                            
                        </a>
                      </div>
                       
                    </div>
                 @endforeach
                 
                  <!--<div class="col-lg-3 col-md-6 col-sm-6 col-12 mb-3">-->
                  <!--      <a class="itemss" href="https://courier.softcreation.tech/category/Food-xw5KV">-->
                  <!--         <img class="img_item" src="{{asset('public/assets/category_banner/choto1.png')}}" alt="">-->
                  <!--      </a>-->
                  <!--  </div>-->
                    
                    
                  <!--    <div class="col-lg-3 col-md-6 col-sm-6 col-12 mb-3">-->
                  <!--      <a class="itemss" href="https://courier.softcreation.tech/category/Food-xw5KV">-->
                  <!--         <img class="img_item" src="{{asset('public/assets/category_banner/choto2.jpg')}}" alt="">-->
                  <!--      </a>-->
                  <!--  </div>-->
                    
                    
                    
                  <!--   <div class="col-lg-3 col-md-6 col-sm-6 col-12 mb-3">-->
                  <!--      <a class="itemss" href="https://courier.softcreation.tech/category/Food-xw5KV">-->
                  <!--         <img class="img_item" src="{{asset('public/assets/category_banner/choto3.png')}}" alt="">-->
                  <!--      </a>-->
                  <!--  </div>-->
                    
                  
                    
                    
                     
                  <!--    <div class="col-lg-3 col-md-6 col-sm-6 col-12 mb-3">-->
                  <!--      <a class="itemss" href="https://courier.softcreation.tech/category/Food-xw5KV">-->
                  <!--         <img class="img_item" src="{{asset('public/assets/category_banner/choto4.jpg')}}" alt="">-->
                  <!--      </a>-->
                  <!--  </div>-->
                    
                    
                </div>
                </div>
                </div>
                
                <!--end catagory first row-->
                
                  <!--start catagory Second row-->
            
            <div class="">
                <div class="container">
                     
             <div class="row">
                 
                 
                   @php 
                 $banner = App\Models\AddBanner::skip(4)->take(0)->get();
                   @endphp
                
                  
                 @foreach($banner as $key => $img)
                  <div class="col-lg-3 col-md-6 col-sm-6 col-12 mb-3 bg-white">
                        <a class="itemss" href="{{$img->name}}">
                           <!--<img class="img_item" src="public/uploads/banner/{{$img->image}}" alt="">-->
                            <img class="img_item" src="{{asset('public/uploads/banner/'.$img->image)}}" alt="">
                        </a>
                    </div>
                 @endforeach
                 
                   <!--<div class="col-lg-3 col-md-6 col-sm-6 col-12 mb-3">-->
                   <!--     <a class="itemss" href="https://courier.softcreation.tech/category/Food-xw5KV">-->
                   <!--        <img class="img_item" src="{{asset('public/assets/category_banner/choto5.webp')}}" alt="">-->
                   <!--     </a>-->
                   <!-- </div>-->
                    
                    
                  
                   <!--  <div class="col-lg-3 col-md-6 col-sm-6 col-12 mb-3">-->
                   <!--     <a class="itemss" href="https://courier.softcreation.tech/category/Food-xw5KV">-->
                   <!--        <img class="img_item" src="{{asset('public/assets/category_banner/choto6.webp')}}" alt="">-->
                   <!--     </a>-->
                   <!-- </div>-->
                   <!--     <div class="col-lg-3 col-md-6 col-sm-6 col-12 mb-3">-->
                   <!--     <a class="itemss" href="https://courier.softcreation.tech/category/Food-xw5KV">-->
                   <!--        <img class="img_item" src="{{asset('public/assets/category_banner/choto7.jpg')}}" alt="">-->
                   <!--     </a>-->
                   <!-- </div>-->
                      
                   <!--   <div class="col-lg-3 col-md-6 col-sm-6 col-12 mb-3">-->
                   <!--     <a class="itemss" href="https://courier.softcreation.tech/category/Food-xw5KV">-->
                   <!--        <img class="img_item" src="{{asset('public/assets/category_banner/choto8.png')}}" alt="">-->
                   <!--     </a>-->
                   <!-- </div>-->
                      
                </div>
                </div>
                </div>
                
                <!--end catagory second row-->
                
                
                  <!--start catagory third row-->
            
          <div class="">
                <div class="container">
                     
             <div class="row">
                     @php 
                 $banner = App\Models\AddBanner::skip(8)->take(0)->get();
                   @endphp
                
                  
                 @foreach($banner as $key => $img)
                 <div class="col-lg-3 col-md-6 col-sm-6 col-12 mb-3 bg-white" >
                  <a class="itemss" href="{{$img->name}}">
                           <!--<img class="img_item" src="public/uploads/banner/{{$img->image}}" alt="">-->
                            <img class="img_item" src="{{asset('public/uploads/banner/'.$img->image)}}" alt="">
                        </a>
                </div>
                 @endforeach
                    
          <!--          <div class="col-lg-3 col-md-6 col-sm-6 col-12 mb-3">-->
          <!--              <a class="itemss" href="https://courier.softcreation.tech/category/Food-xw5KV">-->
          <!--                 <img class="img_item" src="{{asset('public/assets/img/Category9.jpg')}}" alt="">-->
          <!--              </a>-->
          <!--          </div>-->
          <!--           <div class="col-lg-3 col-md-6 col-sm-6 col-12 mb-3">-->
          <!--              <a class="itemss" href="https://courier.softcreation.tech/category/Food-xw5KV">-->
          <!--                 <img class="img_item" src="{{asset('public/assets/img/Category10.jpg')}}" alt="">-->
          <!--              </a>-->
          <!--          </div>-->
          <!--              <div class="col-lg-3 col-md-6 col-sm-6 col-12 mb-3">-->
          <!--              <a class="itemss" href="https://courier.softcreation.tech/category/Food-xw5KV">-->
          <!--                 <img class="img_item" src="{{asset('public/assets/img/Category11.jpg')}}" alt="">-->
          <!--              </a>-->
          <!--          </div>-->
          <!--             <div class="col-lg-3 col-md-6 col-sm-6 col-12 mb-3">-->
          <!--              <a class="itemss" href="https://courier.softcreation.tech/category/Food-xw5KV">-->
          <!--                 <img class="img_item" src="{{asset('public/assets/img/Category12.jpg')}}" alt="">-->
          <!--              </a>-->
          <!--          </div>-->
                    
                    
                    
                </div>
                </div>
                </div>
                 
                <!--end catagory third row-->
                
                
  <!--<div class="mb-4">-->
        
  <!--      <div class="container">-->
            
  <!--              {{-- Banner Section 2 --}}-->
  <!--  @if (get_setting('home_banner2_images') != null)-->
  <!--  <div class="mb-4">-->
  <!--      <div class="container">-->
  <!--          <div class="row gutters-10">-->
  <!--              @php $banner_2_imags = json_decode(get_setting('home_banner2_images')); @endphp-->
  <!--              @foreach ($banner_2_imags as $key => $value)-->
  <!--                  <div class="col-xl col-md-6 col-12 mb-3">-->
  <!--                      <div class="mb-3 mb-lg-0">-->
  <!--                          <a href="{{ json_decode(get_setting('home_banner2_links'), true)[$key] }}" class="d-block text-reset">-->
  <!--                              <img src="{{ static_asset('assets/img/placeholder-rect.jpg') }}" data-src="{{ uploaded_asset($banner_2_imags[$key]) }}" alt="{{ env('APP_NAME') }} promo" class="img-fluid lazyload w-100">-->
  <!--                          </a>-->
  <!--                      </div>-->
  <!--                  </div>-->
  <!--              @endforeach-->
  <!--          </div>-->
  <!--      </div>-->
  <!--  </div>-->
  <!--  @endif-->
            
  <!--      </div>-->
        
  <!--  </div>  -->
                
                
      
      
      
      
      
      
      
      
      
      
      
       <!--  || Home Slider Start || -->  
        

   
    
              
            
                
    
                
                  {{-- Flash Deal --}}
                  
                 
   @php
        $flash_deal = \App\Models\FlashDeal::where('status', 1)->where('featured', 1)->first();
    @endphp
    @if($flash_deal != null && strtotime(date('Y-m-d H:i:s')) >= $flash_deal->start_date && strtotime(date('Y-m-d H:i:s')) <= $flash_deal->end_date)
    <section class="mb-4">
        <div class="container">
            <div class="px-2 py-4 px-md-4 py-md-3 bg-white shadow-sm rounded">

                <div class="d-flex flex-wrap mb-3 align-items-baseline border-bottom">
                    <h3 class="h5 fw-700 mb-0">
                        <span class="border-bottom border-primary border-width-2 pb-3 d-inline-block">{{ translate('Flash Sale') }}</span>
                    </h3>
                    <div class="aiz-count-down ml-auto ml-lg-3 align-items-center" data-date="{{ date('Y/m/d H:i:s', $flash_deal->end_date) }}"></div>
                    <a href="{{ route('flash-deal-details', $flash_deal->slug) }}" class="ml-auto mr-0 btn btn-primary btn-sm shadow-md w-100 w-md-auto">{{ translate('View More') }}</a>
                </div>

                <div class="aiz-carousel gutters-10 half-outside-arrow" data-items="6" data-xl-items="5" data-lg-items="5"  data-md-items="5" data-sm-items="2" data-xs-items="2" data-arrows='true'>
                    @foreach ($flash_deal->flash_deal_products->take(20) as $key => $flash_deal_product)
                        @php
                            $product = \App\Models\Product::find($flash_deal_product->product_id);
                        @endphp
                        @if ($product != null && $product->published != 0)
                            <div class="carousel-box">
                                @include('frontend.partials.product_box_1',['product' => $product])
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    @endif
    
    
    
                
        

 {{-- Category wise Products --}}
    <div id="section_home_skb_world">

    </div>
    
    
    
    
    
    
     {{-- Ad Store  Banner 2 --}}
     
        <div class="mb-2"> 
            <div class="container ">
                <div class="rounded">
                            <div class="d-flex mb-2 align-items-baseline border-bottom">
                                <h3 class="h5 fw-700 mb-0">
                                    <span class="fs-sm-14-title pb-lg-1 pb-sm-1 pb-xs-1 d-inline-block border-bottom border-primary border-width-2" style="font-family: 'Roboto', sans-serif;border-color: #572c84 !important;"> {{ $locale == 'en' ? 'Ad Store' : ' এড স্টোর  ' }}  </span>
                                    <!--{{ translate('Classified Ads') }}-->
                                </h3>
                            </div>
                    <div class="row">
                      <!--<div class="col-lg-2"></div>-->
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="aiz-carousel dots-inside-bottom mobile-img-auto-height" data-arrows="false" data-dots="true" data-autoplay="true" data-fade="true" data-speed="1000" style="box-shadow: 0 4px 6px -3px #9c9c9c; border-radius: 3px;">
                        <!--<div class="aiz-carousel dots-inside-bottom mobile-img-auto-height" data-arrows="false" data-dots="true" data-autoplay="true" data-infinite="true" style="border:1px solid #4682B4;border-radius: 10px;">-->
                       @php  $slider_images = Cache::rememberForever('sliders-adstore', function(){
            return \App\Models\AddBannerSlider::where('approved_by_admin',1)
                                                ->where('package_name','bronze')
                                                ->get();
        }); @endphp
                            @foreach ($slider_images as $key => $value)
                                <div class="carousel-box" style="width: 100%; display: inline-block;">
                                    <a href="#" class="d-block">
                                                        <img
                                                           class="d-block mw-100 img-fluid shadow-sm overflow-hidden mobile-img-height"
                                                            src="{{ uploaded_asset($value->image) }}"
                                                            data-src=""
                                                            alt=""
                                                            onerror="this.onerror=null;this.src='{{ static_asset('assets/img/l2.jpg') }}';"
                                                        >
                                                    </a>
                                </div>
                            @endforeach
                        </div>             
                </div>
            </div>
        </div>
    </div> 
    
    
    
    
    



       <section class="mb-lg-4 mb-xs-2 mt-sm-5 mt-xs-5 mt-lg-4">
            <div class="container">
                <div class="rounded" style="background-color: transparent;box-shadow: 0 4px 6px -3px #9c9c9c;border-radius: 3px;">
                    <div class="mb-xs-2 mb-sm-2 mt-sm-2 mt-xs-2 just-for-you-banner">
                          <img class="image shadow-sm" src="{{ static_asset('assets/img/just_for_you.jpg') }}" alt="" width="100%">
                    </div>
                </div>  
            </div>
    </section> 


    

 {{-- Category wise Products --}}
    <div id="section_home_categories">

    </div>
    
    

 

    
    
            
            
            <!-- Category wise product Ends -->
         
         
         
       
            
            
  
    <!--    <div class="mb-4">-->
        
    <!--            <div class="container">-->
    <!--                <h3 class="mb-4 mt-3" style="text-align:center;">Why People <span> <img style="width:32px; height:32px;" src="{{asset('public/assets/img/heart.png')}}"/></span>  XYZ</h3>-->
    <!--                <div class="row">-->
                     
    <!--                <div class="col-lg-12">-->
    <!--                {{-- Banner Section 2 --}}-->
    <!--@if (get_setting('home_banner3_images') != null)-->
    <!--<div class="mb-4">-->
    <!--    <div class="container">-->
    <!--        <div class="row gutters-10">-->
    <!--            @php $banner_3_imags = json_decode(get_setting('home_banner3_images')); @endphp-->
    <!--            @foreach ($banner_3_imags as $key => $value)-->
    <!--                <div class="col-xl col-md col-sm">-->
    <!--                    <div class="mb-3 mb-lg-0">-->
    <!--                        <a href="{{ json_decode(get_setting('home_banner3_links'), true)[$key] }}" class="d-block text-reset">-->
    <!--                            <img src="{{ static_asset('assets/img/placeholder-rect.jpg') }}" data-src="{{ uploaded_asset($banner_3_imags[$key]) }}" alt="{{ env('APP_NAME') }} promo" class="img-fluid lazyload w-100">-->
    <!--                        </a>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            @endforeach-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</div>-->
    <!--@endif-->
                    
    <!--            </div>-->
             
    <!--        </div>-->
    <!--        </div>-->
    <!--        </div> -->
        
    
             
         {{--   
            <div class="mb-4">
                <div class="container">
                     <h3 class="mb-4 mt-3" style="text-align:center;">Our Satisfying Customers</h3>
                    <div class="row">
                   
                      <div class="col-lg-2"></div>
                       <div class="col-lg-8">
                   
                       
                        </div>
                        
                          <div class="col-lg-2"></div>
                 
                </div>
            </div>
            </div> 
            --}}
           
           
       {{--  
       <div class="mb-4 mt-3">
                <div class="container">
                    
                    <div class="row">
                        <div class="col-lg-12 mb-3">
                            
                       <img class="bannar2" src="{{asset('public/assets/img/m7.jpg')}}"/>
                        </div>
                    </div>
                    
                </div>
                </div> 
          --}}      
        
    
{{--
     <div class="mb-4 mt-3">
                <div class="container">
                    
                    <div class="row">
                        <div class="col-lg-12 mb-3">
                            
                       <img class="bannar3" src="{{asset('public/assets/img/nagarhatbanner.jpg')}}"/>
                        </div>
                    </div>
                    
                </div>
                </div> 
     --}}           
          
                
           {{--    
           <div class="mb-4">
                    <div class="container">
                        
                  
                            
                            
                             @if (count($featured_categories) > 0)
                        <ul class="list-unstyled mb-0 row gutters-5">
                            @foreach ($featured_categories as $key => $category)
                                <li class="minw-0 col-4 col-md mt-3">
                                    <a href="{{ route('products.category', $category->slug) }}" class="d-block rounded bg-white p-2 text-reset shadow-sm">
                                        <img
                                            src="{{ static_asset('assets/img/placeholder.jpg') }}"
                                            data-src="{{ uploaded_asset($category->banner) }}"
                                            alt="{{ $category->getTranslation('name') }}"
                                            class="lazyload img-fit"
                                            height="78"
                                            onerror="this.onerror=null;this.src='{{ static_asset('assets/img/placeholder-rect.jpg') }}';"
                                        >
                                        <div class="text-truncate fs-12 fw-600 mt-2 opacity-70">{{ $category->getTranslation('name') }}</div>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    @endif
 

                        
                    </div>
                </div> 
                --}}
    


   
    
    
 
    
    

    
   <!--    {{-- Category wise Products --}}-->
   <!--<div id="section_home_categories">-->

   <!-- </div>  -->

    <!--{{--All Products --}}-->
    <!--<div id="section_featured">-->

    <!--</div>-->
    
    

   

     {{-- Auction Product --}} 
    @if(addon_is_activated('auction'))
        <div id="auction_products">

        </div>
    @endif
    
   




    <!--shop now section-->
    
  
 

    {{-- Top 10 categories and Brands --}}
  
    <section  class="mb-lg-2 mb-sm-2 mb-xs-2 mt-sm-2 mt-xs-2">
      
                   <div class="container " >
                       <div class="rounded">
                            <div class="d-flex mb-lg-3 mb-sm-2 mb-xs-2 align-items-baseline border-bottom">
                                <h3 class="h5 fw-700 mb-0">
                                    <span class="border-width-2 d-inline-block fs-sm-14-title border-bottom border-primary border-width-2 pb-lg-2 pb-sm-1 pb-xs-1" style="border-color: #572c84 !important;">  {{ $locale == 'en' ? ' Our Partners' : ' আমাদের পার্টনার' }}  </span>
                                   
                                    
                                </h3>
                            </div>
                           <div class="aiz-carousel gutters-10 half-outside-arrow" data-ride="carousel" data-items="6"  data-xl-items="5" data-lg-items="4"  data-md-items="3" data-sm-items="2" data-xs-items="2" data-autoplay="true" data-arrows="true" autoplaySpped="2000" data-infinite="true">
                                   @foreach($partners as $partner)
                                   <div class="carousel-box">
                                        <div class="aiz-card-box border border-light rounded hov-shadow-sm my-2 has-transition">
                                            <div class="position-relative">
                                                <a href="" class="d-block d-flex justify-content-between">
                                                    <img
                                                        class="img-fit lazyload mx-auto h-md-165px" 
                                                        src="{{ uploaded_asset($partner->image) }}" style="background-color: #fff;"
                                                        data-src=""
                                                        alt=""
                                                        onerror="this.onerror=null;this.src='{{ static_asset('assets/img/logo-1.png') }}';"
                                                    >
                                                </a>
                                               
                                            </div>
                                       </div>
                                   </div>
                                   @endforeach
                                   
                                   
                               
                           </div>
                       </div>
                   </div>
               </section>
    
    
    
    
    
    <!--@if (get_setting('top10_categories') != null || get_setting('top10_brands') != null)-->
    <!--<section class="mb-4">-->
    <!--    <div class="container">-->
    <!--        <div class="row gutters-10">-->
    <!--            @if (get_setting('top10_categories') != null)-->
    <!--                <div class="col-lg-6">-->
    <!--                    <div class="d-flex mb-3 align-items-baseline border-bottom">-->
    <!--                        <h3 class="h5 fw-700 mb-0">-->
    <!--                            <span class="border-bottom border-primary border-width-2 pb-3 d-inline-block">{{ translate('Top 10 Categories') }}</span>-->
    <!--                        </h3>-->
    <!--                        <a href="{{ route('categories.all') }}" class="ml-auto mr-0 btn btn-primary btn-sm shadow-md">{{ translate('View All Categories') }}</a>-->
    <!--                    </div>-->
    <!--                    <div class="row gutters-5">-->
    <!--                        @php $top10_categories = json_decode(get_setting('top10_categories')); @endphp-->
    <!--                        @foreach ($top10_categories as $key => $value)-->
    <!--                            @php $category = \App\Models\Category::find($value); @endphp-->
    <!--                            @if ($category != null)-->
    <!--                                <div class="col-sm-6">-->
    <!--                                    <a href="{{ route('products.category', $category->slug) }}" class="bg-white border d-block text-reset rounded p-2 hov-shadow-md mb-2">-->
    <!--                                        <div class="row align-items-center no-gutters">-->
    <!--                                            <div class="col-3 text-center">-->
    <!--                                                <img-->
    <!--                                                    src="{{ static_asset('assets/img/placeholder.jpg') }}"-->
    <!--                                                    data-src="{{ uploaded_asset($category->banner) }}"-->
    <!--                                                    alt="{{ $category->getTranslation('name') }}"-->
    <!--                                                    class="img-fluid img lazyload h-60px"-->
    <!--                                                    onerror="this.onerror=null;this.src='{{ static_asset('assets/img/placeholder.jpg') }}';"-->
    <!--                                                >-->
    <!--                                            </div>-->
    <!--                                            <div class="col-7">-->
    <!--                                                <div class="text-truncat-2 pl-3 fs-14 fw-600 text-left">{{ $category->getTranslation('name') }}</div>-->
    <!--                                            </div>-->
    <!--                                            <div class="col-2 text-center">-->
    <!--                                                <i class="la la-angle-right text-primary"></i>-->
    <!--                                            </div>-->
    <!--                                        </div>-->
    <!--                                    </a>-->
    <!--                                </div>-->
    <!--                            @endif-->
    <!--                        @endforeach-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            @endif-->
    <!--             @if (get_setting('top10_brands') != null)-->
    <!--                        <div class="col-lg-12">-->
    <!--                            <div class="d-flex mb-3 align-items-baseline border-bottom">-->
    <!--                                <h3 class="h5 fw-700 mb-0">-->
    <!--                                    <span-->
    <!--                                        class="border-bottom border-primary border-width-2 pb-3 d-inline-block">{{ translate('Our Partners') }}</span>-->
    <!--                                </h3>-->
    <!--                                {{-- <a href="{{ route('brands.all') }}"-->
    <!--                                    class="ml-auto mr-0 btn btn-primary btn-sm shadow-md">{{ translate('View All Brands') }}</a> --}}-->
    <!--                            </div>-->
    <!--                            <div class="brand-logos row">-->
    <!--                                {{-- @php $top10_brands = json_decode(get_setting('top10_brands')); @endphp --}}-->
    <!--                                @foreach (\App\Models\Brand::all() as  $brand)-->
    <!--                                    {{-- @php $brand = \App\Models\Brand::find($value); @endphp --}}-->
    <!--                                    @if ($brand != null)-->
    <!--                                        <div class="col-sm-2">-->
    <!--                                            <a href="{{ route('products.brand', $brand->slug) }}"-->
    <!--                                                class="d-block text-reset rounded hov-shadow-md mb-2" style="width: 120px">-->

    <!--                                                {{-- <div class="row align-items-center no-gutters"> --}}-->
    <!--                                                    {{-- <div class="col-4 text-center"> --}}-->
    <!--                                                        <img src="{{ asset('uploads/all/brand3.png') }}"-->
    <!--                                                        {{-- <img src="{{ asset('assets/img/placeholder.jpg') }}" --}}-->
    <!--                                                            data-src="{{ uploaded_asset($brand->logo) }}"-->
    <!--                                                            alt="{{ $brand->getTranslation('name') }}"-->
    <!--                                                            class="img-fluid img lazyload h-120px"-->
    <!--                                                            onerror="this.onerror=null;this.src='{{ asset('assets/img/placeholder.jpg') }}';">-->
    <!--                                                    {{-- </div> --}}-->
    <!--                                                    {{-- <div class="col-6">-->
    <!--                                                        <div class="text-truncate-2 pl-3 fs-14 fw-600 text-left">-->
    <!--                                                            {{ $brand->getTranslation('name') }}</div>-->
    <!--                                                    </div>-->
    <!--                                                    <div class="col-2 text-center">-->
    <!--                                                        <i class="la la-angle-right text-primary"></i>-->
    <!--                                                    </div> --}}-->
    <!--                                                {{-- </div> --}}-->
    <!--                                            </a>-->
    <!--                                        </div>-->
    <!--                                    @endif-->
    <!--                                @endforeach-->
    <!--                            </div>-->
                               
    <!--                        </div>-->
    <!--                    @endif-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</section>-->
    <!--@endif-->

@endsection

@section('script')
    <script>
        $(document).ready(function(){
            $.post('{{ route('home.section.featured') }}', {_token:'{{ csrf_token() }}'}, function(data){
                $('#section_featured').html(data);
                AIZ.plugins.slickCarousel();
            });
            $.post('{{ route('home.section.best_selling') }}', {_token:'{{ csrf_token() }}'}, function(data){
                $('#section_best_selling').html(data);
                AIZ.plugins.slickCarousel();
            });
            $.post('{{ route('home.section.auction_products') }}', {_token:'{{ csrf_token() }}'}, function(data){
                $('#auction_products').html(data);
                AIZ.plugins.slickCarousel();
            });
            $.post('{{ route('home.section.home_categories') }}', {_token:'{{ csrf_token() }}'}, function(data){
                $('#section_home_categories').html(data);
                AIZ.plugins.slickCarousel();
            });
            
             $.post('{{ route('home.section.home_skb_world') }}', {_token:'{{ csrf_token() }}'}, function(data){
                $('#section_home_skb_world').html(data);
                AIZ.plugins.slickCarousel();
            });
            
            $.post('{{ route('home.section.featuredss') }}', {_token:'{{ csrf_token() }}'}, function(data){
                $('#section_best_sellers').html(data);
                AIZ.plugins.slickCarousel();
            });
            
              $.post('{{ route('home.section.best_sellers') }}', {_token:'{{ csrf_token() }}'}, function(data){
                $('#section_feature_product').html(data);
                AIZ.plugins.slickCarousel();
            });
        });
    </script>
@endsection
