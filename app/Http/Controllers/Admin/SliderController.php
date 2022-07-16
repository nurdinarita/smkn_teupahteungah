<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slider;
use Illuminate\Support\Facades\Storage;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.slider.index')->with([
            'title' => 'Gambar Slider',
            'slider' => Slider::latest()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.slider.form')->with([
            'title' => 'Tambah Gambar Slider'
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
            'gambar' => 'required|image',
        ]);
        $validatedData['gambar'] = $request->file('gambar')->store('gambar-slider');
        Slider::create($validatedData);
        return redirect('admin/slider')->with('status', 'Slider berhasil ditambahkan');
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
        return view('admin.slider.form')->with([
            'title' => 'Tambah Gambar Slider',
            'slider' => Slider::find($id)
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
        $slider = Slider::find($id);
        $rules = [
            'gambar' => 'image|max:2000',
        ];
        $validatedData = $request->validate($rules);
        if(request()->file('gambar')){
            Storage::disk('public')->delete('gambar-slider/'.$slider->gambar);
            $validatedData['gambar'] = $request->file('gambar')->store('gambar-slider');
        }

        $slider->update($validatedData);
        return redirect('admin/slider')->with('status', 'Slider berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $slider = Slider::find($id);
        Storage::disk('public')->delete('gambar-slider/'.$slider->gambar);
        $slider->delete();

        return redirect('admin/slider')->with('status', 'Berita berhasil dihapus');
    }
}
