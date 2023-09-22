<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CareerModel extends Model
{
    use HasFactory;
    protected $table = 'cd_employee';
    protected $fillable = [
        'Nama',
        'KTP',
        'email',
        'NPWP',
        'sex',
        'b_place',
        'birthday',
        'marital',
        'No_HP',
        'BPJS',
        'bpjs_ket',
        'Applying_A',
        'D_Salary',
        'discipline',
        'cd_date_apply',
        'approval',
        'approved_by',
        'updated_at',
        'created_at',
    ];
}
