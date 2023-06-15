@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Planilla Inventario de Computadoras</h1>
@stop

@section('content')
<a href="articulos/create" class=" btn-left-panel btn btn-info mb-4">CREAR</a>

<table id="articulos" class="table table-striped table-bordered shadow-lg mt-4" style="width:100%">
    <thead class="bg-primary text-white">
        <tr>

           
            <th scope="col">Sector</th>
            <th scope="col">ID Deposito</th>
            <th scope="col">ID Computadora</th>
            <th scope="col">Direccion IP</th>
            <th scope="col">Sistema Operativo</th>
            <th scope="col">Disco</th>
            <th scope="col">Memoria</th>
            <th scope="col">Microprocesador</th>
            <th scope="col">Anotaciones</th>
<th></th>

        </tr>
    </thead>
    <tbody>
    @foreach ($articulos as $articulo)
        <tr>
        
            <td>{{ $articulo->sector}}</td>
            <td>{{ $articulo->iddeposito}}</td>
            <td>{{ $articulo->idcomputadora}}</td>
            <td>{{ $articulo->direccionip}}</td>
            <td>{{ $articulo->sistemaoperativo}}</td>
            <td>{{ $articulo->disco}}</td>
            <td>{{ $articulo->memoria}}</td>
            <td>{{ $articulo->microprocesador}}</td>
            <td>{{ $articulo->anotaciones}}</td>
            <td>
            <?php
        if(auth()->id()==3 || auth()->id()==4 ){
    ?>
    <form action="{{route ('articulos.destroy',$articulo->id)}}" method="POST">
    <a href="/articulos/{{ $articulo->id}}/edit"class="btn btn-info">Editar</a>
    @csrf
@method('DELETE')
<button type="submit" class="btn btn-danger">Borrar</button>
</td>
</form>
                
                <?php
        }
        ?>
            


        </tr>
        @endforeach
            



    </tbody>
</table>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css" href="stylesheet">
@stop

@section('js')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>

<script>
$(document).ready(function() {
    $('#articulos').DataTable({
        "lengthMenu": [[5,10,50, -1], [5,10,50, "All"]] 

    });
});

</script>

@stop
