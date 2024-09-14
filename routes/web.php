<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/login', [AdminController::class, 'login'])->name('login');
Route::post('/login', [AdminController::class, 'login']);

Route::middleware(['auth'])->group(function () {
    Route::get('/home', [AdminController::class, 'dashboard'])->name('home');
    Route::get('/logout', [AdminController::class, 'logout']);

    Route::group(['prefix' => 'leads'], function(){
        Route::get('/add-lead', [AdminController::class, 'add_lead'])->name('add-lead');
        Route::post('/add-lead', [AdminController::class, 'add_lead'])->name('add-lead');
        Route::get('/manage-leads', [AdminController::class, 'manage_leads']);
        Route::get('/delete-lead/{id}', [AdminController::class, 'delete_lead']);
        Route::get('/edit-lead/{id}', [AdminController::class, 'edit_lead']);
        Route::post('/edit-lead/{id}', [AdminController::class, 'edit_lead']);
        Route::get('/view-lead/{id}', [AdminController::class, 'view_lead']);
        Route::get('/convert-lead/{id}', [AdminController::class, 'convert_lead']);
        Route::post('/convert-lead/{id}', [AdminController::class, 'convert_lead']);

    });

    Route::group(['prefix' => 'accounts'], function(){
        Route::get('/manage-accounts', [AdminController::class, 'manage_accounts']);
        Route::get('/add-account', [AdminController::class, 'add_account']);
        Route::post('/add-account', [AdminController::class, 'add_account']);
        Route::get('/edit-account/{id}', [AdminController::class, 'edit_account']);
        Route::post('/edit-account/{id}', [AdminController::class, 'edit_account']);
        Route::get('/delete-account/{id}', [AdminController::class, 'delete_account']);
    });
    Route::group(['prefix' => 'contacts'], function(){
        Route::get('/manage-contacts', [AdminController::class, 'manage_contacts']);
        Route::get('/add-contact', [AdminController::class, 'add_contact']);
        Route::post('/add-contact', [AdminController::class, 'add_contact']);
    });
    Route::group(['prefix' => 'deals'], function(){
        Route::get('/manage-deals', [AdminController::class, 'manage_deals']);

    });
});

//the way he grouped
// Route::group(['middleware' => 'auth'],function () {
//     Route::get('/home', [AdminController::class, 'dashboard']);
//     Route::get('/logout', [AdminController::class, 'logout']);

//     Route::group(['prefix' => 'leads'], function(){
//         Route::get('/add-lead', [AdminController::class, 'add_lead']);
//     });
// });
