<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria_Model extends Model
{
    use HasFactory;
    
    protected $table    = 'categoria';
    protected $fillable = ['nombre','estatus']; 
}
