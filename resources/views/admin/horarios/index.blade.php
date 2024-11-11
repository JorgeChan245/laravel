@extends('layouts.admin')

@section('content')

    <div class="row ">
        <div class="col-md-12">
            <h1 class="text-center">Listado de horarios</h1>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-outline card-primary">
                <div class="card-header">
                    <h3 class="card-title">horarios Registrados</h3>
                    <div class="card-tools">
                        <a href="{{ url('admin/horarios/create') }}" class="btn btn-primary">
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
                                <th class="text-center">Doctor</th>
                                <th class="text-center">especialidad</th>
                                <th class="text-center">consultorio</th>
                                <th class="text-center">Dia de atencion</th>
                                <th class="text-center">Hora Inicio</th>
                                <th class="text-center">Hora final</th>
                               
                            </tr>
                        </thead>
                        <tbody>
                            <?php $contador = 1; ?>
                            @foreach($horarios as $horario)                           
                                <tr>
                                    <td>{{ $contador++ }}</td>
                                    <td>{{ $horario->doctor->nombres ." ".$horario->doctor->apellidos}} </td>
                                    <td>{{ $horario->doctor->especialidad }}</td>
                                    <td>{{ $horario->consultorio->nombres ." Ubicacion: ".$horario->consultorio->ubicacion }}</td>
                                    <td>{{ $horario->dia }}</td>
                                    <td>{{ $horario->hora_inicio }}</td>
                                    <td>{{ $horario->hora_final }}</td>
                                   
                     

                           
                                   </tr>
                                  
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
                                   
            </div>
            <br>
    <div class="row">
    <div class="col-md-12">
            <div class="card card-outline card-primary">
                <div class="card-header">
                    <h3 class="card-title">calendario de datos de atencion</h3>
                </div>
                <div class="card-body">
                <table style="font-size:13px; text-align: center;" class="table table-striped table-sm table-bordered">
                    <thead>
                        <tr style="text-align: center">
                            <th>Hora</th>
                            <th>Lunes</th>
                            <th>Martes</th>
                            <th>Miércoles</th>
                            <th>Jueves</th>
                            <th>Viernes</th>
                            <th>Sábado</th>  
                            <th>Domingo</th>                         
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $horas = [
                                '08:00:00 - 09:00:00',
                                '09:00:00 - 10:00:00',
                                '10:00:00 - 11:00:00',
                                '11:00:00 - 12:00:00',
                                '12:00:00 - 13:00:00',
                                '13:00:00 - 14:00:00',
                                '14:00:00 - 15:00:00',
                                '15:00:00 - 16:00:00',
                                '16:00:00 - 17:00:00',
                                '17:00:00 - 18:00:00',
                                '18:00:00 - 19:00:00',
                                '19:00:00 - 20:00:00',
                                '20:00:00 - 21:00:00',
                                '21:00:00 - 22:00:00',
                                '22:00:00 - 23:00:00'
                            ];
                            $diasSemana = ['LUNES','MARTES','MIERCOLES','JUEVES','VIERNES','SABADO','DOMINGO'];
                        @endphp

                        @foreach ($horas as $hora)
                            @php
                                list($hora_inicio, $hora_final) = explode(' - ', $hora);
                            @endphp
                            <tr>
                                <td>{{ $hora }}</td>
                                @foreach ($diasSemana as $dia)
                                    @php
                                        $nombre_doctor = '';
                                        foreach ($horarios as $horario) {
                                            if (strtoupper($horario->dia) == $dia &&
                                                $hora_inicio >= $horario->hora_inicio &&
                                                $hora_final <= $horario->hora_final) {
                                                $nombre_doctor = $horario->doctor->nombres. " " .$horario->doctor->apellidos;
                                                break;
                                            }
                                        }
                                    @endphp
                                    <td>{{ $nombre_doctor }}</td>
                                @endforeach
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
            "info": "Mostrando _START_ a _END_ de _TOTAL_ Horarios",
            "infoEmpty": "Mostrando 0 a 0 de 0 Horarios",
            "infoFiltered": "(Filtrado de _MAX_ total Horarios)",
            "infoPostFix": "",
            "thousands": ",",
            "lengthMenu": "Mostrar _MENU_ Horarios",
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
