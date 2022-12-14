<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;
    protected $fillable = [
        'firstname',
        'middlename',
        'lastname',
        'fullname',
        'contact',
        'sex',
        'birthday',
        'civilstatus',
        'religion',
        'birthplace',
        'street',
        'barangay',
        'city',
        'ethnicity',
        'dialect',
        'guardian_name',
        'guardian_relationship',
        'FK_physicianId',
    ];
}
