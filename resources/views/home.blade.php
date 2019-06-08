@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    
                    
                    @if(Auth::user()->rol == 'SECRETARIA')
                    <td width="10px">
                                    <a href="{{ route('estudiantes.index') }}" class="btn btn-sm btn-default hol">
                                        Registro estudiantes
                                    </a>
                    </td>

                    <td width="10px">
                                    <a href="{{ route('academicos.index') }}" class="btn btn-sm btn-default hol">
                                        Registro academicos
                                    </a>
                    </td>
                        
                    <td width="10px">
                                    <a href="{{ route('actividades.index') }}" class="btn btn-sm btn-default hol">
                                        Registro tipo Actividad
                                    </a>
                    </td>
                        
                    @endif

                    @if(Auth::user()->rol == 'TITULACION')
                        <button>
                            Hola esto es un <b>botón</b>
                            <br>
                            <br>
                            Puedo poner saltos de línea en él!
                                        <hr>
                            Y otras cosas
                            <br>
                                    <img src="http://www.desarrolloweb.com/images/logo_desarrollo_web.gif" width="261" height="35" alt="">
                        </button>


                    @endif

                    @if(Auth::user()->rol == 'ACADEMICO')
                        
                        

                    @endif

                    @if(Auth::user()->rol == 'VINCULACION')
                        
                        

                    @endif

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
