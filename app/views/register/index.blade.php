@extends('template.skeleton')

@section('title')
{{ _('Register') }}
@stop

@section('content')
<div class="container">
	<h1>{{ _('Register') }}</h1>

	@include('template.messages')

	{{ Form::open(array('url' => 'register', 'method' => 'post')) }}

	<div class="form-group">
		{{ Form::label('first_name', 'First Name') }}
		{{ Form::text('first_name', '', array('class' => 'form-control')) }}
	</div>

	<div class="form-group">
		{{ Form::label('last_name', 'Last name') }}
		{{ Form::text('last_name', '', array('class' => 'form-control')) }}
	</div>

	<div class="form-group">
		{{ Form::label('email', 'Email') }}
		{{ Form::email('email', '', array('class' => 'form-control')) }}
	</div>

	<div class="form-group">
		{{ Form::label('username', 'Username') }}
		{{ Form::text('username', '', array('class' => 'form-control')) }}
	</div>

	<div class="form-group">
		{{ Form::label('password', 'Password') }}
		<div class="input-group">
			{{ Form::password('password', array('class' => 'form-control')) }}
			<span class="input-group-addon show-password"><span class="glyphicon glyphicon-eye-open"></span></span>
		</div>
	</div>

	{{ Form::submit('Submit', array('class' => 'btn btn-primary')) }}

	{{ Form::close() }}

</div>
@stop
