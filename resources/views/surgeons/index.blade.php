@extends('layouts/app')

@section('title', 'Surgeon Index')

@section('content')

    <div class="container" >
	<h1>Surgeon Directory</h1>

	<table class="table table-striped">
	    <tbody>
		<tr>
		    <th>Name</th>
		    <th>Email</th>
		    <th>Number of Patients</th>
		</tr>
		@foreach ($surgeons as $surgeon)
		    <tr>
			<td> <a href="{{ action('SurgeonsController@show', [$surgeon->id]) }}">{{ $surgeon->name}}</a> </td>
			<td> {{ $surgeon->email}} </td>
			<td> {{ $surgeon->patients->count()}} </td>
		    </tr>
		@endforeach
	    </tbody>
	</table>
    </div>
@endsection





    
