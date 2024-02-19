<?php

namespace App\Http\Controllers;

use App\Models\Kabkota;
use App\Models\Pegawai;
use App\Models\Province;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Pegawai::all();
        return view('pegawai.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $province = Province::all();
        $kota = Kabkota::all();
        return view('pegawai.create', compact('province', 'kota'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ]);

        Pegawai::create($request->all());

        return redirect()->route('pegawai.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $province = Province::all();
        $kota = Kabkota::all();

        $data = Pegawai::findOrFail($id);
        return view('pegawai.edit', compact('province', 'kota', 'data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pegawai $pegawai)
    {
        $pegawai->update($request->all());
        return redirect()->route('pegawai.index');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pegawai $pegawai)
    {
        $pegawai->delete();
        return redirect()->route('pegawai.index');
    }
}
