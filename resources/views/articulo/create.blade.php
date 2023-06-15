@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
<form action="/articulos" method="POST">
    @csrf
    <div class="mb-3">
<label for="" class="form-label">Sector</label>
<input id="sector" name="sector" type="text" class="form-control" tabindex="1">
</div>
<div class="mb-3">
<label for="" class="form-label">ID Deposito</label>
<input id="iddeposito" name="iddeposito" type="text" class="form-control" tabindex="1">
</div>
<div class="mb-3">
<label for="" class="form-label">ID Computadora</label>
<input id="idcomputadora" name="idcomputadora" type="text" class="form-control" tabindex="1">
</div>
<div class="mb-3">
<label for="" class="form-label">Direccion IP</label>
<input id="direccionip" name="direccionip" type="text" class="form-control" tabindex="1">
</div>
<div class="mb-3">
<label for="" class="form-label">Sistema Operativo</label>
<input id="sistemaoperativo" name="sistemaoperativo" type="text" class="form-control" tabindex="1">
</div>
<div class="mb-3">
<label for="" class="form-label">Disco</label>
<input id="disco" name="disco" type="text" class="form-control" tabindex="1">
</div>
<div class="mb-3">
<label for="" class="form-label">Memoria</label>
<input id="memoria" name="memoria" type="text" class="form-control" tabindex="1">
</div>
<div class="mb-3">
<label for="" class="form-label">Microprocesador</label>
<input id="microprocesador" name="microprocesador" type="text" class="form-control" tabindex="1">
</div>
<div class="mb-3">
<label for="" class="form-label">Anotaciones</label>
<input id="anotaciones" name="anotaciones" type="text" class="form-control" tabindex="1">
</div>
<a href="/articulos" class="btn btn-secondary" tabindex="5">Cancelar</a>
<button type="submit" class="btn btn-primary" tabindex="4">Guardar</a>



</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
   
@stop
