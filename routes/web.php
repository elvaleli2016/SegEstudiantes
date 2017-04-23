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


Route::get('/', function () {
    return view('welcome');
});*/

//SESIONES

Route::get('/','SesionController@index');
Route::post("/inicio",'SesionController@validar');


/* Convenios */
Route::get('/agregar-convenio', ['as' => 'app.convenio.agregar', 'uses' => 'ConvenioController@getAgregar']);
Route::post('/agregar-convenio', ['as' => 'app.convenio.agregar', 'uses' => 'ConvenioController@postAgregar']);

Route::get('/editar-convenio/{id}', ['as' => 'app.convenio.editar/{id}', 'uses' => 'ConvenioController@getEditar']);
Route::post('/editar-convenio', ['as' => 'app.convenio.editar', 'uses' => 'ConvenioController@postEditar']);

Route::get('/eliminar-convenio', ['as' => 'app.convenio.eliminar', 'uses' => 'ConvenioController@getEliminar']);
Route::post('/eliminar-convenio', ['as' => 'app.convenio.eliminar', 'uses' => 'ConvenioController@postEliminar']);

Route::get('/listar-convenio', ['as' => 'app.convenio.agregar', 'uses' => 'ConvenioController@index']);

/* Docentes */
Route::get('/agregar-docente', ['as' => 'app.docente.agregar', 'uses' => 'DocenteController@getAgregar']);
Route::post('/agregar-docente', ['as' => 'app.docente.agregar', 'uses' => 'DocenteController@postAgregar']);

Route::get('/editar-docente', ['as' => 'app.docente.editar', 'uses' => 'DocenteController@getEditar']);
Route::post('/editar-docente', ['as' => 'app.docente.editar', 'uses' => 'DocenteController@postEditar']);

Route::get('/eliminar-docente', ['as' => 'app.docente.eliminar', 'uses' => 'DocenteController@getEliminar']);
Route::post('/eliminar-docente', ['as' => 'app.docente.eliminar', 'uses' => 'DocenteController@postEliminar']);

Route::get('/listar-docente', ['as' => 'app.docente.listar', 'uses' => 'DocenteController@index']);

/* Empresas */
Route::get('/agregar-empresa', ['as' => 'app.empresa.agregar', 'uses' => 'EmpresaController@getAgregar']);
Route::post('/agregar-empresa', ['as' => 'app.empresa.agregar', 'uses' => 'EmpresaController@postAgregar']);

Route::get('/editar-empresa/{id}', ['as' => 'app.empresa.editar/{id}', 'uses' => 'EmpresaController@getEditar']);
Route::post('/editar-empresa', ['as' => 'app.empresa.editar', 'uses' => 'EmpresaController@postEditar']);

Route::get('/listar-empresa', ['as' => 'app.empresa.listar', 'uses' => 'EmpresaController@index']);

Route::get('/eliminar-empresa', ['as' => 'app.empresa.eliminar', 'uses' => 'EmpresaController@getEliminar']);
Route::post('/eliminar-empresa', ['as' => 'app.empresa.eliminar', 'uses' => 'EmpresaController@postEliminar']);

/* Estudiantes */
Route::get('/agregar-estudiante', ['as' => 'app.estudiante.agregar', 'uses' => 'EstudianteController@getAgregar']);
Route::post('/agregar-estudiante', ['as' => 'app.estudiante.agregar', 'uses' => 'EstudianteController@postAgregar']);

Route::get('/editar-estudiante', ['as' => 'app.estudiante.editar', 'uses' => 'EstudianteController@getEditar']);
Route::post('/editar-estudiante', ['as' => 'app.estudiante.editar', 'uses' => 'EstudianteController@postEditar']);

Route::get('/eliminar-estudiante', ['as' => 'app.estudiante.eliminar', 'uses' => 'EstudianteController@getEliminar']);
Route::post('/eliminar-estudiante', ['as' => 'app.estudiante.eliminar', 'uses' => 'EstudianteController@postEliminar']);

Route::get('/listar-estudiante', ['as' => 'app.estudiante.listar', 'uses' => 'EstudianteController@index']);

/* Pasantias */
Route::get('/agregar-pasantia', ['as' => 'app.pasantia.agregar', 'uses' => 'PasantiaController@getAgregar']);
Route::post('/agregar-pasantia', ['as' => 'app.pasantia.agregar', 'uses' => 'PasantiaController@postAgregar']);

Route::get('/listar-pasantia', ['as' => 'app.pasantia.listar', 'uses' => 'PasantiaController@index']);

Route::get('/editar-pasantia', ['as' => 'app.pasantia.editar', 'uses' => 'PasantiaController@getEditar']);
Route::post('/editar-pasantia', ['as' => 'app.pasantia.editar', 'uses' => 'PasantiaController@postEditar']);

Route::get('/eliminar-pasantia', ['as' => 'app.pasantia.eliminar', 'uses' => 'PasantiaController@getEliminar']);
Route::post('/eliminar-pasantia', ['as' => 'app.pasantia.eliminar', 'uses' => 'PasantiaController@postEliminar']);

/* Practicas */
Route::get('/agregar-practica', ['as' => 'app.practica.agregar', 'uses' => 'PracticaController@getAgregar']);
Route::post('/agregar-practica', ['as' => 'app.practica.agregar', 'uses' => 'PracticaController@postAgregar']);

Route::get('/listar-practica', ['as' => 'app.practica.listar', 'uses' => 'PracticaController@index']);

Route::get('/editar-practica', ['as' => 'app.practica.editar', 'uses' => 'PracticaController@getEditar']);
Route::post('/editar-practica', ['as' => 'app.practica.editar', 'uses' => 'PracticaController@postEditar']);

Route::get('/eliminar-practica', ['as' => 'app.practica.eliminar', 'uses' => 'PracticaController@getEliminar']);
Route::post('/eliminar-practica', ['as' => 'app.practica.eliminar', 'uses' => 'PracticaController@postEliminar']);
