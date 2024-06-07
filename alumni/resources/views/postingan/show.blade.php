@extends('layouts.app')

@section('template_title')
    {{ $postingan->name ?? __('Show') . " " . __('Postingan') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Postingan</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('postingans.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Id Postingan:</strong>
                                    {{ $postingan->id_postingan }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Nim:</strong>
                                    {{ $postingan->nim }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Judul:</strong>
                                    {{ $postingan->judul }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Tanggal Posting:</strong>
                                    {{ $postingan->tanggal_posting }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Gambar:</strong>
                                    {{ $postingan->gambar }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Deskripsi:</strong>
                                    {{ $postingan->deskripsi }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
