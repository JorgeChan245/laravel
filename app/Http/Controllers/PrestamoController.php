<?php

namespace App\Http\Controllers;

use App\Models\Prestamo;
use App\Models\User;
use App\Models\Libro;
use Illuminate\Http\Request;

class PrestamoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $prestamos = Prestamo::with(['user', 'libro'])->get(); // Relaciona con User y Libro si están configurados
        $usuarios = User::all(); // Opcional para el filtro
        return view('admin.prestamos.index', compact('prestamos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $usuarios = User::all();
    $libros = Libro::all(); // Lista de libros para el préstamo
    return view('admin.prestamos.create', compact('usuarios', 'libros'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'libro_id' => 'required|exists:libros,id',
            'fecha_prestamo' => 'required|date',
            'fecha_devolucion' => 'nullable|date|after_or_equal:fecha_prestamo', // Validar que sea después o igual a la fecha de préstamo
        ]);

        $prestamo = new Prestamo();
        $prestamo->user_id = $request->user_id;
        $prestamo->libro_id = $request->libro_id;
        $prestamo->fecha_prestamo = $request->fecha_prestamo;
        $prestamo->fecha_devolucion = $request->fecha_devolucion;

        $prestamo->save();

        return redirect()->route('admin.prestamos.index')
            ->with('mensaje', 'El préstamo se registró correctamente')
            ->with('icon', 'success');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $prestamo = Prestamo::findOrFail($id);
        $prestamo = Prestamo::with(['user', 'libro'])->findOrFail($id);
        return view('admin.prestamos.show', compact('prestamo'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $prestamo = Prestamo::findOrFail($id);
        $usuarios = User::all(); // Para seleccionar otro usuario en la edición
        $libros = Libro::all(); // Para seleccionar otro libro en la edición
        return view('admin.prestamos.edit', compact('prestamo', 'usuarios', 'libros'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $prestamo = Prestamo::findOrFail($id);

        $request->validate([
            'user_id' => 'required|exists:users,id',
            'libro_id' => 'required|exists:libros,id',
            'fecha_prestamo' => 'required|date',
            'fecha_devolucion' => 'nullable|date|after_or_equal:fecha_prestamo',
        ]);

        $prestamo->user_id = $request->user_id;
        $prestamo->libro_id = $request->libro_id;
        $prestamo->fecha_prestamo = $request->fecha_prestamo;
        $prestamo->fecha_devolucion = $request->fecha_devolucion;

        $prestamo->save();

        return redirect()->route('admin.prestamos.index')
            ->with('mensaje', 'El préstamo se actualizó correctamente')
            ->with('icon', 'success');
    }

    /**
     * Show the form for confirming deletion of the specified resource.
     */
    public function confirmDelete($id)
    {
        $prestamo = Prestamo::findOrFail($id);
        return view('admin.prestamos.delete', compact('prestamo'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Prestamo::destroy($id);
        return redirect()->route('admin.prestamos.index')
            ->with('mensaje', 'El préstamo se eliminó correctamente')
            ->with('icon', 'success');
    }
}
