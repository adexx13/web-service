@extends('admin-temp.tmp')

@section('judul', 'Soal')

@section('isi')

<div class="row mt4">
    <div class="col10">
        <div class="card">
            <div class="card-header">Data Soal
                <a class="btn btn-sm btn-primary float-right" href="{{route('soal.create')}}">Tambah Soal</a>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Mata Kuliah</th>
                            <th>Dosen</th>
                            <th>Jumlah Soal</th>
                            <th>Keterangan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($soal as $row)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $row->nama_mk }}</td>
                            <td>{{ $row->dosen }}</td>
                            <td>{{ $row->jumlah_soal }}</td>
                            <td>{{ $row->keterangan }}</td>
                          <td>
                          <form action="{{ route ('soal.delete', $row['id'])}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm" onclick="return confirm('Anda yakin?')">DELETE</button>
                        <a href="{{ route ('soal.edit', $row['id'])}}" class="btn btn-warning btn-sm">EDIT</a>
                    </form>      
                        
                           
                          </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection