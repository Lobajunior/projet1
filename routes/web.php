<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteControllers;

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

Route::get('/', function () {
    return view('welcome');
});

/*********SiteControllers**********/
Route::get('/presentation/page1/norskyentreprise',[SiteControllers::class,'page1_presentation']);
Route::get('/presentation/page2/norskyentreprise',[SiteControllers::class,'page2_presentation']);
Route::get('/presentation/page3/norskyentreprise',[SiteControllers::class,'page3_presentation']);
Route::get('/blog/page1/norskyentreprise',[SiteControllers::class,'page1_blog']);
Route::get('/blog/page2/norskyentreprise',[SiteControllers::class,'page2_blog']);
Route::get('/blog/page3/norskyentreprise',[SiteControllers::class,'page3_blog']);
Route::get('/service1/norskyentreprise',[SiteControllers::class,'page1_service']);
Route::get('/service2/norskyentreprise',[SiteControllers::class,'page2_service']);
Route::get('/page/detail_compte/norskyentreprise',[SiteControllers::class,'detail_compte']);
Route::get('/page/securite_compte/norskyentreprise',[SiteControllers::class,'securite_compte']);
Route::get('/page/notification_compte/norskyentreprise',[SiteControllers::class,'notification_compte']);
Route::get('/page/message_compte/norskyentreprise',[SiteControllers::class,'message_compte']);
Route::get('/page/enregistrements_elements_compte/norskyentreprise',[SiteControllers::class,'elements_enregistres_compte']);
Route::get('/page/collection_compte/norskyentreprise',[SiteControllers::class,'collection_compte']);
Route::get('/page/paeiment_details_compte/norskyentreprise',[SiteControllers::class,'paiement_details_compte']);
Route::get('/page/connexion_compte/norskyentreprise',[SiteControllers::class,'page_connexion_compte']);
Route::get('/page/inscription_compte/norskyentreprise',[SiteControllers::class,'page_inscription_compte']);

/*********SiteControllers**********/




