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
                    <a class="nav-link rounded-pill {{ request()->is('about') ? 'active' : '' }}"
                        href="{{ url('about') }}">About me</a>
                </li>
            </ul>
        </div>
    </nav>
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 mb-4 mb-sm-5">
                <div class="card card-style1 border-0">
                    <div class="card-body p-1-9 p-sm-2-3 p-md-6 p-lg-7">
                        <div class="row align-items-center">
                            <div class="col-lg-6 mb-4 mb-lg-0">
                                <img src="{{ $img }}" alt="...">
                            </div>
                            <div class="col-lg-6 px-xl-10">
                                <div class="d-lg-inline-block py-1-9 px-1-9 px-sm-6 mb-1-9 rounded">
                                    <h3 class="h2 mb-0">{{ $nama }}</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 mb-4 mb-sm-5">
                <div>
                    <span class="section-title text-primary mb-3 mb-sm-4">About Me</span>
                    <p>{{ $background }}</p>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-12 mb-4 mb-sm-5">
                        <div>
                            <span class="section-title text-primary mb-3 mb-sm-4">Suka Duka Praktikum PAW</span>
                            <p>{{ $sukaduka }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
