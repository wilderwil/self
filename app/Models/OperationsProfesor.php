<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OperationsProfesor extends Model
{
    use HasFactory;
    protected $table = 'operation_profesor';
    protected $fillable = ['user_id','hour_id','day_id','operation_id'];
    public function user_id(){
        return $this->belongsTo(User::class);
    }

}
