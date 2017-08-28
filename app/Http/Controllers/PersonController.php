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


	public function add(Request $request) {

		if($request->isMethod("GET")) {
			return view("people.add");
		} 
		elseif($request->isMethod("POST")) {

			$this->validate($request, [
				"name" => "required",
				"email" => "required|unique:people|email",
				"phone" => "required|unique:people"
			]);

			$person = new Person();
			$person->name = $request->name;
			$person->email = $request->email;
			$person->phone = $request->phone;
			$person->save();

			return redirect()->back()->with("status", "New Person Added Successfully");

		} else {
			return redirect()->back()->with("error", "Invalid Request");	
		}
	}

	public function update(Request $request, $id = null) {

		if($request->isMethod("GET")) {
			$person = Person::find($id);
			if(is_null($person)) {
				return redirect()->back()->with("error", "Person Not Found");
			}
			return view("people.update", ["person" => $person]);
		}

		elseif ($request->isMethod("POST")) {

			$this->validate($request, [
				"id" => "required",
				"name" => "required",
				"email" => "required|email",
				"phone" => "required"
			]);

			$person = Person::find($request->id);
			$person->name = $request->name;
			$person->email = $request->email;
			$person->phone = $request->phone;
			$person->save();

			return redirect()->back()->with("status", "New Person Updated Successfully");

		}

		else {
			return redirect()->back()->with("error", "Invalid Request");
		}


	}

}
