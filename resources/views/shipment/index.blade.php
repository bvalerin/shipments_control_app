@extends('layouts.app')

@section('buttons')
    <a href=" {{ route('shipments.create') }} " class="btn btn-primary">Nuevo despacho</a>
@endsection

@section('content')

    <h1 class="text-center">Lista de despachos</h1>

    <div class="row">
        <div class="col-md-12">
            <table class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th scope="col">Cliente</th>
                    <th scope="col">Fecha</th>
                    <th scope="col">Estado</th>
                    <th scope="col">Acciones</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($shipments as $ship)

                        <tr>
                            <td>{{ $ship->name }}</td>
                            <td>{{ $ship->email }}</td>
                            <td>{{ $ship->vehicle_plate }}</td>
                            <td class="text-center">
                                <a href="{{ route('shipments.edit', ['shipment' => $ship->id]) }}" class="btn btn-inline btn-primary">Editar</a>
                                <a href="" class="btn btn-inline btn-danger">Borrar</a>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
              </table>
        </div>
    </div>

@endsection

@section('pagination')
    {{ $shipments->links() }}
@endsection