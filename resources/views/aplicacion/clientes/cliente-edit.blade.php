@extends('layouts.app')
@section('content')

<h1 class="page-header">
    Cliente
    @if ( $alm->id != null )
       <i> {{ $alm->nombres }} {{ $alm->apellidos }} </i> - Editar
    @else
        - Nuevo Cliente
    @endif
</h1>

<ol class="breadcrumb">
  <li><a href="/clientes">Clientes</a></li>
  <li class="active"> @php echo $alm->id != null ? $alm->nombres.' '.$alm->apellidos : 'Nuevo Registro'; @endphp</li>
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


@php $guardar = ( $alm->id != null ? 'clientes/'.$alm->id.'/guardar' :  'clientes/guardar' ); @endphp

<form id="registration-form" action="/{{ $guardar }}" method="post" enctype="multipart/form-data">

    @if ($alm->id != null)
       {{ method_field('PUT') }}
    @else
       {{ method_field('POST') }}
    @endif

    {{ csrf_field() }}

    <input type="hidden" name="id" value="{{ $alm->id }}" />

    <div class="form-group">
        <label>Nombres</label>
        <input type="text" name="nombres" value="{{ old('nombres', $alm->nombres)  }}" class="form-control" placeholder="Nombres" data-validation="length alphanumeric" data-validation-length="3-60" data-validation-allowing="  -_'ñÑáéíóúÁÉÍÓÚ" data-validation-error-msg="Los nombres deben tener un valor alfanumérico (3-60) carácteres"/>
    </div>

    <div class="form-group">
        <label>Apellidos</label>
        <input type="text" name="apellidos" value="{{ old('apellidos', $alm->apellidos) }}" class="form-control" placeholder="Apellidos" data-validation="length alphanumeric" data-validation-length="3-60" data-validation-allowing="  -_'ñÑáéíóúÁÉÍÓÚ" data-validation-error-msg="Los apellidos deben tener un valor alfanumérico (3-60) carácteres"/>
    </div>

    <div class="form-group">
        <label>Cédula</label>
        <input type="text" id="cedula" name="cedula" value="{{ old('cedula', $alm->cedula) }}" class="form-control" placeholder="Cédula" data-validation="cedula"/>
        <input type="hidden" name="oldcedula" value="{{ old('cedula', $alm->cedula) }}" id="oldcedula"/>
        <input type="hidden" name="validacedula" value="1" id="validacedula"/>
    </div>

    <div class="form-group">
        <label>E-mail</label>
        <input type="text" id="email" name="email" value="{{ old('email', $alm->email) }}" class="form-control" placeholder="E-mail" data-validation="customemail"/>
        <input type="hidden" name="oldemail" value="{{ old('email', $alm->email) }}" id="oldemail"/>
        <input type="hidden" name="validaemail" value="1" id="validaemail"/>
    </div>

    <div class="form-group">
        <label>Teléfono</label>
        <input type="text" name="telefono" value="{{ old('telefono', $alm->telefono) }}" class="form-control" placeholder="Teléfono" data-validation="telefono"/>
    </div>

    <div class="form-group">
        <label>Ciudad</label>
        <select class="form-control" name="ciudad_id" data-validation="validarciudadid">
            <option value="">Selecciona ciudad...</option>
            @foreach ($ciudades as $ciudad)
            <option value="{{$ciudad->id}}" {{ old('ciudad_id', $alm->ciudad_id) == $ciudad->id ? 'selected' : '' }} >{{$ciudad->nombre}}</option>
            @endforeach
        </select>
    </div>

    <hr />

    <div class="text-right">
        <button class="btn btn-success">Guardar</button>
        <a href="/clientes" class="btn btn-primary" role="button">Cancelar</a>
    </div>
</form>


@endsection
