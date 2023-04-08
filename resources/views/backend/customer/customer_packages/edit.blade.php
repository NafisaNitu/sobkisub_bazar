@extends('backend.layouts.app')
@section('content')
    <div class="aiz-titlebar text-left mt-2 mb-3">
        <div class="align-items-center">
            <h1 class="h3">{{ translate('Update Package Information') }}</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-8 mx-auto">
            <div class="card">
                <div class="card-body p-0">
                    <ul class="nav nav-tabs nav-fill border-light">
                        @foreach (\App\Models\Language::all() as $key => $language)
                            <li class="nav-item">
                                <a class="nav-link text-reset @if ($language->code == $lang) active @else bg-soft-dark border-light border-left-0 @endif py-3"
                                    href="{{ route('customer_packages.edit', ['id' => $customer_package->id, 'lang' => $language->code]) }}">
                                    <img src="{{ static_asset('assets/img/flags/' . $language->code . '.png') }}" height="11"
                                        class="mr-1">
                                    <span>{{ $language->name }}</span>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                    <form class="p-4" action="{{ route('customer_packages.update', $customer_package->id) }}"
                        method="POST">
                        <input type="hidden" name="_method" value="PATCH">
                        <input type="hidden" name="lang" value="{{ $lang }}">
                        
                        @csrf
                        <div class="form-group row">
                            <label class="col-sm-3 col-from-label">{{ translate('Package Name') }} <i
                                    class="las la-language text-danger" title="{{ translate('Translatable') }}"></i></label>
                            <div class="col-sm-9">
                                <input type="text" placeholder="{{ translate('Name') }}" id="name" name="name"
                                    value="{{ $customer_package->getTranslation('name', $lang) }}" class="form-control"
                                    required>
                            </div>
                        </div>
                        
                         <div class="form-group row">
                            <label class="col-sm-3 col-from-label">{{ translate('Ad Position') }} <i
                                    class="las la-language text-danger" title="{{ translate('Translatable') }}"></i></label>
                            <div class="col-sm-9">
                                <input type="text" placeholder="{{ translate('Ad Position') }}" id="adPosition" name="adPosition"
                                    value="{{ $customer_package->getTranslation('adPosition', $lang) }}" class="form-control"
                                    required>
                            </div>
                        </div>
                        
                         <div class="form-group row">
                            <label class="col-sm-3 col-from-label">{{ translate('Uploaded Image Size') }} <i
                                    class="las la-language text-danger" title="{{ translate('Translatable') }}"></i></label>
                            <div class="col-sm-9">
                                <input type="text" placeholder="{{ translate('Uploaded Image Size') }}" id="imageSize" name="imageSize"
                                    value="{{ $customer_package->getTranslation('imageSize', $lang) }}" class="form-control"
                                    required>
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label class="col-sm-3 col-from-label">{{ translate('Product Upload') }}</label>
                            <div class="col-sm-9">
                                <input type="number" lang="en" min="0" step="1"
                                    placeholder="{{ translate('Product Upload') }}"
                                    value="{{ $customer_package->product_upload }}" id="product_upload"
                                    name="product_upload" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label"
                                for="signinSrEmail">{{ translate('Package logo') }}</label>
                            <div class="col-md-9">
                                <div class="input-group" data-toggle="aizuploader" data-type="image">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text bg-soft-secondary font-weight-medium">
                                            {{ translate('Browse') }}</div>
                                    </div>
                                    <div class="form-control file-amount">{{ translate('Choose File') }}</div>
                                    <input type="hidden" name="logo" value="{{ $customer_package->logo }}"
                                        class="selected-files">
                                </div>
                                <div class="file-preview box sm">
                                </div>
                            </div>
                        </div>
                        @foreach ($customer_package_day_amounts as $key=>$item)
                        <input type="hidden" name="ids[]" value="{{$item->id}}">
                            <div class="form-group row whole_extra_item_delete">
                                <label class="col-sm-3 col-from-label"
                                    for="name">{{ translate('Days And Ammount') }}</label>
                                <div class="col-sm-3">
                                    <input type="number" lang="en" placeholder="{{ translate('Days') }}"
                                        id="days" name="days[]" class="form-control" value="{{ $item->days }}"
                                        required>
                                </div>
                                <div class="col-sm-3">
                                    <input type="number" lang="en" placeholder="{{ translate('Amount') }}"
                                        id="amount" name="amount[]" class="form-control" value="{{ $item->amount }}"
                                        required>
                                </div>
                                <button class="btn btn-sm btn-success addeventmore mr-2">Add</button>
                                @if ($key != 0)
                                  <button class="btn btn-sm btn-danger removeeventmore">Delete</button>
                                @endif

                            </div>
                        @endforeach
                        <div id="amount_days">

                        </div>
                        <div class="form-group mb-0 text-right">
                            <button type="submit" class="btn btn-primary">{{ translate('Save') }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        var counter = 1;
        $(document).on("click", ".addeventmore", function() {
            var whole_extra_item_add = '';
            whole_extra_item_add += `
                <div class="whole_extra_item_delete">
                    <div class="form-group row" id="whole_extra_item_add">
    
                        <label class="col-sm-3 col-from-label" for="name">Days And Ammount</label>
                        <div class="col-sm-3">
                            <input type="text" lang="en" placeholder="Days" id="days" name="days[]" class="form-control" required>
                        </div>
                        <div class="col-sm-3">
                            <input type="text" lang="en" placeholder="Amount" id="amount" name="amount[]" class="form-control" required>
                        </div>
                        <button class="btn btn-sm btn-success addeventmore mr-1">Add</button>
                        <button class="btn btn-sm btn-danger removeeventmore">Delete</button>
     

                    </div>    
                </div>
                
                `;
            amount_days = $("#amount_days");
            amount_days.append(whole_extra_item_add);
            counter++;
        });

        $(document).on("click", ".removeeventmore", function(event) {
            event.preventDefault();
            var whole_extra_item_add = $("#whole_extra_item_add").html();
            $(this).closest(".whole_extra_item_delete").remove();
            counter -= 1;
        });
    </script>
@endsection
