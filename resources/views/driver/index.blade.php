@extends('layouts.app')

@section('msj')
    @if (session('msj'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
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
                    <th width="40%" scope="col">Nombre</th>
                    <th width="20%" scope="col">Teléfono</th>
                    <th width="20%" scope="col">Correo</th>
                    <th width="20%" scope="col">Acciones</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($drivers as $driver)
                        <tr>
                            <td>{{ $driver->name }}({{ $driver->dni }})</td>
                            <td>{{ $driver->phone }}</td>
                            <td>{{ $driver->email }}</td>
                            <td class="text-center">
                                <a href="{{ route('drivers.edit', ['driver' => $driver->id]) }}" class="btn btn-inline btn-primary">Editar</a>
                                <a href="" class="btn btn-inline btn-danger">Borrar</a>
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