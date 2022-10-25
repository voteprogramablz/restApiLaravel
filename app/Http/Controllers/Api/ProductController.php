<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function __construct(\App\Models\Product $product)
    {
        $this->product = $product;
    }

    public function index()
    {
        $products = $this->product->all();

        return response()->json($products);
    }

    public function save(Request $request)
    {
        $data = $request->all();

        $productAlreadyExists = $this->product->where("name", $data['name'])->first();

        if ($productAlreadyExists) {
            return response()->json("Produto já existe", 400);
        }

        $product = $this->product->create($data);
        return response()->json($product);
    }
}
