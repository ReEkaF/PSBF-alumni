@extends('layouts.alumni')

@section('content')

    <div class="profile p-5 ">
        <div class="text_profile text-center mb-5">
            <h1 class="fs-1">Profile</h1>
        </div>
        <div class="cont_img h-25 w-25 mx-auto bg-white border border-success rounded-5 ">
            <img src="https://www.freeiconspng.com/uploads/profile-icon-9.png" alt="" class="h-100 w-100">
        </div>
        <div class="content bg-success mt-5">
            <div class="isi row px-5 d-flex">
                <p class="col fs-3">Nim</p>
                <p class="col fs-3">{{$username}}</p>
            </div>
            <div class="isi row px-5 d-flex">
                <p class="col fs-3">Nama</p>
                <p class="col fs-3">{{$lulusan->Nama}}</p>
            </div>
            <div class="isi row px-5 d-flex">
                <p class="col fs-3">Tanggal Lahir</p>
                <p class="col fs-3">{{$lulusan->tanggal_lahir}}</p>
            </div>
            <div class="isi row px-5 d-flex">
                <p class="col fs-3">Alamat</p>
                <p class="col fs-3">{{$lulusan->alamat}}</p>
            </div>
            <div class="isi row px-5 d-flex">
                <p class="col fs-3">jenis_kelamin</p>
                <p class="col fs-3">
                @if ($lulusan->jenis_kelamin==1)
                    laki-laki
                @else
                    perempuan
                @endif    
               </p>
            </div>
            <div class="isi row px-5 d-flex">
                <p class="col fs-3">no hp</p>
                <p class="col fs-3">{{$lulusan->no_hp}}</p>
            </div>
            <div class="isi row px-5 d-flex">
                <p class="col fs-3">email</p>
                <p class="col fs-3">{{$lulusan->email}}</p>
            </div>
            <div class="isi row px-5 d-flex">
                <p class="col fs-3">prodi</p>
                <p class="col fs-3">{{$lulusan->prodi}}</p>
            </div>
            <div class="isi row px-5 d-flex">
                <p class="col fs-3">tahun_masuk</p>
                <p class="col fs-3">{{$lulusan->tahun_masuk}}</p>
            </div>
            <div class="isi row px-5 d-flex">
                <p class="col fs-3">tahun_lulus</p>
                <p class="col fs-3">{{$lulusan->tahun_lulus}}</p>
            </div>
        </div>
    </div>

@endsection