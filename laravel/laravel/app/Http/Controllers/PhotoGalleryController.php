<?php

namespace App\Http\Controllers;

use App\photos;
use Illuminate\Http\Request;

class PhotoGalleryController extends Controller
{

	public  function listPhotos(){

		// haal foto uit de database
		$photos = photos::all();

		return view('gallery.index', compact('photos'));
	}
    public function showPhotoForm(){
    	return view('gallery.add_photo_form');
    }

    public function savePhotoForm(Request $request){
    	$validData = $request->validate([
			'title' => 'required',
		    'description' => 'min:10',
		    'photo' => 'required|image'
	    ]);
//dd($validData);
    	// nu gaan we eerst de foto uploaden wegschrijven naar de public/gallery folder
	    $targetFolder = public_path('photos');
	    $fileName = str_random(16).'.'.$validData['photo']->getClientOriginalExtension();

	    //hier verplaatsem we het bestand
	    $validData['photo']->move($targetFolder,$fileName);

	    // nu maken we een nieuw gallery  object aan
	    $photo = new photos();
	    $photo->fill([
	    	'title' => $validData['title'],
		    'description' => $validData['description'],
		    'photo' => $fileName,
	    ]);

	    // dan roepen we save() om op te slaan
	    $photo->save();

	    //dan sturen we de gebruiker door naar de overzicht pagina
	    return redirect()-> route('gallery.index');
    }
}


