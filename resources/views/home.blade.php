@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Home') }}</div>
                <div style="margin: 10px;">
                    <button style="border: 1px solid grey; border-radius: 2px;"><a style="text-decoration-line: none; color: black;, background-color:white;" href="/siswa">Kelas 9</a></button>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
