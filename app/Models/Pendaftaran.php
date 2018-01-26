<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pendaftaran extends Model
{
    //
	protected $fillable = [
		'nama',
		'tempat_lahir',
		'tanggal_lahir',
		'alamat',
		'asal_sekolah',
		'jenis_kelamin',
		'agama',
		'status',
		'pendidikan',
		'no_ijazah',
		'no_hp',
		'no_hp_ortu',
		'ayah',
		'ibu',
		'paket',
		'image'];
		public $table = "pendaftarans";
	}
