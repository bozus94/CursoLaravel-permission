<div class="form-group row">
    {!! Form::label('name', 'Nombre', ['class' => 'col-sm-2 col-form-label']) !!}
    <div class="col-sm-10">
        {!! Form::text('name',null,['class'=> 'form-control']) !!}
    </div>
</div>
<div class="form-group row">
    {!! Form::label('description', 'Description', ['class' => 'col-sm-2 col-form-label']) !!}
    <div class="col-sm-10">
        {!! Form::text('description',null,['class'=> 'form-control']) !!}
    </div>
</div> 
<hr>
<div class="form-group row">
    {!! Form::label('permissions', 'Permisos', ['class' => 'col-sm-2 col-form-label']) !!}
    <div class="col-sm-10">
        @foreach ($permissions as $permission)
           <div class="custom-control custom-switch">
                {!! Form::checkbox('permissions[]', $permission->id, null, ['class' => 'custom-control-input', 'id'=> $permission->name]) !!}
                {!! Form::label($permission->name, $permission->description, ['class' => 'custom-control-label']) !!}
           </div>
        @endforeach
    </div>
</div> 
<hr>
<div class="form-group row">
   <div class="col-sm-10">
       {!! Form::submit('Enviar', ['class' => 'btn btn-primary']) !!}
   </div>
</div> 
