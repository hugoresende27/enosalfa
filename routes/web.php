<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlunoController;
use App\Http\Controllers\ProfessorController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\DisciplinaController;
use App\Http\Controllers\NotaController;
use App\Http\Controllers\TurmaController;

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


Route::get('/', function () {
    $user = Auth::user();
    return view('welcome',compact('user'));
});
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

// Route::get('/alunos/{id_curso}',  [\App\Http\Controllers\AlunoController::class,'show']);
Route::resource('alunos',  AlunoController::class);
Route::post('/alunos/create',  ['middleware'=>\App\Http\Controllers\AlunoController::class,'store'])->name('guardar_aluno');
Route::get('/alunos/{aluno}/alunoturmas',  [\App\Http\Controllers\AlunoController::class,'aluno_turmas']);
Route::post('/alunos/{aluno}/updateTurma',  [\App\Http\Controllers\AlunoController::class,'turmas_save']);
// Route::post('/alunos/{id}',  [\App\Http\Controllers\AlunoController::class,'edit'])->name('editar_aluno');

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
Route::resource('professores', ProfessorController::class);
Route::post('/professores/create',  [\App\Http\Controllers\ProfessorController::class,'store'])->name('guardar_prof');
// Route::post('/professores/{id}/edit',  [\App\Http\Controllers\ProfessorController::class,'edit']);
Route::get('/professores/{professore}/profturmas',  [\App\Http\Controllers\ProfessorController::class,'prof_turmas']);
Route::post('/professores/{professore}/updateTurma',  [\App\Http\Controllers\ProfessorController::class,'turmas_save']);
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
Route::resource('cursos', CursoController::class);
Route::post('/cursos/create',  [\App\Http\Controllers\CursoController::class,'store'])->name('guardar_curso');
Route::get('/cursos/{curso}',  [\App\Http\Controllers\CursoController::class,'show']);
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
Route::resource('disciplinas', DisciplinaController::class);
Route::post('/disciplinas/create',  [\App\Http\Controllers\DisciplinaController::class,'store'])->name('guardar_disci');
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
Route::resource('notas', NotaController::class);
Route::post('/notas/create',  [\App\Http\Controllers\NotaController::class,'store'])->name('guardar_notas');
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
Route::resource('turmas', TurmaController::class);
Route::post('/turmas/create',  [\App\Http\Controllers\TurmaController::class,'store'])->name('guardar_turma');
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


Auth::routes();

Route::get('/home',function () {
    return view('welcome');
});
