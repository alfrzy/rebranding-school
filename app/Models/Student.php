<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'nik',
        'gender',
        'place_of_birth',
        'date_of_birth',
        'religion',
        'address',
        'child_number',
        'siblings_count',
        'weight',
        'height',
        'disability',
        'illness_history',
        'illness_duration',
        'father_name',
        'father_job',
        'mother_name',
        'mother_job',
    ];
}
