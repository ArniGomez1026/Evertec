<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\tipo_doc;
use Exception;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['clientes'] = Cliente::paginate(10);
        return view('clientes.index', $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipo_doc = tipo_doc::all();

        return view('clientes.create', ['tipo_doc' => $tipo_doc]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $campos = [
            'doc_id' => 'required|int',
            'documento' => 'required',
            'name' => 'required|String|max:255',
            'apellidos' => 'required|String|max:255',
            'celular' => 'required|int',
            'dirección' => 'required|String|max:255',
        ];
        $mensaje = [
            'required' => 'El :attribute es requerido',
            'doc_id.required' => 'El tipo de documento es requerido',
            'documento.required' => 'El documento es requerido',
            'name.required' => 'El primer nombre es requerido',
            'apellidos.required' => 'El primer apellido es requerido',
            'celular.required' => 'El celular es requerido',
            'dirección.required' => 'La dirección es requerida'
        ];
        $this->validate($request, $campos, $mensaje);

        $datosCliente = request()->all();
        
        $datosCliente['estado'] = 1;


        // dd($datosCliente);

        try {

            Cliente::create($datosCliente);
            return redirect('clientes')->with('mensaje', 'Cliente creado exitosamente');
        } catch (Exception $e) {
            dd($e);
            return redirect('clientes')->with('error', 'Cliente no creado');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function show(Cliente $cliente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       
      $cliente = Cliente::findOrFail($id);
    //   dd($cliente);
      $tipo_doc = tipo_doc::all();
  
        
        if ($cliente == null || $cliente == '') {
            return redirect('clientes')->with('error', 'Cliente no encontrado');
        }
        return view('clientes.editar' , ['cliente' => $cliente, 'tipo_doc' => $tipo_doc]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datosCliente = request()->except(['_token', '_method']);

        $datosCliente['estado'] = isset($datosCliente['estado']) ? 1 : 0;

        try {

            Cliente::where('id', '=', $id)->update($datosCliente);
            return redirect('clientes')->with('mensaje', 'Cliente editado exitosamente');
            
        } catch (Exception $e) {
            return redirect('clientes')->with('error', 'Cliente no editado');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cliente $cliente)
    {
        //
    }
}
