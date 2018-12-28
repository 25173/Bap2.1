<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
	public function showForm()
	{
		return view('contact');
	}

	public function handleForm(request $request)
	{
		$geldigeData = $request->validate(
			[
				'firstname' => 'required',
				'middlename' => '',
				'lastname' => 'required|min:2',
				'email' => 'email |required',
//				'Emails' => 'same:email | required|email',
				'bericht' => 'required|min:2',
			]
		);
		return redirect()->route('registration.confirmation')->with('formData', $geldigeData);
	}

	public function confirmationPage()
	{
		return view('confirmation');
	}
}
