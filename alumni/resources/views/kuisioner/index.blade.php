@extends('layouts.navbar')

@section('template_title')
    kuisioner
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('kuisioner') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('kuisioner.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
									<th >Id Kuisioner</th>
									<th >Kuisioner1</th>
									<th >Kuisioner2</th>
									<th >Kuisioner3</th>
									<th >Kuisioner4</th>
									<th >Kuisioner5</th>
									<th >Kuisioner6</th>
									<th >Kuisioner7</th>
									<th >Kuisioner8</th>
									<th >Kuisioner9</th>
									<th >Kuisioner10</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($kuisioner as $k)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
										<td >{{ $k->id_kuisioner }}</td>
										<td >{{ $k->kuisioner1 }}</td>
										<td >{{ $k->kuisioner2 }}</td>
										<td >{{ $k->kuisioner3 }}</td>
										<td >{{ $k->kuisioner4 }}</td>
										<td >{{ $k->kuisioner5 }}</td>
										<td >{{ $k->kuisioner6 }}</td>
										<td >{{ $k->kuisioner7 }}</td>
										<td >{{ $k->kuisioner8 }}</td>
										<td >{{ $k->kuisioner9 }}</td>
										<td >{{ $k->kuisioner10 }}</td>

                                            <td>
                                                <form action="{{ route('kuisioner.destroy', $k->id_kuisioner	) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('kuisioner.show', $k->id_kuisioner	) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('kuisioner.edit', $k->id_kuisioner	) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $kuisioner->withQueryString()->links() !!}
            </div>
        </div>
    </div>
@endsection
