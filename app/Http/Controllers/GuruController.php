<?php

namespace App\Http\Controllers;

use Validator;
use pagination;
use App\Models\guru;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GuruController extends Controller
{
    public function index()
    {
        $gurus = guru::paginate(10);
        return view("guru.index", compact("gurus"));
    }

    public function create()
    {
        return view("guru.create");
    }
    public function destroy(Guru $guru)
    {
        $guru->delete();
        return redirect(route('guru.index'))->with("success", "Data Berhasil Di Hapus");
    }

    public function edit(Guru $guru)
    {
        return view("guru.edit", compact("guru"));
    }
    public function update(Request $request, Guru $guru)
    {
        $this->validate($request, [
            'nama_guru' => 'required'
    
        ]);
        
            $guru->update([
                'nama_guru' => $request->nama_guru,
            ]);

        
        

        //redirect to index
        return redirect()->route('guru.index')->with(['success' => 'Data Berhasil Diubah!']);

    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'nama_guru' => 'required'
        ]);

        //create post
        guru::create([
            'nama_guru' => $request->nama_guru,

        ]);

        //redirect to index
        return redirect()->route('guru.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }


}





















