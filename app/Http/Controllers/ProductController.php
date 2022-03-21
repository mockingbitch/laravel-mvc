<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function createView() {
        return view('add-product');
    }

    public function storeData(Request $request) {
        $data = [
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price
        ];

        Product::create($data); //INSERT INTO products($data) values($data);
    
        return redirect()->back(); 
    }

    public function listProduct() {
        $products = Product::get(); //SELECT * FROM products;
        //Product::update($id, $data) => UPDATE FROM products a=a b=b... WHERE id = $data['id'];
        // Product::where('id', $id)->destroy => DELETE FROM products WHERE id = $id;

        return view('list-product', [
            'p' => $products
        ]);
    }
}
