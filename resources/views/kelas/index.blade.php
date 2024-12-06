@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body p-4">
                    <form action="" method="post">
                        @csrf 
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Kelas</label>
                                    <input type="number" name="id_kelas" class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Nama lengkap Siswa</label>
                                    <input type="text" name="nama_siswa" class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Diagnosa Penyakit</label>
                                    <input type="string" name="diagnosa" class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Tanggal Masuk UKS</label>
                                    <input type="date" name="tanggal_masuk" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Tanggal keluar UKS</label>
                                    <input type="date" name="tanggal_keluar" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="form-group">
                                <div class="col md-12">
                                    <button type="submit" class="btn btn-primary">Add Data</button> 
                                    <a href="" class="btn btn-warning"></a>                                   
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="card mt-2">
                <div class="card-body p-4">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead> 
                                <th>Nama</th>
                                <th>Kelas</th>
                                <th>Diagnosa</th>
                                <th>Pilihan</th>
                            </thead>
                            <tbody>
                                @foreach ($data as $item)
                                <tr>
                                    <td>{{$item->nama_siswa}}</td>
                                    <td>{{$item->id_kelas}}</td>
                                    <td>{{$item->diagnosa}}</td>
                                    <td>
                                        <form action="{{route('siswa.destroy', $item->id)}}" method="post">
                                            @csrf
                                            {{method_field('DELETE')}}
                                            <a href="{{route('siswa.show', $item->id)}}" class="btn btn-info text-white">☰</a>
                                            <button type="submit" class="btn btn-danger" onclick="return confirm('U sure u wanna delete this? ')">🗑</button>
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
    </div>
</div>
@endsection