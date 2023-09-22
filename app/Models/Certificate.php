<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Certificate extends Model
{
    use HasFactory;
    protected $table = 'cd_certificates';
    protected $fillable = [
        'id_employee',
        'acquisition',
        'name_certificate',
        'location',
        'name_authority',
        'no_certificate'
    ];
}
