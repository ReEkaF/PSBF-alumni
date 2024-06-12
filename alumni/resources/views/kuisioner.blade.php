@extends('layouts.alumni')

@section('content')

    <div class="profile p-5">
        <div class="text_profile text-center mb-5">
            <h1 class="fs-1">Kuisioner</h1>
        </div>
        <div class="content bg-success mt-5 p-4">
            <form action="{{ route('masukan') }}" method="post">
                @csrf
                @foreach ($kuisioner as $k)
                <div class="isi row px-5 d-flex mb-3">
                    <p class="col fs-3">Username: {{ session('username') }} </p>
                    <input type="hidden" name="username" value="{{ session('username') }}">
                </div>
                <div class="isi row px-5 d-flex mb-3">
                    <p class="col fs-3">ID: {{$k->id_kuisioner}}</p>
                    <input type="hidden" name="id_kuisioner" value="{{$k->id_kuisioner}}">
                </div>
                <div class="isi row px-5 d-flex mb-3">
                    <p class="col fs-3">Question: {{$k->kuisioner}}</p>
                    <input type="text" name="hasil_kuisioner" class="form-control" placeholder="Your answer here">
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                @endforeach

            </form>
        </div>
    </div>
@endsection
