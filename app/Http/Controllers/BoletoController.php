<?php

namespace App\Http\Controllers;

use App\Boleto;
use App\Cliente;
use Illuminate\Http\Request;

class BoletoController extends Controller
{
     /*pedir contraseña y usuario
   public function __construct()
    {
        $this->middleware('auth');
    }*/

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $boletos=Boleto::all();
        return view('boletos.indexBoleto',compact('boletos'));
        //
    }

    public function create()
    {
        return view('boletos.formBoleto');
    }

    public function store(Request $request)
    {
        Boleto::create($request->all());
      //return redirect()->route('cliente.index');
      
      return "Cliente creado con exito";
    }

     public function show(Boleto $boleto)
    {
      $clientes=Cliente::all();
        //consulta a db con id
      //pasa la informacion en la variable $materium a la vista
      return view('boletos.showBoleto')->whith(['boleto'=>$boleto,'cliente'=>$cliente]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Boleto  $boleto
     * @return \Illuminate\Http\Response
     */
    public function edit(Boleto $boleto)
    {
        return view('boletos.formBoleto')('id');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Boleto  $boleto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Boleto $boleto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Boleto  $boleto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Boleto $boleto)
    {
        $boleto->delete();
      return redirect()->route('boleto.index');
    }
}
