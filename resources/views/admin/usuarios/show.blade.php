@extends('layouts.admin')
@section('content')
<div class="row"  style="margin-left: 20px;">
      <h1>Usuario: {{$usuario->name}} </h1>
</div>
<hr>
<div class="row"  style="margin-left: 20px;">
<div class="col-md-6">
<div class="card card-outline card-info">
<div class="card-header">
<h3 class="card-title">datos Registrados</h3>
<div class="card-tools">
</div>
</div>

<div class="card-body">

     
<div class="row"  style="margin-left: 0px;">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="">Nombre del Usuario</label><b>:</b> 
                    <p>{{$usuario->name}}</p>
                </div>
                </div>
            </div>
            
            <div class="row"  style="margin-left: 0px;">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="">Email</label><b>:</b>  
                    <p>{{$usuario->email}}</p>
                </div>
            </div>
            </div>
           
                 

            <div class="row"  style="margin-left: 0px;" >
            <div class="col-md-12">
                <div class="form-group">
                   <a href="{{url('admin/usuarios')}}" class="btn btn-secondary">cancelar</a>   
                  
                </div>
            </div>
      </div>

      </div>
      </div>
</div>
</div>


@endsection