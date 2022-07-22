<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Galeri;
use Illuminate\Support\Facades\Storage;

class GaleriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.galeri.index')->with([
            'title' => 'Galeri Sekolah',
            'galeri' => Galeri::latest()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.galeri.form')->with([
            'title' => 'Tambah Galeri Sekolah',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'judul' => 'required',
            'gambar' => 'required|image',
            'deskripsi' => 'required'
        ]);
        $validatedData['gambar'] = $request->file('gambar')->store('gambar-galeri');
        Galeri::create($validatedData);
        return redirect('admin/galeri')->with('status', 'Galeri berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.galeri.form')->with([
            'title' => 'Edit Galeri Sekolah',
            'galeri' => Galeri::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $galeri = Galeri::find($id);
        $rules = [
            'judul' => 'required',
            'gambar' => 'image|max:2000',
            'deskripsi' => 'required'
        ];

        $validatedData = $request->validate($rules);

        if(request()->file('gambar')){
            Storage::disk('public')->delete('gambar-galeri/'.$galeri->gambar);
            $validatedData['gambar'] = $request->file('gambar')->store('gambar-galeri');
        }

        $galeri->update($validatedData);
        return redirect('admin/galeri')->with('status', 'Galeri berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $galeri = Galeri::find($id);
        Storage::disk('public')->delete('gambar-galeri/'.$galeri->gambar);
        $galeri->delete();

        return redirect('admin/galeri')->with('status', 'Galeri berhasil dihapus');
    }
}
