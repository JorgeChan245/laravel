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
                                <label for="categoria">Categoría</label><b>*</b> 
                                <input type="text" value="{{old('categoria')}}" name="categoria" class="form-control" required>    
                                @error('categoria')
                                    <small style="color:red">{{$message}}</small>       
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="anio_publicacion">Año de Publicación</label><b>*</b> 
                                <input type="number" value="{{old('añio_publicacion')}}" name="añio_publicacion" class="form-control" required>    
                                @error('añio_publicacion')
                                    <small style="color:red">{{$message}}</small>       
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
