<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = "product_details";
    protected $primarykey = "prodcut_id";

    protected $fillable = [
        'product_id',
        'name',
        'price',
        'description',
        'category',
        'gender',
        'image',
        'state',
        'purchased_at',
        'created_at',
        'updated_at'
    ];
}
