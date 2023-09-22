<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skck extends Model
{
    use HasFactory;
    protected $table = 'cd_police_skck';
    protected $fillable = [
        'id_employee',
        'file_skck'
    ];

    public function getPhotoAttribute(){
        return base64_encode($this->attributes['file_skck']);
    }
}
