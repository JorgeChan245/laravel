@extends('layouts.admin')
@section('content')
<div class="row" style="margin-left: 20px;">
    <h1>borrar consultorio: {{$consultorio->nombres}} </h1>
</div>
<hr>
<div class="row" style="margin-left: 20px;">
    <div class="col-md-12">
        <div class="card  card-danger">
            <div class="card-header">
                <h3 class="card-title">¿estas seguro de borrar el consultorio?</h3>
                <div class="card-tools">
                </div>
            </div>

            <div class="card-body">
                <form action="{{url('/admin/consultorios',$consultorio->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <div class="row">
                        <div class="col-md-3">
                        
                            <div class="form-group">
                                <label for="nombres">Nombres</label> 
                                <input type="text" value="{{$consultorio->nombres}}" name="nombres" class="form-control" disabled>    
                                @error('nombres')
                                    <small style="color:red">{{$message}}</small>       
                                @enderror
                            </div>
                    
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="ubicacion">ubicacion</label> 
                                <input type="text" value="{{$consultorio->ubicacion}}" name="ubicacion" class="form-control" disabled>    
                                @error('ubicacion')
                                    <small style="color:red">{{$message}}</small>       
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="capacidad">capacidad</label>
                                <input type="text" value="{{$consultorio->capacidad}}" name="capacidad" class="form-control" disabled>    
                                @error('capacidad')
                                    <small style="color:red">{{$message}}</small>       
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="telefono">telefono</label>
                                <input type="text" value="{{$consultorio->telefono}}" name="capacidad" class="form-control" disabled>    
                                @error('telefono')
                                    <small style="color:red">{{$message}}</small>       
                                @enderror
                            </div>
                        </div>
                    </div>
                      

                    <div class="row">
                   
                    <div class="col-md-3">
                            <div class="form-group">
                                <label for="especialidad">especialidad</label>
                                <input type="text" value="{{$consultorio->especialidad}}" name="especialidad" class="form-control" disabled>    
                                @error('especialidad')
                                    <small style="color:red">{{$message}}</small>       
                                @enderror
                            </div>
                            
                        </div>
                    <div class="col-md-3">
                        
                            <div class="form-group">
                                <label for="estado">estado</label>
                                <input type="text" value="{{$consultorio->estado}}" name="estado" class="form-control" disabled>    
                                @error('estado')
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
                                <a href="{{url('admin/consultorios')}}" class="btn btn-success">Cancelar</a>   
                                <button type="submit" class="btn btn-danger">eliminar consultorio </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
  