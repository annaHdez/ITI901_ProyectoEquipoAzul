<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserEloquent extends Model
{
    use HasFactory;
    protected $table = 'users';
    protected $fillable = ['name', 'email', 'password','rol_id'];

    public function getRol()
    {
                            // Modelo de referencia, campo local, campo foráneo 
        return $this->belongsTo('App\Models\Rol_Model','rol_id','id','nombre');
    }
}
