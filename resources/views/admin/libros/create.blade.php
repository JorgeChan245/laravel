@extends('layouts.admin')
@section('content')
<div class="row" style="margin-left: 20px;">
    <h1>Registro de nuevo doctor</h1>
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
                <form action="{{url('/admin/doctores/create')}}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="nombres">Nombre</label><b>*</b> 
                                <input type="text" value="{{old('nombres')}}" name="nombres" class="form-control" required>    
                                @error('nombres')
                                    <small style="color:red">{{$message}}</small>       
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="apellidos">apellidos</label><b>*</b> 
                                <input type="text" value="{{old('apellidos')}}" name="apellidos" class="form-control" required>    
                                @error('apellidos')
                                    <small style="color:red">{{$message}}</small>       
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">telefono</label><b>*</b> 
                                <input type="number" value="{{old('telefono')}}" name="telefono" class="form-control" >    
                              
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="licencia_medica">licencia medica</label><b>*</b> 
                                <input type="text" value="{{old('licencia_medica')}}" name="licencia_medica" class="form-control" required>    
                                @error('licencia_medica')
                                    <small style="color:red">{{$message}}</small>       
                                @enderror
                            </div>
                        </div>
                       
                    </div>
                    

                    <div class="row">

                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">especialidad</label><b>*</b> 
                                <input type="text" value="{{old('especialidad')}}" name="especialidad" class="form-control" required>    
                                @error('especialidad')
                                    <small style="color:red">{{$message}}</small>       
                                @enderror
                            </div>
                        </div>    
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">email</label><b>*</b> 
                                <input type="text" value="{{old('email')}}" name="email" class="form-control" required>    
                                @error('email')
                                    <small style="color:red">{{$message}}</small>       
                                @enderror
                            </div>
                        </div>  
                      
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="password">Password</label><b>*</b> 
                                <input type="password" name="password" id="password" class="form-control" required>
                                @error('password')
                                    <small style="color:red">{{$message}}</small>       
                                @enderror      
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="password_confirmation">Confirmación de Password</label><b>*</b>  
                                <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" required>
                                @error('password_confirmation')
                                    <small style="color:red">{{$message}}</small>       
                                @enderror    
                            </div>
                        </div>
                    </div>                     
                        </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <a href="{{url('admin/doctores')}}" class="btn btn-secondary">Cancelar</a>   
                                <button type="submit" class="btn btn-primary">Registrar Doctor</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
  