@extends('layouts.app')

@section('botones')
    <a href=" {{ route('customer.create') }} " class="btn btn-primary">Crear Cliente</a>
@endsection

@section('content')

    <h1 class="text-center">Lista de clientes</h1>

    <div class="row">
        <div class="col-md-12">
            <table class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Address</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($customers as $cus)

                        <tr>
                            <td>{{ $cus->name }}</td>
                            <td>{{ $cus->email }}</td>
                            <td>{{ $cus->phone }}</td>
                        </tr>
                    @endforeach

                </tbody>
              </table>
        </div>
    </div>

@endsection