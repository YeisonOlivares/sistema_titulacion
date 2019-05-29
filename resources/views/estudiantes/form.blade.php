<div class="container">



<div class="form-group" style="width: 700px">
    {{ Form::label('nombre','Nombre del estudiante')}}
    {{ Form::text('nombre',null, ['class'=>'form-control'])}}
</div>
<div class="form-group">
    {{ Form::label('run','RUN')}}
    {{ Form::text('run',null, ['class'=>'form-control'])}}
</div>


<div class="form-group">
    <div class="col-md-4 col-form-label text">{{ Form::label('carrera', 'Carrera') }}</div>
        <div class="col-md-8">
            <label class="col-md-6">
                {{ Form::radio('carrera', 'ICCI',['class'=>'form-control'])}} ICCI
            </label>
            <label class="col-md-6">
                {{ Form::radio('carrera', 'IECI',['class'=>'form-control']) }} IECI
            </label>
            <label class="col-md-6">
                {{ Form::radio('carrera', 'IenCI',['class'=>'form-control']) }} IenCI
            </label>
        </div>
    </div>
</div>

<div class="form-group">
    {{ Form::label('telefono', 'Telefono')}}
    {{ Form::text('telefono', null, ['class'=>'form-group'])}}
</div>

<div class="form-group">
    {{ Form::label('correo','Correo')}}
    {{ Form::email('correo',null, ['class'=>'form-group'])}}
</div>

<div class="form-group">
    {{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary float-left']) }}
    <a href="{{ route( 'estudiante' ) }}" class="btn btn-sm btn-primary float-right">Atras</a>
</div>

</div>