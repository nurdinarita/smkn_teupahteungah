<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Pages\PagesController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProfilController;
use App\Http\Controllers\Admin\VisiMisiController;
use App\Http\Controllers\Admin\BeritaController;
use App\Http\Controllers\Admin\GaleriController;
use App\Http\Controllers\Admin\StrukturController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\FasilitasController;
use App\Http\Controllers\Admin\GuruController;
use App\Http\Controllers\Admin\AlumniController;
use App\Http\Controllers\Admin\PendaftaranController;
use \Cviebrock\EloquentSluggable\Services\SlugService;

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


Route::get('/', [PagesController::class, 'index']);
Route::get('/profil', [PagesController::class, 'profil']);
Route::get('/galeri', [PagesController::class, 'galeri']);
Route::get('/berita', [PagesController::class, 'berita']);
Route::get('/berita/{slug}', [PagesController::class, 'beritaSingle']);
Route::get('/fasilitas', [PagesController::class, 'fasilitas']);
Route::get('/dewan-guru', [PagesController::class, 'guru']);
Route::get('/alumni', [PagesController::class, 'alumni']);
Route::get('/pendaftaran', [PagesController::class, 'pendaftaran']);

Auth::routes();

Route::group(['middleware' => 'auth'], function () {
    Route::get('checkSlug', function () {
        $slug = SlugService::createSlug(App\Models\Berita::class, 'slug', request('judul'));
        return response()->json(['slug' => $slug]);
    });
    Route::get('/home', [DashboardController::class, 'index']);
    Route::resource('/admin/profil', ProfilController::class);
    Route::resource('/admin/visi-misi', VisiMisiController::class);
    Route::resource('/admin/berita', BeritaController::class);
    Route::resource('/admin/galeri', GaleriController::class);
    Route::resource('/admin/struktur-organisasi', StrukturController::class);
    Route::resource('/admin/slider', SliderController::class);
    Route::resource('/admin/fasilitas', FasilitasController::class);
    Route::resource('/admin/guru', GuruController::class);
    Route::resource('/admin/alumni', AlumniController::class);
    Route::resource('/admin/pendaftaran', PendaftaranController::class);
});
