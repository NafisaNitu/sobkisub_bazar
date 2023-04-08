@extends('backend.layouts.app')

@section('content')
    <div class="aiz-titlebar mt-2 mb-4">
        <div class="row align-items-center">
            <div class="col-md-6">
                <h1 class="h3">{{ translate('Add Your Partner') }}</h1>
            </div>
        </div>
    </div>
    @include('message.message')
    <form class="" action="{{ route('partner.store') }}" method="POST" enctype="multipart/form-data"
        id="choice_form">
        <div class="row gutters-5">
            <div class="col-lg-8">
                @csrf
               
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0 h6">{{ translate('Partner Information') }}</h5>
                    </div>
                    <div class="card-body">
                        <div class="form-group row">
                            <label class="col-md-3 col-from-label">{{ translate('Partner name') }}</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" name="name"
                                    placeholder="{{ translate('Partner name') }}" required>
                            </div>
                        </div>
                     
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0 h6">{{ translate('Partner Images') }}</h5>
                    </div>
                    <div class="card-body">
                       
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label"
                                for="signinSrEmail">{{ translate('Partner Images') }}</label>
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

            </div>


            <div class="col-12">
                <div class="mar-all text-left">
                    <button type="submit" name="button" value="publish"
                        class="btn btn-primary">{{ translate('Upload Partner') }}</button>
                </div>
            </div>
        </div>

    </form>
@endsection

@section('script')
@endsection
