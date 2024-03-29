<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Profil;
use App\Models\VisiMisi;
use App\Models\Berita;
use App\Models\Galeri;
use App\Models\Struktur;
use App\Models\Slider;
use App\Models\Fasilitas;
use App\Models\Guru;
use App\Models\Alumni;
use App\Models\Pendaftaran;

class PagesController extends Controller
{
    // Index
    public function index()
    {
        return view('pages.index')->with([
            'berita' => Berita::latest()->paginate(3),
            'recentberita' => Berita::select('judul', 'slug')->orderBy('id', 'desc')->take(5)->get(),
            'galeri' => Galeri::select('judul', 'deskripsi', 'gambar')->orderBy('id', 'desc')->take(10)->get(),
            'slider' => Slider::latest()->get(),
        ]);
    }

    // Profil
    public function profil()
    {
        return view('pages.profil')->with([
            'profil' => Profil::all()->first(),
            'visimisi' => VisiMisi::all()->first(),
            'struktur' => Struktur::latest()->first()
        ]);
    }

    // Galeri
    public function galeri()
    {
        return view('pages.galeri')->with([
            'galeri' => Galeri::latest()->paginate(6)
        ]);
    }

    // Berita
    public function berita()
    {
        return view('pages.berita')->with([
            'berita' => Berita::latest()->paginate(5),
            'recentberita' => Berita::select('judul', 'slug')->orderBy('id', 'desc')->take(5)->get(),
        ]);
    }

    // Berita Single
    public function beritaSingle($slug)
    {
        return view('pages.beritaSingle')->with([
            'berita' => Berita::where('slug', $slug)->first()
        ]);
    }

    // Fasilitas
    public function fasilitas()
    {
        return view('pages.fasilitas')->with([
            'fasilitas' => Fasilitas::all()
        ]);
    }

    // Guru
    public function guru()
    {
        return view('pages.guru')->with([
            'guru' => Guru::all()
        ]);
    }

    // Alumni
    public function alumni()
    {
        return view('pages.alumni')->with([
            'alumni' => Alumni::all()
        ]);
    }

    // Pendaftaran
    public function pendaftaran()
    {
        return view('pages.pendaftaran')->with([
            'pendaftaran' => Pendaftaran::all()->first()
        ]);
    }

}
