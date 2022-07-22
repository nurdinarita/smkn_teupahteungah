<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Alumni;

class AlumniController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.alumni.index')->with([
            'title' => 'Data Alumni',
            'alumni' => Alumni::latest()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.alumni.form')->with([
            'title' => 'Tambah Data Alumni',
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
            'tahun' => 'required|numeric',
            'nama' => 'required',
        ]);
        $validatedData['status'] = $request->status;
        Alumni::create($validatedData);
        return redirect('admin/alumni')->with('status', 'Data Alumni berhasil ditambahkan');
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
        return view('admin.alumni.form')->with([
            'title' => 'Edit Data alumni',
            'alumni' => Alumni::find($id)
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
            'tahun' => 'required|numeric',
            'nama' => 'required',
        ]);
        $validatedData['status'] = $request->status;
        Alumni::find($id)->update($validatedData);
        return redirect('admin/alumni')->with('status', 'Data Alumni berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Alumni::destroy($id);
        return redirect('admin/alumni')->with('status', 'Data Alumni berhasil dihapus');
    }
}
