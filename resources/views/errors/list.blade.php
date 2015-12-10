@if($errors->any())
    <div class="col-sm-2"></div>
    <div class="col-sm-10 alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif