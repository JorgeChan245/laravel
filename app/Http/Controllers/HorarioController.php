<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\Horario;
use App\Models\Consultorio;
use App\Models\Paciente; // Asegúrate de importar el modelo Paciente

use Illuminate\Http\Request;

class HorarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $horarios = Horario::with('doctor', 'consultorio')->get();
        return view('admin.horarios.index', compact('horarios'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $consultorios = Consultorio::all();
        $doctores = Doctor::all();
        $horarios = Horario::with('doctor', 'consultorio')->get();
        return view('admin.horarios.create', compact('doctores', 'consultorios', 'horarios'));
    }

    /**
     * Store a newly created resource in storage.
     * 
     * 
     */
    
    public function store(Request $request)
    {
        $request->validate([
            'dia' => 'required',
            'hora_inicio' => 'required',
            'hora_final' => 'required',
            'doctor_id' => 'required|exists:doctors,id',
            'consultorio_id' => 'required|exists:consultorios,id',
        ]);

        // Verificar si ya existe un horario que se superpone con el nuevo horario
        $horarioExistente = Horario::where('dia', $request->dia)
            ->where(function ($query) use ($request) {
                $query->where(function ($query) use ($request) {
                    $query->where('hora_inicio', '>=', $request->hora_inicio)
                        ->where('hora_inicio', '<', $request->hora_final);
                })
                ->orWhere(function ($query) use ($request) {
                    $query->where('hora_final', '>', $request->hora_inicio)
                        ->where('hora_final', '<=', $request->hora_final);
                })
                ->orWhere(function ($query) use ($request) {
                    $query->where('hora_inicio', '<', $request->hora_inicio)
                        ->where('hora_final', '>', $request->hora_final);
                });
            })
            ->exists();

        if ($horarioExistente) {
            return redirect()->back()
                ->withInput()
                ->with('mensaje', 'Ya existe un horario que se superpone con el horario ingresado')
                ->with('icono', 'error');
        }

        Horario::create($request->all());

        // Redirigir con mensaje de éxito
        return redirect()->route('admin.horarios.index')
            ->with('mensaje', 'Se registró el horario de forma correcta')
            ->with('icon', 'success');
    }

    /**
     * Confirmar eliminación de un paciente.
     */
    public function confirmDelete($id)
    {
        $doctores = Doctor::all();
        $horario = Paciente::findOrFail($id);
        return view('admin.horarios.delete', compact('horario','doctores'));
    }

    /**
     * Display the specified resource.
     */
    // Otros métodos...
}