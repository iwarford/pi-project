@extends('layouts/app')

@section('title', 'Register a Patient')

@section('content')
    <div class="container" >
	<div class="row" >
	    <div class="col-md-6 col-md-offset-3">
		<h2>Register a new Patient</h2>

		<hr/>

		{!! Form::open(['url' => 'patients']) !!}
		<div class="form-group">
		    {!! Form::label('name', 'Name: ') !!}
		    {!! Form::text('name', null, ['class' => 'form-control']) !!}
		</div>

		<div class="form-group">
		    {!! Form::label('email', 'Email Address: ') !!}
		    {!! Form::text('email', null, ['class' => 'form-control']) !!}
		</div>

		<div class="form-group">
		    {!! Form::label('phone', 'Phone: ') !!}
		    {!! Form::text('phone', null, ['class' => 'form-control']) !!}
		</div>

		<div class="form-group">
		    {!! Form::label('gender', 'Gender: ') !!}
		    <div class="row" >
			<div class="col-md-1 col-md-offset-1">
			    {!! Form::label('gender', 'Female ') !!}
			</div>
			<div class="col-md-1 col-md-offset-1">
			    {!! Form::radio('gender', 'female', false, ['class' => 'form-control']); !!}
			</div>
		    </div>
		    <div class="row" >
			<div class="col-md-1 col-md-offset-1">
			    {!! Form::label('gender', 'Male ') !!}
			</div>
			<div class="col-md-1 col-md-offset-1">
			    {!! Form::radio('gender', 'male', false, ['class' => 'form-control']); !!}
			</div>
		    </div>
		    <div class="row" >
			<div class="col-md-1 col-md-offset-1">
			    {!! Form::label('gender', 'Other ') !!}
			</div>
			<div class="col-md-1 col-md-offset-1">
			    {!! Form::radio('gender', 'other', false, ['class' => 'form-control']); !!}
			</div>
		    </div>
		</div>

		<div class="form-group">
		    {!! Form::label('birthdate', 'Birthdate: ') !!}
		    {!! Form::date('birthdate', \Carbon\Carbon::now(), ['class' => 'form-control']); !!}
		</div>

		<div class="form-group">
		    {!! Form::label('surgeon', 'Assigned Surgeon: ') !!}
		    {!! Form::select('surgeon', $surgeon_map, null, ['class' => 'form-control']) !!}
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
