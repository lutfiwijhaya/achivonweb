<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Family extends Model
{
    use HasFactory;
    protected $table = 'cd_family';
    protected $fillable = [
        'id_employee',
        'name',
        'hubungan',
        'Birthday',
        'cohabit',
        'No_HP'
    ];
}
