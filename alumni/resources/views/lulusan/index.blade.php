@extends('layouts.navbar')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('lulusan') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('lulusan.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success m-4">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body bg-white">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
									<th >Nim</th>
									<th >Nama</th>
									<th >Tanggal Lahir</th>
									<th >Alamat</th>
									<th >Jenis Kelamin</th>
									<th >Ipk</th>
									<th >Tahun Masuk</th>
									<th >Tahun Lulus</th>
									<th >Prodi</th>
									<th >No Hp</th>
									<th >Email</th>
									<th >Prestasi</th>
									<th >Pengalaman</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($lulusan as $l)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
										<td >{{ $l->nim }}</td>
										<td >{{ $l->Nama }}</td>
										<td >{{ $l->tanggal_lahir }}</td>
										<td >{{ $l->Alamat }}</td>
										<td >{{ $l->jenis_kelamin }}</td>
										<td >{{ $l->ipk }}</td>
										<td >{{ $l->tahun_masuk }}</td>
										<td >{{ $l->tahun_lulus }}</td>
										<td >{{ $l->prodi }}</td>
										<td >{{ $l->no_hp }}</td>
										<td >{{ $l->email }}</td>
										<td >{{ $l->prestasi }}</td>
										<td >{{ $l->pengalaman }}</td>

                                            <td>
<!-- 
                                                    <a class="btn btn-sm btn-primary " href="{{ route('lulusan.show', $l->nim) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('lulusan.edit', $l->nim) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    <button type="submit" class="btn btn-danger btn-sm" onclick="event.preventDefault(); confirm('Are you sure to delete?') ? this.closest('form').submit() : false;"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button> -->

                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $lulusan->withQueryString()->links() !!}
            </div>
        </div>
    </div>
@endsection
