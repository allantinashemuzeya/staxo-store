<?php /** @noinspection LaravelFunctionsInspection */

namespace App\Http\Controllers;

use App\Helpers\HelperClass;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Stripe\Exception\ApiErrorException;
use Stripe\Stripe;

class StoreController extends Controller
{
    //
    public function index(): Factory|View|Application
    {
        if(Auth::check()){
            return view('store.home');
        }else{
            return view('store.home', ['userType'=>null]);
        }
    }

    public function checkout()
    {
        return  view('store.checkout',['products'=>Session::get('cart')]);
    }

    /**
     * @throws ApiErrorException
     */
    public function placeOrder()
    {
        $c_products = [];
        foreach (Session::get('cart') as $item){
            array_push($c_products, ['price_id'=>(new HelperClass())->generatePriceId($item->name), 'price'=>$item->price]);
        }

        Session::put('checkout_products', $c_products);


        // This is your test secret API key.
        Stripe::setApiKey(env('STRIPE_API_KEY'));

        header('Content-Type: application/json');

        $DOMAIN = env('APP_URL');

        $products = [];
        foreach ($c_products as $item){
            array_push($products, ['price'=>'price_1KWvRODdu4CSY7f0derXKGUu', 'quantity'=>1]);
        }

        $checkout_session = \Stripe\Checkout\Session::create([
            'line_items' => [$products],
            'mode' => 'payment',
            'success_url' => $DOMAIN . '/success',
            'cancel_url' => $DOMAIN . '/cancel',
        ]);


        return redirect($checkout_session->url);

    }


}
