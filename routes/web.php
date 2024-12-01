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


////////////////////////////////// Rutas para gestionar préstamos

// Mostrar todos los préstamos
Route::get('/admin/prestamos', [App\Http\Controllers\PrestamoController::class, 'index'])->name('admin.prestamos.index')->middleware('auth');

// Mostrar el formulario para crear un nuevo préstamo
Route::get('/admin/prestamos/create', [App\Http\Controllers\PrestamoController::class, 'create'])->name('admin.prestamos.create')->middleware('auth');

// Guardar un nuevo préstamo
Route::post('/admin/prestamos', [App\Http\Controllers\PrestamoController::class, 'store'])->name('admin.prestamos.store')->middleware('auth');

// Mostrar los detalles de un préstamo específico
Route::get('/admin/prestamos/{id}', [App\Http\Controllers\PrestamoController::class, 'show'])->name('admin.prestamos.show')->middleware('auth');

// Mostrar el formulario para editar un préstamo
Route::get('/admin/prestamos/{id}/edit', [App\Http\Controllers\PrestamoController::class, 'edit'])->name('admin.prestamos.edit')->middleware('auth');

// Actualizar un préstamo existente
Route::put('/admin/prestamos/{id}', [App\Http\Controllers\PrestamoController::class, 'update'])->name('admin.prestamos.update')->middleware('auth');

// Mostrar una página de confirmación para eliminar un préstamo
Route::get('/admin/prestamos/{id}/confirm-delete', [App\Http\Controllers\PrestamoController::class, 'confirmDelete'])->name('admin.prestamos.confirmDelete')->middleware('auth');

// Eliminar un préstamo
Route::delete('/admin/prestamos/{id}', [App\Http\Controllers\PrestamoController::class, 'destroy'])->name('admin.prestamos.destroy')->middleware('auth');



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
