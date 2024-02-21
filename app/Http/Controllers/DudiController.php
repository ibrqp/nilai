<?php

namespace App\Http\Controllers;

<<<<<<< HEAD:app/Http/Controllers/MapelController.php
use App\Models\guru;
use App\Models\mapel;
=======
use App\Models\Dudi;
>>>>>>> 4ccc187f8b2ca78fb0889db4dee66b27996db141:app/Http/Controllers/DudiController.php
use Illuminate\Http\Request;

class DudiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
<<<<<<< HEAD:app/Http/Controllers/MapelController.php
        $mapels = mapel::paginate(10);
        $guru = guru::all();
        return view("mapel.index", compact("mapels", "guru"));
=======
        $dudi = Dudi::paginate('10');
        return view('dudi.index', compact('dudi'));
>>>>>>> 4ccc187f8b2ca78fb0889db4dee66b27996db141:app/Http/Controllers/DudiController.php
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
        //validate form
        $this->validate($request, [
<<<<<<< HEAD:app/Http/Controllers/MapelController.php

            'id_guru'   => 'required',
            'nama_mapel'   => 'required'
        ]);

        //create post
        mapel::create([
            'id_guru'   => $request->id_guru, 
            'nama_mapel'   => $request->nama_mapel 
=======
            'nama' => 'required',
            'alamat' => 'required'
        ]);

        //upload image

        //create siswa
        Dudi::create([
            'nama' => $request->nama,
            'alamat' => $request->alamat
>>>>>>> 4ccc187f8b2ca78fb0889db4dee66b27996db141:app/Http/Controllers/DudiController.php
        ]);

        //redirect to index
        return redirect()->route('dudi.index')->with(['success' => 'Data Berhasil Di Tambah!']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dudi  $dudi
     * @return \Illuminate\Http\Response
     */
    public function show(Dudi $dudi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Dudi  $dudi
     * @return \Illuminate\Http\Response
     */
    public function edit(Dudi $dudi)
    {
<<<<<<< HEAD:app/Http/Controllers/MapelController.php
        $guru = guru::all();
        return view("mapel.edit", compact("mapel", "guru"));
    }                
=======
        //
    }
>>>>>>> 4ccc187f8b2ca78fb0889db4dee66b27996db141:app/Http/Controllers/DudiController.php

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Dudi  $dudi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dudi $dudi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dudi  $dudi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dudi $dudi)
    {
        //
    }
}
