@extends('layouts.app')

@section('navbar')
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">{{ $title }}</a>

            <ul class="nav nav-pills">
                <li class="nav-item">
                    <a class="nav-link rounded-pill {{ request()->is('/') ? 'active' : '' }}" href="{{ url('/') }}">Data
                        Mahasiswa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link rounded-pill {{ request()->is('create') ? 'active' : '' }}"
                        href="{{ url('create') }}">Input Data</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link rounded-pill {{ request()->is('/about') ? 'active' : '' }}"
                        href="{{ url('/about') }}">About me</a>
                </li>
            </ul>
        </div>
    </nav>
@endsection

@section('content')
    <form action="{{ url('update_mhs/' . $tbl_mhs->id) }}" method="POST">
        @csrf
        <div class="row g-2">
            <div class="col-md">
                <div class="form-floating">
                    <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama Mahasiswa"
                        value="{{ $tbl_mhs->nama }}">
                    <label for="nama">Nama Mahasiswa</label>
                </div>
                <div class="form-floating mt-2">
                    <input type="text" class="form-control" name="nrp" id="nrp" placeholder="NRP"
                        value="{{ $tbl_mhs->nrp }}">
                    <label for="nrp">NIM</label>
                </div>
            </div>
            <div class="col-md mb-5">
                <div class="form-floating">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Alamat Email"
                        value="{{ $tbl_mhs->email }}">
                    <label for="email">Alamat Email</label>
                </div>
                <div class="form-floating mt-2">
                    {{-- alamat --}}
                    <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Alamat"
                        value="{{ $tbl_mhs->alamat }}">
                    <label for="alamat">Alamat Rumah</label>
                </div>
                <div class="form-floating mt-2">
                    <input type="submit" name="update" class="btn btn-primary float-end" value="Update Data">
                </div>
            </div>
        </div>
    </form>
@endsection

@section('footer')
    <!-- Footer -->
    <footer class="text-center text-lg-start bg-light text-muted">
        <!-- Section: Social media -->
        <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
        </section>
        <!-- Section: Social media -->

        <!-- Section: Links  -->
        <section class="">
            <div class="container text-center text-md-start mt-5">
                <!-- Grid row -->
                <div class="row mt-3">
                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-4 col-xl-4 mx-auto mb-4">
                        <!-- Content -->
                        <img src="{{ asset('img/utm.png') }}" alt="logo-utm" width="100px" height="100px">
                        <h6 class="text-uppercase fw-bold mb-4">
                            <i class="fas fa-gem"></i>Jurusan Teknik Informatika <br> Universitas Trunojoyo Madura
                        </h6>
                        <p>
                            Jl. Raya Telang, Kecamatan Kamal, Bangkalan 691162 Indonesia <br> Kampus Universitas Trunojoyo
                            Madura
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-2 col-lg-2 col-xl-3 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            Contact
                        </h6>
                        <p>
                            <a href="#!" class="text-reset">Telp : 031-3011146</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Fax : 031-3011506</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">email : if.ft@trunojoyo.ac.id</a>
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            Layanan
                        </h6>
                        <p>
                            <a href="#!" class="text-reset">Pembayaran UKT</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Pembayaran KP</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Pembayaran Wisuda</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Administrasi</a>
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            Resource
                        </h6>
                        <p>
                            <a href="#!" class="text-reset">e-Journal</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Portal Tugas Akhir</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Website Resmi Kampus</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Download Administrasi</a>
                        </p>
                    </div>
                    <!-- Grid column -->
                </div>
                <!-- Grid row -->
            </div>
        </section>
        <!-- Section: Links  -->

        <!-- Copyright -->
        <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
            © 2022 Copyright:
            <a class="text-reset fw-bold" href="">Muhammad Muqtafin Nuha</a>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer -->
@endsection
