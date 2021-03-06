@extends('admin.index')

@section('template_title')
Viaje
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <div style="display: flex; justify-content: space-between; align-items: center;">

                        <span id="card_title">
                            {{ __('Viaje') }}
                        </span>

                        <div class="float-right">
                            <a href="{{ route('viaje.create') }}" class="btn btn-primary btn-sm float-right" data-placement="left">
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
                @if ($errors->any())
                <div class="alert alert-danger">
                    <p>{{ $errors->first('error') }}</p>
                </div>
                @endif
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <thead class="thead">
                                <tr>
                                    <th>No</th>

                                    <th>Time</th>
                                    <th>Date</th>
                                    <th>Tickets</th>
                                    <th>Price</th>
                                    <th>Discount</th>
                                    <th>Id Lugar</th>

                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($viajes as $viaje)
                                <tr>
                                    <td>{{ ++$i }}</td>

                                    <td>{{ $viaje->time }}</td>
                                    <td>{{ $viaje->date }}</td>
                                    <td>{{ $viaje->tickets }}</td>
                                    <td>{{ $viaje->price }}</td>
                                    <td>{{ $viaje->discount }}</td>
                                    <td>{{ $viaje->lugar_turistico }}</td>

                                    <td>
                                        <form action="{{ route('viaje.destroy',$viaje->id) }}" method="POST">
                                            <a class="btn btn-sm btn-primary " href="{{ route('viaje.show',$viaje->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                            <a class="btn btn-sm btn-success" href="{{ route('viaje.edit',$viaje->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
            {!! $viajes->links() !!}
        </div>
    </div>
</div>
@endsection