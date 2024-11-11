@extends('layouts.admin')
@section('content')
<div class="row" style="margin-left: 20px;">
    <h1>borrar secretaria: {{$secretaria->nombres}} {{$secretaria->apellidos}}</h1>
</div>
<hr>
<div class="row" style="margin-left: 20px;">
    <div class="col-md-12">
        <div class="card  card-danger">
            <div class="card-header">
                <h3 class="card-title">¿estas seguro de borrar la secretaria?</h3>
                <div class="card-tools">
                </div>
            </div>

            <div class="card-body">
                <form action="{{url('/admin/secretarias',$secretaria->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <div class="row">
                        <div class="col-md-3">
                         
                            <div class="form-group">
                                <label for="apellidos">Nombres</label> 
                                <input type="text" value="{{$secretaria->nombres}}" name="apellidos" class="form-control" disabled>    
                                @error('apellidos')
                                    <small style="color:red">{{$message}}</small>       
                                @enderror
                            </div>
                    
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="apellidos">Apellidos</label> 
                                <input type="text" value="{{$secretaria->apellidos}}" name="apellidos" class="form-control" disabled>    
                                @error('apellidos')
                                    <small style="color:red">{{$message}}</small>       
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="RFC">RFC</label> 
                                <input type="text" value="{{$secretaria->RFC}}" name="RFC" class="form-control" disabled>    
                                @error('RFC')
                                    <small style="color:red">{{$message}}</small>       
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="celular">Celular</label>
                                <input type="text" value="{{$secretaria->celular}}" name="celular" class="form-control" disabled>    
                                @error('celular')
                                    <small style="color:red">{{$message}}</small>       
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="fecha_nacimiento">Fecha de nacimiento</label> 
                                <input type="date" value="{{$secretaria->fecha_nacimiento}}" name="fecha_nacimiento" class="form-control" disabled>    
                                @error('fecha_nacimiento')
                                    <small style="color:red">{{$message}}</small>       
                                @enderror
                            </div>
                        </div>
                        
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="apellidos">direccion</label> 
                                <input type="text" value="{{$secretaria->direccion}}" name="direccion" class="form-control" disabled>    
                                @error('direccion')
                                    <small style="color:red">{{$message}}</small>       
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="email">Email</label><b>*</b>  
                                <input type="email" value="{{$secretaria->user->email}}" name="email" class="form-control" disabled>   
                                @error('email')
                                    <small style="color:red">{{$message}}</small>       
                                @enderror   
                            </div>
                        </div>
                    </div>

                    <div class="row">
                    <div class="col-md-4">
                            <div class="form-group">
                                <label for="password_confirmation">Password</label>
                                <input type="password" name="password" id="password" class="form-control" disabled>
                                @error('password')
                                    <small style="color:red">{{$message}}</small>       
                                @enderror    
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="password_confirmation">Confirmación de Password</label>
                                <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" disabled>
                                @error('password_confirmation')
                                    <small style="color:red">{{$message}}</small>       
                                @enderror    
                            </div>
                        </div>
                    </div>        

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <a href="{{url('admin/secretarias')}}" class="btn btn-success">Cancelar</a>   
                                <button type="submit" class="btn btn-danger">eliminar secretaria </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
  