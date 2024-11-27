@extends('layouts.admin')

@section('content')
<div class="container mt-4">
    <div class="row mb-3">
        <div class="col-md-12 text-center">
            <h1>Biblioteca Virtual</h1>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-outline card-primary">
                <div class="card-header">
                    <h3 class="card-title">Libros Registrados</h3>
                    <div class="card-tools">
                        <a href="{{ url('admin/libros/create') }}" class="btn btn-primary">
                            <i class="fas fa-book-medical"></i> Añadir Nuevo Libro
                        </a>
                    </div>
                </div>

                @if($message = Session::get('mensaje'))
                    <script>
                        Swal.fire({
                            position: "top-end",
                            icon: "success",
                            title: "{{ $message }}",
                            showConfirmButton: false,
                            timer: 2500
                        });
                    </script>
                @endif

                <div class="card-body">
                    <div class="mb-3">
                        <label for="genreFilter" class="form-label">Filtrar por Género:</label>
                        <select id="genreFilter" class="form-select" onchange="filterBooks()">
                            <option value="">Todos</option>
                            <option value="Románticas">Románticas</option>
                            <option value="Terror">Terror</option>
                            <option value="Historia">Historia</option>
                            <option value="Programación">Programación</option>
                            <!-- Añadir más géneros según sea necesario -->
                        </select>
                    </div>
                    <table id="example1" class="table table-bordered table-striped table-hover table-sm">
                        <thead class="thead-light">
                            <tr>
                                <th class="text-center">Nro</th>
                                <th class="text-center">Título</th>
                                <th class="text-center">Autor</th>
                                <th class="text-center">Género</th>
                                <th class="text-center">Descripción</th>
                                <th class="text-center">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $contador = 1; ?>
                            @foreach($libros as $libro)
                                <tr data-genre="{{ $libro->genero }}">
                                    <td>{{ $contador++ }}</td>
                                    <td>{{ $libro->titulo }}</td>
                                    <td>{{ $libro->autor }}</td>
                                    <td>{{ $libro->genero }}</td>
                                    <td>{{ Str::limit($libro->descripcion, 50) }}</td>
                                    <td class="text-center">
                                        <div class="btn-group" role="group">
                                            <a href="{{ url('/admin/libros/'.$libro->id) }}" class="btn btn-info btn-sm"><i class="bi bi-eye"></i></a>
                                            <a href="{{ url('/admin/libros/'.$libro->id.'/edit') }}" class="btn btn-success btn-sm"><i class="bi bi-pencil"></i></a>
                                            <a href="{{ url('/admin/libros/'.$libro->id.'/confirm-delete') }}" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
$(function() {
    $("#example1").DataTable({
        "pageLength": 5,
        "language": {
            "emptyTable": "No hay información disponible",
            "info": "Mostrando _START_ a _END_ de _TOTAL_ libros",
            "infoEmpty": "Mostrando 0 a 0 de 0 libros",
            "infoFiltered": "(filtrado de _MAX_ libros totales)",
            "lengthMenu": "Mostrar _MENU_ libros",
            "loadingRecords": "Cargando...",
            "processing": "Procesando...",
            "search": "Buscar:",
            "zeroRecords": "No se encontraron resultados",
            "paginate": {
                "first": "Primero",
                "last": "Último",
                "next": "Siguiente",
                "previous": "Anterior"
            }
        },
        "responsive": true,
        "lengthChange": true,
        "autoWidth": false,
        buttons: [
            {
                extend: 'collection',
                text: 'Exportar',
                buttons: [
                    { extend: 'copy', text: 'Copiar' },
                    { extend: 'pdf', text: 'PDF' },
                    { extend: 'csv', text: 'CSV' },
                    { extend: 'excel', text: 'Excel' },
                    { extend: 'print', text: 'Imprimir' }
                ]
            }
        ]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
});

// Filtrar libros por género
function filterBooks() {
    let selectedGenre = $('#genreFilter').val();
    $('table tbody tr').each(function() {
        let genre = $(this).data('genre');
        if (selectedGenre === '' || genre === selectedGenre) {
            $(this).show();
        } else {
            $(this).hide();
        }
    });
}
</script>
@endsection
