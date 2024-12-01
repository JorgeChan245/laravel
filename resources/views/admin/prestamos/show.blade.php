@extends('layouts.admin')
@section('content')
<div class="row" style="margin-left: 20px;">
    <h1>Préstamo: {{$prestamo->libro->titulo}}</h1>
</div>
<hr>
<div class="row" style="margin-left: 20px;">
    <div class="col-md-12">
        <div class="card card-outline card-info">
            <div class="card-header">
                <h3 class="card-title">Datos del préstamo</h3>
                <div class="card-tools">
                </div>
            </div>

            <div class="card-body">
                <form action="{{url('/admin/prestamos/create')}}" method="POST">
            
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="libro_id">Libro:</label> 
                               <p>{{$prestamo->libro->titulo}}</p>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="usuario_id">Usuario</label>
                                 <p>{{$prestamo->user->name}}</p>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="fecha_prestamo">Fecha de préstamo</label>
                                <p>{{$prestamo->fecha_prestamo}}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="fecha_devolucion">Fecha de devolución</label>
                                <p>{{$prestamo->fecha_devolucion}}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <a href="{{url('admin/prestamos')}}" class="btn btn-secondary">Cancelar</a>   
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
