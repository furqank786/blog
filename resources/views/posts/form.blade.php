<div class="form-group">
        {!! Form::label('title', 'Title:', ['class' => 'control-label col-sm-2']) !!}
            <div class="col-sm-10">
            	{!! Form::text('post_title', null, ['class' => 'form-control']) !!}
        	</div>
    </div>

    <div class="form-group">
            {!! Form::label('body', 'Description:', ['class' => 'control-label col-sm-2']) !!}
            <div class="col-sm-10">
            	{!! Form::textarea('post_excerpt', null, ['class' => 'form-control']) !!}
        	</div>
    </div>
    <div class="form-group">
		<div class="col-sm-2"></div>
		<div class="col-sm-10">
			{!! Form::submit($submitButtonText, null, ['class' => 'form-control']) !!}
		</div>
	</div>