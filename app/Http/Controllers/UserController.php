<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;
use App\Models\Recommend;

class UserController extends Controller
{
    public function home() {
        $productId = Recommend::pluck('product_id')->toArray();

        $productList = Product::whereIn('product_id', $productId)->get();
        return view('user.home', ['recommend_list'=>$productList]);
    }

    public function profile() {
        return view('user.profile');
    }

    public function productCard($name) {
        $product = Product::select('product_id', 'name', 'price', 'description', 'image', 'state')
        ->where('category', $name) 
        ->get();
        return view('user.productCard', ['name' => $name, 'product_list' => $product]);
    }
}
