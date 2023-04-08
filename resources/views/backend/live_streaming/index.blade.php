@extends('backend.layouts.app')

@section('content')
    <div class="aiz-titlebar mt-2 mb-4">
        <div class="row align-items-center">
            <div class="col-md-6">
                <h1 class="h3">{{ translate('Live Streaming') }}</h1>
            </div>
        </div>
       
    </div>

@include('message.message')
       {{-- <div class="col-md-4 mx-auto mb-3">
            <a href="{{ route('approved_ad_banner.create') }}">
                <div class="p-3 rounded mb-3 c-pointer text-center bg-white shadow-sm hov-shadow-lg has-transition">
                    <span
                        class="size-60px rounded-circle mx-auto bg-secondary d-flex align-items-center justify-content-center mb-3">
                        <i class="las la-plus la-3x text-white"></i>
                    </span>
                    <div class="fs-18 text-primary">{{ translate('Add New ') }}</div>
                </div>
            </a>
        </div> --}}
       {{--  "skb_world_live" => "fdfd"
        "facebook_live" => "dfasdfa"
        "instragam_live" => "fasdfa"
        "youtube_live" => "aasdfas" --}}
         
    <div class="card">

        <div class="card-body">
            <table class="table aiz-table mb-0" id="table">
                <thead>
                    <tr>
                      
                       
                        <th data-breakpoints="md">{{ translate('SKB World Live ') }}</th>
                        <th data-breakpoints="md">{{ translate('Facebook Live ') }}</th>
                        <th data-breakpoints="md">{{ translate('Instagram Live ') }}</th>
                        <th data-breakpoints="md">{{ translate('Youtube Live ') }}</th>
                       <th data-breakpoints="md">{{ translate('Seller Name') }}</th>
                       
                        <th data-breakpoints="md">{{ translate('Options') }}</th>

                    </tr>
                </thead>

                <tbody>
                    {{-- @foreach ($live_streamings as $key => $live_streaming) --}}
                        <tr>
              
                            <td>{{ $live_streaming->skb_world_live ?? '' }}</td>
                            <td>{{ $live_streaming->facebook_live ?? '' }}</td>
                            <td>{{ $live_streaming->instragam_live ?? '' }}</td>
                            <td>{{ $live_streaming->youtube_live ?? '' }}</td>
                            <td>{{ $live_streaming->seller_live ?? '' }}</td>
                          
                            <td class="">
                                <a class="btn btn-soft-info btn-icon btn-circle btn-sm"
                                    href="{{ route('live_streaming.edit', $live_streaming->id) }}"
                                    title="{{ translate('Edit') }}">
                                    <i class="las la-edit"></i>
                                </a>
                                
                            </td>
                        </tr>
                    {{-- @endforeach --}}
                </tbody>
            </table>
            {{-- <div class="aiz-pagination">
                {{ $sliders->links() }}
            </div> --}}
        </div>
    </div>
@endsection

@section('modal')
    @include('modals.delete_modal')
@endsection


