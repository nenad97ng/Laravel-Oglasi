<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Validation\Rule;

class UserProductController extends Controller
{


    public function create(){
    $categories = Category::where('parent_id', null)->orderby('name', 'asc')->get();

    return view('user.products.create', compact('categories'));
    }

    public function store()
    {
        $attributes = array_merge($this->validatieProduct(), [
            'user_id' => request()->user()->id,
            'product_picture' => request()->file('product_picture')->store('public/product_pictures')
        ]);

        Product::create($attributes);

        return redirect('/');
    }

    protected function validatieProduct(?Product $product = null): array
    {
        $product ??= new Product();

        return request()->validate([
            'name' => 'required',
            'description' => 'required',
            'product_condition' => 'required',
            'product_picture' => $product->exists ? ['image'] :['required','image'],
            'price' => 'required',
            'phonenumber' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:7|max:12',
            'address' => 'required|regex:/([- ,\/0-9a-zA-Z]+)/',
            'slug' => ['required', Rule::unique('products', 'slug')->ignore($product->id)],
            'category_id' => ['required',Rule::exists('categories', 'id')]
        ]);

    }
}


