<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Summary extends Model
{
    use HasFactory;
    protected $table = 'cd_summary_career';
    protected $fillable = [
        'id_employee',
        'company_name',
        'job_position',
        'period',
        'period_to',
        'career'
    ];
}
