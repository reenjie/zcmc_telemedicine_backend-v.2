<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class attachment extends Model
{
    use HasFactory;
    protected $fillable = [
        'file',
        'FK_chatId',
        'FK_facilityId',
    ];
}
