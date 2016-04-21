@extends('layouts/app')

@section('title', 'Surgeon Create')

@section('content')

    <div class="container" >
	<div class="row" >
	    <div class="col-md-6 col-md-offset-3">
		<h2>Register a New Surgeon</h2>
		<hr/>


		{!! Form::open(['url' => 'surgeons']) !!}
		<div class="form-group">
		    {!! Form::label('name', 'Name: ') !!}
		    {!! Form::text('name', null, ['class' => 'form-control']) !!}
		</div>

		<div class="form-group">
		    {!! Form::label('email', 'Email Address: ') !!}
		    {!! Form::text('email', null, ['class' => 'form-control']) !!}
		</div>

		<div class="form-group">
    		    {!! Form::submit('Add', ['class' => 'btn btn-primary form-control']) !!}
		</div>

		{!! Form::close() !!}

		@include('errors')

	    </div>
	</div>
    </div>

@endsection
