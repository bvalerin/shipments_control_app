@extends('layouts.app')

@section('buttons')
    <a  href="{{ route("drivers.index") }}"class="btn btn-primary">Regresar</a>
@endsection

@section('content')

    <h1 class="text-center">Crear chofer</h1>

    <div class="row justify-content-center">
        <div class="col-md-8">
            <form class="form-group" action="{{ route("drivers.store") }}" method="post" novalidate>
                @csrf
                <div class="row">
                    <div class="col-md-4">
                        <label for="name">Nombre</label>
                        <input 
                        class="form-control @error('name') is-invalid @enderror" 
                        id="name" 
                        type="text" 
                        name="name" 
                        placeholder="Nombre de chofer"
                        value="{{ old('name') }}">
                        @error('name')
                            <span class="invalid-feedback d-block"  role="alert">
                                <strong> {{ $message }} </strong>
                            </span>
                        @enderror

                    </div>

                    <div class="col-md-4">
                        <label for="name">Cédula</label>
                        <input 
                        class="form-control @error('dni') is-invalid @enderror" 
                        id="name" 
                        type="text" 
                        name="dni" 
                        placeholder="Cédula de chofer"
                        value="{{ old('dni') }}">
                        @error('dni')
                            <span class="invalid-feedback d-block"  role="alert">
                                <strong> {{ $message }} </strong>
                            </span>
                        @enderror

                    </div>


                    <div class="col-md-4">
                        <label for="phone">Telefono</label>
                        <input class="form-control @error('phone') is-invalid @enderror" id="phone" type="text" value="{{ old('phone') }}"name="phone" placeholder="Telefono de chofer" >
                        @error('phone')
                            <span class="invalid-feedback d-block"  role="alert">
                                <strong> {{ $message }} </strong>
                            </span>
                        @enderror
                    </div>


                </div>

                <div class="row mt-2">

                    <div class="col-md-4">
                        <label for="email">Correo</label>
                        <input class="form-control @error('email') is-invalid @enderror" id="correo" type="text" name="email" value="{{ old('email') }}" placeholder="Correo de chofer" > 
                        @error('email')
                            <span class="invalid-feedback d-block"  role="alert">
                                <strong> {{ $message }} </strong>
                            </span>
                        @enderror
                    </div>


                    <div class="col-md-8">
                        <label for="phone">Dirección</label>
                        <input value="{{ old('address') }}" class="form-control @error('address') is-invalid @enderror" id="address" type="text" name="address" placeholder="Direccion de chofer" >
                        @error('address')
                            <span class="invalid-feedback d-block"  role="alert">
                                <strong> {{ $message }} </strong>
                            </span>
                        @enderror
                    </div>


                </div>


                <div class="row">
                    <div class="py-4 col-md-12">
                        <input type="submit" class="btn btn-success btn-block" value="Guardar">
                    </div>
                </div>


            </form>



        </div>
    </div>



@endsection