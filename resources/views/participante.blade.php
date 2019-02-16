@extends('layout.master')
@section('title', 'Page Title')
@section('content')
<div class="panel panel-default">
    <div class="panel-heading">Panel Heading</div>
    <div class="panel-body">
        <div class="col-md-12">
            <form action="" method="post">
                <label>Archivo de lista de participantes en formato (.csv)</label>
                <input type="file" name="archivo">
                <input type="submit" value="enviar">
            </form>
            <table id="table"></table> 
        </div>
    </div>
</div>
<script>
    $('#table').dataTable({
        destroy: true,
        data: [],
        columns: [
            {title: 'Número'},
            {title: "Nombre"}
        ],
        columnDefs: [{
                targets: [1],
                orderData: false
            }]
    });
</script>
@stop
