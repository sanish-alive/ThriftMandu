<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $table = "cart";
    protected $primarykey = 'cart_id';

    protected $fillable = [
        'cart_id',
        'user_id',
        'product_id',
        'state',
        'created_at',
        'updated_at',
    ];

    public function products() {
        return $this->belongsToMany(Product::class, 'cart');
    }
}
