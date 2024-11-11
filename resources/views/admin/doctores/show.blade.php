@extends('layouts.admin')
@section('content')
<div class="row" style="margin-left: 20px;">
    <h1>doctor: {{$doctor->nombres}} {{$doctor ->apellidos}}</h1>
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
                <form action="{{url('/admin/doctores/create')}}" method="POST">
            
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="nombre">Nombres:</label> 
                               <p>{{$doctor->nombres}}</p>
                               
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="apellidos">Apellidos</label>
                                 <p>{{$doctor->apellidos}}</p>
                                
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="telefono">telefono</label>
                                <p>{{$doctor->telefono}}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="licencia_medica">licencia medica</label>
                                <p>{{$doctor->licencia_medica}}</p>
                          
                            </div>
                        </div>

                        
                        
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="especialidad">especialidad</label>
                               <p>{{$doctor->especialidad}}</p>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="email">Email</label> 
                                <p>{{$doctor->user->email}}</p> 
                            </div>
                        </div>
                    </div>

                   
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <a href="{{url('admin/doctores')}}" class="btn btn-secondary">Cancelar</a>   
                                
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
  