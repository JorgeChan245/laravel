@extends('layouts.admin')
@section('content')
<div class="row" style="margin-left: 20px;">
    <h1>editar: {{$doctor->nombres}} {{$doctor->apellidos}}</h1>
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
                <form action="{{url('/admin/doctores',$doctor->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="nombre">Nombres</label><b>*</b> 
                                <input type="text" value="{{$doctor->nombres}}" name="nombres" class="form-control" required>    
                                @error('nombres')
                                    <small style="color:red">{{$message}}</small>       
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="apellidos">Apellidos</label><b>*</b> 
                                <input type="text" value="{{$doctor->apellidos}}" name="apellidos" class="form-control" required>    
                                @error('apellidos')
                                    <small style="color:red">{{$message}}</small>       
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="telefono">telefono</label><b>*</b> 
                                <input type="text" value="{{$doctor->telefono}}" name="telefono"class="form-control" required>    
                                @error('telefono')
                                    <small style="color:red">{{$message}}</small>       
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="licencia_medica">licencia medica</label><b>*</b> 
                                <input type="text" value="{{$doctor->licencia_medica}}" name="licencia_medica"  class="form-control" required>    
                                @error('licencia_medica')
                                    <small style="color:red">{{$message}}</small>       
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="especialidad">especialidad</label><b>*</b> 
                                <input type="text" value="{{$doctor->especialidad}}" name="especialidad" class="form-control" required>    
                                @error('especialidad')
                                    <small style="color:red">{{$message}}</small>       
                                @enderror
                            </div>
                        </div>
                        
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="email">Email</label><b>*</b>  
                                <input type="email" value="{{$doctor->user->email}}" name="email" id="email" class="form-control" >   
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
                                <input type="password" name="password" id="password" class="form-control">
                                @error('password')
                                    <small style="color:red">{{$message}}</small>       
                                @enderror      
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="password_confirmation">Confirmación de Password</label><b>*</b>  
                                <input type="password" name="password_confirmation" id="password_confirmation" class="form-control">
                                @error('password_confirmation')
                                    <small style="color:red">{{$message}}</small>       
                                @enderror    
                            </div>
                        </div>
                    </div>        

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <a href="{{url('admin/doctores')}}" class="btn btn-secondary">Cancelar</a>   
                                <button type="submit" class="btn btn-success">actualizar doctor</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
  