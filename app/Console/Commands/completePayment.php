<?php /** @noinspection LaravelFunctionsInspection */

/** @noinspection UnknownColumnInspection */

namespace App\Console\Commands;

use App\Models\Purchase;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Http\RedirectResponse;
use Stripe;
use Stripe\StripeClient;


class completePayment extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'completePayment';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command Completes a payment';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
       $purchases = Purchase::where(
           'created_at' , '>=', Carbon::now()->subMinutes(5))->get();


       if(count($purchases) > 0 ){
           foreach ($purchases as $purchase){
               $this->completePayment($purchase);
           }
       }

    }

    /**
     * success response method.
     *
     * @return string
     * @throws Stripe\Exception\ApiErrorException
     * @throws \Exception
     */
    public function completePayment($data){
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));

        $stripe = new StripeClient(
            env('STRIPE_KEY')
        );

        $token = $stripe->tokens->create([
            'card' => [
                'number' => $data->cardNumber,
                'exp_month' =>$data->expMonth,
                'exp_year' => $data->expYear,
                'cvc' => $data->cvv,
            ],
        ]);

      if(Stripe\Charge::create ([
            "amount" => $data->depositAmount,
            "currency" => "usd",
            "source" => $token,
            "description" => "Second Payment from  "
                .$data->cardHolder." for product with ID: "
                .$data->productId,
        ])){
          dd('Second Payment Complete');
          return 'success';
      }else{
          dd('Second Payment Complete');
          return 'failed';
      }

    }
}
