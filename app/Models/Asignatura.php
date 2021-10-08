<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asignatura extends Model
{
    use HasFactory;
    protected $fillable = ['code','asignatura','course_id'];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
