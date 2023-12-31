<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produce extends Model
{
    use HasFactory;

    protected $table = 'produces';

    protected $fillable = [
        'name',
        'price',
        'stock',
        'calories',
        'protein',
        'fat',
        'sugar',
    ];
}
