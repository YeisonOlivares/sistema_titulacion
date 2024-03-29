@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Editar Estudiante

                </div>
            
                <div class="panel-body">
                    {!! Form::model($estudiante, ['route' => ['estudiantes.update',$estudiante->id], 'method' => 'PUT']) !!}
                        @include('estudiantes.form')
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection