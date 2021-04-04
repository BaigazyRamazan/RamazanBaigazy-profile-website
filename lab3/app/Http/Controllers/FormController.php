<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Form;

class FormController extends Controller
{
    public function store(Request $request){
    	if($request->hasFile('photo')){
    		$file = $request->file('photo');
    		$destinationPath = 'images';
    		$file->move($destinationPath,$file->getClientOriginalName());

    		Form::create([
            	'Name' => $request->name,
            	'Surname' => $request->surname,
            	'Email' => $request->email,
            	'Profile photo' => $file->getClientOriginalName()
        	]);
    	} else {
    		dd('Request does not exists');
    	}
    	Form::create([
            'Name' => $request->name,
            'Surname' => $request->surname,
            'Email' => $request->email,
            'Profile photo' => $request->photo
        ]);

        return back();
    }
}
