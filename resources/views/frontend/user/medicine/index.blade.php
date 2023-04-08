@extends('frontend.layouts.user_panel')

@section('panel_content')
    <div class="aiz-titlebar mt-2 mb-4">
        <div class="row align-items-center">
            <div class="col-md-6">
                <h1 class="h3">{{ translate(' Show Medicine') }}</h1>
            </div>
        </div>
    </div>


    <div class="card">
        <div class="card-body">
            <table class="table aiz-table mb-0" id="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th data-breakpoints="md">{{ translate('User Name') }}</th>
                        <th data-breakpoints="md">{{ translate('User Phone') }}</th>
                        <th data-breakpoints="md">{{ translate('Prescription') }}</th>
                       

                    </tr>
                </thead>

                <tbody>
                    @foreach ($medicines as $key => $medicine)
                        <tr>

                            <td>{{ $key + 1 + ($medicines->currentPage() - 1) * $medicines->perPage() }}</td>
                            <td>{{ $medicine->user->name ?? '' }}</td>
                            <td>{{ $medicine->user->phone ?? 'Please Input Phone Number in your Profile' }}</td>
                            <td>
                                @if (pathinfo($medicine->image, PATHINFO_EXTENSION) == 'pdf')
                                    <a class="btn btn-dark"
                                        href="{{ static_asset('uploads/medicines/'.$medicine->image) }}">Download PDF</a>
                                @else
                                    <a href="{{ static_asset('uploads/medicines/'.$medicine->image) }}" target="_blunk"
                                        ><img src="{{ static_asset('uploads/medicines/'.$medicine->image) }}"
                                            alt="{{ $medicine->user->name }}" width="82px"></a>
                                @endif
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
