@extends('layouts.admin')
@section('content')
<div class="row"  style="margin-left: 20px;">
      <h1>registro de nuevos usuario</h1>
</div>
<hr>
<div class="row"  style="margin-left: 20px;">
<div class="col-md-6">
<div class="card card-outline card-primary">
<div class="card-header">
<h3 class="card-title">Llene los datos</h3>
<div class="card-tools">
</div>
</div>

<div class="card-body">

      <form action="{{url('/admin/usuarios/create')}}" method="POST">
            @csrf
<div class="row"  style="margin-left: 0px;">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="">Nombre del Usuario</label><b>*</b> 
                    <input type="text" value="{{old('name')}}" name="name" class="form-control" required >    
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
                    <input type="email" value="{{old('email')}}" name="email" class="form-control" required>   
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
                    <input type="password" name="password" class="form-control" required>
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
                    <input type="password"  name="password_confirmation" class="form-control" required>
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
                   <button type="submit" class="btn btn-primary">registrar usuario</button>
                </div>
            </div>
      </div>
</form>
      </div>
      </div>
</div>
</div>


@endsection