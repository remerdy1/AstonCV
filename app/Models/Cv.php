<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cv extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'name',
        'email',
        'password',
        'keyprogramming',
        'profile',
        'education',
        'URLlinks',
    ];

    protected $hidden = [
     'password',
    ];

}
