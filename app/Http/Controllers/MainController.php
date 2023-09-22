<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Models\Country;
use App\Models\State;
use App\Models\City;
use Symfony\Component\Console\Input\Input;

class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if($locale = session('locale')){
            app()->setLocale($locale);
        }
        
        return view('MainPage');
        // dd(session('locale'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }
    public function language($locale)
    {
            // dd($locale);
            Session::put('locale', $locale);
            return redirect()->back();
        
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
