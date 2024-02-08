<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointments extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'age',
        'gender',
        'phone',
        'email',
        'address',
        'city',
        'area',
        'zip',
        'date',
        'availability',
        'start',
        'end',
        'status'
    ];
}
