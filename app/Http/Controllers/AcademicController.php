<?php

namespace App\Http\Controllers;

use App\Models\Academic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class AcademicController extends Controller
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
        $validated = $request->validate([
            'editNIK' => 'required',
            'idEmployee' => 'required',
            'inputNamaSekolah' => 'required',
            'inputTahunLulus' => 'required',
            'inputJurusan' => 'required',
            'inputAlamatSekolah' => 'required',
        ]);
        $myRequest = [
            'id_employee' => $validated['idEmployee'],
            'Graduation' => $validated['inputTahunLulus'],
            'School_Name' => $validated['inputNamaSekolah'],
            'location' => $validated['inputAlamatSekolah'],
            'major' => $validated['inputJurusan'] 
        ];
        Academic::create($myRequest);
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
            // 'idAcademic' => 'required',
            'inputTahunLulus' => 'required',
            'inputNamaSekolah' => 'required',
            'inputJurusan' => 'required',
            'inputAlamatSekolah' => 'required',
        ]);
        $myRequestAcademic = [
            'Graduation' => $validate->validated()['inputTahunLulus'],
            'School_Name' => $validate->validated()['inputNamaSekolah'],
            'location' => $validate->validated()['inputAlamatSekolah'],
            'major' => $validate->validated()['inputJurusan'],
        ];
        Session::put('editUserID', $request->editNIK);
        Academic::where('id_academic', $id)->update($myRequestAcademic);
		return redirect()->back()->with('succes', 'Data Berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, string $id)
    {
        $deleted = Academic::where('id_academic', $request->editNIK)->delete();
        return redirect()->back()->with('succes', 'Data Berhasil dihapus');
    }
}
