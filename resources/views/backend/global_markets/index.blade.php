@extends('backend.layouts.app')

@section('content')
    <div class="aiz-titlebar mt-2 mb-4">
        <div class="row align-items-center">
            <div class="col-md-6">
                <h1 class="h3">{{ translate('Global Market Policy') }}</h1>
            </div>
        </div>
    </div>

    @include('message.message')
    <div class="card">

        <div class="card-body">
            <table class="table aiz-table mb-0" id="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th data-breakpoints="md">{{ translate('User Name') }}</th>
                        <th data-breakpoints="md">{{ translate('Global Market Link') }}</th>
                        <th data-breakpoints="md">{{ translate('Options') }}</th>

                    </tr>
                </thead>

                <tbody>
                    @foreach ($global_markets as $key => $global)
                        <tr>

                            <td>{{ $key + 1 + ($global_markets->currentPage() - 1) * $global_markets->perPage() }}</td>
                            <td>{{ $global->user->name ?? '' }}</td>
                            <td><a href="{{ $global->link }}" target="_blunk">{{  Str::limit($global->link,30) }}</a></td>
                            <td class="">
                                <a href="#" class="btn btn-soft-danger btn-icon btn-circle btn-sm confirm-delete"
                                    data-href="{{ route('global_market.destroy', $global->id) }}"
                                    title="{{ translate('Delete') }}">

                                    <i class="las la-trash"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="aiz-pagination">
                {{ $global_markets->links() }}
            </div>
        </div>
    </div>
@endsection

@section('modal')
    @include('modals.delete_modal')
@endsection

@section('script')
    <script type="text/javascript"></script>
@endsection
