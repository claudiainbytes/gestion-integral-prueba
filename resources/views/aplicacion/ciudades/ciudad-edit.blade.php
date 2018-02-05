@extends('layouts.app')
@section('content')

<h1 class="page-header">
    Cliente
    @if ( $alm->id != null )
       <i> {{ $alm->nombre }} </i> - Editar
    @else
        - Nueva Ciudad
    @endif
</h1>

<ol class="breadcrumb">
  <li><a href="/ciudades">Ciudades</a></li>
  <li class="active"> @php echo $alm->id != null ? $alm->nombre : 'Nuevo Registro'; @endphp</li>
</ol>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


@php $guardar = ( $alm->id != null ? 'ciudades/'.$alm->id.'/guardar' :  'ciudades/guardar' ); @endphp

<form id="registration-form" action="/{{ $guardar }}" method="post" enctype="multipart/form-data">

    @if ($alm->id != null)
       {{ method_field('PUT') }}
    @else
       {{ method_field('POST') }}
    @endif

    {{ csrf_field() }}

    <input type="hidden" name="id" value="{{ $alm->id }}" />

    <div class="form-group">
        <label>Nombre</label>
        <input type="text" name="nombre" value="{{ old('nombre', $alm->nombre)  }}" class="form-control" placeholder="Nombre" data-validation="length alphanumeric" data-validation-length="3-60" data-validation-allowing=" -_'ñÑáéíóúÁÉÍÓÚ" data-validation-error-msg="El nombre debe tener un valor alfanumérico (3-60) carácteres"/>
    </div>

    <hr />

    <div class="text-right">
        <button class="btn btn-success">Guardar</button>
        <a href="/ciudades" class="btn btn-primary" role="button">Cancelar</a>
    </div>
</form>


@endsection
