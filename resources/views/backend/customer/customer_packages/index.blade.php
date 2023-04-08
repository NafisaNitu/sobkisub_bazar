@extends('backend.layouts.app')

@section('content')
    <div class="aiz-titlebar text-left mt-2 mb-3">
        <div class="row align-items-center">
            <div class="col-md-6">
                <h1 class="h3">{{ translate('All Classifies Packages') }}</h1>
            </div>
            <div class="col-md-6 text-md-right">
                <a href="{{ route('customer_packages.create') }}" class="btn btn-circle btn-info">
                    <span>{{ translate('Add New Package') }}</span>
                </a>
            </div>
        </div>
    </div>

    <div class="row">
        @foreach ($customer_packages as $key => $customer_package)
            <div class="col-lg-3 col-md-4 col-sm-12">
                <div class="card">
                    <div class="card-body text-center">
                        <img alt="{{ translate('Package Logo') }}" src="{{ uploaded_asset($customer_package->logo) }}"
                            class="mw-100 mx-auto mb-4" height="150px">
                        <p class="mb-3 h6 fw-600">{{ $customer_package->getTranslation('name') }}</p>
                        <p class="mb-3 h6 fw-600">{{ $customer_package->getTranslation('adPosition') }}</p>
                        <p class="mb-3 h6 fw-600">{{ $customer_package->getTranslation('imageSize') }}</p>

                        {{-- <p class="h4" id="amount">{{ single_price($customer_package->amount) }}</p> --}}
                        <p class="fs-15">{{ translate('Product Upload') }}:
                            <span class="text-bold">{{ $customer_package->product_upload }}</span>
                        </p>
                        <div class="mar-top">
                            <a href="{{ route('customer_packages.edit', ['id' => $customer_package->id, 'lang' => env('DEFAULT_LANGUAGE')]) }}"
                                class="btn btn-sm btn-info">{{ translate('Edit') }}</a>
                            <a href="#" data-href="{{ route('customer_packages.destroy', $customer_package->id) }}"
                                class="btn btn-sm btn-danger confirm-delete">{{ translate('Delete') }}</a>
                                <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#listModal-{{ $customer_package->id}}">
                                    {{ translate('Show List') }}
                                  </button>
                        </div>

                        <!-- Modal -->
                        <div class="modal fade" id="listModal-{{ $customer_package->id}}" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Price and Day List</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <table class="table table-striped table-bordered">
                                            <thead>
                                              <tr>
                                                <th scope="col">Days</th>
                                                <th scope="col">Price</th>
                                              </tr>
                                            </thead>
                                            <tbody>
                                              @foreach ($customer_package->customer_package_day_price as $item)
                                                  <tr>
                                                     <td>{{$item->days}}</td>
                                                     <td>{{$item->amount}}</td>
                                                  </tr>
                                              @endforeach
                                            </tbody>
                                          </table>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection

@section('modal')
    @include('modals.delete_modal')
@endsection

@section('script')
   
@endsection
