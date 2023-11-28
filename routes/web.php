<?php

use Illuminate\Support\Facades\Route;
use resources\views\pages;
use App\Http\Controllers\ProdukController;



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
    return view('index');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/sign_in', function () {
    return view('sign_in');
});

Route::get('/logout', function () {
    return view('logout');
});

Route::get('/savepesanan', function () {
    return view('savepesanan');
});

Route::get('/keranjangpemesan', function () {
    return view('keranjangpemesan');
});

Route::get('/keranjang', function () {
    return view('keranjang');
});

Route::group(['middleware' => 'web'], function () {
    // Your routes go here
    Route::get('/upload', 'App\Http\Controllers\ProdukController@uploadproduk');
    Route::post('/upload/store', 'App\Http\Controllers\ProdukController@store');
});

// Route::get('/saveproduk', function () {
//     return view('produk');
// });

Route::view('/cuaca', 'cuaca');
// Route::view('/saveproduk', 'saveproduk');
Route::view('/keranjangpemesanan', 'keranjangpemesanan');
Route::view('/jenistanaman', 'jenistanaman');
Route::view('/chatbot', 'chatbot');
Route::view('/produk', 'produk');
Route::view('/login', 'login');
Route::view('/feedback', 'feedback');





$pagestanaman = ['bawangmerah', 'bawangputih', 'bayam', 'brokoli', 'cabai', 
                'gandum', 'jagung', 'jahe', 'kacanghijau', 'kangkung', 
                'kembangkol', 'kentang', 'padi', 'pakcoyair', 'paprika', 
                'quinoa', 'sorgum', 'talas', 'terung', 'timun', 'tomat', 'ubikayu', 'wortel'
];

$pagesjenis = ['higrofit', 'hydrofit', 'xerofit'];

foreach ($pagestanaman as $pagestanaman) {
    Route::view('/pages/'.$pagestanaman, 'pages/'.$pagestanaman);
}

foreach ($pagesjenis as $pagejenis) {
    Route::view('/'.$pagejenis, $pagejenis);
}
