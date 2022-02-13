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
public function professor(): HasOne
{
    return $this->hasOne(Professor::class, 'id_disciplina', 'id');
}

}

