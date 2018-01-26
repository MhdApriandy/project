<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hubungi extends Model
{
    //
    protected $fillable = ['telepon','alamat','gps','gmail'];
    public $table = "hubungis";
}
