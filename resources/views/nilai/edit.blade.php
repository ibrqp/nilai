@extends('layouts.app')
@section('content')
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <form action="{{ route('nilai.update', $nilai->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            
                            <div class="form-group">
                                <label class="font-weight-bold">NAMA GURU</label>
                                <select class="form-control" name="id_siswa" id="id_siswa">
                                    <option value="{{$nilai->id_siswa}}">{{$nilai->siswa->nama}}</option>
                                    @foreach ($siswa as $siswas)
                                        <option value="{{ $siswas->id }}">{{ $siswas->nama }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">NAMA GURU</label>
                                <select class="form-control" name="id_mapel" id="id_mapel">
                                    <option value="{{$nilai->id_mapel}}">{{$nilai->mapel->nama_mapel}}</option>
                                    @foreach ($mapel as $mapels)
                                        <option value="{{ $mapels->id }}">{{ $mapels->nama_mapel}}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">NAMA nilai</label>
                                <input type="text" class="form-control @error('nilai') is-invalid @enderror"
                                    name="nilai" value="{{ old('nilai', $nilai->nilai) }}"
                                    placeholder="Masukkan Nama nilai">

                                <!-- error message untuk nama -->
                                @error('nilai')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            

                            <button type="submit" class="btn btn-md btn-primary">UPDATE</button>
                            <button type="reset" class="btn btn-md btn-warning">RESET</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
