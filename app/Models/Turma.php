<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Turma extends Model
{
    use HasFactory;

    protected $guarded = [];
    
    // public function professores(){
    //     return $this->belongsToMany(Turma::class, 'professor_turmas');
    //   }

    // public function salas(){
    //   return $this->hasOne(Sala::class);
    // }

}
