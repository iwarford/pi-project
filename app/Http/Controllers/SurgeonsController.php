<?php
namespace App\Http\Controllers;

use App\Surgeon;
use App\Http\Requests;
use App\Http\Requests\CreateSurgeonRequest;
use App\Http\Requests\DestroySurgeonRequest;
use Illuminate\Routing\Redirector;
use Request;


class SurgeonsController extends Controller
{

    /**
     * Shows the view of the list of all surgeons.
     *
     * @return Response
     */
    public function index()
    {
	$surgeons = Surgeon::orderBy('name', 'asc')->get();
        return view('surgeons.index', compact('surgeons'));
    }

    /**
     * Shows the details of a specific Surgeon
     *
     * @param int $id
     * @return Response
     */
    public function show($id) 
    {
	$surgeon = Surgeon::findOrFail($id);
	$patients = $surgeon->patients;
	
	return view('surgeons.show', compact('surgeon', 'patients'));
    }    

    /**
     * Shows the view to create a new Surgeon
     *
     * @return Response
     */
    public function create()
    {
	return view('surgeons.create');
    }    
    

    /**
     * Stores the data for the new Surgeon.  Validation
     * handled in CreateSurgeonRequest.
     *
     * @param CreateSurgeonRequest $request
     * @return Response
     */
    public function store(CreateSurgeonRequest $request)
    {
	$input = Request::all();
	Surgeon::create($input);
	return redirect('surgeons');
    }


    /**
     * Updates the data for the new 
     *
     * @param UpdateSurgeonRequest $request
     * @return Response
     */
    public function update(UpdateSurgeonRequest $request) 
    {
	$surgeon = Surgeon::findOrFail($request->id);
	
	$surgeon->name = $request->name;
	$surgeon->email = $request->email;

	$surgeon->save();
	return redirect('surgeons/'.$request->id);
    }

    public function edit($id) 
    {
	$surgeon = Surgeon::findOrFail($id);
	return view('surgeons.edit', compact('surgeon'));
    }

    public function destroy(DestroySurgeonRequest $request) 
    {

	// I've attempted to do this validation and checking through
	// Validations on the form request, however they don't seem
	// to be getting called for a DELETE method.

	// Going to simply do the logic here to prevent 
	// deleting when there are still patients that belong to this
	// surgeon

	$surgeon = Surgeon::findOrFail($request->id);
	
	if ($surgeon->patients->isEmpty()) {
	    $surgeon->delete();
	}
	else {
	    return back()
                   ->withInput()
                   ->withErrors( 
		       array('message' => 
			   "You cannot delete a Surgeon when there are still Paients assigned.  Please re-assign all this Surgeon's patients before deleting."
		       ));
	}

	return redirect('surgeons');
    }
}
