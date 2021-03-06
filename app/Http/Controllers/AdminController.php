<?php

namespace App\Http\Controllers;
use Auth;
use App\Models\Admin;
use App\Models\Orders;
use App\Models\Products;
use App\Models\Categories;
use Illuminate\Http\Request;
use Session;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login_view()
    {
        return view('admin.login');
    }
    public function admin_login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        $admin = \DB::table('admins')
        ->where('email',$request->input('email'))->where('password',$request->input('password'))
        ->first();
        if ($admin) {
            $logged_in = "logged_in";
            Session::put('logged_in', $logged_in);
            return redirect()->intended('dashboard');     
        }
            return redirect()->back()->withErrors(['Sorry, Invaild login credentials! ', 'The Message']);
    }

    public function logout(Request $request) {
        Auth::logout();
        return redirect()->route('home');
    }
    
    public function dashboard()
    {
        $orders = Orders::all();
        $orders = $orders->map(function($i) {
            $i->cart = unserialize(base64_decode($i->cart));
            return $i;
        });
        
        return view('admin.dashboard')->withOrders($orders);
    }
    public function adminPanel()
    {
        $products = Products::all();
        $categories = Categories::all();
        
        return view('admin.adminPanel')->withProducts($products)->withCategories($categories);
    }
}
