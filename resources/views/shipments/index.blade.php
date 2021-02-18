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
                    <th scope="col">Name</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Address</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($shipments as $ship)

                        <tr>
                            <td>{{ $ship->name }}</td>
                            <td>{{ $ship->email }}</td>
                            <td>{{ $ship->phone }}</td>
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