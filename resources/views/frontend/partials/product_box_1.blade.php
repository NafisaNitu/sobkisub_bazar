<style>
   /* .img-fit{
        max-height: 100%;
        width: 100%;
    }*/
    
    .aiz-p-hov-icon a:hover {
        background: #572c84;
    }
    
     @media only screen and (min-width:1024px) and (max-width:1440px){

        .fs-sm-text {
            font-size: 13px !important;
        }
     } 
     
      @media only screen and (min-width:768px) and (max-width:991px){
        .fs-sm-text {
            font-size: 13px !important;
        }
        
     }   
     
     @media only screen and (min-width:320px) and (max-width:375px){
        .fs-sm-text {
            font-size: 11px !important;
        }
        
     } 
     
    
</style>



<div class="aiz-card-box border border-light rounded hov-shadow-md mt-1 mb-2 has-transition bg-white">
    <div class="" style="height: 95%;">
    @if(discount_in_percentage($product) > 0)
        <span class="badge-custom">{{ translate('OFF') }}<span class="box ml-1 mr-0">&nbsp;{{discount_in_percentage($product)}}%</span></span>
    @endif
    <div class="position-relative">
       
        <a href="{{ route('product', $product->slug) }}" class="d-block">
            <img
             class="img-fluid lazyload mx-auto h-140px h-md-210px hov-shadow-sm" width="100%"
                src="{{ static_asset('assets/img/placeholder.jpg') }}"
                data-src="{{ uploaded_asset($product->thumbnail_img) }}"
                alt="{{  $product->getTranslation('name')  }}"
                onerror="this.onerror=null;this.src='{{ static_asset('assets/img/placeholder.jpg') }}';"
            >
        </a>
      
        
        @if ($product->wholesale_product)
            <span class="absolute-bottom-left fs-11 text-white fw-600 px-2 lh-1-8" style="background-color: #455a64">
                {{ translate('Wholesale') }}
            </span>
        @endif
        <div class="absolute-top-right aiz-p-hov-icon">
            <a href="javascript:void(0)" onclick="addToWishList({{ $product->id }})" data-toggle="tooltip" data-title="{{ translate('Add to wishlist') }}" data-placement="left">
                <i class="la la-heart-o"></i>
            </a>
            <a href="javascript:void(0)" onclick="addToCompare({{ $product->id }})" data-toggle="tooltip" data-title="{{ translate('Add to compare') }}" data-placement="left">
                <i class="las la-sync"></i>
            </a>
            <a href="javascript:void(0)" onclick="showAddToCartModal({{ $product->id }})" data-toggle="tooltip" data-title="{{ translate('Add to cart') }}" data-placement="left">
                <i class="las la-shopping-cart"></i>
            </a>
        </div>
    </div>
    <div class="p-md-3 p-sm-2 py-2 px-2 text-left">
        <div class="fs-14 fs-sm-text">
            @if(home_base_price($product) != home_discounted_base_price($product))
                <del class="fw-600 opacity-50 mr-1">{{ home_base_price($product) }}</del>
                <!--<br/>-->
            @endif
            <span class="fw-700" style="color: #572c84;">{{ home_discounted_base_price($product) }}</span>
        </div>
        
        <div class="rating rating-sm mt-1">
            {{ renderStarRating($product->rating) }}
        </div>
        <h3 class="fw-600 fs-13 fs-sm-text text-truncate-2 lh-1-4 mb-0 h-35px">
            <a href="{{ route('product', $product->slug) }}" class="d-block text-reset">{{  $product->getTranslation('name')  }}</a>
        </h3>
        @if (addon_is_activated('club_point'))
            <div class="rounded px-2 mt-2 bg-soft-primary border-soft-primary border">
                {{ translate('Club Point') }}:
                <span class="fw-700 float-right">{{ $product->earn_point }}</span>
            </div>
        @endif
    </div>
</div>
</div>
