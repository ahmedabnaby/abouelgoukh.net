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
}
