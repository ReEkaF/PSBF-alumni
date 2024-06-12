@extends('layouts.alumni')

@section('content')
<div class="post-container">
    <div class="row padding-1 p-1">
        <div class="col-md-12">
            <form action="{{ route('postcreate') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group mb-2 mb20">
                    <input type="hidden" name="username" class="form-control" value="{{ session('username') }}" id="username">
                </div>
                <div class="form-group mb-2 mb20">
                    <label for="judul" class="form-label">{{ __('Judul') }}</label>
                    <input type="text" name="judul" class="form-control" value="" id="judul" placeholder="Judul">
                </div>
                <div class="form-group mb-2 mb20">
                    <label for="tanggal_posting" class="form-label">{{ now()->format('Y/m/d') }}</label>
                    <input type="date" name="tanggal_posting" class="form-control" value="{{ now()->format('Y/m/d') }}" id="tanggal_posting">
                </div>
                <div class="form-group mb-2 mb20">
                    <label for="gambar" class="form-label">{{ __('Gambar') }}</label>
                    <input type="file" name="gambar" class="form-control" id="gambar">
                </div>
                <div class="form-group mb-2 mb20">
                    <label for="deskripsi" class="form-label">{{ __('Deskripsi') }}</label>
                    <input type="text" name="deskripsi" class="form-control" value="" id="deskripsi" placeholder="Deskripsi">
                </div>

                <button type="submit" class="btn btn-primary">Tambah</button>
            </form>
        </div>
    </div>
</div>
@endsection
