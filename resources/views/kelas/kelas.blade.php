@extends('layouts.template')
@section('content')
<div class="container" style="margin-top: 35px; width: 670px;">
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
                                    <input type="text" name="nama_kelas" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Nama Wali kelas</label>
                                    <input type="text" name="wali_kelas" class="form-control" required>
                                </div>
                            </div>
                        </div>               
                        <div class="row mt-4">
                            <div class="form-group">
                                <div class="col md-12">
                                    <button type="submit" class="btn btn-primary">Add Data</button>
                                    {{-- <a href="/home" class="btn btn-warning text-white" style="margin-left: 110px">Back To Home</a>                                  --}}
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="card mt-1" style="overflow-y:scroll; height: 250px;">
                <div class="card-body p-4">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead> 
                                <th>Nama Kelas</th>
                                <th>nama wali Kelas</th>
                                <th style="width: 107px;">Pilihan</th>
                            </thead>
                            <tbody>
                                @foreach ($data as $item)
                                <tr>
                                    <td>{{$item->nama_kelas}}</td>
                                    <td>{{$item->wali_kelas}}</td>
                                    <td>
                                        <form action="{{route('kelas.destroy', $item->id)}}" method="post">
                                            @csrf
                                            {{method_field('DELETE')}}
                                            <button type="submit" class="btn btn-danger" onclick="return confirm('U sure u wanna delete this? ')">DELETE</button>
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