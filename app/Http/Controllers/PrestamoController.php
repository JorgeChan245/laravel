<?php

namespace App\Http\Controllers;

use App\Models\Prestamo;
use App\Models\Libro;
use App\Models\User;
use Illuminate\Http\Request;

class PrestamoController extends Controller
{
    // Listar préstamos
    public function index()
    {
        $prestamos = Prestamo::with('usuario', 'libro')->get();
        return view('prestamos.index', compact('prestamos'));
    }

    // Mostrar formulario para crear un préstamo
    public function create()
    {
        $usuarios = User::all(); // Obtener todos los usuarios
        $libros = Libro::where('cantidad', '>', 0)->get(); // Libros disponibles
        return view('prestamos.create', compact('usuarios', 'libros'));
    }

    // Guardar un nuevo préstamo
    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'book_id' => 'required|exists:books,id',
            'fecha_prestamo' => 'required|date',
            'fecha_devolucion' => 'required|date|after:fecha_prestamo',
        ]);

        $libro = Libro::findOrFail($request->book_id);

        if ($libro->cantidad <= 0) {
            return redirect()->back()->with('error', 'El libro no está disponible.');
        }

        Prestamo::create($request->all());
        $libro->decrement('cantidad');

        return redirect()->route('prestamos.index')->with('success', 'Préstamo creado con éxito.');
    }

    // Mostrar formulario para editar un préstamo
    public function edit($id)
    {
        $prestamo = Prestamo::findOrFail($id);
        $usuarios = User::all();
        $libros = Libro::all();
        return view('prestamos.edit', compact('prestamo', 'usuarios', 'libros'));
    }

    // Actualizar un préstamo existente
    public function update(Request $request, $id)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'book_id' => 'required|exists:books,id',
            'fecha_prestamo' => 'required|date',
            'fecha_devolucion' => 'required|date|after:fecha_prestamo',
        ]);

        $prestamo = Prestamo::findOrFail($id);
        $prestamo->update($request->all());

        return redirect()->route('prestamos.index')->with('success', 'Préstamo actualizado con éxito.');
    }

    // Eliminar un préstamo
    public function destroy($id)
    {
        $prestamo = Prestamo::findOrFail($id);
        $prestamo->delete();

        return redirect()->route('prestamos.index')->with('success', 'Préstamo eliminado con éxito.');
    }
}
