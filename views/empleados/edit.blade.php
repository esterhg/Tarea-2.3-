@extends('empleados.layout')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Empleados</div>
  <div class="card-body">
  <form action="{{ url('empleados/' .$empleados->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <table class='table table-hover table-responsive table-bordered'>
                <tr class="card-text" >
                    <td>ID</td>
                    <td><input type='text' name='id'  id='id' value="{{$empleados->id}}" class='form-control' /></td>
                </tr>
                <tr class="card-text" >
                    <td>Nombres</td>
                    <td><input type='text' name='nombres' id='nombres' value="{{$empleados->nombres}}" class='form-control' /></td>
                </tr>
                <tr class="card-text" >
                    <td>Apellidos</td>
                    <td><input type='text' name='apellidos' id='apellidos'  value="{{$empleados->apellidos}}" class='form-control' /></td>
                </tr>
                <tr  class="card-text" >
                    <td>Direccion</td>
                    <td><input type='text' name='direccion' id='direccion'  value="{{$empleados->direccion}}" class='form-control' /></td>
                </tr>
                <tr class="card-text" >
                    <td>Telefono</td>
                    <td><input type='text' name='telefono' id='telefono'   value="{{$empleados->telefono}}" class='form-control' /></td>
                </tr>
                 <tr class="card-text">
                    <td>Fecha de nacimiento</td>
                    <td><input type='text' name='fechanac' id='fechanac' value="{{$empleados->fechanac}}"  class='form-control' /></td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                    <input type="submit" value="Update" class="btn btn-success">
                    <a href="javascript:history.back()" class='btn btn-danger'>Back to read</a>
                    </td>
                </tr>
            </table>


   </form>
      
  </div>
    </hr>
  </div>
</div>

