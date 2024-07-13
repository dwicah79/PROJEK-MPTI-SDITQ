<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keluh extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'email',
        'alamt',
        'no',
        'isi',
    ];
}
