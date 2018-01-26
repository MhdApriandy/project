<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Info extends Model
{
    //
    protected $fillable=['paket_belajar','description'];
 	public $table="infos";
}
