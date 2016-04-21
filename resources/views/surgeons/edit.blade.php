@extends('layouts/app')

@section('title', 'Surgeon Edit')

@section('content')

    <div class="container" >
	<div class="row" >
	    <div class="col-md-6 col-md-offset-3">
		<h2>Update Surgeon Details</h2>
		<hr/>
		{!! Form::open(['url' => 'surgeons/'.$surgeon->id, 'method' => 'put']) !!}
		<div class="form-group">
		    {!! Form::label('name', 'Name: ') !!}
		    {!! Form::text('name', $surgeon->name, ['class' => 'form-control']) !!}
		</div>

		<div class="form-group">
		    {!! Form::label('email', 'Email Address: ') !!}
		    {!! Form::text('email', $surgeon->email, ['class' => 'form-control']) !!}
		</div>

		<div class="form-group">
		    <div class="col-md-4">
    			{!! Form::submit('Save', ['class' => 'btn btn-success form-control']) !!}
			{!! Form::close() !!}
		    </div>
		    <div class="col-md-4">
			{!! Form::open(['url' => 'surgeons/' . $surgeon->id, 'method' => 'delete', 'onsubmit' => 'return confirm("Are you sure you want to delete?");']) !!}
    			{!! Form::submit('Delete', ['class' => 'btn btn-danger form-control']) !!}
			{!! Form::close() !!}
		    </div>
		    <div class="col-md-4" >
			{!! Form::open(['url' => 'surgeons/' . $surgeon->id, 'method' => 'get']) !!}
    			{!! Form::submit('Cancel', ['class' => 'btn btn-primary form-control']) !!}
			{!! Form::close() !!}
		    </div>
		</div>
	    </div>
	</div>
	<div class="row" >
	    <div class="col-md-6 col-md-offset-3">
		@include('errors')
	    </div>
	</div>
    </div>

@endsection
