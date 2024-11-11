@extends('layouts.admin')

@section('content')
<div class="row justify-content-center">
    <h2>Bienvenido, {{ Auth::user()->name }}</h2>
</div>
<hr>
<div class="row">
    
        @auth
 
    <div class="col-lg-3 col-6">
    <div class="small-box" style="background-color: #2E8B57;">
            <div class="inner">
                <h3>{{ $total_usuarios }}</h3>
                <p>Usuarios</p>
            </div>
            <div class="icon">
                <i class="nav-icon fas bi-people"></i>
            </div>
            <a href="{{ url('/admin/usuarios/') }}" class="small-box-footer">Más información <i class="nav-icon fas bi-people"></i></a>
        </div>
    </div>
  
 
  @endauth
    <div class="col-lg-3 col-6">
    <div class="small-box" style="background-color: #87CEEB;">
            <div class="inner">
                <h3>{{ $total_secretarias }}</h3>
                <p>Secretarias</p>
            </div>
            <div class="icon">
                <i class="nav-icon fas bi bi-person-circle"></i>
            </div>
            <a href="{{ url('/admin/secretarias/') }}" class="small-box-footer">Más información <i class="nav-icon fas bi bi-person-circle"></i></a>
        </div>
    </div>

@auth

    <div class="col-lg-3 col-6">
        <div class="small-box bg-success">
            <div class="inner">
                <h3>{{ $total_pacientes }}</h3>
                <p>Pacientes</p>
            </div>
            <div class="icon">
                <i class="bi bi-person-square"></i>
            </div>
            <a href="{{ url('/admin/pacientes/') }}" class="small-box-footer">Más información <i class="bi bi-person-square"></i></a>
        </div>
     </div>

       
              
@endauth       
    <div class="col-lg-3 col-6">
    <div class="small-box" style="background-color: #FFA500;">
            <div class="inner">
                <h3>{{ $total_consultorios }}</h3>
                <p>Consultorios</p>
            </div>
            <div class="icon">
            <i class="bi bi-building-fill-add"></i>
            </div>
            <a href="{{ url('/admin/consultorios/') }}" class="small-box-footer">Más información <i class="bi bi-building-fill-add"></i></a>
        </div>
    </div>
    

         
    
    <div class="col-lg-3 col-6">
    <div class="small-box  bg-danger">
            <div class="inner">
                <h3>{{ $total_doctores }}</h3>
                <p>doctores</p>
            </div>
            <div class="icon">
            <i class="bi bi-person-raised-hand"></i>
            </div>
            <a href="{{ url('/admin/doctores/') }}" class="small-box-footer">Más información <i class="bi bi-person-raised-hand"></i></a>
        </div>
    </div>


    <div class="col-lg-3 col-6">
    <div class="small-box  bg-info">
            <div class="inner">
                <h3>{{ $total_horarios }}</h3>
                <p>horarios</p>
            </div>
            <div class="icon">
            <i class="bi bi-calendar3"></i>
            </div>
            <a href="{{ url('/admin/horarios/') }}" class="small-box-footer">Más información <i class="bi bi-calendar3"></i></a>
        </div>
    </div>
    

<div class="row">


</div>
</div>
@endsection
 