<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
use App\Models\siswa;
=======
use App\Models\Siswa;
>>>>>>> 4ccc187f8b2ca78fb0889db4dee66b27996db141
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index()
    {
<<<<<<< HEAD
        $siswa = Siswa::paginate(10);

        return view("siswa.index", compact("siswa"));
    }
    public function create()
    {
        return view("siswa.create");
    }
    public function store(Request $request)
    {
=======
        $siswa = Siswa::latest()->paginate(5);
        return view('siswa.index', compact('siswa'));
    }
    public function create()
    {
        return view('siswa.create');
    }

    /**
     * store
     *
     * @param Request $request
     * @return void
     */
    public function store(Request $request)
    {
        //validate form
>>>>>>> 4ccc187f8b2ca78fb0889db4dee66b27996db141
        $this->validate($request, [
            'nama' => 'required',
            'kelas' => 'required'
        ]);
<<<<<<< HEAD
        //create post
=======

        //upload image

        //create siswa
>>>>>>> 4ccc187f8b2ca78fb0889db4dee66b27996db141
        Siswa::create([
            'nama' => $request->nama,
            'kelas' => $request->kelas
        ]);
<<<<<<< HEAD
        return redirect()->route('siswa.index')->with(['success' => 'Data Berhasil Diubah!']);
=======

        //redirect to index
        return redirect()->route('siswa.index')->with(['success' => 'Data Berhasil Di Tambah!']);
    }
    public function destroy(Siswa $siswa)
    {
        //delete siswa
        $siswa->delete();

        //redirect to index
        return redirect()->route('siswa.index')->with(['success' => 'Data Berhasil Dihapus!']);
>>>>>>> 4ccc187f8b2ca78fb0889db4dee66b27996db141
    }
    public function edit(Siswa $siswa)
    {
        return view('siswa.edit', compact('siswa'));
    }
    public function update(Request $request, Siswa $siswa)
    {
        //validate form
        $this->validate($request, [
            'nama' => 'required',
            'kelas' => 'required'
        ]);

        $siswa->update([
            'nama' => $request->nama,
            'kelas' => $request->kelas
        ]);

        //redirect to index
        return redirect()->route('siswa.index')->with(['success' => 'Data Berhasil Diubah!']);
    }
<<<<<<< HEAD
    public function destroy(Siswa $siswa)
    {
        //delete siswa
        $siswa->delete();

        //redirect to index
        return redirect()->route('siswa.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
=======
}
>>>>>>> 4ccc187f8b2ca78fb0889db4dee66b27996db141
