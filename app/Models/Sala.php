<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sala extends Model
{
    use HasFactory;

    public function aluno(){
        return $this->hasOne(Sala::class,  'id');
      }
    public function turma(){
        return $this->hasOne(Sala::class,  'id');
      }
}
