@extends('layouts.admin')
@section('content')
<div class="row" style="margin-left: 20px;">
    <h1>Borrar libro: {{$libro->titulo}}</h1>
</div>
<hr>
<div class="row" style="margin-left: 20px;">
    <div class="col-md-12">
        <div class="card card-danger">
            <div class="card-header">
                <h3 class="card-title">¿Estás seguro de borrar el libro?</h3>
                <div class="card-tools">
                </div>
            </div>

            <div class="card-body">
                <form action="{{ url('/admin/libros', $libro->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="titulo">Título</label> 
                                <p>{{ $libro->titulo }}</p>    
                                @error('titulo')
                                    <small style="color:red">{{ $message }}</small>       
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="autor">Autor</label> 
                                <p>{{ $libro->autor }}</p>    
                                @error('autor')
                                    <small style="color:red">{{ $message }}</small>       
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="editorial">Editorial</label> 
                                <p>{{ $libro->editorial }}</p>    
                                @error('editorial')
                                    <small style="color:red">{{ $message }}</small>       
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="año_publicacion">Año de Publicación</label>
                                <p>{{ $libro->año_publicacion }}</p>    
                                @error('año_publicacion')
                                    <small style="color:red">{{ $message }}</small>       
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="genero">Género</label>
                                <p>{{ $libro->genero }}</p>    
                                @error('genero')
                                    <small style="color:red">{{ $message }}</small>       
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row">
                    </div>        

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <a href="{{ url('admin/libros') }}" class="btn btn-success">Cancelar</a>   
                                <button type="submit" class="btn btn-danger">Eliminar libro</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
