@extends('admin.index')

@section('template_title')
    {{ $subdestino->name ?? 'Show Subdestino' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Subdestino</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('subdestinos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $subdestino->name }}
                        </div>
                        <div class="form-group">
                            <strong>Image:</strong>
                            {{ $subdestino->image }}
                        </div>
                        <div class="form-group">
                            <strong>Id Destination:</strong>
                            {{ $subdestino->id_destination }}
                        </div>
                        <div class="form-group">
                            <strong>User Id:</strong>
                            {{ $subdestino->user_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
