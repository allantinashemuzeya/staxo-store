<?php

namespace App\Http\Livewire;

use App\Models\GuestUser;
use Illuminate\Support\Facades\Session;
use JetBrains\PhpStorm\ArrayShape;
use Livewire\Component;

class CheckoutComponent extends Component
{

    public $array;
    public $fullName;
    public $email;

    public function render()
    {
        return view('livewire.checkout-component');
    }
    #[ArrayShape(['revisedCart' => "array"])] public function removeFromSession($product){
        $revisedCart = ['revisedCart'=> []];
        $cart_products = Session::get('cart');
        foreach ($cart_products as $cart_product){
            if($cart_product->id !== $product->id){
               array_push($revisedCart['revisedCart'] , $cart_product);
            }
        }

        Session::put('checkoutProducts', $revisedCart);
        return $revisedCart;
    }

    public function saveGuestUser(){
        $guestUserModel = new GuestUser();

    }
}
