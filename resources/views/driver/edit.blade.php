@extends('layouts.app')

@section('buttons')
    <a  href="{{ route("drivers.index") }}"class="btn btn-primary">Regresar</a>
@endsection

@section('content')

    <h1 class="text-center">Editar chofer</h1>

    <div class="row justify-content-center">
        <div class="col-md-8">
            <form class="form-group" action="{{ route("drivers.update", ['driver' => $driver->id]) }}" method="PUT" novalidate>
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
                        value="{{ $driver->name }}">
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
                        value="{{ $driver->dni }}">
                        @error('dni')
                            <span class="invalid-feedback d-block"  role="alert">
                                <strong> {{ $message }} </strong>
                            </span>
                        @enderror

                    </div>


                    <div class="col-md-4">
                        <label for="phone">Telefono</label>
                        <input class="form-control @error('phone') is-invalid @enderror" id="phone" type="text" value="{{ $driver->phone }}"name="phone" placeholder="Telefono de chofer" >
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
                        <input class="form-control @error('email') is-invalid @enderror" id="correo" type="text" name="email" value="{{ $driver->email }}" placeholder="Correo de chofer" > 
                        @error('email')
                            <span class="invalid-feedback d-block"  role="alert">
                                <strong> {{ $message }} </strong>
                            </span>
                        @enderror
                    </div>


                    <div class="col-md-8">
                        <label for="phone">Dirección</label>
                        <input value="{{ $driver->address }}" class="form-control @error('address') is-invalid @enderror" id="address" type="text" name="address" placeholder="Direccion de chofer" >
                        @error('address')
                            <span class="invalid-feedback d-block"  role="alert">
                                <strong> {{ $message }} </strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <hr>
                <h3>Datos del Vehiculo</h3>

                <div class="row mt-2">
                    <div class="col-md-4">
                        <label for="email">Placa</label>
                        <input class="form-control @error('vehicle_plate') is-invalid @enderror" id="vehicle_plate" type="text" name="vehicle_plate" value="{{ $driver->vehicle_plate }}" placeholder="Placa del Vehiculo" > 
                        @error('vehicle_plate')
                            <span class="invalid-feedback d-block"  role="alert">
                                <strong> {{ $message }} </strong>
                            </span>
                        @enderror
                    </div>

                    <div class="col-md-4">
                        <label for="email">Ejes</label>

                        <select class="form-control @error('vehicle_axle') is-invalid @enderror" name="vehicle_axle" id="vehicle_axle" >
                            <option value="2" {{ $driver->vehicle_axle == 2 ? 'selected' :""}}>2 ejes</option>
                            <option value="3" {{ $driver->vehicle_axle == 3 ? 'selected' :""}}>3 ejes</option>
                            <option value="4" {{ $driver->vehicle_axle == 4 ? 'selected' :""}}>4 ejes</option>
                            <option value="5" {{ $driver->vehicle_axle == 5 ? 'selected' :""}}>5 ejes</option>
                        </select>
                        @error('vehicle_axle')
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