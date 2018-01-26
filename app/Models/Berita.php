<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    //
    protected $fillable = ['judul', 'description', 'image', 'judul2', 'slide', 'by'];
    public $table = "beritas";
}
