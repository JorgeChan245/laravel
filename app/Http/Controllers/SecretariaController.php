<?php

namespace App\Http\Controllers;

use App\Models\Secretaria;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class SecretariaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    
       $secretarias = Secretaria::with('user')->get();
        return view('admin.secretarias.index', compact('secretarias'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.secretarias.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       // $datos = $request->all();
        //return response()->json($datos);
       $request->validate([
            'nombres' => 'required',
            'apellidos' => 'required',
            'RFC' => 'required|unique:secretarias',
            'celular' => 'required',
            'fecha_nacimiento' => 'required',
            'direccion' => 'required',
             'email'=>'required|max:250|unique:users',
        'password'=>'required|max:250|confirmed'
        ]);
    
        $usuario = new User();
        $usuario->name = $request->nombres;
        $usuario->email=$request->email;
        $usuario->password= Hash::make( $request['password']);
        $usuario->save();

        $secretaria = new Secretaria();
        $secretaria->user_id=$usuario->id;
        $secretaria->nombres = $request->nombres;
        $secretaria->apellidos = $request->apellidos;
        $secretaria->RFC = $request->RFC;
        $secretaria->celular = $request->celular;
        $secretaria->fecha_nacimiento = $request->fecha_nacimiento;
        $secretaria->direccion = $request->direccion;
        $secretaria->save();

        $usuario->assignRole('secretaria');
//para mandar el mensaje de alerta de secretaria es icono de que todo salio bien en 
return redirect()->route('admin.secretarias.index')
->with('mensaje','se registro la secretaria de forma correcta')
->with('icon','success');

    }
    public function show($id)
    {
        $secretaria = Secretaria::with('user')->findOrFail($id);
        return view('admin.secretarias.show', compact('secretaria'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
       $secretaria = Secretaria::with('user')->findOrFail($id);
       return view('admin.secretarias.edit', compact('secretaria'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    { 
        $secretaria = Secretaria::find($id);
          $request->validate([
            'nombres' => 'required',
            'apellidos' => 'required',
            'RFC' => 'required|unique:secretarias,RFC,'. $secretaria->id,
            'celular' => 'required',
            'fecha_nacimiento' => 'required',
            'direccion' => 'required',
             'email'=>'required|max:250|unique:users,email,'. $secretaria->user->id,
        'password'=>'nullable|max:250|confirmed'
        ]);
        $secretaria->nombres = $request->nombres;
        $secretaria->apellidos = $request->apellidos;
        $secretaria->RFC = $request->RFC;
        $secretaria->celular = $request->celular;
        $secretaria->fecha_nacimiento = $request->fecha_nacimiento;
        $secretaria->direccion = $request->direccion;
        $secretaria->save();

        $usuario = User::find($secretaria->user_id);
        $usuario->name = $request->nombres;
        $usuario->email=$request->email;
        if( $request->filled('password') )
        $usuario->password= Hash::make( $request['password']);
        $usuario->save();

        return redirect()->route('admin.secretarias.index')
->with('mensaje','se actualizo la secretaria de forma correcta')
->with('icon','success');

    }
    public function confirmDelete($id){
$secretaria = Secretaria::with('user')->findOrFail($id);
return view('admin.secretarias.delete', compact('secretaria')); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $secretaria = Secretaria::find($id);
        //eliminar al usuario asosiado
        $user = $secretaria->user;
        $user->delete();
        //eliminamos secretaria
        $secretaria ->delete();

        return redirect()->route('admin.secretarias.index')
        ->with('mensaje','se elimino la secretaria de forma correcta')
        ->with('icon','success');

    }
}