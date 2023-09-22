<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if($locale = session('locale')){
            app()->setLocale($locale);
        }
        return view('ContactUsPage');
    }
    public function index2()
    {
        if($locale = session('locale')){
            app()->setLocale($locale);
        }
        return view('ContactUs2');
    }
    public function index3()
    {
        if($locale = session('locale')){
            app()->setLocale($locale);
        }
        return view('ContactUs3');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
