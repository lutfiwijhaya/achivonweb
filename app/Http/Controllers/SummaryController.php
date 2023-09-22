<?php

namespace App\Http\Controllers;

use App\Models\Summary;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class SummaryController extends Controller
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
            'inputNamaPerusahaan' => 'required',
            'inputPosisiPekerjaan' => 'required',
            'inputPeriodeDari' => 'required',
            'inputPeriodeSampai' => 'required',
        ]);
        $inputPeriodeDari = new Carbon($validated['inputPeriodeDari']);
        $inputPeriodeSampai = new Carbon($validated['inputPeriodeSampai']);
        $diff = $inputPeriodeDari->diff($inputPeriodeSampai);
        $years = $diff->y;
        $months = $diff->m;
        $selisihCareer = $years.' Tahun '.$months.' Bulan';
        $myRequest = [
            'id_employee' => $validated['idEmployee'],
            'company_name' => $validated['inputNamaPerusahaan'],
            'job_position' => $validated['inputPosisiPekerjaan'],
            'period' => $validated['inputPeriodeDari'],
            'period_to' => $validated['inputPeriodeSampai'],
            'career' => $selisihCareer
        ];
        // dd($myRequest);
        Summary::create($myRequest);
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
            'inputNamaPerusahaan' => 'required',
            'inputPosisiPekerjaan' => 'required',
            'inputPeriodeDari' => 'required',
            'inputPeriodeSampai' => 'required',
        ]);
        $inputPeriodeDari = new Carbon($validate->validated()['inputPeriodeDari']);
        $inputPeriodeSampai = new Carbon($validate->validated()['inputPeriodeSampai']);
        $selisihCareer = $inputPeriodeDari->diffAsCarbonInterval($inputPeriodeSampai)->format('%y Tahun %m bulan');
        // dd($selisihCareer);
        $myRequestAcademic = [
            'company_name' => $validate->validated()['inputNamaPerusahaan'],
            'job_position' => $validate->validated()['inputPosisiPekerjaan'],
            'period' => $validate->validated()['inputPeriodeDari'],
            'period_to' => $validate->validated()['inputPeriodeSampai'],
            'career' => $selisihCareer,
        ];
        Session::put('editUserID', $request->editNIK);
        Summary::where('id_summary', $id)->update($myRequestAcademic);
		return redirect()->back()->with('succes', 'Data Berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, string $id)
    {
        $deleted = Summary::where('id_summary', $request->editNIK)->delete();
        return redirect()->back()->with('succes', 'Data Berhasil dihapus');
    }
}
