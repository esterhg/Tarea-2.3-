@extends('empleados.layout')
@section('content')
    <div class="container">
        <div class="row" style="margin:20px;">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2> Lista Empleados </h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/empleados/create') }}" class="btn btn-success btn-sm" title="Crear Empleado">
                        Crear Empleado
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nombres</th>
                                        <th>Apellidos</th>
                                        <th>Direccion</th>
                                        <th>Telefono</th>
                                        <th>Fecha Nacimiento</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($empleados as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->nombres}}</td>
                                        <td>{{ $item->apellidos }}</td>
                                        <td>{{ $item->direccion}}</td>
                                        <td>{{ $item->telefono}}</td>
                                        <td>{{ $item->fechanac}}</td>
  
                                        <td>
                                        <a href="{{ url('/empleados/' . $item->id) }}" title="View"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                        <a href="{{ url('/empleados/' . $item->id . '/edit') }}" title="Edit"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
  
                                            <form method="POST" action="{{ url('/empleados' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete empleados" onclick="return confirm('Confirm delete?');"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
  
                    </div>
                </div>
            </div>
        </div>
    </div>
