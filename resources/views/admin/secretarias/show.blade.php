@extends('layouts.admin')
@section('content')
<div class="row" style="margin-left: 20px;">
    <h1>secretarias: {{$secretaria->nombres}} {{$secretaria ->apellidos}}</h1>
</div>
<hr>
<div class="row" style="margin-left: 20px;">
    <div class="col-md-12">
        <div class="card card-outline card-info">
            <div class="card-header">
                <h3 class="card-title"> datos registrados</h3>
                <div class="card-tools">
                </div>
            </div>

            <div class="card-body">
                <form action="{{url('/admin/secretarias/create')}}" method="POST">
            
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="nombre">Nombres:</label> 
                               <p>{{$secretaria->nombres}}</p>
                               
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="apellidos">Apellidos</label>
                                 <p>{{$secretaria->apellidos}}</p>
                                
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="RFC">RFC</label>
                                <p>{{$secretaria->RFC}}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="celular">Celular</label>
                                <p>{{$secretaria->celular}}</p>
                            
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="fecha_nacimiento">Fecha de nacimiento</label> 
                               <p>{{$secretaria->fecha_nacimiento}}</p>
                            </div>
                        </div>
                        
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="direccion">direcccion</label><b>*</b> 
                               <p>{{$secretaria->direccion}}</p>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="email">Email</label><b>*</b>  
                                <p>{{$secretaria->user->email}}</p> 
                            </div>
                        </div>
                    </div>

                   
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <a href="{{url('admin/secretarias')}}" class="btn btn-secondary">Cancelar</a>   
                                
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
  