<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Motivation extends Model
{
    use HasFactory;
    protected $table = 'cd_motivation';
    protected $fillable = [
        'id_employee',
        'motivation1',
        'motivation2'
    ];
}
