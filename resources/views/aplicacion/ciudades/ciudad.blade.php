@extends('layouts.app')
@section('content')

<h1 class="page-header">Ciudades</h1>

<h4>Total de ciudades registradas: {{ $numRegistros }}</h4>

</br>

<div class="well well-sm text-right">
    <a class="btn btn-primary" href="/ciudades/nuevo">Nueva Ciudad</a>
</div>

@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif

<table class="table table-striped">
    <thead>
        <tr>
            <th>#</th>
            <th>Nombre</th>
            <th class="text-center">Total Clientes</th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
    @foreach($data as $k => $r)
        <tr>
            <td>{{ $k+1 }}</td>
            <td><a href="/clientes/{{ $r->id }}">{{ $r->nombre }}</a></td>
            <td class="text-center"><a href="/clientes/{{ $r->id }}">{{ $r->numClientes }}</a></td>
            <td>
                <a class="btn btn-primary btn-sm btn-block" href="/ciudades/{{ $r->id }}/editar">Editar</a>
            </td>
            <td>
                <button class="btn btn-danger btn-sm btn-block "  data-toggle="modal" data-target=".confirm-delete" data-href="/ciudades/{{ $r->id }}/borrar">Borrar</button>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
<div class="modal fade confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Confirmar Borrado</h4>
            </div>

            <div class="modal-body">
                <p>Estas seguro de eliminar este registro? Este procedimiento es irreversible.</p>
                <p>Deseas continuar?</p>
                <p class="debug-url"></p>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                <a class="btn btn-danger btn-ok">Borrar</a>
            </div>
        </div>
    </div>
</div>
@endsection