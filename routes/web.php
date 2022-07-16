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

Route::get('checkSlug', function () {
    $slug = SlugService::createSlug(App\Models\Berita::class, 'slug', request('judul'));
    return response()->json(['slug' => $slug]);
});

Route::get('/', [PagesController::class, 'index']);
Route::get('/profil', [PagesController::class, 'profil']);
Route::get('/galeri', [PagesController::class, 'galeri']);
Route::get('/berita', [PagesController::class, 'berita']);
Route::get('/berita/{slug}', [PagesController::class, 'beritaSingle']);

Auth::routes();

Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', [DashboardController::class, 'index']);
    Route::resource('/admin/profil', ProfilController::class);
    Route::resource('/admin/visi-misi', VisiMisiController::class);
    Route::resource('/admin/berita', BeritaController::class);
    Route::resource('/admin/galeri', GaleriController::class);
    Route::resource('/admin/struktur-organisasi', StrukturController::class);
    Route::resource('/admin/slider', SliderController::class);
});
