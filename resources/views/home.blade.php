@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    
                    
                    @if(Auth::user()->rol == 'Secretaria')
                        
                        

                    @endif

                    @if(Auth::user()->rol == 'EncargadoTitulacion')
                    


                    @endif

                    @if(Auth::user()->rol == 'Academico')
                        
                        

                    @endif

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
