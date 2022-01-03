<!doctype html>

<html class="no-js " lang="en">

<body>

    <section class="content">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>{{ $modo }} cliente</h2>
                </div>
            </div>
        </div>

        <div class="container-fluid">

            <div class="card widget_2">
                <ul class="row clearfix list-unstyled m-b-0">
                    <li class="col-lg-12 col-md-12 col-sm-12">
                        <div class="body">

                            <!-- RECORRER CAMPOS VACÍOS PARA MOSTRAR ERROR (STORE-CONTROLLER) -->
                            <!-- @if(count($errors)>0)
                            <div class="alert alert-danger" role="alert">
                                <ul>
                                    @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif -->
                            <!-- _____________________ -->

                            <div class="row">
                                <div class="col-6">
                                    <h6>Tipo documento</h6>

                                    <select name="doc_id" id="selTipoDocumento" class="form-control">
                                        @foreach($tipo_doc as $TiposDocumento)
                                        <option {{isset($TiposDocumento->id)&&isset($cliente->doc_id)?($TiposDocumento->id==$cliente->doc_id?'selected' : ''): '' }} value="{{ isset($TiposDocumento->id)?$TiposDocumento->id:old('doc_id') }}">{{$TiposDocumento->doc_nombre}}</option>
                                        @endforeach
                                    </select>

                                </div>

                                <div class="col-6">
                                    <h6>Documento</h6>
                                    <input name="documento" id="inDocumento" value="{{ isset($cliente->documento)?$cliente->documento:old('documento') }}" type="number" minlength="8" maxlength="12" class="form-control @error('documento') is-invalid @enderror" aria-label="Small">
                                    @error('documento')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-6">
                                    <h6>Nombres</h6>
                                    <input name="name" id="inprimerNombre" value="{{ isset($cliente->name)?$cliente->name:old('name') }}" type="text" class="form-control @error('name') is-invalid @enderror" aria-label="Small">
                                    @error('name')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-6">
                                    <h6>Apellidos</h6>
                                    <input name="apellidos" id="insegundoApellido" value="{{ isset($cliente->apellidos)?$cliente->apellidos:old('apellidos') }}" type="text" class="form-control @error('apellidos') is-invalid @enderror" aria-label="Small">
                                    @error('apellidos')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-6">
                                    <h6>Celular</h6>
                                    <input name="celular" id="inCelular" value="{{ isset($cliente->celular)?$cliente->celular:old('celular') }}" type="number" minlength="10" maxlength="10" class="form-control @error('celular') is-invalid @enderror" aria-label="Small">
                                    @error('celular')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-6">
                                    <h6>Dirección</h6>
                                    <input name="dirección" id="inDireccion" value="{{ isset($cliente->dirección)?$cliente->dirección:old('dirección') }}" type="text" class="form-control @error('dirección') is-invalid @enderror" aria-label="Small">
                                    @error('dirección')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="row">

                                @if( $modo != 'Crear' )
                                <div class="col-6">
                                    <h6>Estado</h6>
                                    <!-- <input name="estado" id="Estado" value="{{ isset($cliente->estado)?$cliente->estado:old('estado') }}" type="text" class="form-control" aria-label="Small"> -->

                                    <input name="estado" id="checkEstado" class="form-check-input" type="checkbox" value="{{ isset($cliente->estado)}}" {{ $cliente->estado ? 'checked' : '' }}>
                                    <label class="form-check-label" for="checkEstado"></label>


                                </div>
                                @endif
                            </div>

                            <br>
                            <br>

                            <input type="submit" value="Guardar" class="btn btn-success">

                            <a href="{{'/clientes'}}" class="btn btn-warning">Regresar</a>

                        </div>
                    </li>

                </ul>
            </div>
        </div>


    </section>


</body>

</html>