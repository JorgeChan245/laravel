<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {  return view('home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('index');

//rutas para el admin

Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin.index')->middleware('auth');
//rutas para el admin-uruarios
Route::get('/admin/usuarios', [App\Http\Controllers\UsuarioController::class, 'index'])->name('admin.usuarios.index')->middleware('auth');
//para la creacion de las tablas principal
Route::get('/admin/usuarios/create', [App\Http\Controllers\UsuarioController::class, 'create'])->name('admin.usuarios.create')->middleware('auth');
//
Route::post('/admin/usuarios/create', [App\Http\Controllers\UsuarioController::class, 'store'])->name('admin.usuarios.store')->middleware('auth');
//para el usuario
Route::get('/admin/usuarios/{id}', [App\Http\Controllers\UsuarioController::class, 'show'])->name('admin.usuarios.show')->middleware('auth');
//para poder hacer la edicion de editar
Route::get('/admin/usuarios/{id}/edit', [App\Http\Controllers\UsuarioController::class, 'edit'])->name('admin.usuarios.edit')->middleware('auth');
//sigue siendo la misma solo que esta ruta nos va a servir para crear la ruta que mande para poder actualizar
Route::put('/admin/usuarios/{id}', [App\Http\Controllers\UsuarioController::class, 'update'])->name('admin.usuarios.update')->middleware('auth');
//para realizar el delete
Route::get('/admin/usuarios/{id}/confirm-delete', [App\Http\Controllers\UsuarioController::class, 'confirmDelete'])->name('admin.usuarios.confirmDelete')->middleware('auth');
//metodo delete 
Route::delete('/admin/usuarios/{id}', [App\Http\Controllers\UsuarioController::class, 'destroy'])->name('admin.usuarios.destroy')->middleware('auth');
// Para la lista principal de libros
Route::get('/admin/libros', [App\Http\Controllers\LibroController::class, 'index'])
    ->name('admin.libros.index')
    ->middleware('auth');
// Para la creación de libros
Route::get('/admin/libros/create', [App\Http\Controllers\LibroController::class, 'create'])
    ->name('admin.libros.create')
    ->middleware('auth');
Route::post('/admin/libros/create', [App\Http\Controllers\LibroController::class, 'store'])
    ->name('admin.libros.store')
    ->middleware('auth');
// Para mostrar un libro específico
Route::get('/admin/libros/{id}', [App\Http\Controllers\LibroController::class, 'show'])
    ->name('admin.libros.show')
    ->middleware('auth');
// Para la edición de libros
Route::get('/admin/libros/{id}/edit', [App\Http\Controllers\LibroController::class, 'edit'])
    ->name('admin.libros.edit')
    ->middleware('auth');
Route::put('/admin/libros/{id}', [App\Http\Controllers\LibroController::class, 'update'])
    ->name('admin.libros.update')
    ->middleware('auth');
// Para confirmar la eliminación de un libro
Route::get('/admin/libros/{id}/confirm-delete', [App\Http\Controllers\LibroController::class, 'confirmDelete'])
    ->name('admin.libros.confirmDelete')
    ->middleware('auth');
// Para realizar la eliminación
Route::delete('/admin/libros/{id}', [App\Http\Controllers\LibroController::class, 'destroy'])
    ->name('admin.libros.destroy')
    ->middleware('auth');
/////////////////// rutas para el admin - secretarias
Route::get('/admin/secretarias', [App\Http\Controllers\SecretariaController::class, 'index'])->name('admin.secretarias.index')->middleware('auth');
//con esta empezamos a crear
Route::get('/admin/secretarias/create', [App\Http\Controllers\SecretariaController::class, 'create'])->name('admin.secretarias.create')->middleware('auth');
//
Route::post('/admin/secretarias/create', [App\Http\Controllers\SecretariaController::class, 'store'])->name('admin.secretarias.store')->middleware('auth');
//para crear la vista
Route::get('/admin/secretarias/{id}', [App\Http\Controllers\SecretariaController::class, 'show'])->name('admin.secretarias.show')->middleware('auth');
//para editar secretaria
Route::get('/admin/secretarias/{id}/edit', [App\Http\Controllers\SecretariaController::class, 'edit'])->name('admin.secretarias.edit')->middleware('auth');
//
Route::put('/admin/secretarias/{id}', [App\Http\Controllers\SecretariaController::class, 'update'])->name('admin.secretarias.update')->middleware('auth');
//delete 
Route::get('/admin/secretarias/{id}/confirm-delete', [App\Http\Controllers\SecretariaController::class, 'confirmDelete'])->name('admin.secretarias.confirmDelete')->middleware('auth');
//destroy
Route::delete('/admin/secretarias/{id}', [App\Http\Controllers\SecretariaController::class, 'destroy'])->name('admin.secretarias.destroy')->middleware('auth');
///////////////////prestamos
// Rutas para gestionar préstamos
Route::get('/admin/prestamos', [App\Http\Controllers\PrestamoController::class, 'index'])
    ->name('admin.prestamos.index')
    ->middleware('auth');
// Ruta para mostrar el formulario de creación de un nuevo préstamo
Route::get('/admin/prestamos/create', [App\Http\Controllers\PrestamoController::class, 'create'])
    ->name('admin.prestamos.create')
    ->middleware('auth');
// Ruta para guardar un nuevo préstamo en la base de datos
Route::post('/admin/prestamos/create', [App\Http\Controllers\PrestamoController::class, 'store'])
    ->name('admin.prestamos.store')
    ->middleware('auth');
// Ruta para mostrar los detalles de un préstamo específico
Route::get('/admin/prestamos/{id}', [App\Http\Controllers\PrestamoController::class, 'show'])
    ->name('admin.prestamos.show')
    ->middleware('auth');
// Ruta para mostrar el formulario de edición de un préstamo específico
Route::get('/admin/prestamos/{id}/edit', [App\Http\Controllers\PrestamoController::class, 'edit'])
    ->name('admin.prestamos.edit')
    ->middleware('auth');
// Ruta para actualizar los datos de un préstamo específico
Route::put('/admin/prestamos/{id}', [App\Http\Controllers\PrestamoController::class, 'update'])
    ->name('admin.prestamos.update')
    ->middleware('auth');
// Ruta para confirmar la eliminación de un préstamo
Route::get('/admin/prestamos/{id}/confirm-delete', [App\Http\Controllers\PrestamoController::class, 'confirmDelete'])
    ->name('admin.prestamos.confirmDelete')
    ->middleware('auth');
// Ruta para eliminar un préstamo de la base de datos
Route::delete('/admin/prestamos/{id}', [App\Http\Controllers\PrestamoController::class, 'destroy'])
    ->name('admin.prestamos.destroy')
    ->middleware('auth');


/////////////////////////consultorios
Route::get('/admin/consultorios', [App\Http\Controllers\ConsultorioController::class, 'index'])->name('admin.consultorios.index')->middleware('auth');
//
Route::get('/admin/consultorios/create', [App\Http\Controllers\ConsultorioController::class, 'create'])->name('admin.consultorios.create')->middleware('auth');
//
Route::post('/admin/consultorios/create', [App\Http\Controllers\ConsultorioController::class, 'store'])->name('admin.consultorios.store')->middleware('auth');
//
Route::get('/admin/consultorios/{id}', [App\Http\Controllers\ConsultorioController::class, 'show'])->name('admin.consultorios.show')->middleware('auth');
//
Route::get('/admin/consultorios/{id}/edit', [App\Http\Controllers\ConsultorioController::class, 'edit'])->name('admin.consultorios.edit')->middleware('auth');
//
Route::put('/admin/consultorios/{id}', [App\Http\Controllers\ConsultorioController::class, 'update'])->name('admin.consultorios.update')->middleware('auth');
//
Route::get('/admin/consultorios/{id}/confirm-delete', [App\Http\Controllers\ConsultorioController::class, 'confirmDelete'])->name('admin.consultorios.confirmDelete')->middleware('auth');
//
Route::delete('/admin/consultorios/{id}', [App\Http\Controllers\ConsultorioController::class, 'destroy'])->name('admin.consultorios.destroy')->middleware('auth');

/////////////////////////////////////// para libros
// Listar todos los libros
Route::get('/admin/libros', [App\Http\Controllers\LibroController::class, 'index'])->name('admin.libros.index')->middleware('auth');
// Mostrar el formulario para crear un libro
Route::get('/admin/libros/create', [App\Http\Controllers\LibroController::class, 'create'])->name('admin.libros.create')->middleware('auth');
// Guardar un nuevo libro
Route::post('/admin/libros/create', [App\Http\Controllers\LibroController::class, 'store'])->name('admin.libros.store')->middleware('auth');
// Mostrar los detalles de un libro específico
Route::get('/admin/libros/{id}', [App\Http\Controllers\LibroController::class, 'show'])->name('admin.libros.show')->middleware('auth');
// Mostrar el formulario para editar un libro
Route::get('/admin/libros/{id}/edit', [App\Http\Controllers\LibroController::class, 'edit'])->name('admin.libros.edit')->middleware('auth');
// Actualizar un libro existente
Route::put('/admin/libros/{id}', [App\Http\Controllers\LibroController::class, 'update'])->name('admin.libros.update')->middleware('auth');
// Mostrar una página de confirmación para eliminar un libro
Route::get('/admin/libros/{id}/confirm-delete', [App\Http\Controllers\LibroController::class, 'confirmDelete'])->name('admin.libros.confirmDelete')->middleware('auth');
// Eliminar un libro
Route::delete('/admin/libros/{id}', [App\Http\Controllers\LibroController::class, 'destroy'])->name('admin.libros.destroy')->middleware('auth');

/////////////////////////////para horaios
Route::get('/admin/horarios', [App\Http\Controllers\HorarioController::class, 'index'])->name('admin.horarios.index')->middleware('auth');
//
Route::get('/admin/horarios/create', [App\Http\Controllers\HorarioController::class, 'create'])->name('admin.horarios.create')->middleware('auth');
//
Route::post('/admin/horarios/create', [App\Http\Controllers\HorarioController::class, 'store'])->name('admin.horarios.store')->middleware('auth');
//
Route::get('/admin/horarios/{id}', [App\Http\Controllers\HorarioController::class, 'show'])->name('admin.horarios.show')->middleware('auth');
//
Route::get('/admin/horarios/{id}/edit', [App\Http\Controllers\HorarioController::class, 'edit'])->name('admin.horarios.edit')->middleware('auth');
//
Route::put('/admin/horarios/{id}', [App\Http\Controllers\HorarioController::class, 'update'])->name('admin.horarios.update')->middleware('auth');
//
Route::get('/admin/horarios/{id}/confirm-delete', [App\Http\Controllers\HorarioController::class, 'confirmDelete'])->name('admin.horarios.confirmDelete')->middleware('auth');
//
Route::delete('/admin/horarios/{id}', [App\Http\Controllers\HorarioController::class, 'destroy'])->name('admin.horarios.destroy')->middleware('auth');
//
