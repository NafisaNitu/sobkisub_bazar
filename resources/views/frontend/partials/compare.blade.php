<a href="{{ route('compare') }}" class="d-flex align-items-center text-reset">
    <i class="fas fa-exchange-alt la-2x opacity-70  under-header-icon"  style="color: #000 !important;"></i> 
  <span class="flex-grow-1 mb-3 ml-1">
        @if(Session::has('compare'))
            <span class="badge badge-primary badge-inline badge-pill"  style="color: #fff !important;background-color:#ff6a00">{{ count(Session::get('compare'))}}</span>
        @else
            <span class="badge badge-primary badge-inline badge-pill " style="background-color:#ff6a00">0</span>
        @endif
        <!--<span class="text-white nav-box-text d-none d-xl-block opacity-100">{{translate('Compare')}}</span>-->
    </span>
</a>

                          