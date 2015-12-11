@extends('app')
@section('content')
<div class="well">
    {!! Form::open(['class' => 'form-horizontal', 'id' => 'blogform']) !!}
            <h1>Activate Account</h1>
            @include('errors.list')
            <div style="text-align: center;">Please enter the code in the text field and press the activate button to activate your account</div>
            <br>

            <div class="form-group">
                    {!! Form::label('activation_code', 'Activation Code:', ['class' => 'control-label col-sm-2'])  !!}
                    <div class="col-sm-10">
                            {!! Form::text('activation_code', null, ['class' => 'form-control']) !!}
                    </div>
            </div>
            <div class="form-group">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-10">
                            {!! Form::submit('Activate', null, ['class' => 'form-control']) !!}
                    </div>
            </div>
    {!! Form::close() !!}
</div>
@stop