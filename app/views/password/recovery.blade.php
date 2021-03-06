@extends('template.skeleton')

@section('title')
{{ _('Password | Recovery') }}
@stop

@section('content')
<div class="container">
	<h1>{{ _('Password recovery') }}</h1>

	@include('template.messages')

	{{ Form::open(array('url' => 'password/recovery', 'method' => 'post')) }}

	<div class="form-group">
		{{ Form::label('email', _('Email')) }}
		{{ Form::email('email', '', array('class' => 'form-control')) }}
	</div>

	{{ Form::submit(_('Submit'), array('class' => 'btn btn-primary')) }}
	
	{{ Form::close() }}
	
</div>	
@stop
