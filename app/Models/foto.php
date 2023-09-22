<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class foto extends Model
{
    use HasFactory;
    protected $table = 'cd_foto';
    protected $fillable = [
        'id_employee',
        'foto'
    ];

    public function getPhotoAttribute(){
        return base64_encode($this->attributes['foto']);
    }
}
