<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pcolor extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'prodect_id',
    ];
}
