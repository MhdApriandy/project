<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Katapengantar extends Model
{
    //
    protected $fillable = ['kata', 'tempat', 'tanggal', 'nama', 'image'];
    public $table = "katapengantars";
}
