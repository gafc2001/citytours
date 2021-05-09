@extends('admin.index')

@section('template_title')
    {{ $destino->name ?? 'Show Destino' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Destino</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('destinos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $destino->name }}
                        </div>
                        <div class="form-group">
                            <strong>Image:</strong>
                            {{ $destino->image }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
