<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlunoController;
use App\Http\Controllers\ProfessorController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\DisciplinaController;
use App\Http\Controllers\NotaController;
use App\Http\Controllers\TurmaController;
use App\Http\Controllers\SalaController;

use App\Models\Aluno;
use App\Models\Professor;
use App\Models\Disciplina;
use App\Models\Curso;
use App\Models\Sala;
use App\Models\Turma;
use App\Models\User;
use App\Models\Nota;

// use App\Mail\TestEmail;


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


Route::get('/home', function () {
    $user = Auth::user();
    $alunos = Aluno::all()->count();
    $profs = Professor::all()->count();
    $turmas = Turma::all()->count();
    $disciplinas = Disciplina::all()->count();
    $cursos = Curso::all()->count();
    $salas = Sala::all()->count();
    $users = User::all()->count();

    $medias = Nota::all();
    $tot_notas = Nota::all()->count();
    $media=0;
    foreach ($medias as $m){
        $media += $m->nota; 
    }

    if ($media != 0) $media = $media / $tot_notas;
    $media = round($media,2);
    // dd(get_defined_vars());
    
    return view('welcome',compact('user','alunos','profs','turmas','disciplinas','cursos','salas','users','media','tot_notas'));
});

Auth::routes();

Route::get('/',function () {
    $user = Auth::user();
    $alunos = Aluno::all()->count();
    $profs = Professor::all()->count();
    $turmas = Turma::all()->count();
    $disciplinas = Disciplina::all()->count();
    $cursos = Curso::all()->count();
    $salas = Sala::all()->count();
    $users = User::all()->count();

    $medias = Nota::all();
    $tot_notas = Nota::all()->count();
    $media=0;
    foreach ($medias as $m){
        $media += $m->nota; 
    }

    if ($media != 0) $media = $media / $tot_notas;
    $media = round($media,2);
    // dd(get_defined_vars());
    
    return view('welcome',compact('user','alunos','profs','turmas','disciplinas','cursos','salas','users','media','tot_notas'));
});





Route::get('/search/', 'App\Http\Controllers\HomeController@search')->name('search');
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
Route::get('/usersmanager', [App\Http\Controllers\AdminController::class,'index']);
Route::delete('/usersmanager/{user}/delete', [App\Http\Controllers\AdminController::class,'destroy']);
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

Route::get('/infos', [App\Http\Controllers\AdminController::class,'infos']);



// Route::get('/alunos/{id_curso}',  [\App\Http\Controllers\AlunoController::class,'show']);
Route::resource('alunos',  AlunoController::class);
Route::post('/alunos/create',  [App\Http\Controllers\AlunoController::class,'store'])->name('guardar_aluno');
Route::get('/alunos/{aluno}/alunoturmas',  [\App\Http\Controllers\AlunoController::class,'aluno_turmas']);
Route::post('/alunos/{aluno}/updateTurma',  [\App\Http\Controllers\AlunoController::class,'turmas_save']);
// Route::get('/alunos/search',  [\App\Http\Controllers\AlunoController::class,'index'])->name('search');
// Route::get('/search/', 'App\Http\Controllers\AlunoController@search')->name('search');
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
Route::get('/cursos/{curso}/cursodisciplinas',  [\App\Http\Controllers\CursoController::class,'curso_disciplinas']);
Route::post('/cursos/{curso}/updateCurso',  [\App\Http\Controllers\CursoController::class,'disciplina_save']);
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
Route::resource('salas', SalaController::class);
Route::post('/salas/create',  [\App\Http\Controllers\SalaController::class,'store'])->name('guardar_sala');


//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

// Route::get('/email', function() {


//     Mail::to("hugoresende27@gmail.com")->send(new \App\Mail\WelcomeMail());
//     echo "enviado!";
//     return new \App\Mail\WelcomeMail();
// });

Route::get('/email', [\App\Http\Controllers\MailController::class,'index']);
// Route::get('/emailsend', [\App\Http\Controllers\MailController::class,'send']);
// Route::post('/emailsend/{mail}/send', [\App\Http\Controllers\MailController::class,'send']);
Route::resource('/emailsend', \App\Http\Controllers\MailController::class);

// Route::get('/template', [\App\Http\Controllers\MailController::class,'template']);
// Route::get('/templatereg', [\App\Http\Controllers\MailController::class,'templatereg']);

