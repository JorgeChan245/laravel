@extends('layouts.admin')

@section('content')
<h1>Nuevo Préstamo</h1>

<form action="{{ route('prestamos.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="user_id">Usuario</label>
        <select name="user_id" id="user_id" class="form-control">
            @foreach ($usuarios as $usuario)
                <option value="{{ $usuario->id }}">{{ $usuario->name }}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <label for="book_id">Libro</label>
        <select name="book_id" id="book_id" class="form-control">
            @foreach ($libros as $libro)
                <option value="{{ $libro->id }}">{{ $libro->titulo }}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <label for="fecha_prestamo">Fecha de Préstamo</label>
        <input type="date" name="fecha_prestamo" class="form-control">
    </div>

    <div class="form-group">
        <label for="fecha_devolucion">Fecha de Devolución</label>
        <input type="date" name="fecha_devolucion" class="form-control">
    </div>

    <button type="submit" class="btn btn-success">Guardar</button>
</form>
@endsection
