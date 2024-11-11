@extends('layouts.admin')
@section('content')
<div class="row" style="margin-left: 20px;">
    <h1>Registro de nuevos consultorios</h1>
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
                <form action="{{url('/admin/consultorios/create')}}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="nombres">Nombre del consultorio</label><b>*</b> 
                                <input type="text" value="{{old('nombres')}}" name="nombres" class="form-control" required>    
                                @error('nombres')
                                    <small style="color:red">{{$message}}</small>       
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="ubicacion">ubicacion</label><b>*</b> 
                                <input type="text" value="{{old('ubicacion')}}" name="ubicacion" id="ubicacion" class="form-control" required>    
                                @error('ubicacion')
                                    <small style="color:red">{{$message}}</small>       
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="capacidad">capacidad</label><b>*</b> 
                                <input type="number" value="{{old('capacidad')}}" name="capacidad" class="form-control" required>    
                                @error('capacidad')
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
                                <label for="">estado</label>
                                <select name="estado" id="" class="form-control">
                                    <option value="ACTIVO">ACTIVO</option>
                                    <option value="INACTIVO">INACTIVO</option></option>
                                </select>
                                
                            </div>
                        </div>


                       

                       
                        </div>

                       

                    
     

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <a href="{{url('admin/consultorios')}}" class="btn btn-secondary">Cancelar</a>   
                                <button type="submit" class="btn btn-primary">Registrar consultorio</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
  