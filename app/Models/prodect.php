<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class prodect extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'discription',
        'image',
        'category_id',
    ];
}
