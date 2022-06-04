@if(Session::has('success'))
    <div class="success">
        <h5><i class="icon fas fa-check"></i> Success!</h5>
        {{Session::get('success')}}
    </div>
@endif
@if(Session::has('successadd'))
    <div class="success">
        {{Session::get('successadd')}}
    </div>
@endif
@if(Session::has('delete'))
    <div class="error">
        {{Session::get('delete')}}
    </div>
@endif
@if(Session::has('error'))
    <div class="alert-danger">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h5><i class="icon fas fa-check"></i> Error!</h5>
        {{Session::get('error')}}
    </div>
@endif
@if($errors->any())
    <div class="alert-danger">
        <h5><i class="icon fas fa-ban"></i> Errors!</h5>
        @foreach($errors->all() as $error)
            {{$error}}.'<br>'
        @endforeach
    </div>
@endif
