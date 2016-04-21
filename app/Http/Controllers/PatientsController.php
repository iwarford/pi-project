<?php

namespace App\Http\Controllers;

use App\Patient;
use App\Surgeon;
use App\Http\Requests\CreatePatientRequest;
use App\Http\Requests\UpdatePatientRequest;
use App\Http\Requests;
use Request;

class PatientsController extends Controller
{

    /**
     * Private method that maps Surgeon names to ids for 
     * creating the drop-down list boxes in the view.
     *
     * @return array
     */
    private function get_surgeons_map() 
    {
	$surgeons = Surgeon::all();
	// Map username to id here to populate the 
	// Select control easily
	$surgeon_map = 
	array_combine(
	    $surgeons->map(function ($surgeon) {
		return $surgeon->id;
	    })->toArray(),
	    $surgeons->map(function ($surgeon) {
		return $surgeon->name;
	    })->toArray()
	);
	return $surgeon_map;
    }

    /**
     * Shows the view of the list of all patients.
     *
     * @return Response
     */
    public function index()
    {
	$patients = Patient::orderBy('name', 'asc')->get();
        return view('patients.index', compact('patients'));
    }

    /**
     * Shows the details of a specific patient.
     *
     * @param int $id
     * @return Response
     */
    public function show($id) 
    {
	$patient = Patient::find($id);
	return view('patients.show', compact('patient'));
    }

    /**
     * Serves the view for creating a new Patient.
     *
     * @return Response
     */
    public function create()
    {
	// Map username to id here to populate the 
	// Select control easily
	$surgeon_map = $this->get_surgeons_map() ;

	return view('patients.create', compact('surgeon_map'));
    }    

    /**
     * Does the actual saving of the new Patient data.
     * Validation is handled in the Form Request
     *
     * @param  CreatePatientRequest $request
     * @return Response
     */
    public function store(CreatePatientRequest $request)
    {
	$input = Request::all();

	$patient = new Patient($input);

	$surgeon = Surgeon::find($request->surgeon);
	$surgeon->patients()->save($patient);

	return redirect('patients');
    }

    /**
     * Sends out the edit view for a given Patient id
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id) 
    {
	$patient = Patient::findOrFail($id);
	$surgeon_map = $this->get_surgeons_map() ;
	return view('patients.edit', compact('patient', 'surgeon_map'));
    }

    /**
     * Deletes a given patient by id.
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id)
    {
	$patient = Patient::findOrFail($id);
	
	$patient->delete();
	return redirect('patients');
    }

    /**
     * Handles the Update Patient call.  Saves the patient via
     * the relationship with the Surgeon.
     *
     * @param  UpdatePatientRequest $request
     * @return Response
     */
    public function update(UpdatePatientRequest $request)
    {
	$patient = Patient::findOrFail($request->id);
	
	$patient->name = $request->name;
	$patient->email = $request->email;
	$patient->gender = $request->gender;
	$patient->phone = $request->phone;
	$patient->birthdate = $request->birthdate;
	
	$surgeon = Surgeon::find($request->surgeon);
	$surgeon->patients()->save($patient);

	return redirect('patients/'.$request->id);
    }
}
