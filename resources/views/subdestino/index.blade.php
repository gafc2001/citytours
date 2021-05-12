@extends('admin.index')

@section('template_title')
    Subdestino
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Subdestino') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('subdestinos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Name</th>
										<th>Image</th>
										<th>Id Destination</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($subdestinos as $subdestino)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $subdestino->name }}</td>
											<td>
                                                <img src="{{asset('storage/img/'.$subdestino->image)}}" height="70" alt="">
                                            </td>

											<td>{{ $subdestino->destino }}</td>

                                            <td>
                                                <form action="{{ route('subdestinos.destroy',$subdestino->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('subdestinos.show',$subdestino->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('subdestinos.edit',$subdestino->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $subdestinos->links() !!}
            </div>
        </div>
    </div>
@endsection
