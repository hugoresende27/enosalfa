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
        // return $this->hasOne(Aluno::class, 'id_curso', 'id');
        //  return $this->hasMany(Aluno::class, 'id_curso', 'id');
    }

}