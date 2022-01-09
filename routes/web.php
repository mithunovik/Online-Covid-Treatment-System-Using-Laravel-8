<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DoctorController;


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


Route::get('/',[HomeController::class,'index']);
Route::get('/home',[HomeController::class,'redirect']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::post('/appointment',[HomeController::class,'appointment']);
Route::get('/myappointment',[HomeController::class,'myappointment']);
Route::get('/doctors',[HomeController::class,'doctors']);
Route::get('/patients',[HomeController::class,'patients']);
Route::get('/pharmacy',[HomeController::class,'pharmacy']);
Route::get('mdetail/{id}',[HomeController::class,'mdetail']);
Route::post('/add_to_cart',[HomeController::class,'addToCart']);
Route::get('/cartlist',[HomeController::class,'cartList']);
Route::get('removecart/{id}',[HomeController::class,'removeCart']);
Route::get('/buynow',[HomeController::class,'buyNow']);
Route::post('/orderplace',[HomeController::class,'orderPlace']);
Route::get('/myorders',[HomeController::class,'myOrders']);
Route::get('removeorder/{id}',[HomeController::class,'removeOrder']);
Route::get('/ambulance',[HomeController::class,'ambulance']);
Route::get('/dhaka',[HomeController::class,'dhaka']);
Route::get('/cha',[HomeController::class,'cha']);
Route::get('/sylhet',[HomeController::class,'syl']);
Route::get('/mymens',[HomeController::class,'mymens']);
Route::get('/rang',[HomeController::class,'rang']);
Route::get('/rajshahi',[HomeController::class,'rajshahi']);
Route::get('/khulna',[HomeController::class,'khulna']);
Route::get('/barishal',[HomeController::class,'barishal']);

Route::get('/blood',[HomeController::class,'blood']);
Route::post('/user_donor',[HomeController::class,'userDonor']);
Route::get('/donorlist',[HomeController::class,'donor']);
















Route::get('/cancel_appoint/{id}',[HomeController::class,'cancel_appoint']);


Route::get('/add_doctor_view',[AdminController::class,'addDoctor']);
Route::post('/upload_doctor',[AdminController::class,'upload']);
Route::get('/showappointment',[AdminController::class,'showappointment']);
Route::get('/approved/{id}',[AdminController::class,'approved']);
Route::get('/canceled/{id}',[AdminController::class,'canceled']);
Route::get('/showdoctor',[AdminController::class,'showdoctor']);
Route::get('/deletedoctor/{id}',[AdminController::class,'deletedoctor']);
Route::get('/patient_list',[AdminController::class,'patientList']);
Route::get('/deletepatient/{id}',[AdminController::class,'deletepatient']);
Route::get('/updatepatient/{id}',[AdminController::class,'updatepatient']);
Route::get('/updatedoctor/{id}',[AdminController::class,'updatedoctor']);
Route::post('/editdoctor/{id}',[AdminController::class,'editdoctor']);
Route::get('/add_patient',[AdminController::class,'addPatient']);
Route::post('/upload_patient',[AdminController::class,'uploadPatient']);
Route::post('/editpatient/{id}',[AdminController::class,'editpatient']);
Route::get('/add_medicine',[AdminController::class,'addMedicine']);
Route::post('/upload_medicine',[AdminController::class,'uploadMedicine']);
Route::get('/medicine_list',[AdminController::class,'medicineList']);
Route::get('/deletemedicine/{id}',[AdminController::class,'deletemedicine']);
Route::get('/dhakam',[AdminController::class,'dhakam']);
Route::post('/upload_dhaka',[AdminController::class,'uploadDhaka']);
Route::get('/dhaka_list',[AdminController::class,'dhakaList']);
Route::get('/delete_dhaka/{id}',[AdminController::class,'deleteDhaka']);
Route::get('/update_dhaka/{id}',[AdminController::class,'updateDhaka']);
Route::post('/editdhaka/{id}',[AdminController::class,'editDhaka']);
Route::get('/cham',[AdminController::class,'cham']);
Route::post('/upload_cha',[AdminController::class,'uploadCha']);
Route::get('/cha_list',[AdminController::class,'chaList']);
Route::get('/delete_cha/{id}',[AdminController::class,'deleteCha']);
Route::get('/update_cha/{id}',[AdminController::class,'updateCha']);
Route::post('/editcha/{id}',[AdminController::class,'editCha']);
Route::get('/sylh',[AdminController::class,'sylh']);
Route::post('/upload_syl',[AdminController::class,'uploadSyl']);
Route::get('/syl_list',[AdminController::class,'sylList']);
Route::get('/delete_syl/{id}',[AdminController::class,'deleteSyl']);
Route::get('/update_syl/{id}',[AdminController::class,'updateSyl']);
Route::post('/editsyl/{id}',[AdminController::class,'editSyl']);
Route::get('/mymen',[AdminController::class,'mymen']);
Route::post('/upload_mymen',[AdminController::class,'uploadMymen']);
Route::get('/mymen_list',[AdminController::class,'mymenList']);
Route::get('/delete_mymen/{id}',[AdminController::class,'deleteMymen']);
Route::get('/update_mymen/{id}',[AdminController::class,'updateMymen']);
Route::post('/editmymen/{id}',[AdminController::class,'editMymen']);
Route::get('/rangp',[AdminController::class,'rangp']);
Route::post('/upload_rang',[AdminController::class,'uploadRang']);
Route::get('/rang_list',[AdminController::class,'rangList']);
Route::get('/delete_rang/{id}',[AdminController::class,'deleteRang']);
Route::get('/update_rang/{id}',[AdminController::class,'updateRang']);
Route::post('/editrang/{id}',[AdminController::class,'editRang']);
Route::get('/sahi',[AdminController::class,'sahi']);
Route::post('/upload_sahi',[AdminController::class,'uploadSahi']);
Route::get('/sahi_list',[AdminController::class,'sahiList']);
Route::get('/delete_sahi/{id}',[AdminController::class,'deleteSahi']);
Route::get('/update_sahi/{id}',[AdminController::class,'updateSahi']);
Route::post('/editsahi/{id}',[AdminController::class,'editSahi']);

Route::get('/khul',[AdminController::class,'khul']);
Route::post('/upload_khul',[AdminController::class,'uploadKhul']);
Route::get('/khul_list',[AdminController::class,'khulList']);
Route::get('/delete_khul/{id}',[AdminController::class,'deleteKhul']);
Route::get('/update_khul/{id}',[AdminController::class,'updateKhul']);
Route::post('/editkhul/{id}',[AdminController::class,'editKhul']);

Route::get('/bari',[AdminController::class,'bari']);
Route::post('/upload_bari',[AdminController::class,'uploadBari']);
Route::get('/bari_list',[AdminController::class,'bariList']);
Route::get('/delete_bari/{id}',[AdminController::class,'deleteBari']);
Route::get('/update_bari/{id}',[AdminController::class,'updateBari']);
Route::post('/editbari/{id}',[AdminController::class,'editBari']);

Route::get('/add_donor',[AdminController::class,'addDonor']);
Route::post('/upload_donor',[AdminController::class,'uploadDonor']);
Route::get('/donor_list',[AdminController::class,'donorList']);
Route::get('/delete_donors/{id}',[AdminController::class,'deleteDonors']);
Route::get('/update_donors/{id}',[AdminController::class,'updateDonors']);
Route::post('/editdonor/{id}',[AdminController::class,'editDonors']);





















Route::get('/showappointment',[DoctorController::class,'showappointment']);
Route::get('/approved/{id}',[DoctorController::class,'approved']);
Route::get('/canceled/{id}',[DoctorController::class,'canceled']);
Route::get('/deletedoctor/{id}',[DoctorController::class,'deletedoctor']);
Route::get('/updatedoctor/{id}',[DoctorController::class,'updatedoctor']);
Route::post('/editdoctor/{id}',[DoctorController::class,'editdoctor']);
Route::get('/showdoctor',[DoctorController::class,'showdoctor']);
