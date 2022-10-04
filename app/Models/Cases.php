<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cases extends Model
{
    use HasFactory;

    protected $fillable = [
        'caseId',
        'FK_designation',
        'FK_patientId',
        'active',
        'FK_physicianId',
        'FK_specializationId',
        'subspecialization',
        'temperature',
        'respiratory',
        'heart',
        'oxygen',
        'weight',
        'height',
        'cc',
        'hpi',
        'pmh',
        'ros',
        'pe',
        'wi',
        'imd',
        'reason',
    ];
}
