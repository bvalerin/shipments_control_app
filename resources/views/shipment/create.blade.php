@extends('layouts.app')

@section('buttons')
    <a  href="{{ route("shipments.index") }}"class="btn btn-primary">Regresar</a>
@endsection

@section('content')

    <h1 id="new_shipment_label" class="text-center">Nuevo despacho</h1>

    <div class="row justify-content-center">
        <div class="col-md-8">

            <form class="form-group" action="{{ route("shipments.store") }}" method="post" novalidate>
                @csrf
                <h3 id="h3_customer">Cliente: </h3>
                <div class="row">
                    <div class="col-md-8">
                        <label>Seleccione un cliente</label>
                        <input type="text" value="{{ old("customer_id") }}" class="form-control @error('customer_id') is-invalid @enderror" name="customer_id" id="input_search_customer" list="customers_list" placeholder="Cliente" />
                        @error('customer_id')
                            <span class="invalid-feedback d-block"  role="alert">
                                <strong> {{ $message }} </strong>
                            </span>
                        @enderror
                        <datalist id="customers_list">
                            @foreach($customers as $customer)
                                <option value="{{ $customer->id }}">{{ $customer->name }}</option>
                            @endforeach
                        </datalist>
                    </div>

                    <div class="col-md-4">
                        <label for="phone">Fecha Colocacion</label>
                        <input value="{{ old("shipment_date")}}" class="form-control @error('shipment_date') is-invalid @enderror" id="shipment_date" type="date" name="shipment_date" >
                        @error('shipment_date')
                            <span class="invalid-feedback d-block"  role="alert">
                                <strong> {{ $message }} </strong>
                            </span>
                        @enderror
                    </div>

                </div>

                <div class="mt-2 row">
                    <div class="col-md-6">
                        <label for="name">Origen</label>
                        <input
                        class="form-control @error('origin') is-invalid @enderror"
                        id="name"
                        type="text"
                        name="origin"
                        placeholder="Origen"
                        value="{{ old('origin') }}">
                        @error('origin')
                            <span class="invalid-feedback d-block"  role="alert">
                                <strong> {{ $message }} </strong>
                            </span>
                        @enderror
                    </div>

                    <div class="col-md-6">
                        <label for="email">Destino</label>
                        <input value="{{ old('destination') }}" class="form-control @error('destination') is-invalid @enderror" id="destination" type="text" name="destination" placeholder="Destino" >
                        @error('destination')
                            <span class="invalid-feedback d-block"  role="alert">
                                <strong> {{ $message }} </strong>
                            </span>
                        @enderror
                    </div>

                </div>

                <hr>
                <h3>Datos de equipo a usar</h3>
                <div class="row">
                    <div class="col-md-3">
                        <label># de contenedor</label>
                        <input value="{{ old("container_number") }}" name="container_number" id="container_number" placeholder="Numero de contenedor" class="form-control @error('container_number') is-invalid @enderror" />
                        @error('container_number')
                        <span class="invalid-feedback d-block"  role="alert">
                            <strong> {{ $message }} </strong>
                        </span>
                        @enderror
                    </div>

                    <div class="col-md-2">
                        <label># de Chasis</label>
                        <input value="{{ old("chasis_number") }}" name="chasis_number" id="chasis_number" placeholder="Numero de Chasis" class="form-control @error('chasis_number') is-invalid @enderror" />
                        @error('chasis_number')
                        <span class="invalid-feedback d-block"  role="alert">
                            <strong> {{ $message }} </strong>
                        </span>
                        @enderror
                    </div>

                    <div class="col-md-2">
                        <label># de placa</label>
                        <input value="{{ old("container_plate") }}" name="container_plate" id="container_plate" placeholder="Numero de placa" class="form-control @error('container_plate') is-invalid @enderror" />
                        @error('container_plate')
                            <span class="invalid-feedback d-block"  role="alert">
                                <strong> {{ $message }} </strong>
                            </span>
                        @enderror
                    </div>

                    <div class="col-md-3">
                        <label>Tamaño contenedor</label>
                        <input value="{{ old("container_size") }}" name="container_size" id="container_size" placeholder="Numero de placa" class="form-control @error('container_size') is-invalid @enderror" />
                        @error('container_size')
                            <span class="invalid-feedback d-block"  role="alert">
                                <strong> {{ $message }} </strong>
                            </span>
                        @enderror
                    </div>



                    <div class="col-md-2">
                        <label for="ejes">Ejes</label>

                        <select class="form-control @error('container_axle') is-invalid @enderror" name="container_axle" id="container_axle" >
                            <option value="2" {{ old("container_axle") == 2 ? 'selected' :""}}>2 ejes</option>
                            <option value="3" {{ old("container_axle") == 3 ? 'selected' :""}}>3 ejes</option>
                            <option value="4" {{ old("container_axle") == 4 ? 'selected' :""}}>4 ejes</option>
                            <option value="5" {{ old("container_axle") == 5 ? 'selected' :""}}>5 ejes</option>
                        </select>
                        @error('container_axle')
                            <span class="invalid-feedback d-block"  role="alert">
                                <strong> {{ $message }} </strong>
                            </span>
                        @enderror
                    </div>

                </div>

                <hr>


                <h3 id="h3_driver">Chofer: </h3>
                <div class="row">

                    <div class="col-md-8">
                        <label>Seleccione un Chofer</label>
                        <input value="{{ old("driver_id") }}" name="driver_id" type="text" class="form-control @error('driver_id') is-invalid @enderror" id="input_search_driver" list="drivers_list" placeholder="Chofer" />
                        @error('driver_id')
                            <span class="invalid-feedback d-block"  role="alert">
                                <strong> {{ $message }} </strong>
                            </span>
                        @enderror
                        <datalist id="drivers_list">
                            @foreach($drivers as $driver)
                                <option value="{{ $driver->id }}">{{ $driver->name }}</option>
                            @endforeach
                        </datalist>
                    </div>

                    <div class="col-md-4">
                        <label>Placa</label>
                        <input value="{{ old("vehicle_plate") }}" type="text" class="form-control @error('vehicle_plate') is-invalid @enderror" id="vehicle_plate" name="vehicle_plate" placeholder="Placa" />
                        @error('vehicle_plate')
                            <span class="invalid-feedback d-block"  role="alert">
                                <strong> {{ $message }} </strong>
                            </span>
                        @enderror
                    </div>

                </div>

                <div class="row">
                    <div class="col-md-12">
                        <label>Instrucciones</label>
                        <textarea name="instructions" id="instructions" placeholder="Instruciones del despacho solicitado..." class="form-control @error('instructions') is-invalid @enderror" colspan="4">
                        {{ old("instructions") }}
                        </textarea>
                        @error('instructions')
                        <span class="invalid-feedback d-block"  role="alert">
                            <strong> {{ $message }} </strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <hr>
                <h3 id="h3_driver">Para boleta de retiro</h3>

                <div class="row">
                    <div class="col-md-6">
                        <label>Numero de booking</label>
                        <input value="{{ old("booking_number") }}" type="text" class="form-control @error('booking_number') is-invalid @enderror" id="booking_number" name="booking_number" placeholder="Numero de booking..." />
                        @error('booking_number')
                            <span class="invalid-feedback d-block"  role="alert">
                                <strong> {{ $message }} </strong>
                            </span>
                        @enderror
                    </div>

                    <div class="col-md-6">
                        <label>Retira de</label>
                        <input value="{{ old("retire_from") }}" type="text" class="form-control @error('retire_from') is-invalid @enderror" id="retire_from" name="retire_from" placeholder="Retira de..." />
                        @error('retire_from')
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
