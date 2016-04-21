@extends('layouts/app')

@section('title', 'Patient Edit')

@section('content')

    <div class="container" >
	<div class="row" >
	    <div class="col-md-6 col-md-offset-3">
		<h2>Update Patient Details</h2>
		<hr/>
		{!! Form::open(['url' => 'patients/'.$patient->id, 'method' => 'put']) !!}
		<div class="form-group">
		    {!! Form::label('name', 'Name: ') !!}
		    {!! Form::text('name', $patient->name, ['class' => 'form-control']) !!}
		</div>

		<div class="form-group">
		    {!! Form::label('email', 'Email Address: ') !!}
		    {!! Form::text('email', $patient->email, ['class' => 'form-control']) !!}
		</div>

		<div class="form-group">
		    {!! Form::label('phone', 'Phone: ') !!}
		    {!! Form::text('phone', $patient->phone, ['class' => 'form-control']) !!}
		</div>

		<div class="form-group">
		    {!! Form::label('gender', 'Gender: ') !!}
		    <div class="row" >
			<div class="col-md-1 col-md-offset-1">
			    {!! Form::label('gender', 'Female ') !!}
			</div>
			<div class="col-md-1 col-md-offset-1">
			    {!! Form::radio('gender', 'female', ($patient->gender == 'female'), ['class' => 'form-control']); !!}
			</div>
		    </div>
		    <div class="row" >
			<div class="col-md-1 col-md-offset-1">
			    {!! Form::label('gender', 'Male ') !!}
			</div>
			<div class="col-md-1 col-md-offset-1">
			    {!! Form::radio('gender', 'male', ($patient->gender == 'male'), ['class' => 'form-control']); !!}
			</div>
		    </div>
		    <div class="row" >
			<div class="col-md-1 col-md-offset-1">
			    {!! Form::label('gender', 'Other ') !!}
			</div>
			<div class="col-md-1 col-md-offset-1">
			    {!! Form::radio('gender', 'other', ($patient->gender == 'other'), ['class' => 'form-control']); !!}
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
		    <div class="col-md-4">
    			{!! Form::submit('Save', ['class' => 'btn btn-success form-control']) !!}
			{!! Form::close() !!}
		    </div>
		    <div class="col-md-4">
			{!! Form::open(['url' => 'patients/' . $patient->id, 'method' => 'delete', 'onsubmit' => 'return confirm("Are you sure you want to delete?");']) !!}
    			{!! Form::submit('Delete', ['class' => 'btn btn-danger form-control']) !!}
			{!! Form::close() !!}
		    </div>
		    <div class="col-md-4" >
			{!! Form::open(['url' => 'patients/' . $patient->id, 'method' => 'get']) !!}
    			{!! Form::submit('Cancel', ['class' => 'btn btn-primary form-control']) !!}
			{!! Form::close() !!}
		    </div>
		</div>

		@include('errors')		

	    </div>
	</div>
    </div>

@endsection
