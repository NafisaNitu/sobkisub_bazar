@extends('backend.layouts.app')

@section('content')
    <div class="aiz-titlebar mt-2 mb-4">
        <div class="row align-items-center">
            <div class="col-md-6">
                <h1 class="h3">{{ translate('Category Wise Home Page') }}</h1>
            </div>
        </div>
    </div>
    @include('message.message')
    <form class="" action="{{ route('update.category.wise.home_page') }}" method="POST" id="choice_form">
        <div class="row gutters-5">
            <div class="col-lg-8">
                @csrf
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0 h6">{{ translate('Category Information') }}</h5>
                    </div>
                    <div class="card-body">
                        <div class="form-group row">
                            <label class="col-md-3 col-from-label">{{ translate('Category Name') }}</label>
                            <div class="col-md-8">
                                <select name="category_id[]" id="category_id" class="select2 form-control aiz-selectpicker"
                                    data-toggle="select2" multiple>
                                    <option value="">Select Category</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->getTranslation('name') }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>


                    </div>
                </div>


            </div>
            <div class="col-12">
                <div class="mar-all text-left">
                    <button type="submit" name="button" value="publish"
                        class="btn btn-primary">{{ translate('Update Category Home Page') }}</button>
                </div>
            </div>
        </div>

    </form>

    <div class="row gutters-5 mt-5">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0 h6">{{ translate('Category List') }}</h5>
                </div>
                <div class="card-body">
                    <table class="table aiz-table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Caqtegory Name</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categoryList as $category)
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>{{ $category->name }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
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
