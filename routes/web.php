<?php

use App\Http\Controllers\SitewebController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/test-database', function () {
    try {
        DB::connection('mysql')->select('SELECT 1');
        return "La base de données fonctionne correctement!";
    } catch (\Exception $e) {
        return "Erreur : " . $e->getMessage();
    }
});


Route::get('/Home', [SitewebController::class, 'index']);
Route::get('/Service', [SitewebController::class, 'Service']);
Route::get('/PriceService/{id}', [SitewebController::class, 'PriceService']);



//Admin SITE WEB
Route::get('/AddImageActualite', [SitewebController::class, 'PageAddImageActualite']);
Route::post('/AddImageActualiteValid', [SitewebController::class, 'AddImageActualite']);

Route::get('/UpdateImageActualite/{id}', [SitewebController::class, 'PageUpdateImageActualite']);
Route::post('/UpdateImageActualiteValid', [SitewebController::class, 'UpdateImageActualite']);

Route::get('/DeleteImageActualite/{id}', [SitewebController::class, 'DeleteImageActualite']);

Route::get('/AddContact', [SitewebController::class, 'PageAddContact']);
Route::post('/AddContactValid', [SitewebController::class, 'AddContact']);

Route::post('/UpdateContactValid', [SitewebController::class, 'UpdateContact']);

Route::get('/UpdateImageRes', [SitewebController::class, 'PageUpdateImageRes']);

Route::get('/AddImageService', [SitewebController::class, 'PageAddImageService']);
Route::post('/AddImageServiceValid', [SitewebController::class, 'AddImageService']);

Route::get('/UpdateImageService/{id}', [SitewebController::class, 'PageUpdateImageService']);
Route::post('/UpdateImageServiceValid', [SitewebController::class, 'UpdateImageService']);

Route::get('/DeleteImageService/{id}', [SitewebController::class, 'DeleteImageService']);


Route::get('/AddSalonSW', [SitewebController::class, 'PageAddSalonSW']);
Route::post('/AddSalonSWValid', [SitewebController::class, 'AddSalonSW']);

Route::post('/UpdateSalonSWValid', [SitewebController::class, 'UpdateSalonSW']);
Route::get('/DeleteSalonSW/{id}', [SitewebController::class, 'DeleteSalonSW']);

Route::get('/UpdateImagePlanService', [SitewebController::class, 'PageUpdateImagePlanService']);

Route::get('/AddPrixService/{id}', [SitewebController::class, 'PageAddPrixService']);
Route::post('/AddPrixServiceValid', [SitewebController::class, 'AddPrixService']);

Route::get('/UpdatePrixService/{id}', [SitewebController::class, 'PageUpdatePrixService']);
Route::post('/UpdatePrixServiceValid', [SitewebController::class, 'UpdatePrixService']);

Route::post('/AddSousCategorieServiceValid', [SitewebController::class, 'AddSousCategorieService']);

Route::get('/DeleteSubcategorie/{id}', [SitewebController::class, 'DeleteSubcategorie']);
Route::get('/DeleteCategorie/{id}', [SitewebController::class, 'DeleteCategorie']);
