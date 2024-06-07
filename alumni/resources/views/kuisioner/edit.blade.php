@extends('layouts.navbar')

@section('template_title')
    {{ __('Update') }} Kuisioner
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Update') }} Kuisioner</span>
                    </div>
                    <div class="card-body bg-white">
                        <form method="POST" action="{{ route('kuisioner.update', $kuisioner->id_kuisioner) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('kuisioner.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
