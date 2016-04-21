@extends('layouts/app')

@section('title', 'Surgeon Create')

@section('content')

    <div class="container" >
	<div class="row" >
	    <div class="col-md-6 col-md-offset-3">
		<div class="panel panel-default">
                    <div class="panel-heading">
			<h2>Surgeon Details</h2>
		    </div>
		    <div class="panel-body" >
			<div class="row" >
			    <div class="col-md-4">
				Name:
			    </div>
			    <div class="col-md-8">
				{{ $surgeon->name }}
			    </div>
			</div>
			<div class="row" >
			    <div class="col-md-4">
				Email:
			    </div>
			    <div class="col-md-8">
				{{ $surgeon->email }}
			    </div>
			</div>
		    </div>
		</div>
	    </div>
	</div>
	<div class="row" >
	    <div class="col-md-6 col-md-offset-3">
		<div class="panel panel-default">
		    <div class="panel-heading" >
			Current Patients
		    </div>
		    <div class="panel-body" >
			@if (count($patients) > 0)		    
			<table class="table table-striped ">
			    <tbody>
				<tr>
				    <th>Name</th>
				    <th>Gender</th>
				</tr>
				@foreach ($patients as $patient)
				    <tr>
					<td> <a href="{{ action('PatientsController@show', [$patient->id]) }}">{{ $patient->name}}</a> </td>
					<td> {{ $patient->gender}} </td>
				    </tr>
				@endforeach
			    </tbody>
			</table>
			@else
			This Surgeon has no patients currently assigned.
			@endif
		    </div>
		</div>
	    </div>
	</div>
    </div>
    <div class="container" >
	<div class="row" >
	    <div class="col-md-1 col-md-offset-3">
		<a class="btn btn-success pagination-centered" href="{{ action('SurgeonsController@edit', $surgeon->id) }}">Edit</a>
	    </div>
	    <div class="col-md-1 " >
		<a class="btn btn-primary" href="{{ action('SurgeonsController@index') }}">Index</a>
	    </div>
	</div>
    </div>


@endsection
