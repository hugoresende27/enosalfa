<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    use HasFactory;

    protected $guarded = [];

    //RELAÇÃO UM ALUNO PODE APENAS TER UM CURSO
    public function cursos()
    {
        return $this->hasOne(Curso::class,'id_aluno','id');
        // return $this->belongsTo(Curso::class,'id_aluno','id');
    }

    /**
     * Get all of the comments for the Aluno
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    // public function cursos2(): HasMany
    // {
    //     return $this->hasMany(Curso::class, 'id_aluno', 'id');
    // }
   
}
