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
    public function read()
    {
        $filename = 'New ecar portfolio Presentation.pdf';
        $pathToFile = storage_path($filename);
        return response()->file($pathToFile);
    }
}
