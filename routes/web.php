<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\userController;
use App\Http\Controllers\logoutController;
use App\Http\Controllers\registrationController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/registration',[registrationController::class,'index'])->name('registration.index');
Route::post('/registration',[registrationController::class,'created']);

Route::get('/login/google',[loginController::class,'redirectToGoogle'])->name('login.google');
Route::get('/login/google/callback',[loginController::class,'handleGoogleCallback']);


Route::get('/home',[homeController::class,'index'])->name('home.index');
Route::get('/login',[loginController::class,'index'])->name('login.index');
Route::get('/login/updateInfo',[loginController::class,'updateInfo'])->name('login.updateInfo');
Route::post('/login/updateInfo',[loginController::class,'setInfo']);
Route::post('/login',[loginController::class,'login']);
;

Route::get('/logout',[logoutController::class,'index'])->name('logout.index');

Route::group(['middleware'=>['sess']],function(){

    Route::get('home/donate/{id}',[homeController::class,'donate'])->name('home.donate');
    Route::post('home/donate/{id}',[homeController::class,'donationadd']);
    Route::get('home/delete/{id}',[homeController::class,'delete'])->name('home.delete');
    Route::get('home/editCampaign/{id}',[homeController::class,'editCampaign'])->name('home.editCampaign');
    Route::post('home/editCampaign/{id}',[homeController::class,'updateCampaign']);

    Route::group(['middleware'=>['utype']],function(){
        Route::get('/user',[userController::class,'index'])->name('user.index');
        Route::get('/user/profile',[userController::class,'profile'])->name('user.profile');
        Route::post('/user/edit/{id}',[userController::class,'edit'])->name('user.edit');
        
        Route::post('/user/changepropic/{id}',[userController::class,'changepropic'])->name('user.changepropic');
        

        Route::get('/user/create',[userController::class,'create'])->name('user.create');
        Route::post('/user/create',[userController::class,'created']);
        Route::get('/user/donationlist',[userController::class,'donationlist'])->name('user.donationlist');
        Route::get('/user/releasedcampaign',[userController::class,'myCampaign'])->name('user.myCampaign');

        Route::get('/user/campaignslist',[userController::class,'campaignslist'])->name('user.campaignslist');
        Route::get('/user/campaignedit/{id}',[userController::class,'campaignedit'])->name('user.campaignedit');
        Route::post('/user/campaignedit/{id}',[userController::class,'campaignupdate']);



        Route::get('/user/usersproblems',[userController::class,'usersproblems'])->name('user.usersproblems');
        Route::post('/user/usersproblems',[userController::class,'usersproblemscreated']);

        Route::get('/user/reportcampaign',[userController::class,'reportcampaign'])->name('user.reportcampaign');
        Route::post('/user/reportcampaign',[userController::class,'reportcampaigncreated']);

       

        Route::get('/user/generateReport',[userController::class,'generateReport'])->name('user.generateReport');
        Route::post('/user/generateReport',[userController::class,'downloadReport']);

        route::post('/user/search',[userController::class,'searchUser']);
        route::post('/user/searchCampaign',[userController::class,'searchCampaign']);
        route::post('/user/get',[userController::class,'get']);
    });

});