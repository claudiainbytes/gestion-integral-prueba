<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente as Cliente;
use App\Ciudad as Ciudad;
use App\Http\Requests\ClientesRequest;

class ClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes = Cliente::orderBy('nombres','asc')->get();
        foreach($clientes as $c){
            $c->ciudad = Ciudad::find($c->ciudad_id);
        }
        $numRegistros = Cliente::count();
        return view("aplicacion.clientes.cliente", [ 'data' => $clientes , 'numRegistros' => $numRegistros ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $alm = new Cliente();
        $alm->id = null;
        $ciudades = Ciudad::all();
        return view("aplicacion.clientes.cliente-edit", [ 'alm' => $alm, 'ciudades' => $ciudades ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ClientesRequest $request)
    {
        Cliente::create($request->all());
        return redirect('clientes')->with('status', 'El registro ha sido creado.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $alm = Cliente::find($id);
        $ciudades = Ciudad::all();
        return view("aplicacion.clientes.cliente-edit", [ 'alm' => $alm ,'ciudades' => $ciudades ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ClientesRequest $request, $id)
    {
        $cliente = Cliente::find($id);
        $cliente->update(['nombres' => $request->nombres,
                          'apellidos' => $request->apellidos,
                          'cedula' => $request->cedula,
                          'email' => $request->email,
                          'telefono' => $request->telefono,
                          'ciudad_id' => $request->ciudad_id
                        ]);
        return redirect('clientes')->with('status', 'El registro ha sido actualizado.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cliente = Cliente::find($id);
        $cliente->delete();
        return redirect('clientes');
    }

    /**
     * Display the specified resource.
     *
     * @param  string  $campo
     * @param  string  $dato
     * @return \Illuminate\Http\Response
     */
    public function existe($campo, $dato)
    {
        $resp = 0;

        if( $campo == "cedula" || $campo == "email" ){
            $cliente = Cliente::where($campo,$dato)->get();
            $resp = ( $cliente->isNotEmpty() && ( $cliente[0][$campo] == $dato ) ) ? 1 : 0 ;
        }

        echo $resp;

    }

}
