@extends('layouts.app')

@section('msj')
    @if (session('msj'))
        <div class="alert alert-{{ session('type') }} alert-dismissible fade show" role="alert">
            <strong>{{ session('msj') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
@endsection

@section('buttons')
    <a href=" {{ route('drivers.create') }} " class="btn btn-primary">Crear Chofer</a>
@endsection

@section('content')
    <h1 class="text-center">Lista de choferes({{ $drivers->total()}})</h1>
    <div class="row">
        <div class="col-md-12">
            <table class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th width="20%" scope="col">Nombre</th>
                    <th width="20%" scope="col">Cédula</th>
                    <th width="20%" scope="col">Placa</th>
                    <th width="20%" scope="col">Teléfono</th>
                    <th width="20%" scope="col">Correo</th>
                    <th width="20%" scope="col">Acciones</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($drivers as $driver)
                        <tr>
                            <td>{{ $driver->name }} </td>
                            <td>{{ $driver->dni }} </td>
                            <td>{{ $driver->vehicle_plate }}</td>
                            <td>{{ $driver->phone }}</td>
                            <td>{{ $driver->email }}</td>
                            <td class="text-center">
                                <div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Opciones
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a href="{{ route('drivers.edit', ['driver' => $driver->id]) }}" class="dropdown-item">Editar</a>
                                        <form action="{{ route('driver.destroy', ['driver' => $driver->id]) }}" method="POST" class="">
                                            @method("DELETE")
                                            @csrf
                                             <input class="dropdown-item" type="submit" value="Borrar">
                                        </form>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>



                <tfoot>
                    {{-- {{ $paginator->count() }} --}}
                    
                </tfoot>

              </table>
        </div>
    </div>

@endsection

@section('pagination')
{{ $drivers->links() }}
@endsection