<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cats extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'gender',
        'character',
        'birthday',
        'photo',
        'is_active'
    ];
}
