<div class="form-group row">
    {!! Form::label('name', 'Nombre', ['class' => 'col-sm-2 col-form-label']) !!}
    <div class="col-sm-10">
        {!! Form::text('name',null,['class'=> 'form-control']) !!}
    </div>
</div>
<div class="form-group row">
    {!! Form::label('description', 'Description', ['class' => 'col-sm-2 col-form-label']) !!}
    <div class="col-sm-10">
        {!! Form::textarea('description',null,['class'=> 'form-control', 'rows' => '3']) !!}
    </div>
</div> 
<div class="form-group row">
   <div class="col-sm-10">
       {!! Form::submit('Enviar', ['class' => 'btn btn-primary']) !!}
   </div>
</div> 
