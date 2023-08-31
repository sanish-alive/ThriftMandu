<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;
use App\Models\Recommend;

class AdminController extends Controller
{
    public function __construct() {
        $this->middleware('adminAuth');
    }
    
    public function dashboard() {
        return view('admin.dashboard');
    }

    public function adminProductCard($name) {
        $product = Product::select('product_id', 'name', 'price', 'description', 'image', 'state')
        ->where('category', $name) 
        ->get();
        return view('admin.productCard', ['name' => $name, 'product_list' => $product]);
    }

    public function userList() {
        $user = User::select('id', 'name', 'email', 'contact', 'address', 'created_at')->get();
        return view('admin.userList', ['userList' => $user]);
    }

    public function recommend() {
        $productId = Recommend::pluck('product_id')->toArray();

        $productList = Product::whereIn('product_id', $productId)->get();

        return view('admin.recommend', ['recommend_list'=>$productList]);
    }

    public function addRecommend($id) {
        $createRecommend = Recommend::create([
            'product_id' => $id,
        ]);
        if($createRecommend){
            return redirect()->route('recommend')
            ->with('success', 'Product is added in recommendation');
        }
        return redirect()->route('recommend')
        ->with('fail', 'Product is failed to added in recommendation');
    }

    public function removeRecommend($id) {
        $deleteRecommend = Recommend::where('product_id', $id)->delete();
        if($deleteRecommend) {
            return redirect()->route('recommend')
            ->with('success', 'Product is removed from recommend');
        }
        return redirect()->route('recommend')
        ->with('fail', 'Product remove is failed');
    }
}
