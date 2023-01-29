<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product as Productmodel;
use Stripe\Stripe;
use Stripe\PaymentIntent;
class Product extends Controller
{
    function productlist()
    {
       
      $data['alldata']=  Productmodel::all();
        return view('productlist',$data);
    }

    function productdetails($id)
    {
      if(empty($id))
      {
        return   redirect('productlist')->with('success', 'something wrong');
      }

      $data['productdetails']=  Productmodel::where('id',$id)->first();
      $data['intent']= $this->paymentintent();


      return view('productdetails',$data);
      


      


    } 

    function paymentintent()
    {
    $a=  Stripe::setApiKey(env('STRIPE_SECRET'));
    // print_r($a);die;

$payment_intent = PaymentIntent::create([
  'payment_method_types' => ['card'],
  // 'amount' => $request->invoice['total'] * 100,
  'amount'=>100,
  'currency' => 'usd',
  // 'receipt_email' => $request->invoice['clients_email']
], 
[
  // 'stripe_account' => $request->user['stripe_user_id']
]);

return $payment_intent;
    }

    function payment(Request $request,$price)
    {

      \Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));


\Stripe\Charge::create ([
  "amount" => $request->price,
  "currency" => "INR",
  "source" => $request->username,
  "description" => "This is test payment",
]);
    }
}
