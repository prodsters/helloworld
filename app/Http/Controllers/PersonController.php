<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Person;
use Log;

class PersonController extends Controller
{
    

	public function index() {
		$people = Person::all();
		return view("people.index", ["people" => $people]);
	}

	public function view($id) {
		//validations
		$person = null;

		if(is_null($id) || is_null($person = Person::find($id)) ) {
			return redirect()->back()->with("error", "Person Not Found In Database");
		}

		return view("people.view", ["person" => $person]);

	}


	public function delete(Request $request) {
		
		Log::info($request);

		$person = null;

		if(is_null($request->id) || is_null($person = Person::find($request->id)) ) {
			return redirect()->back()->with("error", "Person Not Found");
		}

		$person->delete();

		return redirect()->back()->with("status", "Person Deleted Successfully");
	}

}
