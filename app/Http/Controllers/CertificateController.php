<?php

namespace App\Http\Controllers;

use App\Models\Certificate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class CertificateController extends Controller
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
            'idEmployee' => 'required',
            'inputTanggalSertifikat' => 'required|date',
            'inputNamaSertifikat' => 'required',
            'inputLokasiSertifikat' => 'required',
            'inputNamaPenyelenggara' => 'required',
            'inputNoSertifikat' => 'required'
        ]);
        $myRequest = [
            'id_employee' => $validated['idEmployee'],
            'acquisition' => $validated['inputTanggalSertifikat'],
            'name_certificate' => $validated['inputNamaSertifikat'],
            'location' => $validated['inputLokasiSertifikat'],
            'name_authority' => $validated['inputNamaPenyelenggara'],
            'no_certificate' => $validated['inputNoSertifikat']
        ];
        // dd($myRequest);
        Certificate::create($myRequest);
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
            'inputTanggalSertifikat' => 'required|date',
            'inputNamaSertifikat' => 'required',
            'inputLokasiSertifikat' => 'required',
            'inputNamaPenyelenggara' => 'required',
            'inputNoSertifikat' => 'required'
            
        ]);
        $myRequestCertificate = [
            'acquisition' => $validate->validated()['inputTanggalSertifikat'],
            'name_certificate' => $validate->validated()['inputNamaSertifikat'],
            'location' => $validate->validated()['inputLokasiSertifikat'],
            'name_authority' => $validate->validated()['inputNamaPenyelenggara'],
            'no_certificate' => $validate->validated()['inputNoSertifikat']
        ];
        Session::put('editUserID', $request->editNIK);
        Certificate::where('id_certificate', $id)->update($myRequestCertificate);
		return redirect()->back()->with('succes', 'Data Berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request,string $id)
    {
        $deleted = Certificate::where('id_certificate', $request->editNIK)->delete();
        return redirect()->back()->with('succes', 'Data Berhasil dihapus');
    }
}
