<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso_disciplinas extends Model
{
    use HasFactory;

    public function cursos_disciplinas()
    {
        // return $this->hasOne(Curso::class,'id_aluno','id');
        // return $this->belongsTo(Curso::class,'id_aluno','id');
        // return $this->belongsTo(Disciplina::class, 'curso_disciplinas', 'id_disciplina','id');
        return $this->belongsTo(Disciplina::class, 'curso_disciplinas', 'id_disciplina','id')->withPivot(['id_disciplina']);;
    }
}
