<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Struktur;
use Illuminate\Support\Facades\Storage;

class StrukturController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.struktur.index')->with([
            'title' => 'Struktur Organisasi',
            'struktur' => Struktur::latest()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.struktur.form')->with([
            'title' => 'Tambah Struktur Organisasi',
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
            'tahun' => 'required',
            'gambar' => 'required|image',
        ]);
        $validatedData['gambar'] = $request->file('gambar')->store('gambar-struktur');
        Struktur::create($validatedData);
        return redirect('admin/struktur-organisasi')->with('status', 'Struktur berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('admin.struktur.show')->with([
            'title' => 'Detail Struktur Organisasi',
            'struktur' => Struktur::find($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.struktur.form')->with([
            'title' => 'Edit Struktur Organisasi',
            'struktur' => Struktur::find($id)
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
        $struktur = Struktur::find($id);
        $rules = [
            'tahun' => 'required',
            'gambar' => 'image|max:2000',
        ];

        $validatedData = $request->validate($rules);

        if(request()->file('gambar')){
            Storage::disk('public')->delete('gambar-struktur/'.$struktur->gambar);
            $validatedData['gambar'] = $request->file('gambar')->store('gambar-struktur');
        }

        $struktur->update($validatedData);
        return redirect('admin/struktur-organisasi')->with('status', 'Struktur berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $struktur = Struktur::find($id);
        Storage::disk('public')->delete('gambar-struktur/'.$struktur->gambar);
        $struktur->delete();

        return redirect('admin/struktur-organisasi')->with('status', 'Struktur berhasil dihapus');
    }
}
