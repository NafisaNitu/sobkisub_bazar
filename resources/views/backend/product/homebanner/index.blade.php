@extends('backend.layouts.app')

@section('content')
<div class="aiz-titlebar text-left mt-2 mb-3">
    <div class="row align-items-center">
        <div class="col-md-6">
            <h1 class="h3">{{translate('All Banners')}}</h1>
        </div>
        <div class="col-md-3 text-md-right">
            <a href="{{ route('homebanner.destroy') }}" class="btn btn-danger">
                <span>{{translate('Delete All Slider ')}}</span>
            </a>
        </div>
        <div class="col-md-3t">
            <a href="{{ route('homebanner.create') }}" class="btn btn-primary">
                <span>{{translate('Add New Slider ')}}</span>
            </a>
        </div>
    </div>
</div>
<div class="card">
    <div class="card-header d-block d-md-flex">
        <h5 class="mb-0 h6">{{ translate('Home Banner') }}</h5>
        <form class="" id="sort_categories" action="" method="GET">
            <div class="box-inline pad-rgt pull-left">
                <div class="" style="min-width: 200px;">
                    <input type="text" class="form-control" id="search" name="search"@isset($sort_search) value="{{ $sort_search }}" @endisset placeholder="{{ translate('Type name & Enter') }}">
                </div>
            </div>
        </form>
    </div>
    <div class="card-body">
        <table class="table aiz-table mb-0">
            <thead>
                <tr>
                    <!--<th data-breakpoints="lg">{{translate('Slug')}}</th>-->
                    <th>{{translate('#')}}</th>
                    <th data-breakpoints="lg">{{ translate('Slider Image') }}</th>
                    <th class="float-right">{{translate('Edit')}}</th>
                    <th >{{translate('Delete')}}</th>                    
                </tr>
            </thead>
            <tbody>
                 @php 
                 $banner = App\Models\HomeBanner::all();
                   @endphp
                
                  
                 @foreach($banner as $key => $img)
       
                    <tr>
                        <!--<td>{{$img->name}}</td>-->
                        <td>{{$img->id}}</td>
                        
                        <td>
                                    <img src="{{ asset('public/uploads/homebanner/'.$img->image) }}" width="150px" height="100px" alt="Image">
                         </td>
                                <td>
                                    <a href="edit-home-banner/{{$img->id}}" class="btn btn-primary btn-sm float-right ">Edit</a>
                                </td>
                         <td>
                           
                             <a href="home-banner/{{$img->id}}" class="btn btn-danger btn-sm ">Delete</a> 
                     
                         </td>
                       
                        
                    </tr>
                    
                    @endforeach
        
            </tbody>
        </table>
        
    </div>
</div>
@endsection





