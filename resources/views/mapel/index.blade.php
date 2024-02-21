@extends('layouts.app')
@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">

                        <div class="d-flex justify-content-between mb-3">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                TAMBAH MAPEL
                            </button>
                            <div class="d-flex justify-content-end">
                                <a href="{{route('guru.index')}}" class="btn btn-success mx-1">
                                    DATA GURU
                                </a>
                                <a href="{{ route('siswa.index') }}" class="btn btn-success mr-1">
                                    DATA SISWA 
                                </a>
                                <a href="{{ route('nilai.index') }}" class="btn btn-success">
                                    DATA NILAI 
                                </a>
                            </div>
                        </div>
                        <table class="table table-bordered">
                            <thead>
                                <tr>

                                    <th scope="col">GURU</th>
                                    <th scope="col">NAMA MAPEL</th>
                                    <th scope="col">AKSI</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($mapels as $mapel)
                                    <tr>
                                        <td>{{ $mapel->guru->nama_guru }}</td>
                                        <td>{{ $mapel->nama_mapel }}</td>
                                        <td class="text-center">
                                            <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                                action="{{ route('mapel.destroy', $mapel->id) }}" method="POST">
                                                <a href="{{ route('mapel.edit', $mapel->id) }}"
                                                    class="btn btn-sm btn-primary">EDIT</a>
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <div class="alert alert-danger">
                                        Data Mapel belum Tersedia.
                                    </div>
                                @endforelse
                            </tbody>
                        </table>
                        {{ $mapels->links() }}
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
                    <form action="{{ route('mapel.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label class="font-weight-bold">NAMA GURU</label>
                            <select class="form-control" name="id_guru" id="id_guru">
                                <option value="">Select Nama Guru</option>
                                @foreach ($guru as $gurus)
                                    <option value="{{ $gurus->id }}">{{ $gurus->nama_guru }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold">NAMA MAPEL</label>
                            <input type="text" class="form-control @error('nama_mapel') is-invalid @enderror"
                                name="nama_mapel" value="{{ old('nama_mapel') }}" placeholder="Masukkan Nama">

                            <!-- error message untuk title -->
                            @error('nama_mapel')
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
