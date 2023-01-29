<?php

namespace App\Http\Controllers;
use App\Models\Card;
use Illuminate\Http\Request;

class StripeController extends Controller
{
     public function index(Card $card)
     { 

        $key="sk_test_51M3pFUBK4DP8EZtMUiedebhdVqT1uTrh2HuthnPEbiA6CGacSK1Yi6AUOcWx5n8G002Bufjzd1uOqFPjH5aukDDA00XWRRXRkk";
        // dd(config('services.stripe.key'));
      \Stripe\Stripe::setApiKey($key);
   
       

      $session = \Stripe\Checkout\Session::create([
          'line_items'=> [[
            'price_data' => [
              'currency' => 'usd',
              'product_data' => [
                'id' =>$card->id,
                'name' => $card->name,
              ],
              'price' => $card->price*100,
             ],
            'quantity' => 1,
          ]],
          'mode' => 'payment',
          'success_url' => route('success', [], true) . "?session_id={CHECKOUT_SESSION_ID}",
          'cancel_url' => route('checkout.cancel', [], true),
      ]);
     
           return redirect($session->url) ;
    }
    public function success(Request $request)
    {
        \Stripe\Stripe::setApiKey(env('STRIPE_SECRET_KEY'));
        $sessionId = $request->get('session_id');

        try {
            $session = \Stripe\Checkout\Session::retrieve($sessionId);
            if (!$session) {
                throw new NotFoundHttpException;
            }
            $customer = \Stripe\Customer::retrieve($session->customer);

            $order = Order::where('session_id', $session->id)->first();
            if (!$order) {
                throw new NotFoundHttpException();
            }
            if ($order->status === 'unpaid') {
                $order->status = 'paid';
                $order->save();
            }

            return view('product.checkout-success', compact('customer'));
        } catch (\Exception $e) {
            throw new NotFoundHttpException();
        }
    }
    public function cancel(Request $request)
    {
        \Stripe\Stripe::setApiKey(env('STRIPE_SECRET_KEY'));
        $sessionId = $request->get('session_id');

        try {
            $session = \Stripe\Checkout\Session::retrieve($sessionId);
            if (!$session) {
                throw new NotFoundHttpException;
            }
            $customer = \Stripe\Customer::retrieve($session->customer);

            $order = Order::where('session_id', $session->id)->first();
            if (!$order) {
                throw new NotFoundHttpException();
            }
            if ($order->status === 'unpaid') {
                $order->status = 'unpaid';
                $order->save();
            }

            return view('product.checkout-success', compact('customer'));
        } catch (\Exception $e) {
            throw new NotFoundHttpException();
        }
    }
}
