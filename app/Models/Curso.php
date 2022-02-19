<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $fillable = ['id'];
    protected $visible = ['id_curso'];
    public $timestamps = false;


    /**
     * Get the user that owns the Curso
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public  function  alunos()//: BelongsTo
    {
        return $this->belongsTo(Aluno::class, 'id_curso', 'id');
      
    }

    public function curso_disciplina_curso(){
        // return $this->belongsToMany(Disciplina::class, 'curso_disciplinas','id_disciplina','id_curso');
        return $this->belongsToMany(Disciplina::class, 'curso_disciplinas','id_curso','id_disciplina');
      }

      public function curso_disciplina_disciplina(){
        return $this->belongsToMany(Curso::class, 'curso_disciplinas','id_curso','id_disciplina')
        ->withPivot(['id_curso']);
      }

    
}