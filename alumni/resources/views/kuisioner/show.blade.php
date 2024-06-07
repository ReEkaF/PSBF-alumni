@extends('layouts.navbar')

@section('template_title')
    {{ $kuisioner->name ?? __('Show') . " " . __('Kuisioner') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Kuisioner</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('kuisioner.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Id Kuisioner:</strong>
                                    {{ $kuisioner->id_kuisioner }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Kuisioner1:</strong>
                                    {{ $kuisioner->kuisioner1 }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Kuisioner2:</strong>
                                    {{ $kuisioner->kuisioner2 }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Kuisioner3:</strong>
                                    {{ $kuisioner->kuisioner3 }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Kuisioner4:</strong>
                                    {{ $kuisioner->kuisioner4 }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Kuisioner5:</strong>
                                    {{ $kuisioner->kuisioner5 }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Kuisioner6:</strong>
                                    {{ $kuisioner->kuisioner6 }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Kuisioner7:</strong>
                                    {{ $kuisioner->kuisioner7 }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Kuisioner8:</strong>
                                    {{ $kuisioner->kuisioner8 }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Kuisioner9:</strong>
                                    {{ $kuisioner->kuisioner9 }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Kuisioner10:</strong>
                                    {{ $kuisioner->kuisioner10 }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
