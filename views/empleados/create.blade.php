
@extends('empleados.layout')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Create New Students</div>
  <div class="card-body">
       
      <form action="{{ url('empleados') }}" method="post">
        {!! csrf_field() !!}
        
        <div class="mb-3 mt-3">
            <label>Nombres</label>
            <input type="text" name="nombres"  id="nombres" class="form-control" placeholder="Ingrese el nombre">
         </div>


         <div class="mb-3 mt-3">
            <label>Apellidos</label>
            <input type="text" name="apellidos" id="apellidos" class="form-control" placeholder="Ingrese el apellido">
         </div>

          <div class="mb-3 mt-3">
            <label>Direccion</label>
            <input type="text" name="direccion" id="direccion" class="form-control" placeholder="Ingrese la direccion">
         </div>
          <div class="mb-3 mt-3">
            <label>Telefono</label>
            <input type="text" name="telefono" id="telefono" class="form-control" placeholder="Ingrese el telefono">
         </div>
          <div class="mb-3 mt-3">
            <label>Fecha</label>
            <input type="date" name="fechanac" id="fechanac" class="form-control" placeholder="Ingrese la fecha">
         </div>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
    
  </div>
</div>

