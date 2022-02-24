<?php

namespace App\Http\Livewire;

use App\Models\ProductModel;
use Exception;
use Illuminate\Support\Facades\Session;
use Livewire\Component;
use Log;
use Psr\Container\ContainerExceptionInterface;
use Psr\Container\NotFoundExceptionInterface;

class ProductDetails extends Component
{
    public $cartResponse = ['statusCode'=> 500, 'message'=>'Cart operation failed'];
    public $product;
    public function render()
    {
        return view('livewire.product-details');
    }

    /**
     * @throws ContainerExceptionInterface
     * @throws NotFoundExceptionInterface
     */
    public function storeInCart(ProductModel $subject_product)
    {
        if(session::has('cart')){
            try {
                $products = session()->get('cart');

                foreach($products as $product) if($product->id !== $subject_product->id){
                    session::push('cart', $subject_product);
                    $this->cartResponse["statusCode"] = 200;
                    $this->cartResponse["message"] = 'Cart operation successful';
                    return $this->cartResponse;
                }
            }catch(Exception $e){
                $products = null;
            }
        }
        else if(!session::has('cart')){
            try {
                session::put('cart', [$subject_product]);
            }catch(Exception $e){
                Log::error($e);
                return $this->cartResponse;
            }
        }
    }
}
