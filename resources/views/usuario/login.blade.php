@extends('layouts.plantilla')
@section('title','Login')
@section('content')
<div class="row">
    <div class="col-md-4 col-md-uffset-4">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h1 class="panel-title">Login</h1>
            </div>
            <div class="panel-body">
                <form method="POST" action="{{route('login')}}">
                    {{ csrf_field() }}
                    <div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" placeholder="Correo">
                        {!!$errors->first('email', '<span class="help-block">Correo inválido</span>')!!}
                    </div>
                    <div class="form-group {{$errors->has('address') ? 'has-error' : ''}}">
                        <label for="address">Contraseña</label>
                        <input type="password" class="form-control" name="address" placeholder="Contraseña">
                        {!!$errors->first('address', '<span class="help-block">Validar contraseña</span>')!!}
                    </div>
                    <button class="btn btn-primary btn-block">Acceder</button>
                </form>
            </div>    
        </div>        
    </div>
</div>   
@endsection
/*Smith*/
{{-- <div class="col-md-4 col-md-uffset-4">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h1 class="panel-title">Bienvenido {{auth()->user()->username}}</h1>
        </div>
    </div>
</div> --}}
