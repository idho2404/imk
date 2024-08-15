<?php

use App\Models\Berita;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FaqController;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\LayananController;


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

Route::get('/', [BerandaController::class, 'index'])->name('beranda.berita');


#routes profile
Route::prefix('/profil')->group(function () {
    Route::get('/', function () {
        return view('profil.index');
    })->name('profil.index');

    Route::get('/struktur-organisasi', function () {
        return view('profil.struktur-organisasi');
    })->name('profil.struktur-organisasi');

    Route::get('/maklumat-pelayanan', function () {
        return view('profil.maklumat-pelayanan');
    })->name('profil.maklumat-pelayanan');

    Route::get('/profil-penyelenggara', function () {
        return view('profil.profil-penyelenggara');
    })->name('profil.profil-penyelenggara');

    Route::get('/pelaksana-layanan', function () {
        return view('profil.pelaksana-layanan');
    })->name('profil.pelaksana-layanan');

    Route::get('/motto-visi-misi', function () {
        return view('profil.mvm');
    })->name('profil.mvm');

    Route::get('/motto', function () {
        return view('profil.motto');
    })->name('profil.motto');
});


// #routes berita
// Route::prefix('/berita')->group(function () {
//     Route::get('/', function () {
//     return view('berita.berita');
// })->name('berita');
// });


#routes layanan
Route::prefix('/layanan')->group(function () {
    Route::get('/', [LayananController::class, 'index'])->name('layanan.index');
    Route::get('/{slug}', [LayananController::class, 'show'])->name('layanan.show');
});


#routes publikasi
Route::prefix('/publikasi')->group(function () {
    Route::get('/', function () {
        return view('publikasi.index');
    })->name('publikasi');
});


#routes statistik
Route::prefix('/statistik')->group(function () {
    Route::get('/', function () {
        return view('statistik.index');
    })->name('statistik');
});


#routes FAQ
Route::get(
    '/faq',
    [FaqController::class, 'index']
);


#routes pengaduan
Route::prefix('/pengaduan')->group(function () {
    Route::get('/', function () {
        return view('pengaduan.index');
    })->name('pengaduan');
});


#routes kontak
Route::prefix('/kontak')->group(function () {
    Route::get('/', function () {
        return view('kontak.index');
    })->name('kontak');
});

#route berita
Route::get('/berita', [NewsController::class, 'index'])->name('berita.index');
Route::get('/berita/detail/{id}', [NewsController::class, 'detail'])->name('berita.detail');
Route::get('/search', [NewsController::class, 'search'])->name('news.search');
Route::post('/comments', [CommentController::class, 'store'])->name('comments.store');
Route::post('/comments/{parentId}/reply', [CommentController::class, 'reply'])->name('comments.reply');


//Route::get('/berita/search', [NewsController::class, 'search'])->name('berita.search');
