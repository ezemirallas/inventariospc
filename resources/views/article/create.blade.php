@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
<form action="/articles" method="POST">
    @csrf
    <div class="mb-3">
<label for="" class="form-label">ID Computadora</label>
<input id="idcomputadora" name="idcomputadora" type="text" class="form-control" tabindex="1">
</div>
<div class="mb-3">
<label for="" class="form-label">Nombre del Tecnico</label>
<input id="nombretecnico" name="nombretecnico" type="text" class="form-control" tabindex="1" >
</div>
<div class="mb-3">
<label for="" class="form-label">Detalle de Service</label>
<input id="detalleservice" name="detalleservice" type="text" class="form-control" tabindex="1">
</div>
<div class="mb-3">
<label for="" class="form-label">Fecha Entrada</label>
<input id="fechaentrada" name="fechaentrada" type="text" class="form-control" tabindex="1">
</div>
<div class="mb-3">
<label for="" class="form-label">Fecha Salida</label>
<input id="fechasalida" name="fechasalida" type="text" class="form-control" tabindex="1">
</div>
<a href="/articles" class="btn btn-secondary" tabindex="5">Cancelar</a>
<button type="submit" class="btn btn-primary" tabindex="4">Guardar</a>



</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
   
@stop
