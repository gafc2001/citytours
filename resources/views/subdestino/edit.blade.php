@extends('admin.index')

@section('template_title')
    Update Subdestino
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Update Subdestino</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('subdestinos.update', $subdestino->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('subdestino.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
