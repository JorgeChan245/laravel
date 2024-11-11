<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsuarioController extends Controller
{
    public function index(){
        $usuarios = User::all();
        return view('admin.usuarios.index',compact('usuarios'));
    }
    public function create(){
        return view('admin.usuarios.create');

    }
   public function store(Request $request){
    //$datos = request()->all();
    //return response()->json($datos);
    $request->validate([
        'name'=> 'required|max:250',
        'email'=>'required|max:250|unique:users',
        'password'=>'required|max:250|confirmed'
    ]);
    $usuario = new User();
    $usuario->name=$request->name;
    $usuario->email=$request->email;
    $usuario->password= Hash::make( $request['password']);
    $usuario->save();
    //para mandar el mensaje de alerta de usuario es icono de que todo salio bien en 
    return redirect()->route('admin.usuarios.index')
    ->with('mensaje','se registro el usuario de forma correcta')
    ->with('icon','success');
   }
   public function show($id){
$usuario = User::findOrFail($id);
return view('admin.usuarios.show',compact('usuario'));
   }
   public function edit($id){
$usuario = User::findOrFail($id);
return view('admin.usuarios.edit',compact('usuario'));
   }
   public function update(Request $request, $id){
    $usuario = User::find($id);
    $request->validate([
        'name'=> 'required|max:250',
        'email'=>'required|max:250|unique:users,email,'.$usuario->id,
        'password'=>'nullable|max:250|confirmed'
    ]);
    
    $usuario->name=$request->name;
    $usuario->email=$request->email;
   
    if($request->filled('password')){
    //para el password solo usamos este para decirle que no siempre es necesario cambiar la contraseña 
    $usuario->password= Hash::make($request['password']);
    }
    $usuario->save();
    return redirect()->route('admin.usuarios.index')
    ->with('mensaje','se actualizo el usuario de forma correcta')
    ->with('icon','success');
   }
   public function confirmDelete($id){
  $usuario = User::findOrFail($id);
  return view ('admin.usuarios.delete' , compact('usuario'));
 }
 //vamos a usar para delete
 public function destroy($id){
User::destroy($id);
return redirect()->route('admin.usuarios.index')
->with('mensaje','se elimino el usuario de forma correcta')
->with('icon','success');
 }
}