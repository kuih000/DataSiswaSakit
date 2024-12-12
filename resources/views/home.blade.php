@extends('layouts.template')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="margin-top: 100px">
                <div class="card-header" style="">{{ __('Home') }}</div>
                <div class="row">
                    <div class="card" style="width: 18rem; margin: 15px;">
                        <div class="card-body">
                          <h5 class="card-title">Pendataan Siswa Yang sakit</h5>
                          <p class="card-text">Halaman untuk mendata siswa yang sakit, Bisa di Edit, Hapus, dan diuabah</p>
                          <a href="/siswa" class="btn btn-primary">Data -></a>
                        </div>
                    </div>
                    <div class="card" style="width: 18rem; margin: 15px; margin-left: 137px;">
                        <div class="card-body">
                          <h5 class="card-title">Pendataan Kelas untuk siswa</h5>
                          <p class="card-text">Halaman Supaya mengetahui siswa yang sakit dari kelas mana</p>
                          <a href="/kelas" class="btn btn-primary">Data -></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
