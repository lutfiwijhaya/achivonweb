<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CareerModel;
use App\Models\Academic;
use App\Models\address;
use App\Models\Certificate;
use App\Models\Family;
use App\Models\foto;
use App\Models\Motivation;
use App\Models\Skck;
use App\Models\Summary;
use App\Models\Country;
use App\Models\Province;
use App\Models\Regency;
use App\Models\District;
use App\Models\JobVacancy;
use App\Models\Village;
use App\Models\Discipline;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;

class CareerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if($locale = session('locale')){
            app()->setLocale($locale);
        }
        $MyJob = JobVacancy::all();
        $MyCountry = Country::all();
        $MyProvince = Province::orderBy('name', 'asc')->get();
        $MyDiscipline = Discipline::all();
        // dd($MyCountry);
        return view('CareerPage',[
            'MyDiscipline' => $MyDiscipline,
			'MyJob' => $MyJob,
			'MyCountry' => $MyCountry,
			'MyProvince' => $MyProvince,
		]);
    }

    public function getCity(Request $request){
        $id = $request->id_province;
        // dd($id);
        $mycity = Regency::where('province_id', $id)
                ->orderBy('name', 'asc')
                ->get();
        foreach ($mycity as $city) {
            echo "<option value='$city->name' data-values='$city->id'>$city->name</option>";
        }
    }
    public function getSubdistrict(Request $request){
        $id = $request->id_city;
        $mySubDistrict = District::where('regency_id', $id)
                        ->orderBy('name', 'asc')
                        ->get();
        foreach ($mySubDistrict as $subdistrict) {
            echo "<option value='$subdistrict->name' data-values='$subdistrict->id'>$subdistrict->name</option>";
        }
    }
    public function getVillage(Request $request){
        $id = $request->id_district;
        $myVillage = Village::where('district_id', $id)
                    ->orderBy('name', 'asc')
                    ->get();
        foreach ($myVillage as $village) {
            echo "<option value='$village->name' data-values='$village->id'>$village->name</option>";
        }
    }
    
    public function getCurrentCity(Request $request){
        $id = $request->id_province;
        $mycity = Regency::where('province_id', $id)
                ->orderBy('name', 'asc')
                ->get();
        foreach ($mycity as $city) {
            echo "<option value='$city->name' data-values='$city->id'>$city->name</option>";
        }
    }
    public function getCurrentSubdistrict(Request $request){
        $id = $request->id_city;
        $mySubDistrict = District::where('regency_id', $id)
                ->orderBy('name', 'asc')
                ->get();
        foreach ($mySubDistrict as $subdistrict) {
            echo "<option value='$subdistrict->name' data-values='$subdistrict->id'>$subdistrict->name</option>";
        }
    }
    public function getCurrentVillage(Request $request){
        $id = $request->id_district;
        $myVillage = Village::where('district_id', $id)
                ->orderBy('name', 'asc')
                ->get();
        foreach ($myVillage as $village) {
            echo "<option value='$village->name' data-values='$village->id'>$village->name</option>";
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
        $date = date("d-M-Y");
        
        $validatedData = Validator::make($request->all(), [
            'inputName' => 'required',
            'inputNIK' => 'required|unique:cd_employee,KTP|regex:/^[0-9]/',
            'inputEmail' => 'required|unique:cd_employee,email',
            'inputPosition' => 'required',
            'inputSallary' => 'required',
            'RadioGender' => 'required',
            'inputBirthPlace' => 'required',
            'inputBirthDay' => 'required|date',
            'RadioMarital' => 'required',
            'inputNoHP' => 'required',
            'inputNPWP' => 'required',
            // 'inputBPJSKesehatan' => '',
            // 'inputBPJSKetenagakerjaan' => '',

            'inputCountry' => 'required',
            'inputProvince' => 'required',
            'inputCity' => 'required',
            'inputKecamatan' => 'required',
            'inputDesa' => 'required',
            'inputRT' => 'required',
            'inputRW' => 'required',
            'inputPostCode' => 'required',
            'inputAddress' => 'required',

            'inputCurrentCountry' => 'required',
            'inputCurrentProvince' => 'required',
            'inputCurrentCity' => 'required',
            'inputCurrentKecamatan' => 'required',
            'inputCurrentDesa' => 'required',
            'inputCurrentRT' => 'required',
            'inputCurrentRW' => 'required',
            'inputCurrentPostCode' => 'required',
            'inputCurrentAddress' => 'required',

            'inputTahunLulus.*' => 'required',
            'inputNamaSekolah.*' => 'required',
            'inputJurusan.*' => 'required',
            'inputAlamatSekolah.*' => 'required',

            'inputStatusKeluarga.*' => 'required',
            'inputNamaKeluarga.*' => 'required',
            'inputBirthDayKeluarga.*' => 'required',
            'inputCohabit.*' => 'required',
            'inputNoHPKeluarga.*' => 'required',

            'inputTanggalSertifikat.*' => 'required',
            'inputNamaSertifikat.*' => 'required',
            'inputLokasiSertifikat.*' => 'required',
            'inputNamaPenyelenggara.*' => 'required',
            'inputNoSertifikat.*' => 'required',

            'inputNamaPerusahaan.*' => 'required',
            'inputPosisiPekerjaan.*' => 'required',
            'inputPeriodeDari.*' => 'required',
            'inputPeriodeSampai.*' => 'required',

            'inputMotivasi' => 'required',
            'inputOthers' => 'required',

            'inputFoto' => 'required|image|mimes:jpeg,png,jpg|max:512',
            'mySKCK' => 'required|mimes:jpg,bmp,png',
        ]);

        // if ($validatedData->fails()) {
        //     return redirect('/Career')
        //                 ->withErrors($validatedData)    
        //                 ->withInput();
        // }
        
        foreach ($request->inputPeriodeDari as $key => $value) {
            foreach ($request->inputPeriodeSampai as $key1 => $value1) {
                if ($key1 == $key) {
                    $inputPeriodeDari = new Carbon($value);
                    $inputPeriodeSampai = new Carbon($value1);
                    $diff = $inputPeriodeDari->diff($inputPeriodeSampai);
                    $years = $diff->y;
                    $months = $diff->m;
                    $selisihCareer[$key] = $years.' Tahun '.$months.' Bulan';
                }
            }
        }

        $MyRequestPersonal = [
            'Nama' => $validatedData->validated()['inputName'],
            'KTP' => $validatedData->validated()['inputNIK'],
            'email' => $validatedData->validated()['inputEmail'],
            'NPWP' => $validatedData->validated()['inputNPWP'],
            'sex' => $validatedData->validated()['RadioGender'],
            'b_place' => $validatedData->validated()['inputBirthPlace'],
            'birthday' => $validatedData->validated()['inputBirthDay'],
            'marital' => $validatedData->validated()['RadioMarital'],
            'No_HP' => $validatedData->validated()['inputNoHP'],
            'BPJS' => $request->inputBPJSKesehatan,
            'bpjs_ket' => $request->inputBPJSKetenagakerjaan,
            'Applying_A' => $validatedData->validated()['inputPosition'],
            'D_Salary' => $validatedData->validated()['inputSallary'],
            'discipline' => $validatedData->validated()['inputPosition'],
            'cd_date_apply' => $date,
            'approval' => '0'
        ];
        $CareerModel = CareerModel::create($MyRequestPersonal);

        $MyRequestAddress = [
            'id_employee' => $CareerModel->id,
            'h_negara' => $validatedData->validated()['inputCountry'],
            'h_prov' => $validatedData->validated()['inputProvince'],
            'h_kab' => $validatedData->validated()['inputCity'],
            'h_kec' => $validatedData->validated()['inputKecamatan'],
            'h_desa' => $validatedData->validated()['inputDesa'],
            'h_alamat' => $validatedData->validated()['inputAddress'],
            'c_negara' => $validatedData->validated()['inputCurrentCountry'],
            'c_prov' => $validatedData->validated()['inputCurrentProvince'],
            'c_kab' => $validatedData->validated()['inputCurrentCity'],
            'c_kec' => $validatedData->validated()['inputCurrentKecamatan'],
            'c_desa' => $validatedData->validated()['inputCurrentDesa'],
            'c_alamat' => $validatedData->validated()['inputCurrentAddress'],
            'full_home' => $validatedData->validated()['inputAddress'] . ', ' . 'RT ' . $validatedData->validated()['inputRT'] . ' / ' . 'RW ' . $validatedData->validated()['inputRW'] . ', '. $validatedData->validated()['inputDesa'] . ', ' . $validatedData->validated()['inputKecamatan'] . ', ' . $validatedData->validated()['inputCity'] . ', ' . $validatedData->validated()['inputProvince'] . ', '  . $validatedData->validated()['inputPostCode'] . ', ' . $validatedData->validated()['inputCountry'],
            'full_current' => $validatedData->validated()['inputCurrentAddress'] . ', ' . 'RT ' . $validatedData->validated()['inputCurrentRT'] . ' / ' . 'RW ' . $validatedData->validated()['inputCurrentRW'] . ', ' . $validatedData->validated()['inputCurrentDesa'] . ', ' . $validatedData->validated()['inputCurrentKecamatan'] . ', ' . $validatedData->validated()['inputCurrentCity'] . ', ' . $validatedData->validated()['inputCurrentProvince'] . ', '. $validatedData->validated()['inputCurrentPostCode'] . ', ' . $validatedData->validated()['inputCurrentCountry']
        ];
        address::create($MyRequestAddress);

        
        foreach($request->input('inputNamaSekolah') as $key => $value) {
            $MyRequestAcademic = [
                'id_employee' => $CareerModel->id,
                'Graduation' => $validatedData->validated()['inputTahunLulus'][$key],
                'School_Name' => $validatedData->validated()['inputNamaSekolah'][$key],
                'location' => $validatedData->validated()['inputAlamatSekolah'][$key],
                'major' => $validatedData->validated()['inputJurusan'][$key]
            ];
            Academic::create($MyRequestAcademic);
        }

        foreach ($request->input('inputNamaKeluarga') as $key => $value) {
            $MyRequestFamily = [
                'id_employee' => $CareerModel->id,
                'name' => $validatedData->validated()['inputNamaKeluarga'][$key],
                'hubungan' => $validatedData->validated()['inputStatusKeluarga'][$key],
                'Birthday' => $validatedData->validated()['inputBirthDayKeluarga'][$key],
                'cohabit' => $validatedData->validated()['inputCohabit'][$key],
                'No_HP' => $validatedData->validated()['inputNoHPKeluarga'][$key],
            ];
            Family::create($MyRequestFamily);
        }
        
        foreach ($request->input('inputNamaSertifikat') as $key => $value) {
            $MyRequestCertificate = [
                'id_employee' => $CareerModel->id,
                'acquisition' => $validatedData->validated()['inputTanggalSertifikat'][$key],
                'name_certificate' => $validatedData->validated()['inputNamaSertifikat'][$key],
                'location' => $validatedData->validated()['inputLokasiSertifikat'][$key],
                'name_authority' => $validatedData->validated()['inputNamaPenyelenggara'][$key],
                'no_certificate' => $validatedData->validated()['inputNoSertifikat'][$key],
            ];
            Certificate::create($MyRequestCertificate);
        }

        foreach ($request->input('inputNamaPerusahaan') as $key => $value) {
            foreach ($selisihCareer as $key2 => $value2) {
                if ($key2 == $key) {
                    $MyRequestSummary = [
                        'id_employee' => $CareerModel->id,
                        'company_name' => $validatedData->validated()['inputNamaPerusahaan'][$key],
                        'job_position' => $validatedData->validated()['inputPosisiPekerjaan'][$key],
                        'period' => $validatedData->validated()['inputPeriodeDari'][$key],
                        'period_to' => $validatedData->validated()['inputPeriodeSampai'][$key],
                        'career' => $value2
                    ];
                    Summary::create($MyRequestSummary);
                }
            }
        }
        // dd($MyRequestSummary);

        $MyRequestMotivation = [
            'id_employee' => $CareerModel->id,
            'motivation1' => $validatedData->validated()['inputMotivasi'],
            'motivation2' => $validatedData->validated()['inputOthers'],
        ];
        Motivation::create($MyRequestMotivation);
        
        $MyRequestFoto = [
            'id_employee' => $CareerModel->id,
            'foto' => $request->file('inputFoto')->getContent()
        ];
        foto::create($MyRequestFoto);
        
        $MyRequestFotoSKCK = [
            'id_employee' => $CareerModel->id,
            'file_skck' => $request->file('mySKCK')->getContent()
        ];
        Skck::create($MyRequestFotoSKCK);
        return redirect('career')->with('succes', 'Data Berhasil ditambahkan');
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
