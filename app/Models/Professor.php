<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Professor extends Model
{
    use HasFactory;

    /**
     * Get the user associated with the Professor
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function disicplina(): HasOne
    {
        return $this->hasOne(Disciplina::class, 'id_professor', 'id');
    }
}
