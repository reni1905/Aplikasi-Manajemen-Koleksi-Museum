<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PengunjungController;
use App\Http\Controllers\ArkeologikaController;
use App\Http\Controllers\EtnografikaController;
use App\Http\Controllers\FilologikaController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\HistorikaController;
use App\Http\Controllers\KeramologikaController;
use App\Http\Controllers\SenirupaController;
use App\Http\Controllers\TeknologikaController;
use App\Http\Controllers\SemuaKoleksiController;
//LOGIN
Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::resource('pengunjung', PengunjungController::class);
});

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');
//END LOGIN

// Route to handle the AJAX search request
Route::get('/search-pengunjung', [PengunjungController::class, 'search'])->name('search.pengunjung');
//END

//PRINT
Route::get('/matakuliah-printpdf', [PdfController::class, 'matakuliahpdf'])->name('matakuliah.printpdf');
//END

Route::get('/', function () {
    return view('welcome');
});

Route::get('/bismillah', function () {
    return view('../dashboard/dashboard');
});

Route::get('/dashboard', function () {
    return view('../dashboard/dashboard');
});

Route::get('/koleksimuseum', function () {
    return view('../dashboard/koleksimuseum');
});

//COBA
Route::get('/dashboard/arkeologika', function () {  // ARKEOLOGIKA
    return view('arkeologika');
});

Route::get('/dashboard/etnografika', function () {  //ETNOGRAFIKA
    return view('etnografika');
});

Route::get('/dashboard/filologika', function () {  // FILOLOGIKA
    return view('filologika');
});

Route::get('/dashboard/historika', function () {  // HISTORIKA
    return view('historika');
});

Route::get('/dashboard/keramologika', function () {  // KERAMOLOGIKA
    return view('keramologika');
});

Route::get('/dashboard/senirupa', function () {  // SENIRUPA
    return view('senirupa');
});

Route::get('/dashboard/teknologika', function () {  // TEKNOLOGIKA
    return view('teknologika');
});

Route::get('/dashboard/semuakoleksi', function () {  // SEMUAKOLEKSI
    return view('semuakoleksi');
});

// Route::get('/dashboard/semuakoleksi', function () {
//     return view('dashboard.semuakoleksi'); // SALAHMEN
// })->name('dashboard.semuakoleksi');

Route::get('/galeri', function () {
    return view('galeri');
});


Route::resource('pengunjung', PengunjungController::class);


Route::resource('arkeologika', ArkeologikaController::class);
Route::resource('etnografika', EtnografikaController::class);
Route::resource('filologika', FilologikaController::class);
Route::resource('galeri', GaleriController::class);
Route::resource('historika', HistorikaController::class);
Route::resource('keramologika', KeramologikaController::class);
Route::resource('senirupa', SenirupaController::class);
Route::resource('teknologika', TeknologikaController::class);
Route::resource('semuakoleksi', SemuaKoleksiController::class);

// LOOPING

Route::get('/arkeologika/dashboard', function () {
    return view('dashboard');
});

Route::get('/etnografika/dashboard', function () {
    return view('dashboard');
});

Route::get('/filologika/dashboard', function () {
    return view('dashboard');
});

Route::get('/historika/dashboard', function () {
    return view('dashboard');
});

Route::get('/keramologika/dashboard', function () {
    return view('dashboard');
});

Route::get('/senirupa/dashboard', function () {
    return view('dashboard');
});

Route::get('/teknologika/dashboard', function () {
    return view('dashboard');
});

Route::get('/koleksimuseum/dashboard', function () {
    return view('dashboard');
});

Route::get('/koleksimuseum/pengunjung', function () {
    return view('pengunjung');
});

Route::get('/koleksimuseum/galeri', function () {
    return view('galeri');
});

Route::get('/koleksimuseum/dashboard', function () {
    return view('dashboard');
});

Route::get('/pengunjung/dashboard', function () {
    return view('dashboard');
});

Route::get('/pengunjung/koleksimuseum', function () {
    return view('koleksimuseum');
});

Route::get('/pengunjung/galeri', function () {
    return view('galeri');
});

Route::get('/galeri/dashboard', function () {
    return view('dashboard');
});

Route::get('/galeri/pengunjung', function () {
    return view('pengunjung');
});

Route::get('/galeri/koleksimuseum', function () {
    return view('koleksimuseum');
});

//

Route::get('/arkeologika/pengunjung', function () {
    return view('pengunjung');
});

Route::get('/etnografika/pengunjung', function () {
    return view('pengunjung');
});

Route::get('/filologika/pengunjung', function () {
    return view('pengunjung');
});

Route::get('/historika/pengunjung', function () {
    return view('pengunjung');
});

Route::get('/keramologika/pengunjung', function () {
    return view('pengunjung');
});

Route::get('/senirupa/pengunjung', function () {
    return view('pengunjung');
});

Route::get('/teknologika/pengunjung', function () {
    return view('pengunjung');
});

//

Route::get('/arkeologika/galeri', function () {
    return view('galeri');
});

Route::get('/etnografika/galeri', function () {
    return view('galeri');
});

Route::get('/filologika/galeri', function () {
    return view('galeri');
});

Route::get('/historika/galeri', function () {
    return view('galeri');
});

Route::get('/keramologika/galeri', function () {
    return view('galeri');
});

Route::get('/senirupa/galeri', function () {
    return view('galeri');
});

Route::get('/teknologika/galeri', function () {
    return view('galeri');
});