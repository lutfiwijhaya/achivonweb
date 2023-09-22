<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Academic extends Model
{
    use HasFactory;
    protected $table = 'cd_academic';
    protected $fillable = [
        'id_employee',
        'Graduation',
        'School_Name',
        'location',
        'major'
    ];
}
