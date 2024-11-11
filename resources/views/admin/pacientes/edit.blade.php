@extends('layouts.admin')
@section('content')
<div class="row" style="margin-left: 20px;">
    <h1>editar: {{$paciente->nombres}} {{$paciente->apellidos}}</h1>
</div>
<hr>
<div class="row" style="margin-left: 20px;">
    <div class="col-md-12">
        <div class="card card-outline card-success">
            <div class="card-header">
                <h3 class="card-title">Llene los datos</h3>
                <div class="card-tools">
                </div>
            </div>

            <div class="card-body">
                <form action="{{url('/admin/pacientes',$paciente->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="nombre">Nombres</label>
                                <input type="text" value="{{$paciente->nombres}}" name="nombres" class="form-control" required>    
                                @error('nombres')
                                    <small style="color:red">{{$message}}</small>       
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="apellidos">Apellidos</label>
                                <input type="text" value="{{$paciente->apellidos}}" name="apellidos" class="form-control" required>    
                                @error('apellidos')
                                    <small style="color:red">{{$message}}</small>       
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">celular</label>
                                <input type="number" value="{{$paciente->celular}}" name="celular" class="form-control" required>    
                                @error('celular')
                                    <small style="color:red">{{$message}}</small>       
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="Nro_seguro">Numero de seguro</label>
                                <input type="text" value="{{$paciente->Nro_seguro}}" name="Nro_seguro" class="form-control" >    
                                @error('Nro_seguro')
                                    <small style="color:red">{{$message}}</small>       
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        
                    <div class="col-md-3">
                    <div class="form-group">
                                <label for="">genero</label>
                                <select name="genero" id="" class="form-control">
                                  @if ($paciente->genero=='H') 
                                  <option value="H">HOMBRE</option>
                                  <option value="M">MUJER</option>
                                  @else 
                                    <option value="M">MUJER</option>
                                    <option value="H">HOMBRE</option>
                                 @endif 
                                </select>
                                
                  
                            </div>
                    </div>
                    <div class="col-md-3">
                            <div class="form-group">
                                <label for="alergias">Alergias</label>
                                <input type="text" value="{{$paciente->alergias}}" name="alergias" class="form-control" required>    
                                @error('alergias')
                                    <small style="color:red">{{$message}}</small>       
                                @enderror
                            </div>
                        </div>

                     

                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="fecha_nacimiento">Fecha de nacimiento</label>
                                <input type="date" value="{{$paciente->fecha_nacimiento}}" name="fecha_nacimiento" id="fecha_nacimiento" class="form-control" required>    
                                @error('fecha_nacimiento')
                                    <small style="color:red">{{$message}}</small>       
                                @enderror
                            </div>
                        </div>
                        
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="direccion">direcccion</label>
                                <input type="text" value="{{$paciente->direccion}}" name="direccion" id="direccion" class="form-control" required>    
                                @error('direccion')
                                    <small style="color:red">{{$message}}</small>       
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="correo">Correo</label>
                                <input type="text" value="{{$paciente->correo}}" name="correo" class="form-control">    
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
                                <a href="{{url('admin/pacientes')}}" class="btn btn-secondary">Cancelar</a>   
                                <button type="submit" class="btn btn-success">actualizar paciente</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
  