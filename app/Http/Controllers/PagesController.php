<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SubCategories;

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
}
