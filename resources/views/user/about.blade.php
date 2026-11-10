@extends('layouts.app')
@section('title', 'About Us')
@section('content')
<div class="row justify-content-center">
<div class="col-lg-8">
{{-- Hero About --}}
<div class="card border-0 shadow-sm mb-4 overflow-hidden">
<div class="card-body p-0">
<div class="bg-dark text-white p-5 text-center">
<i class="bi bi-cup-hot-fill text-white" style="font-size:3rem;"></i>
<h2 class="fw-bold mt-2 mb-1">CafeShop</h2>
<p class="mb-0 opacity-75">Cafe Shop dengan harga bersahabat

</p>
</div>
</div>
</div>
{{-- Tentang Kami --}}
<div class="card border-0 shadow-sm mb-4">
<div class="card-body p-4">
<h5 class="fw-bold text-dark mb-3">
<i class="bi bi-info-circle-fill me-2"></i>Tentang Kami
</h5>
<p class="text-muted">
CafeShop adalah Cafe yang menyediakan berbagai macam minuman, seperti kopi, teh, milkshake, dan sebagainya dengan harga bersahabat.
</p>
<p class="text-muted mb-0">Kami berkomitmen untuk menjaga kualitas kopi kami
    dan menjaga agar harga tetap terjangkau.
</p>
</p>
</div>
</div>
{{-- Info Kontak --}}
<div class="card border-0 shadow-sm mb-4">
<div class="card-body p-4">
<h5 class="fw-bold text-dark mb-3">
<i class="bi bi-geo-alt-fill text-dark fs-5"></i>Informasi CafeShop
</h5>
<div class="row g-3">
<div class="col-md-6">
<div class="d-flex align-items-start gap-3">
<div class="bg-secondary bg-opacity-10 rounded p-2">
<i class="bi bi-geo-alt-fill text-dark fs-5"></i>
</div>
<div>

<div class="fw-semibold">Alamat</div>

<div class="text-muted small">Jl. Kuningan Jaya No. 24<br>Jakarta Selatan, 12345</div>
</div>
</div>
</div>

<div class="col-md-6">

<div class="d-flex align-items-start gap-3">
<div class="bg-secondary bg-opacity-10 rounded p-2">
<i  class="bi bi-telephone-fill text-dark fs-5"></i>
</div>
<div>

<div class="fw-semibold">Telepon</div>

<div class="text-muted small">(021) 1234-5678<br>+62

812-3456-7890</div>
</div>
</div>
</div>

<div class="col-md-6">

<div class="d-flex align-items-start gap-3">
<div class="bg-secondary bg-opacity-10 rounded p-2">
<i class="bi bi-clock-fill text-dark fs-5"></i>
</div>
<div>

<div class="fw-semibold">Jam Operasional</div>
<div class="text-muted small">Senin - Minggu<br>08.00 -

20.00 WIB</div>
</div>
</div>
</div>

<div class="col-md-6">

<div class="d-flex align-items-start gap-3">
<div class="bg-secondary bg-opacity-10 rounded p-2">
<i class="bi bi-envelope-fill text-dark fs-5"></i>
</div>
<div>

<div class="fw-semibold">Email</div>
<div class="text-muted
small">admin@cafeshop.id<br>cs@cofeshop.id</div>
</div>
</div>
</div>
</div>
</div>
</div>
{{-- Visi Misi --}}
<div class="row g-3 mb-4">
<div class="col-md-6">
<div class="card border-0 shadow-sm h-100">
<div class="card-body p-4">
<h6 class="fw-bold text-dark mb-2">
<i class="bi bi-eye-fill me-2"></i>Visi
</h6>

<p class="text-muted small mb-0">

Menjadi Cafe Minuman no.1 di Indonesia untuk berbagai kalangan.
</p>
</div>
</div>
</div>
<div class="col-md-6">
<div class="card border-0 shadow-sm h-100">
<div class="card-body p-4">
<h6 class="fw-bold text-dark mb-2">
<i class="bi bi-bullseye me-2"></i>Misi
</h6>

<ul class="text-muted small mb-0 ps-3">

<li>Menjaga kualitas premium minuman</li>
<li>Harga transparan dan terjangkau</li>
<li>Pengiriman cepat dan aman</li>
<li>Layanan pelanggan yang ramah</li>

</ul>
</div>
</div>
</div>
</div>
<div class="text-center">
<a href="/contact" class="btn btn-dark px-4">
<i class="bi bi-envelope me-2"></i>Hubungi Kami
</a>
<a href="/produk" class="btn btn-outline-dark px-4">
<i class="bi bi-shop me-2"></i>Lihat Produk
</a>
</div>
</div>
</div>
@endsection