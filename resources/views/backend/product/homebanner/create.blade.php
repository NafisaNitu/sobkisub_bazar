@extends('backend.layouts.app')

@section('content')

<div class="row">
    <div class="col-lg-8 mx-auto">
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0 h6">{{translate('Slider Banner Information')}}</h5>
            </div>
            <div class="card-body">
                <form class="form-horizontal" action="{{ route('homebanner.store') }}" method="POST" enctype="multipart/form-data">
                	@csrf
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label">{{translate('Banner Link')}}</label>
                        <div class="col-md-9">
                            <input type="text" placeholder="{{translate('Banner link')}}" id="name" name="link" class="form-control" >
                        </div>
                    </div>
                   
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="signinSrEmail">{{translate('Slider Banner')}} <small>({{ translate('200x200') }})</small></label>
                        <div class="col-md-9 mb-3">
                           
                           
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
