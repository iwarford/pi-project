@extends('layouts/app')

@section('content')
    <div class="container" >
	<h1>Patient Directory</h1>

	<table class="table table-striped ">
	    <tbody>
		<tr>
		    <th>Name</th>
		    <th>Email</th>
		    <th>Age</th>
		    <th>Gender</th>
		    <th>Surgeon</th>
		</tr>
		@foreach ($patients as $patient)
		    <tr>

			<td> <a href="{{ action('PatientsController@show', [$patient->id]) }}">{{ $patient->name}}</a> </td>
			<td> {{ $patient->email}} </td>
			<td> {{ \Carbon\Carbon::now()->diffInYears(\Carbon\Carbon::parse($patient->birthdate)) }}</td>
			<td> {{ $patient->gender}} </td>
			<td> <a href="{{ action('SurgeonsController@show', [$patient->surgeon->id]) }}">{{ $patient->surgeon->name}}</a> </td>		    
		    </tr>
		@endforeach
	    </tbody>
	</table>
    </div> 
@stop

