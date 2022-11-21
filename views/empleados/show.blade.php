@extends('empleados.layout')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Empleados</div>
  <div class="card-body">
        <table class='table table-hover table-responsive table-bordered'>
                <tr class="card-text" >
                    <td>ID</td>
                    <td>id : {{$empleados->id}}</td>
                </tr>
                <tr class="card-text" >
                    <td>Nombres</td>
                    <td>nombres : {{$empleados->nombres}}</td>
                </tr>
                <tr class="card-text" >
                    <td>Apellidos</td>
                    <td>apellidos : {{$empleados->apellidos}}</td>
                </tr>
                <tr  class="card-text" >
                    <td>Direccion</td>
                    <td>direccion : {{$empleados->direccion}}</td>
                </tr>
                <tr class="card-text" >
                    <td>Telefono</td>
                    <td>telefono : {{$empleados->telefono}}</td>
                </tr>
                 <tr class="card-text">
                    <td>Fecha de nacimiento</td>
                    <td>fechanac : {{$empleados->fechanac}}</td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                    <a href="javascript:history.back()" class='btn btn-danger'>Back to read</a>
                    </td>
                </tr>
            </table>
  </div>
    </hr>
  </div>
</div>