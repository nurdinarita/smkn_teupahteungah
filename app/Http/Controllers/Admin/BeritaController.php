<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Berita;
use Illuminate\Support\Facades\Storage;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.berita.index')->with([
            'title' => 'Berita Sekolah',
            'berita' => Berita::latest()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.berita.form')->with([
            'title' => 'Tambah Berita Sekolah'
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
            'slug' => 'required|unique:berita',
            'gambar' => 'required|image',
            'body' => 'required'
        ]);
        
        $validatedData['gambar'] = $request->file('gambar')->store('gambar-berita');
        Berita::create($validatedData);
        return redirect('admin/berita')->with('status', 'Berita berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        // return Berita::where('slug', $slug)->first();
        return view('admin.berita.show')->with([
            'title' => 'Detail Berita',
            'berita' => Berita::where('slug', $slug)->first()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        return view('admin.berita.form')->with([
            'title' => 'Edit Berita Sekolah',
            'berita' => Berita::where('slug', $slug)->first()
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
        $berita = Berita::all()->where('id', $id)->first();
        $rules = [
            'judul' => 'required',
            'gambar' => 'image|max:2000',
            'body' => 'required'
        ];

        if($request->slug != $berita->slug){
            $rules['slug'] = 'required|unique:berita'; 
        }

        $validatedData = $request->validate($rules);

        if(request()->file('gambar')){
            Storage::disk('public')->delete($berita->gambar);
            $validatedData['gambar'] = $request->file('gambar')->store('gambar-berita');
        }

        Berita::where('id', $id)->update($validatedData);
        return redirect('admin/berita')->with('status', 'Berita berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Berita::find($id);
        Storage::delete($data->gambar);
        Berita::destroy($id);
        return redirect('admin/berita')->with('status', 'Berita berhasil dihapus');
    }
}
