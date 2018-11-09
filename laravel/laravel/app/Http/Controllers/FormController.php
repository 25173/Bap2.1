<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
	public function showForm()
	{
		return view('form.contactForm');
	}

	public function handleForm()
	{
		return "FORM AFHANDELING";
	}
}
