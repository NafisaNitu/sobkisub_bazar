@extends('frontend.layouts.user_panel')

@section('panel_content')
    <div class="aiz-titlebar mt-2 mb-4">
        <div class="row align-items-center">
            <div class="col-md-6">
                <h1 class="h3">{{ translate('Return Product') }}</h1>
            </div>
        </div>
    </div>
    @include('message.message')
    <form class="" action="{{ route('return_product.store', $return_details->id) }}" method="POST"
        enctype="multipart/form-data" id="choice_form">
        @csrf
        <input type="hidden" name="return_product_id" value="{{ $return_details->id }}">
        <input type="hidden" name="customer_id" value="{{ $return_details->user_id }}">
        <input type="hidden" name="seller_id" value="{{ $return_details->seller_id }}">
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0 h6">Name: {{ Auth::user()->name }}</h5>
            </div>
            <div class="card-body">
                <div class="form-group row">
                    <label class="col-md-2 col-from-label">{{ translate('Order Code') }} <span
                            class="text-danger">*</span></label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" name="code" value="{{ $return_details->code }}"
                            placeholder="{{ translate('Order Code') }}" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-2 col-from-label">{{ translate('Delivery Status') }} <span
                            class="text-danger">*</span></label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" name="delivery_status"
                            value="{{ $return_details->delivery_status }}"
                            placeholder="{{ translate('Delivery Status') }}" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-2 col-from-label">{{ translate('Payment Type') }} <span
                            class="text-danger">*</span></label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" name="payment_type"
                            value="{{ $return_details->payment_type == 'cash_on_delivery' ? 'Cash On Delivery' : 'Online Payment' }}"
                            placeholder="{{ translate('Payment Type') }}" readonly>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-md-2 col-from-label">{{ translate('Product Quantity') }} <span
                            class="text-danger">*</span></label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" name="quantity"
                            placeholder="{{ translate('Product Quantity') }}" value="{{ old('product_quantity') ?? '' }}"
                            required>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-2 col-from-label">{{ translate('Customer Mobile Number') }} <span
                            class="text-danger">*</span></label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" name="mobile_number"
                            placeholder="{{ translate('Mobile Number') }}" max="11" min="11"
                            value="{{ old('mobile_number') ?? '' }}" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-2 col-from-label">{{ translate('Return Money ') }} <span
                            class="text-danger">*</span></label>
                    <div class="col-md-10">
                        <select class="form-control selectpicker" id="return_money" name="return_money" required>
                            <option value="">{{ translate('Select Bkas Or Nagad or Rocket') }}</option>
                            <option value="bkas" {{ old('return_money') == 'bkas' ? 'selected' : '' }}>
                                {{ translate('Bkash') }}</option>
                            <option value="nagad" {{ old('return_money') == 'nagad' ? 'selected' : '' }}>
                                {{ translate('Nagad') }}</option>
                            <option value="rocket" {{ old('return_money') == 'rocket' ? 'selected' : '' }}>
                                {{ translate('Rocket') }}</option>
                        </select>
                    </div>
                </div>
                <div style="display:none" id="return_money_num">
                    <div class="form-group row">
                        <label class="col-md-2 col-from-label">{{ translate('Bkas or Nagad or Rocaket Number') }} <span
                                class="text-danger">*</span></label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="return_money_number"
                                placeholder="{{ translate('Personal Number') }}" max="11" min="11"
                                value="{{ old('return_money_number') ?? '' }}" required>
                            <span class="text-danger">You have to use personal number other wise you don't have return money
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0 h6">{{ translate('Images') }}</h5>
            </div>
            <div class="card-body">
                <div class="form-group row">
                    <label class="col-md-3 col-form-label" for="signinSrEmail">{{ translate('Upload Images') }}</label>
                    <div class="col-md-8">
                        <div class="input-group" data-toggle="aizuploader" data-type="image" data-multiple="true">
                            <div class="input-group-prepend">
                                <div class="input-group-text bg-soft-secondary font-weight-medium">
                                    {{ translate('Browse') }}</div>
                            </div>
                            <div class="form-control file-amount">{{ translate('Choose File') }}</div>
                            <input type="hidden" name="image" class="selected-files">
                        </div>
                        <div class="file-preview box sm">
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0 h6">{{ translate('Videos') }}</h5>
            </div>
            <div class="card-body">
                <div class="form-group row">
                    <label class="col-md-2 col-from-label">{{ translate('Uplolad Video') }}</label>
                    <div class="col-md-10">
                        <input type="file" name="video" class="form-control">
                    </div>
                </div>

            </div>
        </div>


        <div class="card">
            <div class="card-header">
                <h5 class="mb-0 h6">{{ translate('Cause Description') }} <span class="text-danger">*</span></h5>
            </div>
            <div class="card-body">
                <div class="form-group row">
                    <label class="col-md-2 col-from-label">{{ translate('Cause Description') }}</label>
                    <div class="col-md-10">
                        <div class="mb-3">
                            <textarea class="aiz-text-editor" name="cause_description" required>{{ old('cause_description') ?? ''}}</textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @php
          $video = \App\Models\ReturnProduct::where('id',3)->first();
         
          
        @endphp
       <div>
        <video  src="{{URL::asset("public/videos/$video->video")}}" controls>
    </video>
       </div>
        <div class="mar-all text-right">
            <button type="submit" name="button"
                class="btn btn-primary">{{ translate('Submit return Product') }}</button>
        </div>
    </form>
@endsection

@section('script')
    <script>
        $("#return_money").on('change', function() {
            var return_value = $("#return_money").val();
            if (return_value != '') {
                $("#return_money_num").css("display", "block");
            } else {
                $("#return_money_num").css("display", "none");
            }
        })
    </script>
@endsection
