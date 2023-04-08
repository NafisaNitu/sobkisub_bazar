@extends('backend.layouts.app')

@section('content')

<div class="row">
    <div class="col-lg-8 mx-auto">
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0 h6">{{translate('Banner Information')}}</h5>
            </div>
            <div class="card-body">
                <form class="form-horizontal" action="{{ route('banner.store') }}" method="POST" enctype="multipart/form-data">
                	@csrf
                	
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label">{{translate('Banner Name')}}</label>
                        
                        <div class="col-md-9">
                            <input type="text" placeholder="{{translate('name')}}" id="name" name="name" class="form-control" required>
                        </div>
                    </div>
                     <div class="form-group row">
                        <label class="col-md-3 col-form-label">{{translate('Banner Links')}}</label>
                        
                        <div class="col-md-9">
                            <input type="text" placeholder="{{translate('Banner link')}}"  name="link" class="form-control" required>
                        </div>
                    </div>
                   
                    
                    
                    
                   
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="signinSrEmail">{{translate('Banner')}} <small>({{ translate('200x200') }})</small></label>
                        <div class="col-md-9 mb-3">
                            <!--<div class="input-group" data-toggle="aizuploader" data-type="image">-->
                            <!--    <div class="input-group-prepend">-->
                            <!--        <div class="input-group-text bg-soft-secondary font-weight-medium">{{ translate('Browse')}}</div>-->
                            <!--    </div>-->
                            <!--    <div class="form-control file-amount">{{ translate('Choose File') }}</div>-->
                            <!--    <input type="hidden" name="image" class="selected-files">-->
                            <!--</div>-->
                            <!--<div class="file-preview box sm">-->
                            <!--</div>-->
                           
                            <!--<label for="">Upload Image</label>-->
                            <input type="file" name="image" required class="course form-control">
                  
                        </div>
                    </div>
                 
                 
                    <div class="form-group mb-0 text-right">
                        <button type="submit" class="btn btn-primary">{{translate('Save')}}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
