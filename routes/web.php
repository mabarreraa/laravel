<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */


# Cuando se solicita la url /, es decir, la raíz
Route::get('/', "CancionesController@index")
    ->name("inicio");

# Mostrar el formulario para agregar
Route::view("/agregar", "nueva_cancion")
->name("formAgregar");
# Cuando se envía el formulario y se debe guardar la canción
Route::post("/agregar", "CancionesController@agregarCancion")
    ->name("agregarCancion");

# Cuando se guardan los cambios en la base de datos
Route::post("/guardarCambios", "CancionesController@guardarCambiosDeCancion")
    ->name("guardarCambiosDeCancion");

# Mostrar el formulario para editar la canción, algo como editar/1
Route::get("/editar/{id}", "CancionesController@editarCancion")
    ->name("editarCancion");

# URL que es llamada para eliminar canción, algo como eliminar/1
Route::get("/eliminar/{id}", "CancionesController@eliminarCancion")
    ->name("eliminarCancion");