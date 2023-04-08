@extends('backend.layouts.app')

@section('content')
    <div class="aiz-titlebar mt-2 mb-4">
        <div class="row align-items-center">
            <div class="col-md-6">
                <h1 class="h3">{{ translate('All Partner') }}</h1>
            </div>
        </div>
    </div>

    <div class="row gutters-10 justify-content-center">

        <div class="col-md-4 mx-auto mb-3">
            <a href="{{ route('partner.create') }}">
                <div class="p-3 rounded mb-3 c-pointer text-center bg-white shadow-sm hov-shadow-lg has-transition">
                    <span
                        class="size-60px rounded-circle mx-auto bg-secondary d-flex align-items-center justify-content-center mb-3">
                        <i class="las la-plus la-3x text-white"></i>
                    </span>
                    <div class="fs-18 text-primary">{{ translate('Add New partner ') }}</div>
                </div>
            </a>
        </div>

    </div>

    <div class="card">
        <div class="card-header row gutters-5">
            <div class="col">
                <h5 class="mb-md-0 h6">{{ translate('All partner ') }}</h5>
            </div>
        </div>
        <div class="card-body">
            <table class="table aiz-table mb-0">
                <thead>
                    <tr>
                        <th>#</th>
                        <th data-breakpoints="md">{{ translate('name') }}</th>
                        <th data-breakpoints="md">{{ translate('image') }}</th>
                        <th data-breakpoints="md">{{ translate('Options') }}</th>

                    </tr>
                </thead>

                <tbody>
                    @foreach ($partners as $key => $partner)
                        <tr>
                            <td>{{ $key + 1 + ($partners->currentPage() - 1) * $partners->perPage() }}</td>
                            <td>{{ $partner->name }}</td>
                            <td class="text-center">
                                <img src="{{uploaded_asset($partner->image)}}" alt="{{$partner->name}}" width="82px" >
                            </td>
                            <td class="">
                                <a class="btn btn-soft-info btn-icon btn-circle btn-sm"
                                    href="{{ route('partner.edit', $partner->id) }}"
                                    title="{{ translate('Edit') }}">
                                    <i class="las la-edit"></i>
                                </a>
                                <a href="#" class="btn btn-soft-danger btn-icon btn-circle btn-sm confirm-delete"
                                    data-href="{{ route('partner.destroy', $partner->id) }}"
                                    title="{{ translate('Delete') }}">
                                  
                                    <i class="las la-trash"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="aiz-pagination">
                {{ $partners->links() }}
            </div>
        </div>
    </div>
@endsection

@section('modal')
    @include('modals.delete_modal')
@endsection

@section('script')
 
@endsection
