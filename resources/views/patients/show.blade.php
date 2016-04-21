@extends('layouts/app')

@section('title', 'Patient Details')

@section('content')

    <div class="container" >
	<div class="row" >
	    <div class="col-md-6 col-md-offset-3">
		<div class="panel panel-default">
                    <div class="panel-heading">
			<h2>Patient Details</h2>
		    </div>
		    <div class="panel-body" >
			<div class="row" >
			    <div class="col-md-4">
				Name:
			    </div>
			    <div class="col-md-8">
				{{ $patient->name }}
			    </div>	    
			</div>
			<div class="row" >
			    <div class="col-md-4">
				Email:
			    </div>
			    <div class="col-md-8">
				{{ $patient->email }}
			    </div>	    
			</div>
			<div class="row" >
			    <div class="col-md-4">
				Gender:
			    </div>
			    <div class="col-md-8">
				{{ $patient->gender }}
			    </div>	    
			</div>
			<div class="row" >
			    <div class="col-md-4">
				Phone:
			    </div>
			    <div class="col-md-8">
				{{ $patient->phone }}
			    </div>	    
			</div>
			<div class="row" >
			    <div class="col-md-4">
				Birthdate:
			    </div>
			    <div class="col-md-8">
				{{ $patient->birthdate }} ( age: {{ \Carbon\Carbon::now()->diffInYears(\Carbon\Carbon::parse($patient->birthdate)) }} )
			    </div>	    
			</div>

			<div class="row" >
			    <div class="col-md-4">
				Surgeon:
			    </div>
			    <div class="col-md-8">
				<a href="{{ action('SurgeonsController@show', [$patient->surgeon->id]) }}">{{ $patient->surgeon->name}}</a> </td>
			    </div>	    
			</div>

		    </div>
		</div>
	    </div>
	</div>
    </div>
    <div class="container" >
	<div class="row" >
	    <div class="col-md-1 col-md-offset-3">
		<a class="btn btn-success" href="{{ action('PatientsController@edit', $patient->id) }}">Edit</a>
	    </div>
	    <div class="col-md-1 " >
		<a class="btn btn-primary" href="{{ action('PatientsController@index') }}">Index</a>
	    </div>
	</div>
    </div>


@endsection
