@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Service Computadoras</h1>
@stop

@section('content')
<a href="articles/create" class=" btn-left-panel btn btn-info mb-4">CREAR</a>

<table id="articles" class="table table-striped table-bordered shadow-lg mt-4" style="width:100%">
    <thead class="bg-primary text-white">
        <tr>

           
            <th scope="col">ID computadora</th>
            <th scope="col">Nombre del tecnico</th>
            <th scope="col">Detalle del Servicio</th>
            <th scope="col">Fecha Entrada</th>
            <th scope="col">Fecha Salida</th>
            <th></th>


        </tr>
    </thead>
    <tbody>
    @foreach ($articles as $article)
        <tr>
        
            <td>{{ $article->idcomputadora}}</td>
            <td>{{ $article->nombretecnico}}</td>
            <td>{{ $article->detalleservice}}</td>
            <td>{{ $article->fechaentrada}}</td>
            <td>{{ $article->fechasalida}}</td>
           <td>
               
                <?php
        if(auth()->id()==3 || auth()->id()==4 ){
    ?> 
     <form action="{{route ('articles.destroy',$article->id)}}" method="POST">
                <a href="/articles/{{ $article->id}}/edit"class="btn btn-info">Editar</a>          
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
    $('#articles').DataTable({
        "lengthMenu": [[5,10,50, -1], [5,10,50, "All"]] 

    });
});

</script>

@stop
