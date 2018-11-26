<?php

namespace App\Http\Controllers;

use App\Boleto;
use App\Cliente;
use Illuminate\Http\Request;

class BoletoClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  \App\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function index(Cliente $cliente)
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  \App\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function create(Cliente $cliente)
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Cliente $cliente)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cliente  $cliente
     * @param  \App\Boleto  $boleto
     * @return \Illuminate\Http\Response
     */
    public function show(Cliente $cliente, Boleto $boleto)
    {
        $cliente->boletos()->attach($request->boletos);
      return redirect ()->route(showCliente);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cliente  $cliente
     * @param  \App\Boleto  $boleto
     * @return \Illuminate\Http\Response
     */
    public function edit(Cliente $cliente, Boleto $boleto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cliente  $cliente
     * @param  \App\Boleto  $boleto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cliente $cliente, Boleto $boleto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cliente  $cliente
     * @param  \App\Boleto  $boleto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cliente $cliente, Boleto $boleto)
    {
        //
    }
}
