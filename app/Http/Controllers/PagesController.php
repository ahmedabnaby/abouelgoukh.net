<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function bicycles()
    {
        return view('pages.bicycles');
    }
    public function bicycles_under_13()
    {
        return view('pages.bicycles_under_13');
    }
}
