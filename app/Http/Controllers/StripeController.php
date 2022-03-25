<?php

namespace App\Http\Controllers;
use Session;
use Stripe;
use DB;

use Illuminate\Http\Request;

class StripeController extends Controller
{
    public function index()
    {
        $amount = DB::table('madblue')->first();
        $num = $amount->amount;
        return view('buynow', ['number' => $num]);
    }
    public function stripe()
    {
        return view('stripe');
    }

    public function buynow(Request $request)
    {
        $quantity = $request->quantity;
        $total = 50 * $quantity;

        return view('stripe', ['total' => $total]);
    }

    public function stripePost(Request $request)
    {

        Stripe\Stripe::setApiKey("sk_test_51KJgCnKYgC3ue4Z7ugRy8dtjyEYXjLm8PmoymJ8RgjTvbohaLKe2VyEG7HcAawtrKLpodaRF4zc3HIUFPZukuLiR00Sj4ajGwg");
        Stripe\Charge::create ([
                "amount" => $request->total * 100,
                "currency" => "EUR",
                "source" => $request->stripeToken,
                "description" => "Buyer Name: ".$request->name.", Email: ".$request->email,
        ]);

        Session::flash('success', 'Payment Successful !');

        $num = $request->total / 50;

        $total_amount = DB::table('madblue')->first();
        $total_nft = $total_amount->amount;

        $amount = $total_nft - $num;

        DB::table('madblue')->where('id', 1)->update(array('amount' => $amount));

        return back();
    }
}
