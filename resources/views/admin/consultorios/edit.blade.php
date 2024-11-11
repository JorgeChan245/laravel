@extends('layouts.admin')
@section('content')
<div class="row" style="margin-left: 20px;">
    <h1>editar: {{$consultorio->nombres}} </h1>
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
                <form action="{{url('/admin/consultorios',$consultorio->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="nombres">Nombre del consultorio</label>
                                <input type="text" value="{{$consultorio->nombres}}" name="nombres" class="form-control" required>    
                                @error('nombres')
                                    <small style="color:red">{{$message}}</small>       
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="ubicacion">ubicacion</label>
                                <input type="text" value="{{$consultorio->ubicacion}}" name="ubicacion" class="form-control" required>    
                                @error('ubicacion')
                                    <small style="color:red">{{$message}}</small>       
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">telefono</label>
                                <input type="number" value="{{$consultorio->telefono}}" name="telefono" class="form-control" required>    
                                @error('telefono')
                                    <small style="color:red">{{$message}}</small>       
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="capacidad">capacidad</label>
                                <input type="number" value="{{$consultorio->capacidad}}" name="capacidad" class="form-control" >    
                                @error('capacidad')
                                    <small style="color:red">{{$message}}</small>       
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        
                    <div class="col-md-3">
                            <div class="form-group">
                                <label for="">especialidad</label>
                                <input type="text" value="{{$consultorio->especialidad}}" name="especialidad" class="form-control" >    
                                @error('especialidad')
                                    <small style="color:red">{{$message}}</small>       
                                @enderror
                            </div>
                        </div>
                    <div class="col-md-3">
                    <div class="form-group">
                                <label for="">estado</label>
                                <select name="estado" id="" class="form-control">
                                  @if ($consultorio->estado=='ACTIVO') 
                                  <option value="ACTIVO">Activo</option>
                                  <option value="INACTIVO">Inactivo</option>
                                  @else 
                                    <option value="INACTIVO">Inactivo</option>
                                    <option value="ACTIVO">Activo</option>
                                 @endif 
                                </select>
                                
                  
                            </div>
                    </div>
                      
                    </div>

                    <div class="row">
                                              
                    </div>        

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <a href="{{url('admin/consultorios')}}" class="btn btn-secondary">Cancelar</a>   
                                <button type="submit" class="btn btn-success">actualizar consultorio</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
  