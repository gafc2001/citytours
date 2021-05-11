@extends('admin.index')

@section('template_title')
    {{ $viaje->name ?? 'Show Viaje' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Viaje</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('viajes.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Time:</strong>
                            {{ $viaje->time }}
                        </div>
                        <div class="form-group">
                            <strong>Date:</strong>
                            {{ $viaje->date }}
                        </div>
                        <div class="form-group">
                            <strong>Id Destination:</strong>
                            {{ $viaje->id_destination }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
