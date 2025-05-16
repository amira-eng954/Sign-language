<?php


use Illuminate\Http\Request;
use App\Http\Controllers\Api\ContactController;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\DictionaryController;
use App\Http\Controllers\Api\EmergencyController;
use App\Http\Controllers\Api\ProfileController;
use Illuminate\Support\Facades\Route;


use Kreait\Laravel\Firebase\Facades\Firebase;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');



// login register
 Route::post('/register',[AuthController::class,'register']);
 Route::post('/login',[AuthController::class,'login']);



// contacts crud
Route::middleware('firebase')->group(function () {
Route::get("contact",[ContactController::class,'all']);
Route::get("contact/{id}",[ContactController::class,'show']);
Route::post("contact/create",[ContactController::class,'create']);
Route::put("contact/update/{id}",[ContactController::class,'update']);
Route::delete("contact/delete/{id}",[ContactController::class,'delete']);




Route::post('/logout',[AuthController::class,'logout']);
Route::put("edit_profile",[ProfileController::class,'edit']);





});


//Emergency
Route::get("emergency",[EmergencyController::class,"all"]);
Route::get("emergency/{id}",[EmergencyController::class,"show"]);

// dictionary
Route::get("dictionary/{category}",[DictionaryController::class,"all"]);
Route::get("dictionary/detail/{id}",[DictionaryController::class,"show"]);









