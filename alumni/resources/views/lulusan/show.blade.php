@extends('layouts.app')

@section('template_title')
    {{ $lulusan->name ?? __('Show') . " " . __('Lulusan') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Lulusan</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('lulusan.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Nim:</strong>
                                    {{ $lulusan->nim }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Nama:</strong>
                                    {{ $lulusan->Nama }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Tanggal Lahir:</strong>
                                    {{ $lulusan->tanggal_lahir }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Alamat:</strong>
                                    {{ $lulusan->Alamat }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Jenis Kelamin:</strong>
                                    {{ $lulusan->jenis_kelamin }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Ipk:</strong>
                                    {{ $lulusan->ipk }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Tahun Masuk:</strong>
                                    {{ $lulusan->tahun_masuk }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Tahun Lulus:</strong>
                                    {{ $lulusan->tahun_lulus }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Prodi:</strong>
                                    {{ $lulusan->prodi }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>No Hp:</strong>
                                    {{ $lulusan->no_hp }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Email:</strong>
                                    {{ $lulusan->email }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Prestasi:</strong>
                                    {{ $lulusan->prestasi }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Pengalaman:</strong>
                                    {{ $lulusan->pengalaman }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
