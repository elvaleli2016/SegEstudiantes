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
Route::get("/inicio",'SesionController@getValidar');
Route::post("/inicio",'SesionController@validar');
Route::get("/salir","SesionController@salir");

/* Convenios */
Route::get('/agregar-convenio', ['as' => 'app.convenio.agregar', 'uses' => 'ConvenioController@getAgregar']);
Route::post('/agregar-convenio', ['as' => 'app.convenio.agregar', 'uses' => 'ConvenioController@postAgregar']);

Route::get('/editar-convenio/{id}', ['as' => 'app.convenio.editar/{id}', 'uses' => 'ConvenioController@getEditar']);
Route::post('/editar-convenio', ['as' => 'app.convenio.editar', 'uses' => 'ConvenioController@postEditar']);

Route::get('/eliminar-convenio', ['as' => 'app.convenio.eliminar', 'uses' => 'ConvenioController@getEliminar']);
Route::post('/eliminar-convenio', ['as' => 'app.convenio.eliminar', 'uses' => 'ConvenioController@postEliminar']);

Route::get('/listar-convenio', ['as' => 'app.convenio.agregar', 'uses' => 'ConvenioController@index']);

Route::post('/lista-convenio','ConvenioController@listaEmpresa');

/* Docentes */
Route::get('/agregar-docente', ['as' => 'app.docente.agregar', 'uses' => 'DocenteController@getAgregar']);
Route::post('/agregar-docente', ['as' => 'app.docente.agregar', 'uses' => 'DocenteController@postAgregar']);

Route::get('/editar-docente/{id}', ['as' => 'app.docente.editar', 'uses' => 'DocenteController@getEditar']);
Route::post('/editar-docente', ['as' => 'app.docente.editar', 'uses' => 'DocenteController@postEditar']);

Route::post('/eliminar-docente', ['as' => 'app.docente.eliminar', 'uses' => 'DocenteController@postEliminar']);

Route::get('/listar-docente', ['as' => 'app.docente.listar', 'uses' => 'DocenteController@index']);

/* Empresas */
Route::get('/agregar-empresa', ['as' => 'app.empresa.agregar', 'uses' => 'EmpresaController@getAgregar']);
Route::post('/agregar-empresa', ['as' => 'app.empresa.agregar', 'uses' => 'EmpresaController@postAgregar']);

Route::get('/editar-empresa/{id}', ['as' => 'app.empresa.editar/{id}', 'uses' => 'EmpresaController@getEditar']);
Route::post('/editar-empresa', ['as' => 'app.empresa.editar', 'uses' => 'EmpresaController@postEditar']);

Route::get('/listar-empresa', ['as' => 'app.empresa.listar', 'uses' => 'EmpresaController@index']);

Route::get('/eliminar-empresa/{id}', ['as' => 'app.empresa.eliminar', 'uses' => 'EmpresaController@getEliminar']);
Route::post('/eliminar-empresa', ['as' => 'app.empresa.eliminar', 'uses' => 'EmpresaController@postEliminar']);

/* Estudiantes */
Route::get('/agregar-estudiante', ['as' => 'app.estudiante.agregar', 'uses' => 'EstudianteController@getAgregar']);
Route::post('/agregar-estudiante', ['as' => 'app.estudiante.agregar', 'uses' => 'EstudianteController@postAgregar']);

Route::get('/editar-estudiante/{id}', ['as' => 'app.estudiante.editar', 'uses' => 'EstudianteController@getEditar']);
Route::post('/editar-estudiante', ['as' => 'app.estudiante.editar', 'uses' => 'EstudianteController@postEditar']);

Route::post('/eliminar-estudiante', ['as' => 'app.estudiante.eliminar', 'uses' => 'EstudianteController@postEliminar']);

Route::get('/listar-estudiante', ['as' => 'app.estudiante.listar', 'uses' => 'EstudianteController@index']);

/* Tutors */
Route::get('/agregar-tutor', ['as' => 'app.tutor.agregar', 'uses' => 'TutorController@getAgregar']);
Route::post('/agregar-tutor', ['as' => 'app.tutor.agregar', 'uses' => 'TutorController@postAgregar']);

Route::get('/editar-tutor/{id}', ['as' => 'app.tutor.editar', 'uses' => 'TutorController@getEditar']);
Route::post('/editar-tutor', ['as' => 'app.tutor.editar', 'uses' => 'TutorController@postEditar']);

Route::post('/eliminar-tutor', ['as' => 'app.tutor.eliminar', 'uses' => 'TutorController@postEliminar']);

Route::get('/listar-tutor', ['as' => 'app.tutor.listar', 'uses' => 'TutorController@index']);

/* Pasantias */
Route::get('/agregar-pasantia', ['as' => 'app.pasantia.agregar', 'uses' => 'PasantiaController@getAgregar']);
Route::post('/agregar-pasantia', ['as' => 'app.pasantia.agregar', 'uses' => 'PasantiaController@postAgregar']);

Route::get('/listar-pasantia', ['as' => 'app.pasantia.listar', 'uses' => 'PasantiaController@index']);

Route::get('/editar-pasantia/{id}', ['as' => 'app.pasantia.editar/{id}', 'uses' => 'PasantiaController@getEditar']);
Route::post('/editar-pasantia', ['as' => 'app.pasantia.editar', 'uses' => 'PasantiaController@postEditar']);

Route::get('/entrega-pasantia/{id}', ['as' => 'app.pasantia.entrega/{id}', 'uses' => 'PasantiaController@getEntrega']);
Route::post('/entrega-pasantia', ['as' => 'app.pasantia.entrega', 'uses' => 'PasantiaController@postEntrega']);

Route::get('/eliminar-pasantia/{id}', ['as' => 'app.pasantia.eliminar', 'uses' => 'PasantiaController@getEliminar']);

/* Practicas */
Route::get('/agregar-practica', ['as' => 'app.practica.agregar', 'uses' => 'PracticaController@getAgregar']);
Route::post('/agregar-practica', ['as' => 'app.practica.agregar', 'uses' => 'PracticaController@postAgregar']);

Route::get('/listar-practica', ['as' => 'app.practica.listar', 'uses' => 'PracticaController@index']);

Route::get('/editar-practica/{id}', ['as' => 'app.practica.editar/{id}', 'uses' => 'PracticaController@getEditar']);
Route::post('/editar-practica', ['as' => 'app.practica.editar', 'uses' => 'PracticaController@postEditar']);

Route::get('/entrega-practica/{id}', ['as' => 'app.practica.entrega/{id}', 'uses' => 'PracticaController@getEntrega']);
Route::post('/entrega-practica', ['as' => 'app.practica.entrega', 'uses' => 'PracticaController@postEntrega']);

Route::get('/eliminar-practica/{id}', ['as' => 'app.practica.eliminar', 'uses' => 'PracticaController@getEliminar']);


Route::get('/estadisticas', ['as' => 'app.estadisticas.index', 'uses' => 'EstadisticasController@index']);
Route::get('/informe', ['as' => 'app.informe.index', 'uses' => 'EstadisticasController@getInforme']);

Route::post('/informe','EstadisticasController@postInforme');
