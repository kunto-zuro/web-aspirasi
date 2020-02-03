@extends('layout')

@section('title', 'Home Page')

@section('content')
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="dashboard-admin.html">Dashboard</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item"><a class="nav-link" href="histori-admin.html">Histori</a></li>
        </ul>
        <a href="/login" class="ml-auto">Login</a>
    </div>
</nav>
<!-- Akhir Navbar -->
<div class="row">

    <div class="offset-md-3 col-md-6">
        <!-- <h1>Selemat Datang</h1> -->
        <div class="d-block text-center mt-5 pt-5">
            <img src="https://image.flaticon.com/icons/svg/2133/2133124.svg" alt="" width="200px">
        </div>

        <div class="d-block text-center mt-4">
            <a href="/report/create" class="btn btn-info">Berikan Keluhan</a>
            <a href="cari" class="btn btn-secondary">Cari Keluhan</a>
        </div>
    </div>
</div>
@endsection