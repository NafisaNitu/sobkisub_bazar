@extends('backend.layouts.app')

@section('content')

<div class="row">
    <div class="col-lg-8 mx-auto">
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0 h6">{{translate('Banner Edit Information')}}
                
                </h5>
            </div>
             <div class="pr-3 pt-2" >
                 
                        <a href="{{ route('banner.index') }}" class="btn btn-danger float-right ">BACK</a>
                   
                </div>

                      
                  
                
            <div class="card-body">
                <form class="form-horizontal" action="{{ url('admin/update-banner/'.$banner->id) }}" method="POST" enctype="multipart/form-data">
                 	@csrf
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label">{{translate('Banner Name')}}</label>
                        <div class="col-md-9">
                            <input type="text" placeholder="{{translate('name')}}" name="name" value="{{$banner->name}}" class="form-control" required>
                        </div>
                    </div>
                    
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label">{{translate('Banner Links')}}</label>
                        
                        <div class="col-md-9"> 
                            <input type="text" placeholder="{{translate('Banner link')}}"  name="link"   value="" class="form-control" required>
                        </div>
                    </div>
                   
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="signinSrEmail">{{translate('Banner')}} <small>({{ translate('200x200') }})</small></label>
                        <div class="col-md-9 mb-3">
                            
                           
                           
                            <input type="file" name="image" >
                            
                        </div>
                        <style>
                            .ridge{
                                border-style:ridge;
                            }
                        </style>
                         <div class="mt-3 ridge">
                                    <img src="{{ asset('public/uploads/banner/'.$banner->image) }}" width="250px" height="150px" alt="Image">
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
