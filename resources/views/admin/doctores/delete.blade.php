@extends('layouts.admin')
@section('content')
<div class="row" style="margin-left: 20px;">
    <h1>borrar doctor: {{$doctor->nombres}} {{$doctor->apellidos}}</h1>
</div>
<hr>
<div class="row" style="margin-left: 20px;">
    <div class="col-md-12">
        <div class="card  card-danger">
            <div class="card-header">
                <h3 class="card-title">¿estas seguro de borrar el doctor?</h3>
                <div class="card-tools">
                </div>
            </div>

            <div class="card-body">
                <form action="{{url('/admin/doctores',$doctor->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <div class="row">
                        <div class="col-md-3">
                         
                            <div class="form-group">
                                <label for="apellidos">Nombres</label> 
                                <input type="text" value="{{$doctor->nombres}}" name="apellidos" class="form-control" disabled>    
                                @error('apellidos')
                                    <small style="color:red">{{$message}}</small>       
                                @enderror
                            </div>
                    
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="apellidos">Apellidos</label> 
                                <input type="text" value="{{$doctor->apellidos}}" name="apellidos" class="form-control" disabled>    
                                @error('apellidos')
                                    <small style="color:red">{{$message}}</small>       
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="telefono">telefono</label> 
                                <input type="text" value="{{$doctor->telefono}}" name="telefono" class="form-control" disabled>    
                                @error('telefono')
                                    <small style="color:red">{{$message}}</small>       
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="licencia_medica">licencia medica</label>
                                <input type="text" value="{{$doctor->licencia_medica}}" name="licencia_medica" class="form-control" disabled>    
                                @error('licencia_medica')
                                    <small style="color:red">{{$message}}</small>       
                                @enderror
                            </div>
                        </div>

                       
                        
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="especialidad">especialidad</label> 
                                <input type="text" value="{{$doctor->especialidad}}" name="especialidad" class="form-control" disabled>    
                                @error('especialidad')
                                    <small style="color:red">{{$message}}</small>       
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" value="{{$doctor->user->email}}" name="email" class="form-control" disabled>   
                                @error('email')
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
                                <a href="{{url('admin/doctores')}}" class="btn btn-success">Cancelar</a>   
                                <button type="submit" class="btn btn-danger">eliminar doctor </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
  