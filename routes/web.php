<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MenuController;

// Route::get('</login>', [App\Http\Controllers\Controller::class,'login']);
Route::get('/login', [LoginController::class, 'login'])->name('login')
    ->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);

Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'login'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

// Route::post('/admin', [AdminController::class, 'FileUpload']);
Route::get('/admin', [AdminController::class, 'index']);
Route::post('/admin', [AdminController::class, 'store']);

// Route::post('actionlogin', [PageController::class,'actionlogin'])->name('actionlogin');
// Route::get('Page', [PageController::class,'index'])->name('Page')->middleware('auth');
// Route::get('actionlogout', [LoginController::class, 'actionlogout'])->name('actionlogout')->middleware('auth');
// Route::get('/home', function () {
//     return view('home', [
//         "image1" => "img1.jpg",
//         "image2" => "img2.jpg",
//         "image3" => "img3.jpg",
//         "image4" => "img4.jpg",
//         "image5" => "img5.jpg",
//         "image6" => "img6.jpg",
//         "image7" => "img7.jpg",
//         "image8" => "img8.jpg",
//         "image9" => "img9.jpg",
//         "image10" => "img10.jpg",
//         "image11" => "img11.jpg",
//         "image12" => "img12.jpg",
//         "image13" => "img13.jpg",
//         "imagehome" => "imghome.jpg"
//     ]);
// })->middleware('guest');

// Route::get('/Coffe', function () {
//     return view('Coffe', [
//         "image1" => "img1.jpg",
//         "image2" => "img2.jpg",
//         "image3" => "img3.jpg",
//         "image4" => "img4.jpg",
//         "image5" => "img5.jpg",
//         "image6" => "img6.jpg",
//         "image7" => "img7.jpg",
//         "image8" => "img8.jpg",
//         "image9" => "img9.jpg",
//         "image10" => "img10.jpg",
//         "image11" => "img11.jpg",
//         "image12" => "img12.jpg",
//         "image13" => "img13.jpg",
//         "imagehome" => "imghome.jpg"
//     ]);
// })->middleware('auth');

// Route::get('/bataputih', function () {
//     return view('bataputih', [
//         "image1" => "img1.jpg",
//         "image2" => "img2.jpg",
//         "image3" => "img3.jpg",
//         "image4" => "img4.jpg",
//         "image5" => "img5.jpg",
//         "image6" => "img6.jpg",
//         "image7" => "img7.jpg",
//         "image8" => "img8.jpg",
//         "image9" => "img9.jpg",
//         "image10" => "img10.jpg",
//         "image11" => "img11.jpg",
//         "image12" => "img12.jpg",
//         "image13" => "img13.jpg",
//         "imagehome" => "imghome.jpg"
//     ]);
// })->middleware('auth');

Route::resource('menu', MenuController::class);

Route::get('dashboard', [DashboardController::class, 'index']);


Route::get('/PAGE', [HomeController::class, 'index']);


Route::post('/outputlogin', [PageController::class, 'outputlogin']);

Route::get('/readmore/{cafe}', [HomeController::class, 'readmore']);

Route::post('/admin/delete/{id}', [AdminController::class, 'destroy']);
