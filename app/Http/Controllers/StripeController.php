<?php

namespace App\Http\Controllers;

use App\Mail\confirmFirstPayment;
use App\Models\Purchase;
use Carbon\Carbon;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Session;
use Stripe;

class StripeController extends Controller
{
    /**
     * success response method.
     *
     * @return Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function stripe()
    {
        return view('store.stripe');
    }

    /**
     * success response method.
     *
     * @return RedirectResponse
     * @throws Stripe\Exception\ApiErrorException
     * @throws \Exception
     */
    public function stripePost(Request $request)
    {
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));

        $amount = (float)$request->input('product-price') / 2 * 100;

        //Section Stripe Charge
        if(Stripe\Charge::create ([
            "amount" => $amount,
            "currency" => "usd",
            "source" => $request->stripeToken,
            "description" => "Payment from  ".$request->input('card-holder')." for ".$request->input('product-name')
        ])){

            //Section Generate Order Number
            $orderNumber = '#'.random_int(0,10000000);
            //Section Save Purchase
            $this->savePurchase($request, $amount, $orderNumber);

            //Section Payment Confirmation
            $data = [
                'orderNumber'=>$orderNumber,
                'date'=>Carbon::now()->isoFormat('dddd D MMM YYYY '),
                'cardHolder'=>$request->input('card-holder'),
                'paymentMethod'=>'Stripe',
                'currency'=>'USD',
                'products'=>Session::has('cart') ? Session::get('cart') : [],
                'totalPrice'=>$request->input('total-price'),
                'emailAddress'=>$request->input('emailAddress'),
            ];
            Mail::to($request->input('emailAddress'))->send(new confirmFirstPayment($data));

            //Section Clear Cart
            $this->clearCart();

        }


        return to_route('store-home');
    }



    public function savePurchase($request, $amount, $invoiceId){
        $purchase = new Purchase();

        $purchase->productIds = $request->input('product-id');
        $purchase->invoiceId = $invoiceId;
        $purchase->depositAmount = $amount;
        $purchase->totalAmount = $amount * 2;
        $purchase->stripeToken = $request->stripeToken;
        $purchase->cardHolder = $request->input('card-holder');
        $purchase->cardNumber = $request->input('card-number');
        $purchase->productId =  (int)$request->input('product-id');
        $purchase->purchaseType = Auth::check() ? 'authenticated-user': 'guest';
        $purchase->userId = Auth::check() ? Auth::user()->id: 0;
        $purchase->cvv = $request->input('cvv');
        $purchase->expMonth = $request->input('expMonth');
        $purchase->expYear = $request->input('expYear');
        $purchase->emailAddress = $request->input('emailAddress');

        if($purchase->save()){
            Session::flash('success', 'Payment successful!');
        }else{
            Session::flash('failed', 'Payment Failed!');
        }
    }

    public function clearCart(){
        if(Session::has('cart')){
            Session::forget('cart');
        }
    }
}
