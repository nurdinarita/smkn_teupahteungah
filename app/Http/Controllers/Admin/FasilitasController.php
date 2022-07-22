<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Fasilitas;

class FasilitasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.fasilitas.index')->with([
            'title' => 'Fasilitas Sekolah',
            'fasilitas' => Fasilitas::latest()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.fasilitas.form')->with([
            'title' => 'Tambah Fasilitas',
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
            'nama' => 'required',
            'luas' => 'required|numeric',
            'kondisi' => 'required'
        ]);

        Fasilitas::create($validatedData);
        return redirect('admin/fasilitas')->with('status', 'Fasilitas berhasil ditambahkan');
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
        return view('admin.fasilitas.form')->with([
            'title' => 'Edit Fasilitas',
            'fasilitas' => Fasilitas::find($id)
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
        $validatedData = $request->validate([
            'nama' => 'required',
            'luas' => 'required|numeric',
            'kondisi' => 'required'
        ]);

        Fasilitas::find($id)->update($validatedData);
        return redirect('admin/fasilitas')->with('status', 'Fasilitas berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Fasilitas::destroy($id);
        return redirect('admin/fasilitas')->with('status', 'Fasilitas berhasil dihapus');
    }
}
