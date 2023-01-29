<?php

use App\Enums\CategoryEnum;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\card;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\accountController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\cardController;
use App\Http\Controllers\ProviderController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\StripeController;


Route::get('/',[card::class,'index'])->name("index");
Route::get('/card/{card}',[card::class,'show'])->name("showcard");

Route::get('/stripe/{card}', [StripeController::class,'index'])->name('stripe');
Route::get('/success', [StripeController::class, 'success'])->name('success');
Route::get('/cancel', [StripeController::class, 'cancel'])->name('checkout.cancel');
Route::post('/webhook', [StripeController::class, 'webhook'])->name('checkout.webhook');



Route::middleware(['auth', 'user-access:provider'])->group(function () {

    Route::get("/addcard",[card::class,"addcard"])->name("addcard");
    Route::post("/addcard",[card::class,"store"])->name("storecard");  
});


    
    Route::get('cart/', [ CartController::class, 'index'])->name('cart.index');
    Route::post('cart/', [ CartController::class, 'add'])->name('cart.add');
    Route::delete('cart/{id}', [ CartController::class, 'remove'])->name('cart.remove');


Route::get('/joinprovider', [ProviderController::class, 'joinprovider'])->name('joinprovide');
Route::post('/joinprovider', [ProviderController::class, 'submitjoinprovide'])->name('submit_joinprovide');

Route::group(['middleware' => 'auth'], function(){
    Route::post('logout', [LoginController::class, 'logout'])->name('logout');
 
});



Route::group(['prefix' => '/', 'middleware' => 'guest'], function(){
    
    Route::get('/register', [RegisterController::class, 'register'])->name('register');
    Route::post('/register', [RegisterController::class, 'submitRegister'])->name('submit_register');
    Route::get('login', [LoginController::class, 'login'])->name('login');
    Route::post('login', [LoginController::class, 'submitLogin'])->name('submit_login');
});



Route::get('/404', function () {return view('404');});


Route::get("updatecard/{id}",[card::class,"edit"]);
Route::post("updatecard",[card::class,"update"])->name("card.update");
Route::get("deletecard/{id}",[card::class,"delete"]);


