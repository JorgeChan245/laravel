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
                <form action="{{url('/admin/secretarias/create')}}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="nombre">Nombres</label><b>*</b> 
                                <input type="text" value="{{old('nombres')}}" name="nombres" id="nombre" class="form-control" required>    
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
                                <label for="RFC">RFC</label><b>*</b> 
                                <input type="text" value="{{old('RFC')}}" name="RFC" id="RFC" class="form-control" required>    
                                @error('RFC')
                                    <small style="color:red">{{$message}}</small>       
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="celular">Celular</label><b>*</b> 
                                <input type="text" value="{{old('celular')}}" name="celular" id="celular" class="form-control" required>    
                                @error('celular')
                                    <small style="color:red">{{$message}}</small>       
                                @enderror
                            </div>
                        </div>

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
                                <label for="direccion">direcccion</label><b>*</b> 
                                <input type="text" value="{{old('direccion')}}" name="direccion" id="direccion" class="form-control" required>    
                                @error('direccion')
                                    <small style="color:red">{{$message}}</small>       
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="email">Email</label><b>*</b>  
                                <input type="email" value="{{old('email')}}" name="email" id="email" class="form-control" required>   
                                @error('email')
                                    <small style="color:red">{{$message}}</small>       
                                @enderror   
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="password">Password</label><b>*</b> 
                                <input type="password" name="password" id="password" class="form-control" required>
                                @error('password')
                                    <small style="color:red">{{$message}}</small>       
                                @enderror      
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="password_confirmation">Confirmación de Password</label><b>*</b>  
                                <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" required>
                                @error('password_confirmation')
                                    <small style="color:red">{{$message}}</small>       
                                @enderror    
                            </div>
                        </div>
                    </div>        

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <a href="{{url('admin/secretarias')}}" class="btn btn-secondary">Cancelar</a>   
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
  