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
                <h4 class="mt-5 mb-5">Colegios</h4>
            </div>

            <div class="btn-group btn-group-sm pull-right" role="group">
                <a href="{{ route('colegios.colegio.create') }}" class="btn btn-success" title="Create New Colegio">
                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                </a>
            </div>

        </div>
        
        @if(count($colegios) == 0)
            <div class="panel-body text-center">
                <h4>No Colegios Available!</h4>
            </div>
        @else
        <div class="panel-body panel-body-with-table">
            <div class="table-responsive">

                <table class="table table-striped ">
                    <thead>
                        <tr>
                            <th>Codigo Colegio</th>
                            <th>I D Recinto</th>
                            <th>Cantidad Inscritos</th>

                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($colegios as $colegio)
                        <tr>
                            <td>{{ $colegio->CodigoColegio }}</td>
                            <td>{{ $colegio->IDRecinto }}</td>
                            <td>{{ $colegio->CantidadInscritos }}</td>

                            <td>

                                <form method="POST" action="{!! route('colegios.colegio.destroy', $colegio->ID) !!}" accept-charset="UTF-8">
                                <input name="_method" value="DELETE" type="hidden">
                                {{ csrf_field() }}

                                    <div class="btn-group btn-group-xs pull-right" role="group">
                                        <a href="{{ route('colegios.colegio.show', $colegio->ID ) }}" class="btn btn-info" title="Show Colegio">
                                            <span class="glyphicon glyphicon-open" aria-hidden="true"></span>
                                        </a>
                                        <a href="{{ route('colegios.colegio.edit', $colegio->ID ) }}" class="btn btn-primary" title="Edit Colegio">
                                            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                        </a>

                                        <button type="submit" class="btn btn-danger" title="Delete Colegio" onclick="return confirm(&quot;Delete Colegio?&quot;)">
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
            {!! $colegios->render() !!}
        </div>
        
        @endif
    
    </div>
@endsection