@extends('admin.index')

@section('template_title')
    {{ $lugar->name ?? 'Show Lugar' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Lugar</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('lugars.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $lugar->name }}
                        </div>
                        <div class="form-group">
                            <strong>Details:</strong>
                            {{ $lugar->details }}
                        </div>
                        <div class="form-group">
                            <strong>Image:</strong>
                            {{ $lugar->image }}
                        </div>
                        <div class="form-group">
                            <strong>Precio:</strong>
                            {{ $lugar->precio }}
                        </div>
                        <div class="form-group">
                            <strong>Idsubdestination:</strong>
                            {{ $lugar->idsubdestination }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
