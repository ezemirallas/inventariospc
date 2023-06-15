@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Editar</h1>
@stop

@section('content')
<form action="/articulos/{{$articulo->id}}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
<label for="" class="form-label">Sector</label>
<input id="sector" name="sector" type="text" class="form-control" tabindex="1" value="{{$articulo->sector}}">
</div>
<div class="mb-3">
<label for="" class="form-label">ID Deposito</label>
<input id="iddeposito" name="iddeposito" type="text" class="form-control" tabindex="1" value="{{$articulo->iddeposito}}">
</div>
<div class="mb-3">
<label for="" class="form-label">ID Computadora</label>
<input id="idcomputadora" name="idcomputadora" type="text" class="form-control" tabindex="1" value="{{$articulo->idcomputadora}}">
</div>
<div class="mb-3">
<label for="" class="form-label">Direccion IP</label>
<input id="direccionip" name="direccionip" type="text" class="form-control" tabindex="1" value="{{$articulo->direccionip}}">
</div>
<div class="mb-3">
<label for="" class="form-label">Sistema Operativo</label>
<input id="sistemaoperativo" name="sistemaoperativo" type="text" class="form-control" tabindex="1" value="{{$articulo->sistemaoperativo}}">
</div>
<div class="mb-3">
<label for="" class="form-label">Disco</label>
<input id="disco" name="disco" type="text" class="form-control" tabindex="1" value="{{$articulo->disco}}">
</div>
<div class="mb-3">
<label for="" class="form-label">Memoria</label>
<input id="memoria" name="memoria" type="text" class="form-control" tabindex="1" value="{{$articulo->memoria}}">
</div>
<div class="mb-3">
<label for="" class="form-label">Microprocesador</label>
<input id="microprocesador" name="microprocesador" type="text" class="form-control" tabindex="1" value="{{$articulo->microprocesador}}">
</div>
<div class="mb-3">
<label for="" class="form-label">Anotaciones</label>
<input id="anotaciones" name="anotaciones" type="text" class="form-control" tabindex="1" value="{{$articulo->anotaciones}}">
</div>
<a href="/articulos" class="btn btn-secondary" tabindex="5">Cancelar</a>
<button type="submit" class="btn btn-primary" tabindex="4">Guardar</a>



</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop