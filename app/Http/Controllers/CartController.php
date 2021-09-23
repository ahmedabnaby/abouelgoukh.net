<?php

namespace App\Http\Controllers;
use App\Models\Products;
use Session;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function addToCart(Products $product)
    {
        \Cart::add(array(
            'id' => $product->id,
            'name' => $product->name,
            'price' => $product->price,
            'quantity' => request('quantity'),
            'attributes' => array(
                'image' => $product->image
            ),
            'associatedModel' => $product
        ));
        return redirect()->back()->withErrors(['Hoorray Item(s) added to cart! ', 'The Message']);    }

    public function cart()
    {
        $cartItems =  \Cart::getContent();
        // if(session('success'))
        // {
        //     toast(session('success'),'success');
        // }
        return view('inc.navbar', compact('cartItems'));
    }

    public function destroy($itemId)
    {
        \Cart::remove($itemId);
        return back();
    }
}
