<a href="{{ route('wishlists.index') }}" class="d-flex align-items-center text-reset">
    <i class="la la-heart-o la-2x opacity-90" style="color: #000 !important;"></i>
    <span class="flex-grow-1 mb-3 ml-1">
        @if(Auth::check())
            <span class="badge badge-inline badge-pill"  style="background-color:#ff6a00;color: #fff; ">{{ count(Auth::user()->wishlists)}}</span>
        @else
            <span class="badge badge-primary badge-inline badge-pill " style="background-color:#ff6a00;color: #fff;">0</span>

        @endif
        <!--<span class="text-white nav-box-text d-none d-xl-block opacity-100">{{translate('Wishlist')}}</span>-->
    </span>
</a>

