<?php

namespace App\Http\Controllers;

use App\Models\Family;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class FamilyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        // dd($request);
        $validated = $request->validate([
            'idEmployee' => 'required',
            'inputStatusKeluarga' => 'required',
            'inputNamaKeluarga' => 'required',
            'inputBirthDayKeluarga' => 'required',
            'RadioCohabit' => 'required',
            'inputNoHPKeluarga' => 'required',
        ]);
        $myRequest = [
            'id_employee' => $validated['idEmployee'],
            'name' => $validated['inputNamaKeluarga'],
            'hubungan' => $validated['inputStatusKeluarga'],
            'Birthday' => $validated['inputBirthDayKeluarga'],
            'cohabit' => $validated['RadioCohabit'],
            'No_HP' => $validated['inputNoHPKeluarga']
        ];
        // dd($myRequest);
        Family::create($myRequest);
        return redirect()->back()->with('succes', 'data berhasil ditambahkan');
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
        $validate = Validator::make($request->all(), [
            'inputStatusKeluarga' => 'required',
            'inputNamaKeluarga' => 'required',
            'inputBirthDayKeluarga' => 'required|date',
            'RadioCohabit' => 'required',
            'inputNoHPKeluarga' => 'required',
        ]);
        $myRequestFamily = [
            'name' => $validate->validated()['inputNamaKeluarga'],
            'hubungan' => $validate->validated()['inputStatusKeluarga'],
            'Birthday' => $validate->validated()['inputBirthDayKeluarga'],
            'cohabit' => $validate->validated()['RadioCohabit'],
            'No_HP' => $validate->validated()['inputNoHPKeluarga'],
        ];
        Session::put('editUserID', $request->editNIK);
        Family::where('id_family', $id)->update($myRequestFamily);
		return redirect()->back()->with('succes', 'Data Berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, string $id)
    {
        $deleted = Family::where('id_family', $request->editNIK)->delete();
        return redirect()->back()->with('succes', 'Data Berhasil dihapus');
    }
}
