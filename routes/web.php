<?php

use App\Http\Controllers\users;
use Illuminate\Support\Facades\Route;


// Route::get('/',function(){
//     return view('index');
// });

Route::get('/',[users::class,'index']);
Route::get('/create',[users::class,'create'])->name('create');
Route::post('/store',[users::class,'store'])->name('store');
Route::get('/show/{user_id}',[users::class,'show'])->name('show');

Route::post('/update',[users::class,'update'])->name('update');
Route::delete('/delete',[users::class,'destroy'])->name('delete');
