<?php

namespace App\Http\Controllers;

use App\Models\guru;
use App\Models\mapel;
use App\Models\nilai;
use App\Models\siswa;
use Illuminate\Http\Request;

class NilaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nilais = nilai::paginate('10');
        $mapels = mapel::all();
        $siswas = siswa::all();
        return view('nilai.index', compact ('nilais', 'mapels', 'siswas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'id_siswa' => 'required',
            'id_mapel' => 'required',
            'nilai' => 'required'
        ]);
        //create post
        nilai::create([
            'id_siswa' => $request->id_siswa,
            'id_mapel' => $request->id_mapel,
            'nilai' => $request->nilai
        ]);
        return redirect()->route('siswa.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\nilai  $nilai
     * @return \Illuminate\Http\Response
     */
    public function show(nilai $nilai)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\nilai  $nilai
     * @return \Illuminate\Http\Response
     */
    public function edit(nilai $nilai)
    {
        $mapel = mapel::all();
        $siswa = siswa::all();
        $guru = guru::all();
        return view('nilai.edit', compact('nilai', 'mapel', 'siswa', 'guru'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\nilai  $nilai
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, nilai $nilai)
    {
        $this->validate($request, [
            'id_siswa' => 'required',
            'id_mapel' => 'required',
            'nilai' => 'required'
        ]);

        $nilai->update([
            'id_siswa' => $request->id_siswa,
            'id_mapel' => $request->id_mapel,
            'nilai' => $request->nilai
        ]);

        //redirect to index
        return redirect()->route('nilai.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\nilai  $nilai
     * @return \Illuminate\Http\Response
     */
    public function destroy(nilai $nilai)
    {
        //
    }
}
