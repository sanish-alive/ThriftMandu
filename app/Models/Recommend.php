<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recommend extends Model
{
    use HasFactory;

    protected $table = "recommend";
    protected $primarykey = 'recommend_id';

    protected $fillable = [
        'recommend_id',
        'product_id',
        'created_at',
        'updated_at'
    ];
}
