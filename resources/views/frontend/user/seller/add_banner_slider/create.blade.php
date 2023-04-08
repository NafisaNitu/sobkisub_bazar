@extends('frontend.layouts.user_panel')

@section('panel_content')
    <div class="aiz-titlebar mt-2 mb-4">
        <div class="row align-items-center">
            <div class="col-md-6">
                <h1 class="h3">{{ translate('Add Your Slider Ad') }}</h1>
            </div>
        </div>
    </div>
    @include('message.message')
    <form class="" action="{{ route('upload_ad_banner.store') }}" method="POST" enctype="multipart/form-data"
        id="choice_form">
        <div class="row gutters-5">
            <div class="col-lg-8">
                @csrf
                <input type="hidden" name="added_by" value="seller">
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0 h6">{{ translate('Slider Information') }}</h5>
                    </div>
                    <div class="card-body">
                        <div class="form-group row">
                            <label class="col-md-3 col-from-label">{{ translate('Slider Title') }}</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" name="title"
                                    placeholder="{{ translate('Slider Title') }}" required>
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label class="col-md-3 col-from-label">{{ translate('Button Text') }}</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" name="button_text"
                                    placeholder="{{ translate('Slider Title') }}" >
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-from-label">{{ translate('Button Link') }}</label>
                            <div class="col-md-8">
                                <input type="link" class="form-control" name="button_link"
                                    placeholder="{{ translate('If have no link, Please type #') }}" >
                            </div>
                        </div>
                      <!--<div class="form-group row">-->
                      <!--      <label class="col-md-3 col-from-label">{{ translate('Choose Banner Position') }}</label>-->
                      <!--      <div class="col-md-8">-->
                      <!--         <select name="is_paid" id="is_paid" class="form-control" required>-->
                      <!--             <option value="">Select Aany Option</option>-->
                      <!--             <option value="1">Paid</option>-->
                      <!--             <option value="0">Add Store(paid)</option>-->
                      <!--         </select>-->
                      <!--      </div>-->
                      <!--  </div>-->
                      <div class="form-group row">
                            <label class="col-md-3 col-from-label">{{ translate('Choose Package') }}</label>
                            <div class="col-md-8">
                                
                                  @foreach ($get_packages as $package)
                                  
                                    @php
                                       $day_amount = App\Models\CustomerPackgeDayTime::where('id',$package->customer_package_day_amount_id)->first();
                                       $day = $day_amount->days;
                                       $amount = $day_amount->amount;
                                    @endphp
                                    
                                           
                                           @if($package->remaining_uploads > 0)
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">
                                                        <input type="radio" name="buy_package_id"
                                                            aria-label="Radio button for following text input"
                                                            value="{{ $package->id }}">
                                                    </div>
                                                </div>
                                              <p class="form-control">Pacakage: {{$package->customer_package->name}},  Days : {{$day}} , Price: {{$amount}}</p>
                                            </div>
                                           @endif
                                       
                                    @endforeach
                                 
                            </div>
                        </div>
                        
                      
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0 h6">{{ translate('Slider Images') }}</h5>
                    </div>
                    <div class="card-body">
                        <!--<div class="form-group row">-->
                        <!--    <label class="col-md-3 col-form-label"-->
                        <!--        for="signinSrEmail">{{ translate('Gallery Images') }}</label>-->
                        <!--    <div class="col-md-8">-->
                        <!--        <div class="input-group" data-toggle="aizuploader" data-type="image" data-multiple="true">-->
                                   
                        <!--            <input type="file" name="image" class="form-control">-->
                        <!--        </div>-->
                        <!--        <div class="file-preview box sm">-->
                        <!--        </div>-->
                        <!--    </div>-->
                        <!--</div>-->
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label"
                                for="signinSrEmail">{{ translate('Slider Images') }}</label>
                            <div class="col-md-8">
                                <div class="input-group" data-toggle="aizuploader" data-type="image">
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

            </div>
            <div class="col-lg-4">
                 <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0 h6">{{ translate('Package Information') }}</h5>
                    </div>
                    <div class="card-body">
                    <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th scope="col">Pacakge Name</th>
                          <th scope="col">Days</th>
                          <th scope="col">Amount</th>
                          <th scope="col">Remaining Upload</th>
                        </tr>
                      </thead>
                      <tbody>
                       @foreach($get_packages as $package)
                         @php
                           $day_amount = App\Models\CustomerPackgeDayTime::where('id',$package->customer_package_day_amount_id)->first();
                           $day = $day_amount->days;
                           $amount = $day_amount->amount;
                         @endphp
                          @if($package->remaining_uploads > 0)
                            <tr>
                              <td>{{$package->customer_package->name}}</td>
                              <td>
                                  {{$day}}
                              </td>
                              <td>{{$amount}}</td>
                              <td>{{$package->remaining_uploads}}</td>
                          </tr>
                          @endif
                       @endforeach
                        
                      </tbody>
                    </table>
                    </div>
                    </div>
                </div>
            </div>

            <div class="col-12">
                <div class="mar-all text-left">
                    <button type="submit" name="button" value="publish"
                        class="btn btn-primary">{{ translate('Upload Slider') }}</button>
                </div>
            </div>
        </div>

    </form>
@endsection

@section('script')
@endsection
