<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Guru;
use App\Models\Alumni;
use App\Models\Berita;
use App\Models\Galeri;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('admin.dashboard.index')->with([
            'title' => 'Dashboard',
            'guru' => Guru::count(),
            'alumni' => Alumni::count(),
            'berita' => Berita::count(),
            'galeri' => Galeri::count(),
        ]);
    }
}
