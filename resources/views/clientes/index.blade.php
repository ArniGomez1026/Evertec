@extends('layouts.layout')
@section('contenido')

<!doctype html>
<html class="no-js " lang="en">

<body>

    <section class="content">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>Clientes</h2>
                </div>
            </div>
        </div>

        <div class="container-fluid">


            @if(Session::has('mensaje'))
            <div class="alert alert-success alert-dismissible" role="alert">
                {{ Session::get('mensaje') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif

            @if(Session::has('error'))
            <div class="alert alert-danger alert-dismissible" role="alert">
                {{ Session::get('error') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif


            <a href="{{'clientes/create'}}" class="btn btn-success">Crear</a>
            <br>
            <br>

            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead class="thead-light">
                                        <tr>
                                            <th>Documento</th>
                                            <th>Nombres</th>
                                            <th>Apellidos</th>
                                            <th>Tipo documento</th>
                                            <th>Dirección</th>
                                            <th>Celular</th>
                                            <th>Estado</th>
                                            <th>Acciones</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach( $clientes as $cliente )
                                        <tr>
                                            <td>{{ $cliente->documento }}</td>
                                            <td>{{ $cliente->name }}</td>
                                            <td>{{ $cliente->apellidos }}</td>
                                            <td>{{ $cliente->doc_id }}</td>
                                            <td>{{ $cliente->dirección }}</td>
                                            <td>{{ $cliente->celular }}</td>
                                            <td id="resp {{ $cliente->estado }}">
                                                <br>
                                                @if($cliente->estado == 1)
                                                <button type="button" class="btn btn-sm btn-success">Activo</button>
                                                @else
                                                <button type="button" class="btn btn-sm btn-danger">Inactivo</button>
                                                @endif
                                            </td>
                                            <!-- <td>{{ $cliente->estado }}</td> -->
                                            <td>
                                                <a href="{{ url('/clientes/'.$cliente->id.'/edit') }}" class="btn btn-warning">
                                                    Editar
                                                </a>

                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>

                                </table>
                                <!-- {!!$clientes->links()!!} -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </section>
</body>

</html>
@endsection