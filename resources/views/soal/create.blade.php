@extends('admin-temp.tmp')

@section('judul', 'Tambah Data Soal')

@section('isi')

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
    </ul>
</div>
@endif

<div class="row mt10">
    <div class="col10">
        <div class="card">
            <div class="card-header">Tambah Data Soal
                <a class="btn btn-sm btn-info float-right" href="{{route('soal.index')}}"><i class="fas fa-backward"></i>Kembali</a>
            </div>
            <div class="card-body">
                <form action="{{route('soal.store')}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="from-group">
                        <label>Mata Kuliah</label>
                        <input type="text" name="nama_mk" class="form-control" value="{{old('nama_mk')}}">
                    </div>

                    <div class="from-group">
                        <label>Dosen</label>
                        <input type="text" name="dosen" class="form-control" value="{{old('dosen')}}">
                    </div>

                    <div class="from-group">
                        <label>Jumlah Soal</label>
                        <input type="number" name="jumlah_soal" class="form-control" value="{{old('jumlah_soal')}}">
                    </div>

                    <div class="from-group">
                        <label>Keterangan</label>
                        <input type="text" name="keterangan" class="form-control" value="{{old('keterangan')}}">
                    </div>

                    <input type="submit" class="btn btn-primary" name="simpan" value="Simpan">
                    <a class="btn btn-warning float-right" href="{{route('soal.index')}}"><i class="fas fa-backward"></i>Batal</a>

            </div>
        </div>
    </div>
    @endsection