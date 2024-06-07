@extends('layouts.app')

@section('template_title')
    {{ $pekerjaan->name ?? __('Show') . " " . __('Pekerjaan') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Pekerjaan</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('pekerjaans.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Id Pekerjaan:</strong>
                                    {{ $pekerjaan->id_pekerjaan }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Nim:</strong>
                                    {{ $pekerjaan->nim }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Perusahaan:</strong>
                                    {{ $pekerjaan->perusahaan }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Nama Pekerjaan:</strong>
                                    {{ $pekerjaan->nama_pekerjaan }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Alamat Perusahaan:</strong>
                                    {{ $pekerjaan->alamat_perusahaan }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Deskripsi Pekerjaan:</strong>
                                    {{ $pekerjaan->deskripsi_pekerjaan }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Mulai Bekerja:</strong>
                                    {{ $pekerjaan->mulai_bekerja }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Selesai Bekeja:</strong>
                                    {{ $pekerjaan->selesai_bekeja }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
