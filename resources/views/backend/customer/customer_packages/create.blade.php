@extends('backend.layouts.app')
@section('content')
    <div class="row">
        <div class="col-lg-8 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0 h6">{{ translate('Create New Package') }}</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('customer_packages.store') }}" method="POST">
                        @csrf
                        <div class="form-group row">
                            <label class="col-sm-3 col-from-label" for="name">{{ translate('Package Name') }}</label>
                            <div class="col-sm-9">
                                <input type="text" placeholder="{{ translate('Name') }}" id="name" name="name"
                                    class="form-control" required>
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label class="col-sm-3 col-from-label" for="adPosition">{{ translate('Ad Position') }}</label>
                            <div class="col-sm-9">
                                <input type="text" placeholder="{{ translate('Ad Position') }}" id="adPosition" name="adPosition"
                                    class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-from-label" for="imageSize">{{ translate('Uploaded Image Size') }}</label>
                            <div class="col-sm-9">
                                <input type="text" placeholder="{{ translate('Uploaded Image Size') }}" id="imageSize" name="imageSize"
                                    class="form-control" required>
                            </div>
                        </div>
                        
                        
                        <div class="form-group row">
                            <label class="col-sm-3 col-from-label" for="name">{{ translate('Product Upload') }}</label>
                            <div class="col-sm-9">
                                <input type="number" lang="en" min="0" step="1"
                                    placeholder="{{ translate('Product Upload') }}" id="product_upload"
                                    name="product_upload" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label"
                                for="signinSrEmail">{{ translate('Package logo') }}</label>
                            <div class="col-md-9">
                                <div class="input-group" data-toggle="aizuploader" data-type="image">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text bg-soft-secondary font-weight-medium">
                                            {{ translate('Browse') }}</div>
                                    </div>
                                    <div class="form-control file-amount">{{ translate('Choose File') }}</div>
                                    <input type="hidden" name="logo" class="selected-files">
                                </div>
                                <div class="file-preview box sm">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-from-label"
                                for="name">{{ translate('Days And Ammount') }}</label>
                            <div class="col-sm-3">
                                <input type="number" lang="en" 
                                    placeholder="{{ translate('Days') }}" id="days" name="days[]"
                                    class="form-control" required>
                            </div>
                            <div class="col-sm-3">
                                <input type="number" lang="en" 
                                    placeholder="{{ translate('Amount') }}" id="amount" name="amount[]"
                                    class="form-control" required>
                            </div>
                            <button class="btn btn-sm btn-success addeventmore">Add</button>

                        </div>
                        <div id="amount_days">

                        </div>
                        <div class="form-group mb-0 text-right">
                            <button type="submit" class="btn btn-primary">{{ translate('Save') }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        var counter = 1;
        $(document).on("click", ".addeventmore", function() {
            var whole_extra_item_add = '';
            whole_extra_item_add += `
                <div class="whole_extra_item_delete">
                    <div class="form-group row" id="whole_extra_item_add">
    
                        <label class="col-sm-3 col-from-label" for="name">Days And Ammount</label>
                        <div class="col-sm-3">
                            <input type="text" lang="en" placeholder="Days" id="days" name="days[]" class="form-control" required>
                        </div>
                        <div class="col-sm-3">
                            <input type="text" lang="en" placeholder="Amount" id="amount" name="amount[]" class="form-control" required>
                        </div>
                        <button class="btn btn-sm btn-success addeventmore mr-1">Add</button>
                        <button class="btn btn-sm btn-danger removeeventmore">Delete</button>
     

                    </div>    
                </div>
                
                `;
            amount_days = $("#amount_days");
            amount_days.append(whole_extra_item_add);
            counter++;
        });

        $(document).on("click", ".removeeventmore", function(event) {
            var whole_extra_item_add = $("#whole_extra_item_add").html();
            $(this).closest(".whole_extra_item_delete").remove();
            counter -= 1;
        });
    </script>
@endsection
