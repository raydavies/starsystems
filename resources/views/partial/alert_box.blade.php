@if (count($errors))
    <div class="alert-box">
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <div class="errormsg">{{ $error }}</div>
            @endforeach
        </div>
    </div>
@endif
