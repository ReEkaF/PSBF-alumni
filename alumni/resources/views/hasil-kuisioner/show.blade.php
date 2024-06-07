@extends('layouts.app')

@section('template_title')
    {{ $hasilKuisioner->name ?? __('Show') . " " . __('Hasil Kuisioner') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Hasil Kuisioner</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('hasil-kuisioners.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Id Hasil Kuisioner:</strong>
                                    {{ $hasilKuisioner->id_hasil_kuisioner }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Nim:</strong>
                                    {{ $hasilKuisioner->nim }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Id Kuisioner:</strong>
                                    {{ $hasilKuisioner->id_kuisioner }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Hasil Kuisioner1:</strong>
                                    {{ $hasilKuisioner->hasil_kuisioner1 }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Hasil Kuisioner2:</strong>
                                    {{ $hasilKuisioner->hasil_kuisioner2 }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Hasil Kuisioner3:</strong>
                                    {{ $hasilKuisioner->hasil_kuisioner3 }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Hasil Kuisioner4:</strong>
                                    {{ $hasilKuisioner->hasil_kuisioner4 }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Hasil Kuisioner5:</strong>
                                    {{ $hasilKuisioner->hasil_kuisioner5 }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Hasil Kuisioner6:</strong>
                                    {{ $hasilKuisioner->hasil_kuisioner6 }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Hasil Kuisioner7:</strong>
                                    {{ $hasilKuisioner->hasil_kuisioner7 }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Hasil Kuisioner8:</strong>
                                    {{ $hasilKuisioner->hasil_kuisioner8 }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Hasil Kuisioner9:</strong>
                                    {{ $hasilKuisioner->hasil_kuisioner9 }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Hasil Kuisioner10:</strong>
                                    {{ $hasilKuisioner->hasil_kuisioner10 }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
