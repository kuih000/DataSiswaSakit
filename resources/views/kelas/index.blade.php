@extends('layouts.template')
@section('content')
<div class="container" style="width: 800px; margin-top: 10px; height:10px;">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body p-4">
                    <form action="" method="post">
                        @csrf 
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Kelas</label>
                                    <select name="id_kelas" class="form-control" required>
                                        <option value="">-Pilih Nama Kelas-</option>
                                        @foreach($kelas as $row)
                                        <option value="{{$row->id}}">{{$row->nama_kelas}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Nama lengkap Siswa</label>
                                    <input type="text" name="nama_siswa" class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Diagnosa Penyakit</label>
                                    <textarea name="diagnosa" class="form-control"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-1">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Tanggal Masuk UKS</label>
                                    <input type="date" name="tanggal_masuk" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label>Image</label>
                                <input class="form-control" name="photo" type="file" id="photo">
                            </div>
                        </div>
                        {{-- <div class="row mt-1">
                            <div class="form-group">
                                <div class="col md-6"> --}}
                                    <button type="submit" class="btn btn-primary">Add Data</button>                                 
                                {{-- </div>
                            </div>
                        </div> --}}
                    </form>
                </div>
            </div>

            <div class="card my-2 p-2">
                {{-- <button type="button" class="btn btn-danger" id="exampleModalCenter" data-toggle="modal" data-target=".bd-example-modal-lg">Lihat Data</button>

                <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-lg modal-dialog ">
                        <div class="modal-content-centered"> --}}
                            <div class="table-responsive" style="overflow-y:scroll; height: 200px;">
                                <table class="table table-bordered">
                                    <thead> 
                                        <th>Nama</th>
                                        <th>Kelas</th>
                                        <th>Diagnosa</th>
                                        <th>photo</th>
                                        <th>Pilihan</th>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $item)
                                        <tr>
                                            <td>{{$item->nama_siswa}}</td>
                                            <td>{{$item->kelas->nama_kelas}}</td>
                                            <td>{{$item->diagnosa}}</td>
                                            <td>
                                                @if ($item->photo)
                                                <img src="{{ asset('images/' . $item->photo) }}" alt="Photo Orang" width="100">
                                                @else
                                                <img src="{{ asset('images/default.jpg') }}" alt="Default Image" width="100">
                                                @endif
                                            </td>
                                            
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
                            {{-- </div> --}}
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection