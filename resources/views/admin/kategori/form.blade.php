@extends('admin.index.index')
@section('title', 'Form Kategori')

@section('sidebar')

<aside id="sidebar" class="sidebar" data-color="purple" data-background-color="white">
  <ul class="sidebar-nav" id="sidebar-nav">

    <li class="nav-item {{ Request::is('admin') ? 'active' : ''}}">
      <a class="nav-link collapsed " href="/admin">
        <i class="bi bi-grid"></i>
        <span>Dashboard</span>
      </a>
    </li><!-- End Dashboard Nav -->

    <li class="nav-item {{ Request::is('/admin/produk') ? 'active' : ''}}">
      <a class="nav-link collapsed" href="/admin/produk">
        <i class="bi bi-box"></i>
        <span>Produk</span>
      </a>
    </li><!-- End Dashboard Nav -->

    <li class="nav-item {{ Request::is('/admin/kategori') ? 'active' : ''}}">
      <a class="nav-link " href="/admin/kategori">
        <i class="bi bi-list-task"></i>
        <span>Kategori</span>
      </a>
    </li><!-- End Dashboard Nav -->

    <li class="nav-item">
      <a class="nav-link collapsed" href="/admin/pesan">
        <i class="bi bi-envelope"></i>
        <span>Pesan</span>
      </a>
    </li><!-- End Contact Page Nav -->

    <li class="nav-item">
      <a class="nav-link collapsed" href="/admin/color">
        <i class="bi bi-palette"></i>
        <span>Warna</span>
      </a>
    </li><!-- End Contact Page Nav -->

    <li class="nav-item">
      <a class="nav-link collapsed" href="/admin/size">
        <i class="bi bi-aspect-ratio"></i>
        <span>Ukuran</span>
      </a>
    </li><!-- End Contact Page Nav -->

    <li class="nav-item">
      <a class="nav-link collapsed" href="/admin/order">
        <i class="bi bi-bag"></i>
        <span>Order</span>
      </a>
    </li>

    <li class="nav-item">
      <a class="nav-link collapsed" href="/admin/logo">
        <i class="bi bi-coin"></i>
        <span>Transaksi</span>
      </a>
    </li>

    <li class="nav-item">
      <a class="nav-link collapsed " href="/logout">
        <i class="bi bi-box-arrow-right"></i>
        <span>Logout</span>
      </a>
    </li><!-- End Login Page Nav -->

  </ul>

</aside>
@endsection

@section('content')

<!DOCTYPE html>
<html lang="en">

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Form Tambah</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/admin">Home</a></li>
          <li class="breadcrumb-item"><a href="/admin/kategori">Kategori</a></li>
          <li class="breadcrumb-item active">Tambah</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-9">

          <div class="card">
            <div class="card-body">
                <form role="form" action="{{url('/admin/kategori/create')}}" method="post" enctype="multipart/form-data">
                    @csrf 
              <h5 class="card-title">Tambah Kategori</h5>

              <!-- General Form Elements -->
              <form>
                {{-- <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">ID</label>
                    <input type="number" class="form-control" name="id">
                </div> --}}

                <div class="row mb-3">
                    <label for="inputKategori" class="col-sm-5 col-form-label">Nama Kategori</label>
                    <input type="text" class="form-control" name="nama_kategori">
                </div>

                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Gambar</label>
                  <input class="form-control" type="file" name="gambar">
                </div>

                <div class="col-sm-10">
                    <button type="submit" class="float-right btn btn-primary">Submit</button>
                </div>

              </form><!-- End General Form Elements -->

            </div>
          </div>

        </div>

      </div>
    </section>

  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

@endsection