<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function bicycles()
    {
        return view('pages.bicycles');
    }
}
