@extends('backend.layouts.app')

@section('content')
    <div class="aiz-titlebar mt-2 mb-4">
        <div class="row align-items-center">
            <div class="col-md-6">
                <h1 class="h3">{{ translate('Medicine Policy') }}</h1>
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
                        <th data-breakpoints="md">{{ translate('User Phone') }}</th>
                        <th data-breakpoints="md">{{ translate('Prescription') }}</th>
                        <th data-breakpoints="md">{{ translate('Options') }}</th>

                    </tr>
                </thead>

                <tbody>
                    @foreach ($medicines as $key => $medicine)
                        <tr>

                            <td>{{ $key + 1 + ($medicines->currentPage() - 1) * $medicines->perPage() }}</td>
                            <td>{{ $medicine->user->name ?? '' }}</td>
                            <td>{{ $medicine->user->phone ?? '' }}</td>
                            <td>
                                @if (pathinfo($medicine->image, PATHINFO_EXTENSION) == 'pdf')
                                    <a class="btn btn-dark"
                                        href="{{ static_asset('uploads/medicines/'.$medicine->image) }}">Download PDF</a>
                                @else
                                    <a href="{{ static_asset('uploads/medicines/'.$medicine->image) }}" target="_blunk"
                                        download><img src="{{ static_asset('uploads/medicines/'.$medicine->image) }}"
                                            alt="{{ $medicine->user->name ?? 'Nothing' }}" width="82px"></a>
                                @endif
                            </td>
                            <td class="">
                                <a href="#" class="btn btn-soft-danger btn-icon btn-circle btn-sm confirm-delete"
                                    data-href="{{ route('medicine.destroy', $medicine->id) }}"
                                    title="{{ translate('Delete') }}">

                                    <i class="las la-trash"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="aiz-pagination">
                {{ $medicines->links() }}
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
