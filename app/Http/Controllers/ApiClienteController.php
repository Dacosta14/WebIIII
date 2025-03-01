<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource. CRUD
     */

     //leitura
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */

     //Criar/Cadastrar
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */

     //mostrar
    public function show(cliente $manchete)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */

     //atualizar
    public function update(Request $request, cliente $cliente)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */

     //deletar
    public function destroy(cliente $cliente)
    {
        //
    }
}
