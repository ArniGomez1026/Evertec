@extends('layouts.layout')
@section('contenido')


<form action="{{ url('/clientes') }}" method="post">

    @csrf
    @include('clientes.form', ['modo'=>'Crear'])
<!--
    esa linea me sirve para incluir nesesaria detalla al formulario cuando lo nesecite
-->

</div>

@endsection