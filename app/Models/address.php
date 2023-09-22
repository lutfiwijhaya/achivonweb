<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class address extends Model
{
    use HasFactory;
    protected $table = 'cd_adress';
    protected $fillable = [
        'id_employee',
        'h_negara',
        'h_prov',
        'h_kab',
        'h_kec',
        'h_desa',
        'h_alamat',
        'c_negara',
        'c_prov',
        'c_kab',
        'c_kec',
        'c_desa',
        'c_alamat',
        'full_home',
        'full_current'
    ];

    // public function myProvince(){
	// 	return $this->hasMany(Province::class, 'h_negara');
	// }
}
