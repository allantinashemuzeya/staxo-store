<?php

namespace App\Http\Livewire;

use App\Models\ProductModel;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Str;
use JetBrains\PhpStorm\NoReturn;
use Livewire\Component;
use Livewire\WithFileUploads;


class Product extends Component
{
    use WithFileUploads;

    public  $productName;
    public  $productBanner;
    public  $productDescription;
    public  $price;
    public  $response = ['message'=>'No Content', 'statusCode'=>202];
    public  $products;

    public function __construct()
    {
        $this->products = ProductModel::all();
    }


    #[NoReturn] public function submitForm(){


         $this->productBanner->store('products');

         $product = new ProductModel();
         $product->name  = $this->productName;
         $product->slug  = Str::of($this->productName)->slug('-');
         $product->image = $this->productBanner->hashName();
         $product->price = $this->price;
         $product->productTypeId = 1;

         $product->save();

         if( $product->save()){
             $this->response = ['message'=>'Product Saved Successfully', 'statusCode'=>200];
         }else{
             $this->response = ['message'=>'Oops! Failed to Save Product!', 'statusCode'=>500];
         }

         $this->products = ProductModel::all();
     }

    public function render(): Factory|View|Application
    {
        return view('livewire.product');
    }
}

