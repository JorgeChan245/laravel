@extends('layouts.admin')
@section('content')
<div class="row" style="margin-left: 20px;">
    <h1>borrar paciente: {{$paciente->nombres}} {{$paciente->apellidos}}</h1>
</div>
<hr>
<div class="row" style="margin-left: 20px;">
    <div class="col-md-12">
        <div class="card  card-danger">
            <div class="card-header">
                <h3 class="card-title">¿estas seguro de borrar la paciente?</h3>
                <div class="card-tools">
                </div>
            </div>

            <div class="card-body">
                <form action="{{url('/admin/pacientes',$paciente->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <div class="row">
                        <div class="col-md-3">
                        
                            <div class="form-group">
                                <label for="apellidos">Nombres</label> 
                                <input type="text" value="{{$paciente->nombres}}" name="apellidos" class="form-control" disabled>    
                                @error('apellidos')
                                    <small style="color:red">{{$message}}</small>       
                                @enderror
                            </div>
                    
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="apellidos">Apellidos</label> 
                                <input type="text" value="{{$paciente->apellidos}}" name="apellidos" class="form-control" disabled>    
                                @error('apellidos')
                                    <small style="color:red">{{$message}}</small>       
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="celular">Celular</label>
                                <input type="text" value="{{$paciente->celular}}" name="celular" class="form-control" disabled>    
                                @error('celular')
                                    <small style="color:red">{{$message}}</small>       
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="Nro_seguro">Numero de seguro</label>
                                <input type="text" value="{{$paciente->Nro_seguro}}" name="celular" class="form-control" disabled>    
                                @error('Nro_seguro')
                                    <small style="color:red">{{$message}}</small>       
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row">
                    <div class="col-md-3">
                            <div class="form-group">
                                <label for="genero">genero</label>
                                <input type="text" value="{{$paciente->genero}}" name="genero" class="form-control" disabled>    
                                @error('genero')
                                    <small style="color:red">{{$message}}</small>       
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="alergias">Alergias</label>
                                <input type="text" value="{{$paciente->alergias}}" name="alergias" class="form-control" disabled>    
                                @error('alergias')
                                    <small style="color:red">{{$message}}</small>       
                                @enderror
                            </div>
                            
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="contacto_emergencia">contacto de emergencia</label>
                                <input type="text" value="{{$paciente->contacto_emergencia}}" name="contacto_emergencia" class="form-control" disabled>    
                                @error('contacto_emergencia')
                                    <small style="color:red">{{$message}}</small>       
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="fecha_nacimiento">Fecha de nacimiento</label> 
                                <input type="date" value="{{$paciente->fecha_nacimiento}}" name="fecha_nacimiento" class="form-control" disabled>    
                                @error('fecha_nacimiento')
                                    <small style="color:red">{{$message}}</small>       
                                @enderror
                            </div>
                        </div>
                        
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="apellidos">direccion</label> 
                                <input type="text" value="{{$paciente->direccion}}" name="direccion" class="form-control" disabled>    
                                @error('direccion')
                                    <small style="color:red">{{$message}}</small>       
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">correo</label> 
                                <input type="text" value="{{$paciente->correo}}" name="correo" class="form-control" disabled>    
                                @error('correo')
                                    <small style="color:red">{{$message}}</small>       
                                @enderror
                            </div>
                        </div>

                        
                    </div>

                    <div class="row">
                    

                       
                    </div>        

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <a href="{{url('admin/pacientes')}}" class="btn btn-success">Cancelar</a>   
                                <button type="submit" class="btn btn-danger">eliminar paciente </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
  