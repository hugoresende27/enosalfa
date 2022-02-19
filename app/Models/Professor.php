<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Professor extends Model
{
    use HasFactory;

    protected $guarded = [];

    /**
     * Get the user associated with the Professor
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function set_fk_disicplina()
    {
        return $this->hasOne(Disciplina::class, 'id_professor', 'id');
    }

    public function prof_turmas_turma(){
        return $this->belongsToMany(Turma::class, 'professor_turmas')
        ->withPivot(['turma_id']);
      }
    public function prof_turmas_prof(){
        return $this->belongsToMany(Professor::class, 'professor_turmas');
      }

    // public function professores(){
    //     return $this->belongsToMany(Professor::class, 'professor_turma');
    //   }
}
