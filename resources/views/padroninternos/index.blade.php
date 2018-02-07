@extends('layouts.app')

@section('content')

    @if(Session::has('success_message'))
        <div class="alert alert-success">
            <span class="glyphicon glyphicon-ok"></span>
            {!! session('success_message') !!}

            <button type="button" class="close" data-dismiss="alert" aria-label="close">
                <span aria-hidden="true">&times;</span>
            </button>

        </div>
    @endif

    <div class="panel panel-default">

        <div class="panel-heading clearfix">

            <div class="pull-left">
                <h4 class="mt-5 mb-5">Padroninternos</h4>
            </div>

            <div class="btn-group btn-group-sm pull-right" role="group">
                <a href="{{ route('padroninternos.padroninternos.create') }}" class="btn btn-success" title="Create New Padroninternos">
                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                </a>
            </div>

        </div>
        
        @if(count($padroninternosObjects) == 0)
            <div class="panel-body text-center">
                <h4>No Padroninternos Available!</h4>
            </div>
        @else
        <div class="panel-body panel-body-with-table">
            <div class="table-responsive">

                <table class="table table-striped ">
                    <thead>
                        <tr>
                            <th>Telefono1</th>
                            <th>Telefono2</th>
                            <th>Telefono3</th>
                            <th>Nombrefamiliar</th>
                            <th>Email</th>
                            <th>Direccion</th>
                            <th>Inscritopor</th>
                            <th>Prefesionoficio</th>
                            <th>Frentemovimiento</th>
                            <th>Notas</th>
                            <th>Activo</th>
                            <th>Dirigente</th>
                            <th>Usrinscripcion</th>
                            <th>Fechainscripcion</th>
                            <th>Usrupdate</th>
                            <th>Fechaupdate</th>

                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($padroninternosObjects as $padroninternos)
                        <tr>
                            <td>{{ $padroninternos->teleono1 }}</td>
                            <td>{{ $padroninternos->telefono2 }}</td>
                            <td>{{ $padroninternos->telefono3 }}</td>
                            <td>{{ $padroninternos->nombrefamiliar }}</td>
                            <td>{{ $padroninternos->email }}</td>
                            <td>{{ $padroninternos->direccion }}</td>
                            <td>{{ $padroninternos->inscritopor }}</td>
                            <td>{{ $padroninternos->prefesionoficio }}</td>
                            <td>{{ $padroninternos->frentemovimiento }}</td>
                            <td>{{ $padroninternos->notas }}</td>
                            <td>{{ $padroninternos->activo }}</td>
                            <td>{{ $padroninternos->dirigente }}</td>
                            <td>{{ $padroninternos->usrinscripcion }}</td>
                            <td>{{ $padroninternos->fechainscripcion }}</td>
                            <td>{{ $padroninternos->usrupdate }}</td>
                            <td>{{ $padroninternos->fechaupdate }}</td>

                            <td>

                                <form method="POST" action="{!! route('padroninternos.padroninternos.destroy', $padroninternos->cedula) !!}" accept-charset="UTF-8">
                                <input name="_method" value="DELETE" type="hidden">
                                {{ csrf_field() }}

                                    <div class="btn-group btn-group-xs pull-right" role="group">
                                        <a href="{{ route('padroninternos.padroninternos.show', $padroninternos->cedula ) }}" class="btn btn-info" title="Show Padroninternos">
                                            <span class="glyphicon glyphicon-open" aria-hidden="true"></span>
                                        </a>
                                        <a href="{{ route('padroninternos.padroninternos.edit', $padroninternos->cedula ) }}" class="btn btn-primary" title="Edit Padroninternos">
                                            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                        </a>

                                        <button type="submit" class="btn btn-danger" title="Delete Padroninternos" onclick="return confirm(&quot;Delete Padroninternos?&quot;)">
                                            <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                                        </button>
                                    </div>

                                </form>
                                
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

            </div>
        </div>

        <div class="panel-footer">
            {!! $padroninternosObjects->render() !!}
        </div>
        
        @endif
    
    </div>
@endsection