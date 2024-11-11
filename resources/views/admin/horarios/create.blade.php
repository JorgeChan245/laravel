@extends('layouts.admin')
@section('content')
<div class="row" style="margin-left: 20px;">
    <h1>Registro de nuevo horario</h1>
</div>
<hr>
<div class="row">
    <!-- Formulario de registro -->
    <div class="col-md-6">
        <div class="card card-outline card-primary">
            <div class="card-header">
                <h3 class="card-title">Llene los datos</h3>
                <div class="card-tools">
                </div>
            </div>
            <div class="card-body">
                <form action="{{url('/admin/horarios/create')}}" method="POST">
                    @csrf

                    <div class="form-group">
                        <label for="">Doctores</label><b>*</b> 
                        <select name="doctor_id" id="" class="form-control">
                            @foreach ($doctores as $doctore)
                                <option value="{{$doctore->id}}">{{$doctore->nombres." ".$doctore->apellidos." --  " .$doctore->especialidad }} </option>
                            @endforeach 
                        </select>   
                    </div>

                    <div class="form-group">
                        <label for="">Consultorio:  </label><b>*</b> 
                        <select name="consultorio_id" id="" class="form-control">
                            @foreach($consultorios as $consultorio)
                                <option value="{{$consultorio->id}}">{{$consultorio->nombres. " --".$consultorio->ubicacion}} </option>
                            @endforeach 
                        </select>   
                    </div> 

                    <div class="form-group">
                        <label for="">Día</label><b>*</b> 
                        <select name="dia" id="" class="form-control">
                            <option value="LUNES">LUNES </option>
                            <option value="MARTES">MARTES </option>
                            <option value="MIERCOLES">MIERCOLES </option>
                            <option value="JUEVES">JUEVES </option>
                            <option value="VIERNES">VIERNES </option>
                            <option value="SABADO">SABADO </option>
                            <option value="DOMINGO">DOMINGO </option>
                        </select>   
                    </div>

                    <div class="form-group">
                        <label for="hora_inicio">Hora de inicio</label><b>*</b> 
                        <input type="time" value="{{old('hora_inicio')}}" name="hora_inicio" class="form-control" required>    
                        @error('hora_inicio')
                            <small style="color:red">{{$message}}</small>       
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="hora_final">Hora final</label><b>*</b> 
                        <input type="time" value="{{old('hora_final')}}" name="hora_final" class="form-control" required>    
                        @error('hora_final')
                            <small style="color:red">{{$message}}</small>       
                        @enderror
                    </div>

                    <div class="form-group">
                        <a href="{{url('admin/horarios')}}" class="btn btn-secondary">Cancelar</a>   
                        <button type="submit" class="btn btn-primary">Registrar horario</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Calendario de horarios -->
    <div class="col-md-6">
        <div class="card card-outline card-primary">
            <div class="card-header">
                <h3 class="card-title">Calendario de horarios</h3>
                <div class="card-tools">
                </div>
            </div>
            <div class="card-body">
                <table style="font-size:10px; text-align: center;" class="table table-striped table-sm table-bordered">
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
@endsection
