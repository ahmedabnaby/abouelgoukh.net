<?php

namespace App\Http\Controllers;
use App\Models\Products;
use Session;
use Alert;

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
                'image' => $product->image,
                'status' => $product->status,
                'routeName' => $product->routeName,
            ),
            'associatedModel' => $product
        ));
        Alert::success('Cart updated.', "Added ".$product->name." to cart");
        return redirect()->back();
        }

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
