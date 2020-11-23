<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cproducto extends Model
{
    use HasFactory;

    protected $table = 'cproducto';

    protected $fillable = ['nombre', 'estatus'];
}
