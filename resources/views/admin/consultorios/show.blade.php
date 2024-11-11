@extends('layouts.admin')
@section('content')
<div class="row" style="margin-left: 20px;">
    <h1>Paciente: {{$consultorio->nombres}}</h1>
</div>
<hr>
<div class="row" style="margin-left: 20px;">
    <div class="col-md-12">
        <div class="card card-outline card-info">
            <div class="card-header">
                <h3 class="card-title"> datos registrados</h3>
                <div class="card-tools">
                </div>
            </div>

            <div class="card-body">
                <form action="{{url('/admin/consultorios/create')}}" method="POST">
            
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="nombre">Nombres:</label> 
                               <p>{{$consultorio->nombres}}</p>
                               
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="ubicacion">ubicacion</label>
                                 <p>{{$consultorio->ubicacion}}</p>
                                
                            </div>
                        </div>

                          <div class="col-md-3">
                            <div class="form-group">
                                <label for="telefono">telefono</label>
                                <p>{{$consultorio->telefono}}</p>
                            
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="capacidad">capacidad:</label> 
                               <p>{{$consultorio->capacidad}}</p>
                               
                            </div>
                        </div>
                        
                       
                    </div>

                    <div class="row">

                         <div class="col-md-3">
                            <div class="form-group">
                                <label for="especialidad">especialidad:</label> 
                               <p>{{$consultorio->especialidad}}</p>
                               
                            </div>
                        </div>


                    <div class="col-md-3">
                            <div class="form-group">
                                <label for="estado">estado:</label> 
                               <p>{{$consultorio->estado}}</p>           
                            </div>
                        </div>

                     
                    </div>

                   
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <a href="{{url('admin/consultorios')}}" class="btn btn-secondary">Cancelar</a>   
                                
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
  