@extends('backend.layouts.app')

@section('content')
    <div class="aiz-titlebar mt-2 mb-4">
        <div class="row align-items-center">
            <div class="col-md-6">
                <h1 class="h3">{{ translate('Update Live Streaming') }}</h1>
            </div>
        </div>
    </div>
    @include('message.message')
    <form class="" action="{{ route('live_streaming.update', $live_streaming->id) }}" method="POST">
        @method('PUT')
        <div class="row gutters-5">
            <div class="col-lg-8">
                @csrf
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0 h6">{{ translate('Live Streaming') }}</h5>
                    </div>
                    <div class="card-body">

                        <div class="form-group row">
                            <label class="col-md-3 col-from-label">{{ translate('SKB World Live Link') }}</label>
                            <div class="col-md-8">
                                <input type="link" class="form-control" name="skb_world_live"
                                    placeholder="{{ translate('SKB World Live Link') }}" value="{{ $live_streaming->skb_world_live ?? '' }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-from-label">{{ translate('Facebook Live Link') }}</label>
                            <div class="col-md-8">
                                <input type="link" class="form-control" name="facebook_live"
                                    placeholder="{{ translate('Facebook Live Link') }}" value="{{ $live_streaming->facebook_live  ?? '' }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-from-label">{{ translate('Instagram Live Link') }}</label>
                            <div class="col-md-8">
                                <input type="link" class="form-control" name="instragam_live"
                                    placeholder="{{ translate('Instagram Live Link') }}" value="{{ $live_streaming->instragam_live ?? '' }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-from-label">{{ translate('Youtube Live Link') }}</label>
                            <div class="col-md-8">
                                <input type="link" class="form-control" name="youtube_live"
                                    placeholder="{{ translate('Youtube Live Link') }}" value="{{ $live_streaming->youtube_live ?? '' }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-from-label">{{ translate('Seller  Live Link') }}</label>
                            <div class="col-md-8">
                                <input type="link" class="form-control" name="seller_live"
                                    placeholder="{{ translate('Seller  Live Link') }}" value="{{ $live_streaming->seller_live ?? '' }}">
                            </div>
                        </div>

                    </div>
                </div>

            </div>


            <div class="col-12">
                <div class="mar-all text-left">
                    <button type="submit" name="button" value="publish"
                        class="btn btn-primary">{{ translate('Update Live Streaming') }}</button>
                </div>
            </div>
        </div>

    </form>
@endsection

@section('script')
@endsection

{{-- <td>{{ $live_streaming->skb_world_live ?? '' }}</td>
<td>{{ $live_streaming->facebook_live ?? '' }}</td>
<td>{{ $live_streaming->instragam_live ?? '' }}</td>
<td>{{ $live_streaming->youtube_live ?? '' }}</td>
<td>{{ $live_streaming->seller_live ?? '' }}</td> --}}