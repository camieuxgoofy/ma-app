<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Product;

class ProductController extends Controller
{
    //
    public function index()
    {
        return view('frontend.admin.product.add', ['title' => 'Add Product Page']);
    }
    public function edited($item_id)
    {
        $product = Product::findOrFail($item_id);

        return view('frontend.admin.product.ubah', [
            'title' => 'Edit Product Page',
            'product' => $product,
        ]);
    }
}
