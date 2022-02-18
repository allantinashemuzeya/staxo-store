<?php

namespace App\Http\Controllers;

use App\Models\UserType;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use App\Models\ProductModel;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    //
    public function index(): Factory|View|Application
    {
        $userType = UserType::where('id', Auth::user()->id)->first();

        $products = ProductModel::all();

        return view('store.products', ['products' => $products, 'userType' => $userType]);
    }


    public function addProduct(): string
    {
        return 'Yay Lets add ProductController';
    }
}
