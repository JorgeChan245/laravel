@extends('layouts.admin') 
@section('content')
<div class="row justify-content-center">
   
</div>
<hr>
<div class="row">
    @auth
    <!-- Usuarios -->
    <div class="col-lg-3 col-6">
        <div class="small-box" style="background-color: #2E8B57;">
            <div class="inner">
                <h3>{{ $total_usuarios }}</h3>
                <p>Usuarios</p>
            </div>
            <div class="icon">
                <i class="bi bi-people"></i>
            </div>
            <a href="{{ url('/admin/usuarios/') }}" class="small-box-footer">Más información <i class="bi bi-people"></i></a>
        </div>
    </div>
    
    <!-- Libros -->
    <div class="col-lg-3 col-6">
        <div class="small-box" style="background-color: #87CEEB;">
            <div class="inner">
                <h3>{{ $total_libros }}</h3>
                <p>Libros</p>
            </div>
            <div class="icon">
                <i class="bi bi-book"></i>
            </div>
            <a href="{{ url('/admin/libros/') }}" class="small-box-footer">Más información <i class="bi bi-book"></i></a>
        </div>
    </div>
    
    <!-- Horarios -->
    <div class="col-lg-3 col-6">
        <div class="small-box bg-info">
            <div class="inner">
                <h3>{{ $total_horarios }}</h3>
                <p>Horarios</p>
            </div>
            <div class="icon">
                <i class="bi bi-calendar3"></i>
            </div>
            <a href="{{ url('/admin/horarios/') }}" class="small-box-footer">Más información <i class="bi bi-calendar3"></i></a>
        </div>
    </div>
    @endauth
</div>
@endsection
