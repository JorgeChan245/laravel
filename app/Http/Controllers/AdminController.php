<?php

namespace App\Http\Controllers;

use App\Models\Consultorio;
use App\Models\Libro;
use App\Models\Horario;
use App\Models\Paciente;
use App\Models\Secretaria;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $total_usuarios = User::count();
        $total_secretarias = Secretaria::count();
        $total_pacientes = Paciente::count();
        $total_consultorios = Consultorio::count();
        $total_libros = Libro::count(); // Cambiado de Doctor a Libro
        $total_horarios = Horario::count();

        $consultorios = Consultorio::all();

        return view('admin.index', compact(
            'total_usuarios',
            'total_secretarias',
            'total_pacientes',
            'total_consultorios',
            'total_libros', // Cambiado de total_doctores a total_libros
            'total_horarios',
            'consultorios'
        ));
    }
}
