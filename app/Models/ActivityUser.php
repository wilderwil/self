<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActivityUser extends Model
{
    use HasFactory;
    protected $table = 'activity_user';
    protected $fillable = ['user_id','hour_id','day_id','activity_id'];
    public function user(){
        return $this->belongsTo(User::class);
    }

}
