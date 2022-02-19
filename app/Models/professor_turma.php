<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class professor_turma extends Model
{

    protected $guarded = [];
    use HasFactory;

    // public function turmas(){
    //     return $this->belongsToMany(Turma::class, 'professor_turmas','professor_id' );
    //   }
}
