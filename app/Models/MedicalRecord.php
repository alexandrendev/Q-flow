<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MedicalRecord extends Model
{
    protected $casts = [
        'status' => AttendanceStatus::class,
    ];
}
