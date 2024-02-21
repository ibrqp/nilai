@extends('layouts.app')
@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">

                        <div class="d-flex justify-content-between mb-3">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                TAMBAH NILAI
                            </button>
                            <div class="d-flex justify-content-end">
                                <a href="{{ route('guru.index') }}" class="btn btn-success mx-1">
                                    DATA GURU
                                </a>
                                <a href="{{ route('mapel.index') }}" class="btn btn-success mr-1">
                                    DATA MAPEL
                                </a>
                                <a href="{{ route('siswa.index') }}" class="btn btn-success">
                                    DATA SISWA
                                </a>
                            </div>
                        </div>
                        <table class="table table-bordered">
                            <thead>
                                <tr>

                                    <th scope="col">SISWA</th>
                                    <th scope="col">MAPEL</th>
                                    <th scope="col">NILAI</th>
                                    <th scope="col">AKSI</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($nilais as $nilai)
                                    <tr>

                                        <td>{{ $nilai->siswa->nama }}</td>
                                        <td>{{ $nilai->mapel->nama_mapel }}</td>
                                        <td>{{ $nilai->nilai }}</td>
                                        <td class="text-center">
                                            <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                                action="{{ route('nilai.destroy', $nilai->id) }}" method="POST">
                                                <a href="{{ route('nilai.edit', $nilai->id) }}"
                                                    class="btn btn-sm btn-primary">EDIT</a>
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <div class="alert alert-danger">
                                        Data nilai belum Tersedia.
                                    </div>
                                @endforelse
                            </tbody>
                        </table>
                        {{ $nilais->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">TAMBAH SISWA</h1>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('nilai.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label class="font-weight-bold">NAMA SISWA</label>
                            <select class="form-control" name="id_siswa" id="id_siswa">
                                <option value="">Select Nama Siswa</option>
                                @foreach ($siswas as $siswas)
                                    <option value="{{ $siswas->id }}">{{ $siswas->nama }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold">NAMA MAPEL</label>
                            <select class="form-control" name="id_mapel" id="id_mapel">
                                <option value="">Select Mapel</option>
                                @foreach ($mapels as $mapels)
                                    <option value="{{ $mapels->id }}">{{ $mapels->nama_mapel }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold">NILAI</label>
                            <input type="number" class="form-control @error('nilai') is-invalid @enderror" name="nilai"
                                value="{{ old('nilai') }}" placeholder="Masukkan Nilai">

                            <!-- error message untuk title -->
                            @error('nama_nilai')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
                        <button type="reset" class="btn btn-md btn-warning">RESET</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
