@extends('layouts.app')

@section('template_title')
    Hasil Kuisioners
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Hasil Kuisioners') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('hasil-kuisioners.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
									<th >Id Hasil Kuisioner</th>
									<th >Nim</th>
									<th >Id Kuisioner</th>
									<th >Hasil Kuisioner1</th>
									<th >Hasil Kuisioner2</th>
									<th >Hasil Kuisioner3</th>
									<th >Hasil Kuisioner4</th>
									<th >Hasil Kuisioner5</th>
									<th >Hasil Kuisioner6</th>
									<th >Hasil Kuisioner7</th>
									<th >Hasil Kuisioner8</th>
									<th >Hasil Kuisioner9</th>
									<th >Hasil Kuisioner10</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($hasilKuisioners as $hasilKuisioner)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
										<td >{{ $hasilKuisioner->id_hasil_kuisioner }}</td>
										<td >{{ $hasilKuisioner->nim }}</td>
										<td >{{ $hasilKuisioner->id_kuisioner }}</td>
										<td >{{ $hasilKuisioner->hasil_kuisioner1 }}</td>
										<td >{{ $hasilKuisioner->hasil_kuisioner2 }}</td>
										<td >{{ $hasilKuisioner->hasil_kuisioner3 }}</td>
										<td >{{ $hasilKuisioner->hasil_kuisioner4 }}</td>
										<td >{{ $hasilKuisioner->hasil_kuisioner5 }}</td>
										<td >{{ $hasilKuisioner->hasil_kuisioner6 }}</td>
										<td >{{ $hasilKuisioner->hasil_kuisioner7 }}</td>
										<td >{{ $hasilKuisioner->hasil_kuisioner8 }}</td>
										<td >{{ $hasilKuisioner->hasil_kuisioner9 }}</td>
										<td >{{ $hasilKuisioner->hasil_kuisioner10 }}</td>

                                            <td>
                                                <form action="{{ route('hasil-kuisioners.destroy', $hasilKuisioner->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('hasil-kuisioners.show', $hasilKuisioner->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('hasil-kuisioners.edit', $hasilKuisioner->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm" onclick="event.preventDefault(); confirm('Are you sure to delete?') ? this.closest('form').submit() : false;"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $hasilKuisioners->withQueryString()->links() !!}
            </div>
        </div>
    </div>
@endsection
