<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    // protected $table = "my-table-name" <<< se ue quero usar uma table com nome diferente
    protected $fillable = [

        'name',
        'slug',
        'description',
        'price'

    ];
    
}
