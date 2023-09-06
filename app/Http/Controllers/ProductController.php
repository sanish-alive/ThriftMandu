<?php

namespace App\Http\Controllers;

use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Recommend;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{
        public function createProduct() {
        return view('product.create');
    }

    public function storeProduct(Request $request) {
        $request->validate([
            'name' => 'required',
            'price' => 'required|regex:/^\d+(\.\d{1,2})?$/',
            'purchasedDate' => 'required|date',
            'gender' => 'required',
            'description' => 'required',
            'category' => 'required',
            'productImage' => 'required|mimes:jpeg,png,jpg,gif,svg,webp|max:5048',
            'state' => 'required',
        ]);
        

        if($request->hasFile('productImage')) {
            $image = $request->file('productImage');
            $extension = $image->extension();
            $imageName = Str::random(10, 'alpha_num').".".$extension;
            $destinationPath = public_path('storage/productImage');
            $store = $image->move($destinationPath, $imageName);
            if(!$store){
                return back()->with('fail', 'Image Store Failed');
            }

            // Storage::disk('public')->put($filePath, file_get_contents($file));
        } else {
            return back()->with('fail', 'Product Insertion Failed due to image');
        }

        $product = Product::create([
            'name' => $request->name,
            'price' => $request->price,
            'description' => $request->description,
            'category' => $request->category,
            'gender' => $request->gender,
            'image' => $imageName,
            'state' => $request->state,
            'purchased_at' => $request->purchasedDate,
        ]);

        if($product) {
            return back()->with('success', 'Product Inserted Successfully');
        } else {
            return back()->with('fail', 'Product Insertion Failed');
        }
    }

    public function viewProduct($id) {
        $productId = Recommend::pluck('product_id')->toArray();

        $recommendList = Product::whereIn('product_id', $productId)->get();
        $product = Product::where('product_id', $id)->first();
        return view('user.productView', ['product_detail' => $product, 'recommend_list' => $recommendList ]);
    }


    public function deleteProduct($id) {
        $product = Product::where('product_id', $id)->first();

        $imagePath = public_path('storage/productImage/'.$product->image);
        if(file_exists($imagePath)){
            unlink($imagePath);
        }
        
        // $fileDeletion = Storage::disk('public')->delete('productImage/'.$product->image);

        if($product) {
            $deletion = Product::where('product_id', $id)->delete();
            if($deletion) {
                return back()->with('success', 'Product is deleted successfully');
            }
        }
        return redirect()->route('dashboard')->with('fail', 'Product deletion is failed');
    }
    
}
