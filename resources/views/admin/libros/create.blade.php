@extends('layouts.admin')
@section('content')
<div class="row" style="margin-left: 20px;">
    <h1>Registro de nuevo libro</h1>
</div>
<hr>
<div class="row" style="margin-left: 20px;">
    <div class="col-md-12">
        <div class="card card-outline card-primary">
            <div class="card-header">
                <h3 class="card-title">Llene los datos</h3>
                <div class="card-tools">
                </div>
            </div>

            <div class="card-body">
                <form action="{{url('/admin/libros/create')}}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="titulo">Título</label><b>*</b> 
                                <input type="text" value="{{old('titulo')}}" name="titulo" class="form-control" required>    
                                @error('titulo')
                                    <small style="color:red">{{$message}}</small>       
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="autor">Autor</label><b>*</b> 
                                <input type="text" value="{{old('autor')}}" name="autor" class="form-control" required>    
                                @error('autor')
                                    <small style="color:red">{{$message}}</small>       
                                @enderror
                            </div>
                        </div>


                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="editorial">Editorial</label><b>*</b> 
                                <input type="text" value="{{old('editorial')}}" name="editorial" class="form-control" required>    
                                @error('editorial')
                                    <small style="color:red">{{$message}}</small>       
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row">
    <div class="col-md-3">
        <div class="form-group">
            <label for="genero">Género</label><b>*</b> 
            <select name="genero" class="form-control" required>
                <option value="" disabled selected>Selecciona un género</option>
                <option value="Románticas" {{ old('genero') == 'Románticas' ? 'selected' : '' }}>Románticas</option>
                <option value="Terror" {{ old('genero') == 'Terror' ? 'selected' : '' }}>Terror</option>
                <option value="Acción" {{ old('genero') == 'Acción' ? 'selected' : '' }}>Acción</option>
                <option value="Comedia" {{ old('genero') == 'Comedia' ? 'selected' : '' }}>Comedia</option>
                <option value="Ficción" {{ old('genero') == 'Ficción' ? 'selected' : '' }}>Ficción</option>
                <option value="Aventura" {{ old('genero') == 'Aventura' ? 'selected' : '' }}>Aventura</option>
            </select>
            @error('genero')
                <small style="color:red">{{ $message }}</small>       
            @enderror
        </div>
    </div>
</div>

<div class="col-md-3">
    <div class="form-group">
        <label for="año_publicacion">Año de Publicación</label><b>*</b>
        <input type="number" value="{{ old('año_publicacion') }}" name="año_publicacion" class="form-control" required>
        @error('año_publicacion')
            <small style="color:red">{{ $message }}</small>
        @enderror
    </div>
</div>


                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <a href="{{url('admin/libros')}}" class="btn btn-secondary">Cancelar</a>   
                                <button type="submit" class="btn btn-primary">Registrar Libro</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
