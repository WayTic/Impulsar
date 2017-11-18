<?php

namespace App\Http\Controllers;

use App\Formulario;
use Illuminate\Http\Request;

class pagesController extends Controller
{
    public function form(Request $request)
    {
    	//dd($request->all());
    	$empresa=$request->input('empresa');
    	 return view('form')->with('empresa',$empresa);
    }

    public function guardar(Request $request)
    {
    	// dd($request->all());

    	// Formulario::create($request->all());

    	$formulario=new Formulario;

    	$data=array(
    		'nombre' => $request->input('nombre'),
    		'correo' => $request->input('correo')
    	);

    	//$formulario->data= $request->input('nombre');

    	$formulario->cod_empresa = $request->input('empresa');

    	$formulario->data = serialize($data);

    	$formulario->save();
    	
    	return view('welcome');

    	//return 'guardado';
    }
}
