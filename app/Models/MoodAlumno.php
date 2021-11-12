<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MoodAlumno extends Model
{
    use HasFactory;
    protected $fillable= ['user_id','mood_id'];
    protected $table ="mood_alumnos";
}
