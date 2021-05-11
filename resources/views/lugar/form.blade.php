<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('name') }}
            {{ Form::text('name', $lugar->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Name']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('details') }}
            {{ Form::text('details', $lugar->details, ['class' => 'form-control' . ($errors->has('details') ? ' is-invalid' : ''), 'placeholder' => 'Details']) }}
            {!! $errors->first('details', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('image') }}
            {{ Form::file('image') }}
            <br>
            <img src="{{asset('storage/img/'.$lugar->image)}}" height="200" alt="">
            {!! $errors->first('image', '<div class="invalid-feedback" style="display:block;">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('precio') }}
            {{ Form::number('precio', $lugar->precio, ['class' => 'form-control' . ($errors->has('precio') ? ' is-invalid' : ''), 'placeholder' => 'Precio']) }}
            {!! $errors->first('precio', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idsubdestination') }}
            {{ Form::select('idsubdestination', $subdestinos,null, $attributes = ['class' => 'form-control' . ($errors->has('idsubdestination') ? ' is-invalid' : '')]) }}
            {!! $errors->first('idsubdestination', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>