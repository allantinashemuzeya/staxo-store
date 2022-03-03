<?php /** @noinspection LaravelFunctionsInspection */

namespace App\Http\Controllers;

use App\Models\Purchase;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
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
        if(Stripe\Charge::create ([
            "amount" => $amount,
            "currency" => "usd",
            "source" => $request->stripeToken,
            "description" => "Payment from  ".$request->input('card-holder')." for ".$request->input('product-name')
        ])){

            $purchase = new Purchase();

            $purchase->productIds = $request->input('product-id');
            $purchase->invoiceId = 'invoice'.random_int(0,100);
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

            if($purchase->save()){
                Session::flash('success', 'Payment successful!');
            }else{
                Session::flash('failed', 'Payment Failed!');
            }
        }


        return back();
    }
}
