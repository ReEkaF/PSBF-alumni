@extends('layouts.alumni')

@section('content')
    
    <div class="search p-5 ">
        <div class="text_search text-center mb-5">
            <h1 class="fs-1">Search</h1>
        </div>
        <div class="row">
            <div class="col ">
                <input class="form-control me-2" type="search" placeholder="prodi" aria-label="Search">
            </div>
            <div class="col ">
                <input class="form-control me-2" type="search" placeholder="tahun masuk" aria-label="Search">
            </div>
            <div class="col col-6 rounded-5">
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="nama" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
            </div>

        </div>
    </div>
    
    <div class="result  bg-warning p-5 m-5" >
        <table class="table">
            <thead>
                <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Prodi</th>
                <th scope="col">Tahun masuk</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <th scope="row">1</th>
                <td>Nama</td>
                <td>Prodi</td>
                <td>Tahun masuk</td>
                </tr>
                <tr>
                <th scope="row">2</th>
                <td>Nama</td>
                <td>Prodi</td>
                <td>Tahun masuk</td>
                </tr>
                <tr>
                <th scope="row">3</th>
                <td>Nama</td>
                <td>Prodi</td>
                <td>Tahun masuk</td>
                </tr>
                </div>
            </tbody>
        </table>
    <nav aria-label="Page navigation example">
    <ul class="pagination justify-content-center">
        <li class="page-item"><a class="page-link" href="#">Previous</a></li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item"><a class="page-link" href="#">Next</a></li>
    </ul>
</nav>
@endsection