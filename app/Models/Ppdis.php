<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ppdis extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'nisn',
        'email',
        'gender',
        'school',
        'major',
    ];

}
