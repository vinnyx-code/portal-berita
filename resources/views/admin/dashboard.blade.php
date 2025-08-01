@extends('layouts.admin')

@section('content')


<div class="container">

    <h1>Dashboard Admin</h1>

    <p>Selamat datang, {{ Auth::user()->name }}</p>

    <div class="row mt-4">

        <div class="col-md-4">

            <div class="card text-bg-primary mb-3">

                <div class="card-body">

                    <h5 class="card-title">Total Berita</h5>

                    <p class="fs-4">{{ $jumlahBerita ?? '0' }}</p>

                </div>

            </div>

        </div>

    </div>

</div>
@endsection