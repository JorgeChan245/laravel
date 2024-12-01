@extends('layouts.admin')
@section('content')
<div class="row" style="margin-left: 20px;">
    <h1>Registro de nuevo préstamo</h1>
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
                <form action="{{url('/admin/prestamos')}}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="libro_id">Libro</label><b>*</b> 
                                <select name="libro_id" class="form-control" required>
                                    <option value="" disabled selected>Selecciona un libro</option>
                                    @foreach($libros as $libro)
                                        <option value="{{ $libro->id }}" {{ old('libro_id') == $libro->id ? 'selected' : '' }}>{{ $libro->titulo }}</option>
                                    @endforeach
                                </select>    
                                @error('libro_id')
                                    <small style="color:red">{{$message}}</small>       
                                @enderror
                            </div>
                        </div>

                        @csrf
            <div class="mb-9">
                <label for="user_id" class="form-label">Usuario</label>
                <select name="user_id" id="user_id" class="form-control">
                    @foreach($usuarios as $usuario)
                        <option value="{{ $usuario->id }}">{{ $usuario->name }}</option>
                    @endforeach
                </select>
            </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="fecha_prestamo">Fecha de Préstamo</label><b>*</b> 
                                <input type="date" value="{{old('fecha_prestamo')}}" name="fecha_prestamo" class="form-control" required>    
                                @error('fecha_prestamo')
                                    <small style="color:red">{{$message}}</small>       
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="fecha_devolucion">Fecha de Devolución</label><b>*</b> 
                                <input type="date" value="{{old('fecha_devolucion')}}" name="fecha_devolucion" class="form-control" required>    
                                @error('fecha_devolucion')
                                    <small style="color:red">{{$message}}</small>       
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <a href="{{url('admin/prestamos')}}" class="btn btn-secondary">Cancelar</a>   
                                <button type="submit" class="btn btn-primary">Registrar Préstamo</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection