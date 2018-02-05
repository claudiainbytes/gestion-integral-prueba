<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ciudad as Ciudad;
use App\Http\Requests\CiudadesRequest;

class CiudadesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ciudades = Ciudad::orderBy('nombre','asc')->get();
        $numRegistros = Ciudad::count();
        return view("aplicacion.ciudades.ciudad", [ 'data' => $ciudades, 'numRegistros' => $numRegistros  ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $alm = new Ciudad();
        $alm->id = null;
        return view("aplicacion.ciudades.ciudad-edit", [ 'alm' => $alm ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CiudadesRequest $request)
    {
        Ciudad::create($request->all());
        return redirect('ciudades')->with('status', 'El registro ha sido creado.');
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
        $alm = Ciudad::find($id);
        return view("aplicacion.ciudades.ciudad-edit", [ 'alm' => $alm ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CiudadesRequest $request, $id)
    {
        $ciudad = Ciudad::find($id);
        $ciudad->update(['nombre' => $request->nombre ]);
        return redirect('ciudades')->with('status', 'El registro ha sido actualizado.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ciudad = Ciudad::find($id);
        $ciudad->delete();
        return redirect('ciudades');
    }
}
