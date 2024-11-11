@extends('layouts.admin')
@section('content')
<div class="row"  style="margin-left: 20px;">
      <h1>modificar usuario: {{$usuario->name}}</h1>
</div>
<hr>
<div class="row"  style="margin-left: 20px;">
<div class="col-md-6">
<div class="card card-outline card-success">
<div class="card-header">
<h3 class="card-title">Llene los datos</h3>
<div class="card-tools">
</div>
</div>

<div class="card-body">

      <form action="{{url('admin/usuarios',$usuario->id)}}" method="POST">
            @csrf
            @method('PUT')
<div class="row"  style="margin-left: 0px;">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="">Nombre del Usuario</label><b>*</b> 
                    <input type="text" value="{{$usuario->name}}" name="name" class="form-control" required >    
                    @error('name')
                 <small style="color:red">{{$message}}</small>       
                    @enderror
                </div>
                </div>
            </div>
            
            <div class="row"  style="margin-left: 0px;">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="">Email</label><b>*</b>  
                    <input type="email" value="{{$usuario->email}}" name="email" class="form-control" required>   
                    @error('email')
                 <small style="color:red">{{$message}}</small>       
                    @enderror   
                </div>
            </div>
            </div>
            <div class="row"  style="margin-left: 0px;">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="">password</label><b>*</b> 
                    <input type="password" name="password" class="form-control" >
                    @error('password')
                 <small style="color:red">{{$message}}</small>       
                    @enderror      
                </div>
            </div>
            </div>
            <div class="row"  style="margin-left: 0px;">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="">password verificacion</label><b>*</b>  
                    <input type="password"  name="password_confirmation" class="form-control" >
                    @error('password_confirmation')
                 <small style="color:red">{{$message}}</small>       
                    @enderror    
                </div>
            </div>
            </div>        

            <div class="row"  style="margin-left: 0px;" >
            <div class="col-md-12">
                <div class="form-group">
                   <a href="{{url('admin/usuarios')}}" class="btn btn-secondary">cancelar</a>   
                   <button type="submit" class="btn btn-success">actualizar usuario</button>
                </div>
            </div>
      </div>
</form>
      </div>
      </div>
</div>
</div>


@endsection