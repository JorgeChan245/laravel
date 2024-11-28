@extends('layouts.admin')

@section('content')
<h1>Listado de Préstamos</h1>

<a href="{{ route('prestamos.create') }}" class="btn btn-primary">Nuevo Préstamo</a>

<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Usuario</th>
            <th>Libro</th>
            <th>Fecha Préstamo</th>
            <th>Fecha Devolución</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($prestamos as $prestamo)
        <tr>
            <td>{{ $prestamo->id }}</td>
            <td>{{ $prestamo->usuario->name }}</td>
            <td>{{ $prestamo->libro->titulo }}</td>
            <td>{{ $prestamo->fecha_prestamo }}</td>
            <td>{{ $prestamo->fecha_devolucion }}</td>
            <td>
                <a href="{{ route('prestamos.edit', $prestamo->id) }}" class="btn btn-warning">Editar</a>
                <form action="{{ route('prestamos.destroy', $prestamo->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Eliminar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
