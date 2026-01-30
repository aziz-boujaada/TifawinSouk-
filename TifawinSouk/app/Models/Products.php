<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;

    protected $fillable = [
        'name' , 
        'reference',
        'decription',
        'price',
        'stcok',
        'category_id',
        'image_path'
    ];
}
