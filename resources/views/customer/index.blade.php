@extends('layouts.app')

@section('buttons')
    <a href=" {{ route('customers.create') }} " class="btn btn-primary">Crear Cliente</a>
@endsection

@section('content')
    <h1 class="text-center">Lista de clientes({{ $customers->total()}})</h1>
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
                    @foreach ($customers as $cus)
                        <tr>
                            <td>{{ $cus->name }}({{ $cus->dni }})</td>
                            <td>{{ $cus->phone }}</td>
                            <td>{{ $cus->email }}</td>
                            <td class="text-center">
                                <a href=" {{ route('customers.edit', ['customer' => $cus->id]) }} " class="btn btn-inline btn-primary">Editar</a>
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
{{ $customers->links() }}
@endsection