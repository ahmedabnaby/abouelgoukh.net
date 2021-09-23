<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SubCategories;
use App\Models\Orders;
use Session;

use BaklySystems\PayMob\Facades\PayMob;

class PagesController extends Controller
{
    public function abouelgoukh()
    {
        return view('pages.about');
    }
    public function contact()
    {
        return view('pages.contact');
    }
    public function checkout()
    {
        return view('pages.checkout');
    }
    public function payment()
    {
        $method = request('method');
        if($method==='cash')
        {
            $data = array(
                'cart' => base64_encode(serialize(\Cart::getContent())),
                'name' => request('name'),
                'email' => request('email'),
                'street' => request('street'),
                'city' => request('city'),
                'phone' => request('phone'),
                'current_date' => request('current_date'),
                'method' => 'cash'
                  );
            $order = collect($data);
            Session::push('order', $order);
            
            return redirect()->action('App\Http\Controllers\PagesController@cash');
        }
        else
        {
            $data = array(
                'cart' => base64_encode(serialize(\Cart::getContent())),
                'name' => request('name'),
                'email' => request('email'),
                'street' => request('street'),
                'city' => request('city'),
                'phone' => request('phone'),
                'current_date' => request('current_date'),
                'method' => 'card'
                  );
            $order = collect($data);
            Session::push('order', $order);

            return redirect()->action('App\Http\Controllers\PagesController@card');
        }
    }
    public function cash()
    {
        $orders=Session::get('order');
        // dd($orders);
        foreach ($orders as $order);
        Orders::create([
            'cart' => base64_encode(serialize(\Cart::getContent())),
            'name' => $order['name'],
            'street' => $order['street'],
            'city' => $order['city'],
            'email' => $order['email'],
            'phone' => $order['phone'],
            'current_date' => $order['current_date'],
            'method' => 'cash'
        ]);
        
        \Cart::clear();
        // return redirect()->back()->withSuccess(['Hoooray! Your Order Has Been Submitted! ', 'The Message']);
        return redirect()->back()->withErrors(['Hoooray! Your Order Has Been Submitted!', 'The Message']);

    }
    public function card()
    {
        $api_key = env("PAYMOB_API_KEY", "ZXlKMGVYQWlPaUpLVjFRaUxDSmhiR2NpT2lKSVV6VXhNaUo5LmV5SnVZVzFsSWpvaWFXNXBkR2xoYkNJc0luQnliMlpwYkdWZmNHc2lPakV5TnpZeE9Dd2lZMnhoYzNNaU9pSk5aWEpqYUdGdWRDSjkuX29HVlRFSjA3dUFLenF1SXVLTXJYeS1fUC1Qd3BSV05aTWxRWERZczBlOVlXelpKd0FxWGZ4TTJueENrT1A3LXNia3h1S0h4MGQ4bE5FdzNyd3VkUlE=");
        $integration_id = env("INTEGRATION_ID", "");
        $iframe_id = env("IFRAME_ID", "");
        try{
            $authPayMob = PayMob::authPaymob($api_key);
            dd($authPayMob);
        }catch (\Exception $e) {

            return $e->getMessage();
        }


        // $cartItems =  \Cart::getContentForPayment();


        try{
            $authPayMob = get_object_vars($authPayMob);
            $token = $authPayMob['token'];
            $amount_cents = \Cart::getTotal() * 100;
            $makeOrder = PayMob::makeOrderPaymob($token, $amount_cents, false ,[]);
        }catch (\Exception $e) {
            
            return $e->getMessage();
        }
        
        
        try{
            $getPaymentKeyMob = PayMob::getPaymentKeyPaymob($integration_id,$token,$amount_cents,$makeOrder->id);
        }catch (\Exception $e) {
            
            return $e->getMessage();
        }
        
        
        
        try{
            $getPaymentKeyMob = get_object_vars($getPaymentKeyMob);
            $payment_token = $getPaymentKeyMob['token'];
            dd("DONE");
            $url = 'https://accept.paymob.com/api/acceptance/iframes/'.$iframe_id.'?payment_token='.$payment_token;
            }catch (\Exception $e) {

            return $e->getMessage();
        }


        $orders=Session::get('order');
        // dd($orders);
        foreach ($orders as $order);
        Orders::create([
            'cart' => base64_encode(serialize(\Cart::getContent())),
            'name' => $order['name'],
            'street' => $order['street'],
            'city' => $order['city'],
            'email' => $order['email'],
            'phone' => $order['phone'],
            'current_date' => $order['current_date'],
            'method' => 'card'
        ]);
        
        \Cart::clear();
        return redirect()->away($url);

    }
}
