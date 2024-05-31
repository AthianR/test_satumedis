@extends('layouts.app')
@section('title', 'Form Dokter')
@section('content')
<div class="container">
  <div class="card">
      <div class="head-content">
          <p>Form Tambah Dokter</p>
      </div>
      <div class="body-content" style="border: 0">
          <div class="form">
              <form action="{{ route('store.doctor') }}" method="post">
                  @csrf
                  @method('POST')
                  <div class="content">
                      <label for="name">Nama</label>
                      <input type="text" name="name" id="name" class="form-control" placeholder="Masukan Nama" required>
                  </div>
                  <div class="content">
                      <label for="spesialis">Spesialis</label>
                      <input type="text" name="spesialis" class="form-control" placeholder="Spesialis" required>
                  </div>
                  <div class="content">
                      <label for="phone">No Telp</label>
                      <input type="text" name="phone" class="form-control" placeholder="No Tlp" required>
                  </div>
                  <div class="content">
                      <label for="email">Email</label>
                      <input type="email" name="email" class="form-control" placeholder="example@gmail.com" required>
                  </div>
                  <div class="button">
                      <button type="submit" class="btn btn-sm btn-success">Simpan</button>
                  </div>
              </form>
          </div>
      </div>
  </div>
</div>
@endsection