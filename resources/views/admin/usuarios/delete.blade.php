@extends('layouts.admin')
@section('content')
<div class="row"  style="margin-left: 20px;">
      <h1>Usuario: {{$usuario->name}} </h1>
</div>
<hr>
<div class="row"  style="margin-left: 20px;">
<div class="col-md-6">
<div class="card card card-danger">
<div class="card-header">
<h3 class="card-title">¿Estas seguro de eliminar este registro?</h3>
<div class="card-tools">
</div>
</div>

<div class="card-body">

      <form action="{{url('admin/usuarios',$usuario->id)}}" method="POST">
            @csrf
            @method('DELETE')
<div class="row"  style="margin-left: 0px;">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="">Nombre del Usuario</label> 
                    <input type="text" value="{{$usuario->name}}" name="name" class="form-control" disabled >    
                    @error('name')
                 <small style="color:red">{{$message}}</small>       
                    @enderror
                </div>
                </div>
            </div>
            
            <div class="row"  style="margin-left: 0px;">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="">Email</label>  
                    <input type="email" value="{{$usuario->email}}" name="email" class="form-control" disabled>   
                    @error('email')
                 <small style="color:red">{{$message}}</small>       
                    @enderror   
                </div>
            </div>
            </div>
            <div class="row"  style="margin-left: 0px;" >
            <div class="col-md-12">
                <div class="form-group">
                   <a href="{{url('admin/usuarios')}}" class="btn btn-secondary">cancelar</a>   
                   <button type="submit" class="btn btn-danger">Eliminar usuario</button>
                </div>
            </div>
      </div>
</form>
      </div>
      </div>
</div>
</div>


@endsection