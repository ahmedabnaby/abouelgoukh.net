<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SubCategories;
use App\Models\Orders;
use Session;

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
                'current_date' => request('current_date')
                  );
            $order = collect($data);
            Session::push('order', $order);
            
            return redirect()->action('App\Http\Controllers\PagesController@cash');
        }
        else
        {
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
            'current_date' => $order['current_date']
        ]);
        
        \Cart::clear();
        // return redirect()->back()->withSuccess(['Hoooray! Your Order Has Been Submitted! ', 'The Message']);
        return redirect()->back()->withErrors(['Hoooray! Your Order Has Been Submitted!', 'The Message']);

    }
}
