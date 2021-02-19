@extends('layouts.app')

@section('buttons')
    <a  href="{{ route("customers.index") }}"class="btn btn-primary">Regresar</a>
@endsection

@section('content')

    <h1 class="text-center">Editar Cliente</h1>

    <div class="row justify-content-center">
        <div class="col-md-8">

            <form class="form-group" action="{{ route("customers.update", ['customer' => $customer->id]) }}" method="PUT" novalidate>
                @csrf
                <div class="row">
                    <div class="col-md-4">
                        <label for="name">Nombre</label>
                        <input 
                        class="form-control @error('name') is-invalid @enderror" 
                        id="name" 
                        type="text" 
                        name="name" 
                        placeholder="Nombre de cliente"
                        value="{{ $customer->name }}">
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
                        placeholder="Cédula de cliente"
                        value="{{ old('dni') }}">
                        @error('dni')
                            <span class="invalid-feedback d-block"  role="alert">
                                <strong> {{ $message }} </strong>
                            </span>
                        @enderror

                    </div>


                    <div class="col-md-4">
                        <label for="phone">Telefono</label>
                        <input class="form-control @error('phone') is-invalid @enderror" id="phone" type="text" value="{{ $customer->phone }}"name="phone" placeholder="Telefono de cliente" >
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
                        <input class="form-control @error('email') is-invalid @enderror" id="correo" type="text" name="email" value="{{ $customer->email }}" placeholder="Correo de cliente" > 
                        @error('email')
                            <span class="invalid-feedback d-block"  role="alert">
                                <strong> {{ $message }} </strong>
                            </span>
                        @enderror
                    </div>


                    <div class="col-md-8">
                        <label for="phone">Dirección</label>
                        <input value="{{ $customer->address }}" class="form-control @error('address') is-invalid @enderror" id="address" type="text" name="address" placeholder="Direccion de cliente" >
                        @error('address')
                            <span class="invalid-feedback d-block"  role="alert">
                                <strong> {{ $message }} </strong>
                            </span>
                        @enderror
                    </div>


                </div>

                <div class="row mt-2">
                    <div class="col-md-8">
                        <label for="contact_name">Encargado</label>
                        <input value="{{ $customer->contact_name }}" class="form-control @error('contact_name') is-invalid @enderror" id="contact_name" type="text" name="contact_name" placeholder="Encargado" >
                        @error('contact_name')
                            <span class="invalid-feedback d-block"  role="alert">
                                <strong> {{ $message }} </strong>
                            </span>
                        @enderror
                    </div>

                    <div class="col-md-4">
                        <label for="contact_phone">Telefono Encargado</label>
                        <input value="{{ $customer->contact_phone }}" class="form-control @error('contact_phone') is-invalid @enderror" id="contact_phone" type="text" name="contact_phone" placeholder="Telefono de encargado" >
                        @error('contact')
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