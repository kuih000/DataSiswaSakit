@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{route('siswa.update', $data->id)}}" method="post">
                        @csrf 
                        {{method_field('PUT')}}
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Nama lengkap</label>
                                    <input type="text" name="nama_siswa" value="{{$data->nama_siswa}}" class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>kelas</label>
                                    <input type="number" name="id_kelas" value="{{$data->id_kelas}}" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Diagnosis penyakit</label>
                                    <input type="string" name="diagnosa" value="{{$data->diagnosa}}" class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>tanggal masuk</label>
                                    <input name="tanggal_masuk" cols="30" rows="10" class="form-control" value="{{$data->tanggal_masuk}}"></input>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>tanggal keluar</label>
                                    <input name="tanggal_keluar" cols="30" rows="10" class="form-control" value="{{$data->tanggal_keluar}}"></input>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="form-group">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary">Change Data</button>    
                                    <a href="/siswa" class="btn btn-warning">Back</a>                                
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="card mt-3">
                <div class="card-body p-4">
                    <div class="table-responsive">
                        <table class="table table-stripped">
                            <tr>
                                <th>Nama Siswa</th>
                                <td>{{$data->nama_siswa}}</td>
                            </tr>
                            <tr>
                                <th>Kelas</th>
                                <td>{{$data->id_kelas}}</td>
                            </tr>
                            <tr>
                                <th>diagnosa</th>
                                <td>{{$data->diagnosa}}</td>
                            </tr>
                            <tr>
                                <th>Tanggal Masuk</th>
                                <td>{{$data->tanggal_masuk}}</td>
                            </tr>
                            <tr>
                                <th>Tanggal Keluar</th>
                                <td>{{$data->tanggal_keluar}}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection