<?php

namespace App\Http\Controllers;

use App\Models\Academic;
use App\Models\address;
use Illuminate\Http\Request;
use App\Models\CareerModel;
use App\Models\Certificate;
use App\Models\Family;
use App\Models\foto;
use App\Models\Skck;
use App\Models\Summary;
use App\Models\Country;
use App\Models\Province;
use App\Models\District;
use App\Models\Regency;
use App\Models\Village;
use App\Models\State;
use App\Models\City;
use App\Models\JobVacancy;
use App\Models\Motivation;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class UpdateCareerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if($locale = session('locale')){
            app()->setLocale($locale);
        }
        Session::put('editUserID', $request->editNIK);
        $nik = Session::get('editUserID');
        // dd($nik);
        if ($nik != null) {
            $data = CareerModel::where('KTP', $nik)->get('id_employee');
            if ($data->isNotEmpty()) {
                $dataEmployee = CareerModel::where('KTP', $nik)->get();
                $MyJob = JobVacancy::all();
                $dataAddress = address::where('id_employee', $data[0]->id_employee)->get();
                $dataAcademic = Academic::where('id_employee', $data[0]->id_employee)->get();
                $dataFamily = Family::where('id_employee', $data[0]->id_employee)->get();
                $dataCertificate = Certificate::where('id_employee', $data[0]->id_employee)->get();
                $dataSummary = Summary::where('id_employee', $data[0]->id_employee)->get();
                $dataMotivation = Motivation::where('id_employee', $data[0]->id_employee)->get();
                $dataFoto = foto::where('id_employee', $data[0]->id_employee)->get();
                $dataSkck = Skck::where('id_employee', $data[0]->id_employee)->get();

                $dataCountry = Country::all();
                $dataState = Province::all();
                // dd($country);
                return view('CareerPageEdit',[
                    'dataEmployee' => $dataEmployee,
                    'dataAddress' => $dataAddress,
                    'dataAcademic' => $dataAcademic,
                    'dataFamily' => $dataFamily,
                    'dataCertificate' => $dataCertificate,
                    'dataSummary' => $dataSummary,
                    'dataMotivation' => $dataMotivation,
                    'dataFoto' => $dataFoto,
                    'dataSkck' => $dataSkck,
                    'MyJob' => $MyJob,
                    'MyCountry' => $dataCountry,
                    'MyState' => $dataState,
                ]);
            }else{
                return redirect()->to('/Recruitment')->with('fail', 'No.KTP yang anda masukan belum terdaftar');
            }
        } else {
            return redirect()->to('/Recruitment');
        }
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

    public function getCity(Request $request){
        $id = $request->id_province;
        $mycity = Regency::where('province_id', $id)->get();
        foreach ($mycity as $city) {
            echo "<option value='$city->id'>$city->name</option>";
        }
    }
    public function getSubdistrict(Request $request){
        $id = $request->id_city;
        $mySubDistrict = District::where('regency_id', $id)->get();
        foreach ($mySubDistrict as $subdistrict) {
            echo "<option value='$subdistrict->id'>$subdistrict->name</option>";
        }
    }
    public function getVillage(Request $request){
        $id = $request->id_district;
        $myVillage = Village::where('district_id', $id)->get();
        foreach ($myVillage as $village) {
            echo "<option value='$village->id'>$village->name</option>";
        }
    }
    
    public function getCurrentCity(Request $request){
        $id = $request->id_province;
        $mycity = Regency::where('province_id', $id)->get();
        foreach ($mycity as $city) {
            echo "<option value='$city->id'>$city->name</option>";
        }
    }
    public function getCurrentSubdistrict(Request $request){
        $id = $request->id_city;
        $mySubDistrict = District::where('regency_id', $id)->get();
        foreach ($mySubDistrict as $subdistrict) {
            echo "<option value='$subdistrict->id'>$subdistrict->name</option>";
        }
    }
    public function getCurrentVillage(Request $request){
        $id = $request->id_district;
        $myVillage = Village::where('district_id', $id)->get();
        foreach ($myVillage as $village) {
            echo "<option value='$village->id'>$village->name</option>";
        }
    }
}
