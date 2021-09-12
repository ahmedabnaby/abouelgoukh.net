<?php

namespace App\Http\Controllers;

use App\Models\Products;
use App\Models\SubCategories;
use App\Models\SubsubCategories;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('products.index')->with('products',Products::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Products::findOrFail($id);
        $sub_sub_categories = SubsubCategories::all();
        return view('products.bicycles.show')->withProduct($product)->withSubsubcategories($sub_sub_categories);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function edit(Products $products)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Products $products)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function destroy(Products $products)
    {
        //
    }
    public function bicycles_index()
    {
        return view('products.bicycles.bicycles_index')->with('sub_categories',SubCategories::all());
    }
    public function bicycles()
    {
        return view('products.bicycles.bicycles')->with('bicycles',Products::all());
    }


    public function accessories()
    {
        return view('products.accessories.accessories')->with('accessories',Products::all());
    }
    public function show_accessories($id)
    {
        $accessory = Products::findOrFail($id);
        $accessories = Products::all();
        return view('products.accessories.show_accessories')->withProduct($accessory)->withAccessories($accessories);
    }


    public function scooters()
    {
        return view('products.scooters.scooters')->with('scooters',Products::all());
    }
    public function show_scooters($id)
    {
        $scooter = Products::findOrFail($id);
        $scooters = Products::all();
        return view('products.scooters.show_scooters')->withProduct($scooter)->withScooters($scooters);
    }


    public function kids_scooter()
    {
        return view('products.kids_scooter.kids_scooter');
    }


    public function toys()
    {
        return view('products.toys.toys');
    }


    public function sports()
    {
        return view('products.sports.sports')->with('sports',Products::all());
    }
    public function show_sports($id)
    {
        $sport = Products::findOrFail($id);
        $sports = Products::all();
        return view('products.sports.show_sports')->withProduct($sport)->withSports($sports);
    }


    public function car_holders()
    {
        return view('products.car_holders.car_holders')->with('car_holders',Products::all());
    }
    public function show_car_holders($id)
    {
        $car_holder = Products::findOrFail($id);
        $car_holders = Products::all();
        return view('products.car_holders.show_car_holders')->withProduct($car_holder)->withCarholders($car_holders);
    }


    public function buggy()
    {
        return view('products.buggies.buggies')->with('buggies',Products::all());
    }
    public function show_buggy($id)
    {
        $buggy = Products::findOrFail($id);
        $buggies = Products::all();
        return view('products.buggies.show_buggies')->withProduct($buggy)->withBuggies($buggies);
    }

    
    public function electric_scooter()
    {
        return view('products.electric_scooters.electric_scooter')->with('electric_scooters',Products::all());
    }
    public function show_electric_scooter($id)
    {
        $electric_scooter = Products::findOrFail($id);
        $electric_scooters = Products::all();
        return view('products.electric_scooters.show_electric_scooters')->withProduct($electric_scooter)->withElectricscooters($electric_scooters);
    }
}
