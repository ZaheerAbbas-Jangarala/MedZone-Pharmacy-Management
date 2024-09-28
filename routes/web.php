<?php

use App\Http\Controllers\MedicineController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('add-customer', function () {
    return view('add-customer');
});
Route::get('customer', function () {
    return view('customer');
});
Route::get('add-medicine', function () {
    return view('add-medicine');
});
Route::get('medicine-list', function () {
    return view('medicine-list');
});
Route::get('medicine-details', function () {
    return view('medicine-details');
});
Route::get('add-wastage-return', function () {
    return view('add-wastage-return');
});
Route::get('wastage-return', function () {
    return view('wastage-return');
});
Route::get('add-manufacturer-return', function () {
    return view('add-manufacturer-return');
});
Route::get('manufacturer-return', function () {
    return view('manufacturer-return');
});
Route::get('general-settings', function () {
    return view('general-settings');
});
Route::get('add-blog', function () {
    return view('add-blog');
});
Route::get('blog-list', function () {
    return view('blog-list');
});
Route::get('order-list', function () {
    return view('order-list');
});
Route::get('order-ledge', function () {
    return view('order-ledge');
});

//  controller routes

//this is medicine add page
Route::get('/add-medicine', [MedicineController::class, 'add'])->name('medicine.add');
//this is medicine list page
Route::post('/medicine-list', [MedicineController::class, 'store'])->name('medicine.store');