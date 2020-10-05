@extends('adminlte::page')

@section('title', 'Dashboard')

<!--Activa el plugins o lo podemos activar para todas las paginas en adminlte.php plugins-->
{{--@section('plugins.Sweetalert2', true)--}}

@section('content_header')

    <h1>Dashboard</h1>

@stop

@section('content')
    <p>Welcome to this beautiful admin panel.</p>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        Swal.fire(
            'Good job!',
            'You clicked the button!',
            'success'
        )
    </script>
@stop