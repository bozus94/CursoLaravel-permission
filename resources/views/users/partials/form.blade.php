<div class="form-group row">
    {!! Form::label('name', 'Nombre', ['class' => 'col-sm-2 col-form-label']) !!}
    <div class="col-sm-10">
        {!! Form::text('name',null,['class'=> 'form-control']) !!}
    </div>
</div>
<div class="form-group row">
    {!! Form::label('email', 'Email', ['class' => 'col-sm-2 col-form-label']) !!}
    <div class="col-sm-10">
        {!! Form::email('email', null, ['class'=> 'form-control']) !!}
    </div>
</div> 
<div class="form-group row">
    {!! Form::label('permissions', 'Permisos', ['class' => 'col-sm-2 col-form-label']) !!}
    <div class="col-sm-10">
        @foreach ($roles as $role)
           <div class="custom-control custom-switch">
                {!! Form::checkbox('roles[]', $role->id, null, ['class' => 'custom-control-input', 'id'=> $role->name]) !!}
                {!! Form::label($role->name, $role->name .' - ' . $role->description, ['class' => 'custom-control-label']) !!}
           </div>
        @endforeach
    </div>
</div> 
<div class="form-group row">
   <div class="col-sm-10">
       {!! Form::submit('Enviar', ['class' => 'btn btn-primary']) !!}
   </div>
</div> 
