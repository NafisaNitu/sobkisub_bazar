@extends('frontend.layouts.user_panel')

@section('panel_content')
    <div class="aiz-titlebar mt-2 mb-4">
        <div class="row align-items-center">
            <div class="col-md-6">
                <h1 class="h3">{{ translate('All Banner Slider') }}</h1>
            </div>
        </div>
    </div>

    <div class="row gutters-10 justify-content-center">

        <div class="col-md-4 mx-auto mb-3">
            <div class="bg-grad-1 text-white rounded-lg overflow-hidden">
              <span class="size-30px rounded-circle mx-auto bg-soft-primary d-flex align-items-center justify-content-center mt-3">
                  <i class="las la-upload la-2x text-white"></i>
              </span>
              <div class="px-3 pt-3 pb-3">
                  <div class="h4 fw-700 text-center">{{$count_upload_image}}</div>
                  <div class="opacity-50 text-center">Remaining Uploads</div>
              </div>
            </div>
        </div>
        <div class="col-md-4 mx-auto mb-3">
            <a href="{{ route('upload_ad_banner.create') }}">
                <div class="p-3 rounded mb-3 c-pointer text-center bg-white shadow-sm hov-shadow-lg has-transition">
                    <span
                        class="size-60px rounded-circle mx-auto bg-secondary d-flex align-items-center justify-content-center mb-3">
                        <i class="las la-plus la-3x text-white"></i>
                    </span>
                    <div class="fs-18 text-primary">{{ translate('Add New Slider Banner') }}</div>
                </div>
            </a>
        </div>
        <div class="col-md-4">
            <a href="{{ route('customer_packages_list_show') }}" class="text-center bg-white shadow-sm hov-shadow-lg text-center d-block p-3 rounded">
                   <img src="https://sobkisubazar.com/public/uploads/all/Ji1JVIGiqIYNfki5pNogpbEcFL4FBWAAvxAPnIsb.png" height="44" class="mw-100 mx-auto">
                   <span class="d-block sub-title mb-2">Buy Another Package</span>
                                <div class="btn btn-outline-primary py-1">
                                   {{translate('upgrade Package')}}
                                </div>
            </a>
             
        </div>

    </div>

    <div class="card">
        <div class="card-header row gutters-5">
            <div class="col">
                <h5 class="mb-md-0 h6">{{ translate('All Slider Banner') }}</h5>
            </div>
            {{-- <div class="col-md-3">
                <div class="input-group input-group-sm">
                    <form class="" action="" method="GET">
                        <input type="text" class="form-control" id="search" name="search" @isset($search) value="{{ $search }}" @endisset placeholder="{{ translate('Search product') }}">
                    </form>
                </div>
            </div> --}}
        </div>
        <div class="card-body">
            <table class="table aiz-table mb-0">
                <thead>
                    <tr>
                        <th>#</th>
                        <th data-breakpoints="md">{{ translate('Title') }}</th>
                        <th data-breakpoints="md">{{ translate('image') }}</th>
                        <th data-breakpoints="md">{{ translate('Button Text') }}</th>
                        <th data-breakpoints="md">{{ translate('Button Link') }}</th>
                        <th data-breakpoints="md">{{ translate('Add Store Or Paid') }}</th>
                        <th data-breakpoints="md">{{ translate('Options') }}</th>

                    </tr>
                </thead>

                <tbody>
                    @foreach ($sliders as $key => $slider)
                        <tr>
                            <td>{{ $key + 1 + ($sliders->currentPage() - 1) * $sliders->perPage() }}</td>
                            <td>{{ Str::limit($slider->title,30) }}</td>
                            <td class="text-center">
                                <img src="{{uploaded_asset($slider->image)}}" alt="{{$slider->title}}" width="82px" >
                            </td>
                            
                            <td>{{ $slider->button_text }}</td>
                            <td>
                                <a href="{{ $slider->button_link }}" target="_blunk">{{ Str::limit($slider->button_link,30) }}</a>
                            </td>
                            <td>
                                @if($slider->is_paid == 1)
                                   <span>Paid</span>
                                @else
                                 <span>Add Store</span>
                                @endif
                            </td>

                            <td class="">
                                <a class="btn btn-soft-info btn-icon btn-circle btn-sm"
                                    href="{{ route('upload_ad_banner.edit', $slider->id) }}"
                                    title="{{ translate('Edit') }}">
                                    <i class="las la-edit"></i>
                                </a>
                                <a href="#" class="btn btn-soft-danger btn-icon btn-circle btn-sm confirm-delete"
                                    data-href="{{ route('upload_ad_banner.destroy', $slider->id) }}"
                                    title="{{ translate('Delete') }}">
                                  
                                    <i class="las la-trash"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="aiz-pagination">
                {{ $sliders->links() }}
            </div>
        </div>
    </div>
@endsection

@section('modal')
    @include('modals.delete_modal')
@endsection

@section('script')
 
@endsection
