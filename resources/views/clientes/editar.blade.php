@extends('layouts.layout')
@section('contenido')


<form action="{{ url('/clientes/'.$cliente->id ) }}" method="post">

    @csrf

    {{ method_field('PATCH') }}

    @include('clientes.form', ['modo'=>'Editar'])

</div>

@endsection