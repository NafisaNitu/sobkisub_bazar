@extends('backend.layouts.app')

@section('content')

<div class="row">
    <div class="col-lg-8 mx-auto">
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0 h6">{{translate('Slider Edit Information')}}
                
                </h5>
            </div>
             <div class="pr-3 pt-2">
                 
                        <a href="{{ route('homebanner.index') }}" class="btn btn-danger float-right ">BACK</a>
                   
                </div>

                      
                  
                
            <div class="card-body">
                <form class="form-horizontal" action="{{ url('admin/home-update-banner/'.$banner->id) }}" method="POST" enctype="multipart/form-data">
                 	@csrf
               
                   
                     <div class="form-group row">
                        <label class="col-md-3 col-form-label">{{translate('Banner Link')}}</label>
                        <div class="col-md-9">
                            <input type="text" placeholder="{{translate('Banner link')}}" id="name" value="{{$banner->link}}" name="link" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="signinSrEmail">{{translate('Slider')}} <small>({{ translate('200x200') }})</small></label>
                        <div class="col-md-9 mb-3">
                            
                           
                           
                            <input type="file" name="image" >
                            
                        </div>
                        <style>
                            .solid {
                                border-style: ridge;
                                
                            }
                        </style>
                         <div class="mt-3 solid ">
                                    <img src="{{ asset('public/uploads/homebanner/'.$banner->image) }}" width="350px" height="200px" alt="Image">
                            </div>
                    </div>
                 
                 
                    <div class="form-group mb-0 text-right">
                        <button type="submit" class="btn btn-primary">{{translate('Update')}}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
