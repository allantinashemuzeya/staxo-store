<?php

namespace App\Http\Controllers;

use App\Models\ProductModel;
use App\Models\UserType;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    //
    public function index(): Factory|View|Application
    {


        $products = ProductModel::all();

        return view('store.products', ['products' => $products]);
    }

    public function productDetails($slug)
    {
        $product = ProductModel::where('slug', $slug)->first();
        return view('store.product-details', ['product'=>$product]);
    }
}
