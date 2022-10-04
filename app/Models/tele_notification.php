<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tele_notification extends Model
{
    use HasFactory;

    protected $fillable = [
        'active',
        'FK_specialization',
        'FK_userId',
        'FK_patientId',
         'FK_caseId',
        'title',
        'body',
        'link',
    ];
}
