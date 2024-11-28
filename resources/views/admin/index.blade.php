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
    <div class="small-box  bg-danger">
            <div class="inner">
                <h3>{{ $total_libros }}</h3>
                <p>libros</p>
            </div>
            <div class="icon">
            <i class="bi bi-book"></i>
            </div>
            <a href="{{ url('/admin/libros/') }}" class="small-box-footer">Más información <i class="bi bi-book"></i></a>
        </div>
    </div>


   
    

<div class="row">


</div>
</div>
@endsection
 