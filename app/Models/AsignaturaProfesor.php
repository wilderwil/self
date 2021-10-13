<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AsignaturaProfesor extends Model
{
    use HasFactory;
    protected $table = 'asignatura_profesores';
    protected $fillable = ['profesor_id','asignatura_id'];
}
