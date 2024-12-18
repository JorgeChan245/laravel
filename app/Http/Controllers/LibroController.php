<?php

namespace App\Http\Controllers;

use App\Models\Libro;
use Illuminate\Http\Request;

class LibroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $libros = Libro::all();
        return view('admin.libros.index', compact('libros'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.libros.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required',
            'autor' => 'required',
            'editorial' => 'nullable',
            'año_publicacion' => 'nullable|integer|between:1900,' . date('Y'),  
            'genero' => 'nullable|string',
            
        ]);

        $libro = new Libro();
        $libro->titulo = $request->titulo;
        $libro->autor = $request->autor;
        $libro->editorial = $request->editorial;
        $libro->año_publicacion = $request->año_publicacion ?: 0; 
        $libro->genero = $request->genero;  
       
        $libro->save();

        return redirect()->route('admin.libros.index')
            ->with('mensaje', 'El libro se registró correctamente')
            ->with('icon', 'success');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $libro = Libro::findOrFail($id);
        return view('admin.libros.show', compact('libro'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $libro = Libro::findOrFail($id);
        return view('admin.libros.edit', compact('libro'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $libro = Libro::find($id);

        $request->validate([
            'titulo' => 'required',
            'autor' => 'required',
            'editorial' => 'nullable',
            'año_publicacion' => 'nullable|integer',
            'genero' => 'nullable|string',
            
        ]);

        $libro->titulo = $request->titulo;
        $libro->autor = $request->autor;
        $libro->editorial = $request->editorial;
        $libro->año_publicacion = $request->año_publicacion;
        $libro->genero = $request->genero;
       
        $libro->save();

        return redirect()->route('admin.libros.index')
            ->with('mensaje', 'El libro se actualizó correctamente')
            ->with('icon', 'success');
    }

    /**
     * Show the form for confirming deletion of the specified resource.
     */
    public function confirmDelete($id)
    {
        $libro = Libro::findOrFail($id);
        return view('admin.libros.delete', compact('libro'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Libro::destroy($id);
        return redirect()->route('admin.libros.index')
            ->with('mensaje', 'El libro se eliminó correctamente')
            ->with('icon', 'success');
    }
}
