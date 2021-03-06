<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Disciplina extends Model
{
    use HasFactory;

    /**
 * Get the user associated with the Disciplina
 *
 * @return \Illuminate\Database\Eloquent\Relations\HasOne
 */
    public function set_fk_professor()
    {
        return $this->hasMany(Professor::class, 'id_disciplina', 'id');
    }

    public function nota() 
    {
        return $this->hasMany(Nota::class, 'id_disciplina');
    }


    public function curso() 
    {
        return $this->hasOne(Curso::class);
    }

    public function relacao_disciplina_curso(){
        return $this->belongsToMany(Curso::class, 'curso_disciplinas');
      }



}

