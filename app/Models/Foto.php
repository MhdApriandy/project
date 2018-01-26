<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Foto extends Model
{
    //
    protected $fillable = ['id_galeri', 'foto'];
    public $table = "fotos";
}
