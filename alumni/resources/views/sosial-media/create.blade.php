@extends('layouts.app')

@section('template_title')
    {{ __('Create') }} Sosial Media
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Create') }} Sosial Media</span>
                    </div>
                    <div class="card-body bg-white">
                        <form method="POST" action="{{ route('sosial-media.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('sosial-media.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
