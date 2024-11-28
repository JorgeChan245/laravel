@extends('layouts.admin')
@section('content')
<div class="row" style="margin-left: 20px;">
    <h1>Paciente: {{$paciente->nombres}} {{$paciente->apellidos}}</h1>
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
                <form action="{{url('/admin/pacientes/create')}}" method="POST">
            
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="nombre">Nombres:</label> 
                               <p>{{$paciente->nombres}}</p>
                               
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="apellidos">Apellidos</label>
                                 <p>{{$paciente->apellidos}}</p>
                                
                            </div>
                        </div>

                          <div class="col-md-3">
                            <div class="form-group">
                                <label for="celular">Celular</label>
                                <p>{{$paciente->celular}}</p>
                            
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="Nro_seguro">Numero de seguro:</label> 
                               <p>{{$paciente->Nro_seguro}}</p>
                               
                            </div>
                        </div>
                        
                       
                    </div>

                    <div class="row">

                    <div class="col-md-3">
                            <div class="form-group">
                                <label for="genero">Genero:</label> 
                               
                              <p>  @if ($paciente->genero=='H')Hombre @else Mujer  @endif  </p>                
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="alergias">Alergias:</label> 
                               <p>{{$paciente->alergias}}</p>
                               
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="contacto_emergencia">contacto de emergencia:</label> 
                               <p>{{$paciente->contacto_emergencia}}</p>
                               
                            </div>
                        </div>
                        
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="fecha_nacimiento">Fecha de nacimiento</label> 
                               <p>{{$paciente->fecha_nacimiento}}</p>
                            </div>
                        </div>
                        
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="direccion">direcccion</label>
                               <p>{{$paciente->direccion}}</p>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="correo">correo:</label> 
                               <p>{{$paciente->correo}}</p>
                               
                            </div>
                        </div>

                        

                        
                    </div>

                   
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <a href="{{url('admin/pacientes')}}" class="btn btn-secondary">Cancelar</a>   
                                
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
  