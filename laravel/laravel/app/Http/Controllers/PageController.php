<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
	/**
	 * Show the form to create a new blog post.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('post.create');
	}

	/**
	 * Store a new blog post.
	 *
	 * @param  Request  $request
	 * @return Response
	 */
	public function store()
	{
		$this->validate(request(),[
			'title' => 'required',
			'body' => 'required'
		]);
		// Validate and store the blog post...
	}
}
