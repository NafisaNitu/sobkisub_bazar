@if ($errors->any())
    <div class="alert alert-danger background-danger">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <ul>
            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </ul>

    </div>
@endif



@if(Session::has('success'))
<div class="alert alert-success background-success">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <i class="icofont icofont-close-line-circled"></i>
    </button>
    {{ Session('success') }}
</div>
@endif

@if(Session::has('error'))
<div class="alert alert-danger background-danger">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <i class="icofont icofont-close-line-circled"></i>
    </button>
    {{ Session('error') }}
</div>
@endif




