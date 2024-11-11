<?php

namespace App\Http\Controllers;

use App\Models\Paciente;
use Illuminate\Http\Request;

class PacienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pacientes = Paciente::all();
        return view('admin.pacientes.index', compact('pacientes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pacientes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombres' => 'required',
            'apellidos' => 'required',
            'celular' => 'required',
            'Nro_seguro'=> 'required|unique:pacientes',
            'genero'=> 'required',
            'alergias'=> 'required',
            'contacto_emergencia'=> 'required',
            'fecha_nacimiento' => 'required',
            'direccion' => 'required',
             'correo'=>'required|max:250|unique:pacientes',
      
        ]);
        $paciente = new Paciente();
        $paciente->nombres = $request->nombres;
        $paciente->apellidos = $request->apellidos;
        $paciente->celular = $request->celular;
        $paciente->Nro_seguro = $request->Nro_seguro;
        $paciente->genero = $request->genero;
        $paciente->alergias = $request->alergias;
        $paciente->contacto_emergencia = $request->contacto_emergencia;  
         
        $paciente->fecha_nacimiento = $request->fecha_nacimiento;
        $paciente->direccion = $request->direccion;
        $paciente->correo = $request->correo;
         
        $paciente->save();
        //para mandar el mensaje de alerta de secretaria es icono de que todo salio bien en 
return redirect()->route('admin.pacientes.index')
->with('mensaje','se registro el paciente de forma correcta')
->with('icon','success');

    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $paciente = Paciente::findOrFail($id);
        return view('admin.pacientes.show', compact('paciente'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $paciente = Paciente::findOrFail($id);
        return view('admin.pacientes.edit', compact('paciente'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    { 
        $paciente = Paciente::find($id);
        $request->validate([
        'nombres' => 'required',
        'apellidos' => 'required',
        'celular' => 'required',
        'Nro_seguro' => 'required|unique:pacientes,Nro_seguro,' . $paciente->id,
        'genero'=> 'required',
        'alergias'=> 'required',
        'contacto_emergencia'=> 'required',
        'fecha_nacimiento' => 'required',
        'direccion' => 'required',
         'correo'=>'required|max:250|unique:pacientes,correo,'.$paciente->id,
  
    ]);
    $paciente->nombres = $request->nombres;
    $paciente->apellidos = $request->apellidos;
    $paciente->celular = $request->celular;
    $paciente->Nro_seguro = $request->Nro_seguro;
    $paciente->genero = $request->genero;
    $paciente->alergias = $request->alergias;
    $paciente->contacto_emergencia = $request->contacto_emergencia;  
     
    $paciente->fecha_nacimiento = $request->fecha_nacimiento;
    $paciente->direccion = $request->direccion;
    $paciente->correo = $request->correo;
     
    $paciente->save();
    //para mandar el mensaje de alerta de secretaria es icono de que todo salio bien en 
return redirect()->route('admin.pacientes.index')
->with('mensaje','se actualizo el paciente de forma correcta')
->with('icon','success');
        
    }
    public function confirmDelete($id){
        $paciente = Paciente::findOrFail($id);
return view('admin.pacientes.delete', compact('paciente')); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Paciente::destroy($id);
        return redirect()->route('admin.pacientes.index')
->with('mensaje','se elimino el paciente de forma correcta')
->with('icon','success');
    }
}
