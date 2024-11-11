@extends('layouts.admin')
@section('content')
<div class="row" style="margin-left: 20px;">
    <h1>Registro de nuevos secretarios</h1>
</div>
<hr>
<div class="row" style="margin-left: 20px;">
    <div class="col-md-12">
        <div class="card card-outline card-primary">
            <div class="card-header">
                <h3 class="card-title">Llene los datos</h3>
                <div class="card-tools">
                </div>
            </div>

            <div class="card-body">
                <form action="{{url('/admin/pacientes/create')}}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="nombre">Nombres</label><b>*</b> 
                                <input type="text" value="{{old('nombres')}}" name="nombres" class="form-control" required>    
                                @error('nombres')
                                    <small style="color:red">{{$message}}</small>       
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="apellidos">Apellidos</label><b>*</b> 
                                <input type="text" value="{{old('apellidos')}}" name="apellidos" id="apellidos" class="form-control" required>    
                                @error('apellidos')
                                    <small style="color:red">{{$message}}</small>       
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="celular">celular</label><b>*</b> 
                                <input type="number" value="{{old('celular')}}" name="celular" class="form-control" required>    
                                @error('celular')
                                    <small style="color:red">{{$message}}</small>       
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">numero de seguro</label><b>*</b> 
                                <input type="number" value="{{old('Nro_seguro')}}" name="Nro_seguro" class="form-control" required>    
                                @error('Nro_seguro')
                                    <small style="color:red">{{$message}}</small>       
                                @enderror
                            </div>
                        </div>
                    </div>
                    

                    <div class="row">
                        
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="fecha_nacimiento">Fecha de nacimiento</label><b>*</b> 
                                <input type="date" value="{{old('fecha_nacimiento')}}" name="fecha_nacimiento" id="fecha_nacimiento" class="form-control" required>    
                                @error('fecha_nacimiento')
                                    <small style="color:red">{{$message}}</small>       
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">genero</label>
                                <select name="genero" id="" class="form-control">
                                    <option value="H">HOMBRE</option>
                                    <option value="M">MUJER</option>
                                </select>
                                
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">alergias</label><b>*</b> 
                                <input type="text" value="{{old('alergias')}}" name="alergias" class="form-control" required>    
                                @error('alergias')
                                    <small style="color:red">{{$message}}</small>       
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">contacto emergencia</label><b>*</b> 
                                <input type="number" value="{{old('contacto_emergencia')}}" name="contacto_emergencia" class="form-control" required>    
                                @error('contacto_emergencia')
                                    <small style="color:red">{{$message}}</small>       
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">correo</label><b>*</b> 
                                <input type="text" value="{{old('correo')}}" name="correo" class="form-control" required>    
                                @error('correo')
                                    <small style="color:red">{{$message}}</small>       
                                @enderror
                            </div>
                        </div>
                        
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="direccion">direcccion</label><b>*</b> 
                                <input type="text" value="{{old('direccion')}}" name="direccion" id="direccion" class="form-control" required>    
                                @error('direccion')
                                    <small style="color:red">{{$message}}</small>       
                                @enderror
                            </div>
                        </div>

                       
                        </div>

                       

                    
     

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <a href="{{url('admin/pacientes')}}" class="btn btn-secondary">Cancelar</a>   
                                <button type="submit" class="btn btn-primary">Registrar secretarios</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
  