<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SubCategories;
use App\Models\Orders;
use Session;
use Alert;
use App\Http\Controllers\PayMobController;


class PaymentController extends Controller
{
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
            
            return redirect()->action('App\Http\Controllers\PaymentController@cash');
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

            return redirect()->action('App\Http\Controllers\PaymentController@card');
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
        // return redirect()->back()->withErrors(['Hoooray! Your Order Has Been Submitted!', 'The Message']);
        Alert::success('Order recieved', 'Thank you!, We will contact you soon.');
        return redirect()->route('home');

    }

    public function card()
    {
        $api_key = env("PAYMOB_API_KEY", "");
        // dd($api_key);
        $integration_id = env("INTEGRATION_ID", "");
        $iframe_id = env("IFRAME_ID", "");

            $paymobController = new PayMobController;
            $authPayMob = $paymobController->authPaymob($api_key);
            
            
            
            // $cartItems =  \Cart::getContentForPayment();
            
            
            try{
                $authPayMob = get_object_vars($authPayMob);
                $token = $authPayMob['token'];
                $amount_cents = \Cart::getTotal() * 100;
                $makeOrder = $paymobController->makeOrderPaymob($token, $amount_cents, false ,[]);
            }catch (\Exception $e) {
                
                return $e->getMessage();
            }
            
            
            try{
                $getPaymentKeyMob = $paymobController->getPaymentKeyPaymob($integration_id,$token,$amount_cents,$makeOrder->id);
                // dd($getPaymentKeyMob);
        }catch (\Exception $e) {
            
            return $e->getMessage();
        }
        
        
        
        try{
            $getPaymentKeyMob = get_object_vars($getPaymentKeyMob);
            $payment_token = $getPaymentKeyMob['token'];
            // dd("DONE");
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
