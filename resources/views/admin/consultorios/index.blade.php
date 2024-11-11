@extends('layouts.admin')

@section('content')
<div class="container mt-4">
    <div class="row mb-3">
        <div class="col-md-12">
            <h1 class="text-center">Listado de Consultorios</h1>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-outline card-primary">
                <div class="card-header">
                    <h3 class="card-title">consultorios Registrados</h3>
                    <div class="card-tools">
                        <a href="{{ url('admin/consultorios/create') }}" class="btn btn-primary">
                            <i class="fas fa-user-plus"></i> Registro Nuevo
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
                    <table id="example1" class="table table-bordered table-striped table-hover table-sm">
                        <thead class="thead-light">
                            <tr>
                            <th class="text-center">Nro</th>
                                <th class="text-center">Nombres</th>
                                
                                <th class="text-center">ubicaion</th>
                                <th class="text-center">capacidad</th>
                                <th class="text-center">telefono</th>
                               
                                <th class="text-center">especialidad</th>
                                <th class="text-center">estado</th>
                              
                                <th class="text-center">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $contador = 1; ?>
                            @foreach($consultorios as $consultorio)
                                <tr>
                                    <td>{{ $contador++ }}</td>
                                    <td>{{ $consultorio->nombres }} </td>
                                    <td>{{ $consultorio->ubicacion }}</td>
                                    <td>{{ $consultorio->capacidad }}</td>
                                    <td>{{ $consultorio->telefono }}</td>
                                    <td>{{ $consultorio->especialidad }}</td>
                                    <td>{{ $consultorio->estado }}</td>

                                   <td style="text-align: center">
                                   <div class="btn-group" role="group" aria-label="Basic example">
                                      <a href="{{url('/admin/consultorios/'.$consultorio->id)}}" type="button" class="btn btn-info btn-sm"><i class="bi bi-eye"></i></a>
                                      <a href="{{url('/admin/consultorios/'.$consultorio->id.'/edit')}}" type="button" class="btn btn-success btn-sm"><i class="bi bi-pencil"></i></a>
                                      <a href="{{url('/admin/consultorios/'.$consultorio->id.'/confirm-delete')}}" type="button" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></a>
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
            "emptyTable": "No hay información",
            "info": "Mostrando _START_ a _END_ de _TOTAL_ Consultorios",
            "infoEmpty": "Mostrando 0 a 0 de 0 Consultorios",
            "infoFiltered": "(Filtrado de _MAX_ total Consultorios)",
            "infoPostFix": "",
            "thousands": ",",
            "lengthMenu": "Mostrar _MENU_ Consultorios",
            "loadingRecords": "Cargando...",
            "processing": "Procesando...",
            "search": "Buscador",
            "zeroRecords": "Sin resultados encontrados",
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
                text: 'Reportes',
                orientation: 'landscape',
                buttons: [
                    {
                        text: 'Copiar',
                        extend: 'copy',
                    },
                    {
                        extend: 'pdf'
                    },
                    {
                        extend: 'csv'
                    },
                    {
                        extend: 'excel'
                    },
                    {
                        text: 'Imprimir',
                        extend: 'print'
                    }
                ]
            },
            {
                extend: 'colvis',
                text: 'Visor de columnas',
                collectionLayout: 'fixed three-column'
            }
        ]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
});
</script>
@endsection
