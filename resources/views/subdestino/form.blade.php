<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('name') }}
            {{ Form::text('name', $subdestino->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Name']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('image') }}
            {{ Form::file('image') }}
            <br>
            <img src="{{asset('storage/img/'.$subdestino->image)}}" height="200" alt="">
            {!! $errors->first('image', '<div class="invalid-feedback" style="display:block">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_destination') }}
            {{ Form::select('id_destination', $destinos,null, $attributes = ['class' => 'form-control' . ($errors->has('id_destination') ? ' is-invalid' : '')]) }}
            {!! $errors->first('id_destination', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>