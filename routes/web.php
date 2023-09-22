<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\BusinessController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\OrganizationController;
use App\Http\Controllers\RecruitmentController;
use App\Http\Controllers\CareerController;
use App\Http\Controllers\UpdateCareerController;
use App\Http\Controllers\ContactUSController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\AcademicController;
use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\CeoController;
use App\Http\Controllers\FamilyController;
use App\Http\Controllers\CertificateController;
use App\Http\Controllers\ConstructionController;
use App\Http\Controllers\EngineeringController;
use App\Http\Controllers\FabricationController;
use App\Http\Controllers\FireFightingController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\InformationController;
use App\Http\Controllers\InsulationController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\MaintenanceController;
use App\Http\Controllers\MechanicalEquipmentController;
use App\Http\Controllers\MissionController;
use App\Http\Controllers\OperationSoftwareController;
use App\Http\Controllers\PaintController;
use App\Http\Controllers\PipingController;
use App\Http\Controllers\SummaryController;
use App\Http\Controllers\ProcurementController;
use App\Http\Controllers\ResourceController;
use App\Http\Controllers\SteelStructureController;
use App\Http\Controllers\TankController;
use App\Http\Controllers\VisionController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
    Route::get('/switch/{locale}', [MainController::class, 'language']);

    Route::get('/balikHome', [MainController::class, 'index']);

    Route::get('/', [MainController::class, 'index']);
    Route::get('/home/ceo', [CeoController::class, 'index']);
    Route::get('/home/information', [InformationController::class, 'index']);
    Route::get('/home/history', [HistoryController::class, 'index']);
    Route::get('/home/location', [LocationController::class, 'index']);
    Route::get('/home/vision', [VisionController::class, 'index']);
    Route::get('/home/mission', [MissionController::class, 'index']);
    Route::get('/home/resource', [ResourceController::class, 'index']);
    Route::get('/home/operationsoftware', [OperationSoftwareController::class, 'index']);
    
    Route::get('/organization', [OrganizationController::class, 'index']);
    
    Route::get('/business', [BusinessController::class, 'index']);
    Route::get('/business/engineering', [EngineeringController::class, 'index']);
    Route::get('/business/procurement', [ProcurementController::class, 'index']);
    Route::get('/business/fabrication', [FabricationController::class, 'index']);
    Route::get('/business/construction', [ConstructionController::class, 'index']);
    Route::get('/business/maintenance', [MaintenanceController::class, 'index']);

    Route::get('/business/engineering/steelstructure', [SteelStructureController::class, 'index']);
    Route::get('/business/engineering/tank', [TankController::class, 'index']);
    Route::get('/business/engineering/piping', [PipingController::class, 'index']);
    Route::get('/business/engineering/firefighting', [FireFightingController::class, 'index']);
    Route::get('/business/engineering/paint', [PaintController::class, 'index']);
    Route::get('/business/engineering/insulation', [InsulationController::class, 'index']);
    Route::get('/business/engineering/mechanicalequipment', [MechanicalEquipmentController::class, 'index']);
    
    Route::get('/business/engineering/steelstructure', [SteelStructureController::class, 'index']);
    Route::get('/business/engineering/tank', [TankController::class, 'index']);
    Route::get('/business/engineering/piping', [PipingController::class, 'index']);
    Route::get('/business/engineering/firefighting', [FireFightingController::class, 'index']);
    Route::get('/business/engineering/paint', [PaintController::class, 'index']);
    Route::get('/business/engineering/insulation', [InsulationController::class, 'index']);
    Route::get('/business/engineering/mechanicalequipment', [MechanicalEquipmentController::class, 'index']);
    
    Route::get('/business/engineering/steelstructure', [SteelStructureController::class, 'index']);
    Route::get('/business/engineering/tank', [TankController::class, 'index']);
    Route::get('/business/engineering/piping', [PipingController::class, 'index']);
    Route::get('/business/engineering/firefighting', [FireFightingController::class, 'index']);
    Route::get('/business/engineering/paint', [PaintController::class, 'index']);
    Route::get('/business/engineering/insulation', [InsulationController::class, 'index']);
    Route::get('/business/engineering/mechanicalequipment', [MechanicalEquipmentController::class, 'index']);
    
    Route::get('/business/engineering/steelstructure', [SteelStructureController::class, 'index']);
    Route::get('/business/engineering/tank', [TankController::class, 'index']);
    Route::get('/business/engineering/piping', [PipingController::class, 'index']);
    Route::get('/business/engineering/firefighting', [FireFightingController::class, 'index']);
    Route::get('/business/engineering/paint', [PaintController::class, 'index']);
    Route::get('/business/engineering/insulation', [InsulationController::class, 'index']);
    Route::get('/business/engineering/mechanicalequipment', [MechanicalEquipmentController::class, 'index']);
    Route::get('/business/engineering/steelstructure', [SteelStructureController::class, 'index']);
    Route::get('/business/engineering/tank', [TankController::class, 'index']);
    Route::get('/business/engineering/piping', [PipingController::class, 'index']);
    Route::get('/business/engineering/firefighting', [FireFightingController::class, 'index']);
    Route::get('/business/engineering/paint', [PaintController::class, 'index']);
    Route::get('/business/engineering/insulation', [InsulationController::class, 'index']);
    Route::get('/business/engineering/mechanicalequipment', [MechanicalEquipmentController::class, 'index']);
    
    Route::get('/project', [NewsController::class, 'index']);
    
    Route::get('/contactus', [ContactUSController::class, 'index']);
    Route::post('/sentMail', [EmailController::class, 'sendEmail']);
    
    Route::get('/maps/karawaci', [ContactUSController::class, 'index2']);
    Route::get('/maps/cilegon', [ContactUSController::class, 'index3']);
    
    Route::get('/career', [CareerController::class, 'index']);
    Route::get('/recruitment/announcement', [AnnouncementController::class, 'index']);
    Route::get('/recruitment/register', [RecruitmentController::class, 'index']);
    Route::get('/recruitment/editdata', [RecruitmentController::class, 'recUpdate']);
    Route::get('/updatedata', [UpdateCareerController::class, 'index']);
    Route::post('/careerstore', [CareerController::class, 'store']);
    Route::post('store', [MainController::class, 'store']);

    Route::post('/addAcademic', [AcademicController::class, 'store']);
    Route::post('/updateAcademic/{id}', [AcademicController::class, 'update']);
    Route::post('/deleteAcademic/{id}', [AcademicController::class, 'destroy']);

    Route::post('/addFamily', [FamilyController::class, 'store']);
    Route::post('/updateFamily/{id}', [FamilyController::class, 'update']);
    Route::post('/deleteFamily/{id}', [FamilyController::class, 'destroy']);
    
    Route::post('/addCertificate', [CertificateController::class, 'store']);
    Route::post('/updateCertificate/{id}', [CertificateController::class, 'update']);
    Route::post('/deleteCertificate/{id}', [CertificateController::class, 'destroy']);
    
    Route::post('/addSummary', [SummaryController::class, 'store']);
    Route::post('/updateSummary/{id}', [SummaryController::class, 'update']);
    Route::post('/deleteSummary/{id}', [SummaryController::class, 'destroy']);

    Route::post('/getCity', [CareerController::class, 'getCity'])->name('getCity');
    Route::post('/getSubdistrict', [CareerController::class, 'getSubdistrict'])->name('getSubdistrict');
    Route::post('/getVillage', [CareerController::class, 'getVillage'])->name('getVillage');
    Route::post('/getCurrentCity', [CareerController::class, 'getCurrentCity'])->name('getCurrentCity');
    Route::post('/getCurrentSubdistrict', [CareerController::class, 'getCurrentSubdistrict'])->name('getCurrentSubdistrict');
    Route::post('/getCurrentVillage', [CareerController::class, 'getCurrentVillage'])->name('getCurrentVillage');
    
    Route::post('/getUpdateCity', [UpdateCareerController::class, 'getCity'])->name('getUpdateCity');
    Route::post('/getUpdateSubdistrict', [UpdateCareerController::class, 'getSubdistrict'])->name('getUpdateSubdistrict');
    Route::post('/getUpdateVillage', [UpdateCareerController::class, 'getVillage'])->name('getUpdateVillage');
    Route::post('/getUpdateCurrentCity', [UpdateCareerController::class, 'getCurrentCity'])->name('getUpdateCurrentCity');
    Route::post('/getUpdateCurrentSubdistrict', [UpdateCareerController::class, 'getCurrentSubdistrict'])->name('getUpdateCurrentSubdistrict');
    Route::post('/getUpdateCurrentVillage', [UpdateCareerController::class, 'getCurrentVillage'])->name('getUpdateCurrentVillage');
    