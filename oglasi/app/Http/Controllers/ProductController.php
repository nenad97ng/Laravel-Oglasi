<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Response;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Gate;

class ProductController extends Controller
{
    public function index()
    {

        return view('products.index',[
            'products' => Product::latest()->filter(request(['search', 'category', 'author']))
            ->paginate(6)->withQueryString()
        ]);
    }

    public function show(Post $post)
    {
        return view('products.show',[
            'product' => $product
        ]);

    }

    protected function getProducts()
    {
       return Product::latest()->filter()->get();
    }
}
