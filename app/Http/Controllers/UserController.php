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
        $clothingList = Product::select('product_id', 'name', 'price')
        ->where('category', 'clothing')
        ->limit(3)
        ->get();
        $clothingList = Product::select('product_id', 'name', 'price', 'image')
        ->where('category', 'clothing')
        ->limit(3)
        ->get();
        $accessoriesList = Product::select('product_id', 'name', 'price', 'image')
        ->where('category', 'accessories')
        ->limit(3)
        ->get();
        $bagsList = Product::select('product_id', 'name', 'price', 'image')
        ->where('category', 'bags')
        ->limit(3)
        ->get();
        $shoesList = Product::select('product_id', 'name', 'price', 'image')
        ->where('category', 'shoes')
        ->limit(3)
        ->get();
        $otherList = Product::select('product_id', 'name', 'price', 'image')
        ->where('category', 'other')
        ->limit(3)
        ->get();
        return view('user.home', [
            'recommend_list'=>$productList,
            'clothing_list'=>$clothingList,
            'accessories_list'=>$accessoriesList,
            'bags_list'=>$bagsList,
            'shoes_list'=>$shoesList,
            'other_list'=>$otherList
        ]);
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
