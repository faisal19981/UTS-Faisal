<?php

use App\Http\Controllers\MahasiswaController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::prefix('mahasiswa')->group(function () {
    
   Route::get('/pendaftaran', function ($id) {
       echo "<h2>Halaman Pendaftaran</h2>";$title = 'Pendaftaran';
       $text = 'Halaman Pendaftaran';

       return view('mahasiswa.index', compact('title', 'text'));
   });

   Route::get('/ujian', function ($id) {
    $title = 'ujian';
        $text = 'Halaman Ujian';

        return view('mahasiswa.index', compact('title', 'text'));
});

Route::get('/nilai', function ($id) {
    $title = 'Nilai';
        $text = 'Halaman Nilai';

        return view('mahasiswa.index', compact('title', 'text'));
});
    
});
