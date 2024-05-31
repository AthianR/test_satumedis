@extends('layouts.app')
@section('title', 'Edit Dokter')
@section('content')
    <div class="container">
      <div class="card">
        <div class="card-header">
          <strong>Edit</strong>
        </div>
        <div class="card-body">
            <form action="{{ route('update.doctor', $dokter->id) }}" method="POST" data-toggle="validator"
                role="form">
                @csrf
                @method('POST')
                <div class="form-group has-feedback">
                    <label for="name">Nama Dokter</label>
                    <input type="text" class="form-control" id="name" name="name"
                        value="{{ old('name', $dokter->name) }}" required>
                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                    <span class="help-block with-errors"></span>
                </div>

                <div class="form-group has-feedback">
                    <label for="spesialis">Spesialis</label>
                    <input type="text" class="form-control" id="spesialis" name="spesialis"
                        value="{{ old('spesialis', $dokter->spesialis) }}" required>
                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                    <span class="help-block with-errors"></span>
                </div>

                <div class="form-group has-feedback">
                    <label for="phone">No Tlp</label>
                    <input type="text" class="form-control" id="phone" name="phone"
                        value="{{ old('phone', $dokter->phone) }}" required>
                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                    <span class="help-block with-errors"></span>
                </div>

                <div class="form-group has-feedback">
                    <label for="email">Email </label>
                    <input type="email" class="form-control" id="email" name="email"
                        value="{{ old('email', $dokter->email) }}" required>
                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                    <span class="help-block with-errors"></span>
                </div>

                <div class="form-group mx-auto">
                    <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Simpan</button>
                    <a onclick="goBack()" class="btn btn-danger"><i class="fas fa-reply"></i> Kembali</a>
                </div>
            </form>
        </div>
    </div>
    </div>
@endsection