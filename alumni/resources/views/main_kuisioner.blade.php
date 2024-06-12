@extends('layouts.alumni')

@section('content')

    <div class="profile p-5">
        <div class="text_profile text-center mb-5">
            <h1 class="fs-1">Kuisioner</h1>
        </div>
        <div class="content bg-success mt-5 p-4">
                @foreach ($main_kuisioner as $m)
                <div class="isi row px-5 d-flex mb-3">
                    <p class="col fs-3">qui</p>
                    <a href="/kuisioner" class="col fs-3">{{$m->subject}}</a>
                </div>

                @endforeach
            </form>
        </div>
    </div>
@endsection
