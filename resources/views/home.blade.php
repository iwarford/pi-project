@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">

        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
		    Hospital Staff and Patient Registry
		</div>
		
                <div class="panel-body">
		    Welcome to the Nameless Hospital™ Patient Registry.  Below, you can manage either our roster of capable surgeons, or explore and manage our well-paying clientele.
                </div>
            </div>
        </div>


    </div>
    <div class="row">

        <div class="col-md-5 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Surgeon Management</div>

                <div class="panel-body">
		    <p>
			<a href="{{ action('SurgeonsController@index') }}">Browse List of Registered Surgeons</a>
		    </p>
		    <p>
			<a href="{{ action('SurgeonsController@create') }}">Register a new Surgeon</a>
		    </p>

                </div>
            </div>
        </div>

        <div class="col-md-5 ">
            <div class="panel panel-default">
                <div class="panel-heading">Patient Management</div>
                <div class="panel-body">
		    <p>
			<a href="{{ action('PatientsController@index') }}">Browse List of Registered Patients</a>
		    </p>
		    <p>
			<a href="{{ action('PatientsController@create') }}">Register a new Patient</a>
		    </p>
                </div>
            </div>
        </div>


    </div>
</div>
@endsection
