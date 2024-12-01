@extends('layouts.admin')
@section('content')
<div class="row" style="margin-left: 20px;">
    <h1>Borrar préstamo: {{$prestamo->libro->titulo}} - User: {{$prestamo->user->nombre}}</h1>
</div>
<hr>
<div class="row" style="margin-left: 20px;">
    <div class="col-md-12">
        <div class="card card-danger">
            <div class="card-header">
                <h3 class="card-title">¿Estás seguro de borrar este préstamo?</h3>
                <div class="card-tools">
                </div>
            </div>

            <div class="card-body">
                <form action="{{ url('/admin/prestamos', $prestamo->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="libro_id">Libro</label> 
                                <p>{{ $prestamo->libro->titulo }}</p>    
                                @error('libro_id')
                                    <small style="color:red">{{ $message }}</small>       
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="usuario_id">Usuario</label> 
                                <p>{{ $prestamo->user->name }}</p>    
                                @error('user_id')
                                    <small style="color:red">{{ $message }}</small>       
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="fecha_prestamo">Fecha de Préstamo</label> 
                                <p>{{ $prestamo->fecha_prestamo }}</p>    
                                @error('fecha_prestamo')
                                    <small style="color:red">{{ $message }}</small>       
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="fecha_devolucion">Fecha de Devolución</label> 
                                <p>{{ $prestamo->fecha_devolucion }}</p>    
                                @error('fecha_devolucion')
                                    <small style="color:red">{{ $message }}</small>       
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row">
                    </div>        

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <a href="{{ url('admin/prestamos') }}" class="btn btn-success">Cancelar</a>   
                                <button type="submit" class="btn btn-danger">Eliminar préstamo</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
