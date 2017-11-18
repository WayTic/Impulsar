<?php

namespace App\Http\Controllers;

use App\Formulario;
use Illuminate\Http\Request;

class pagesController extends Controller
{
    public function form()
    {
    	 return view('form');
    }

    public function guardar(Request $request)
    {
    	// dd($request->all());

    	// Formulario::create($request->all());

    	$formulario=new Formulario;

    	$formulario->data= $request->input('nombre');

    	$formulario->save();
    	
    	return 'guardado';
    }
}
