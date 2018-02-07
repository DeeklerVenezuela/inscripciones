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
                <h4 class="mt-5 mb-5">Frente Movimientos</h4>
            </div>

            <div class="btn-group btn-group-sm pull-right" role="group">
                <a href="{{ route('frente_movimientos.frente_movimientos.create') }}" class="btn btn-success" title="Create New Frente Movimientos">
                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                </a>
            </div>

        </div>
        
        @if(count($frenteMovimientosObjects) == 0)
            <div class="panel-body text-center">
                <h4>No Frente Movimientos Available!</h4>
            </div>
        @else
        <div class="panel-body panel-body-with-table">
            <div class="table-responsive">

                <table class="table table-striped ">
                    <thead>
                        <tr>
                            <th>A R E A  T R A B A J O  P Q D C</th>

                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($frenteMovimientosObjects as $frenteMovimientos)
                        <tr>
                            <td>{{ $frenteMovimientos->AREA_TRABAJO_PQDC }}</td>

                            <td>

                                <form method="POST" action="{!! route('frente_movimientos.frente_movimientos.destroy', $frenteMovimientos->ID) !!}" accept-charset="UTF-8">
                                <input name="_method" value="DELETE" type="hidden">
                                {{ csrf_field() }}

                                    <div class="btn-group btn-group-xs pull-right" role="group">
                                        <a href="{{ route('frente_movimientos.frente_movimientos.show', $frenteMovimientos->ID ) }}" class="btn btn-info" title="Show Frente Movimientos">
                                            <span class="glyphicon glyphicon-open" aria-hidden="true"></span>
                                        </a>
                                        <a href="{{ route('frente_movimientos.frente_movimientos.edit', $frenteMovimientos->ID ) }}" class="btn btn-primary" title="Edit Frente Movimientos">
                                            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                        </a>

                                        <button type="submit" class="btn btn-danger" title="Delete Frente Movimientos" onclick="return confirm(&quot;Delete Frente Movimientos?&quot;)">
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
            {!! $frenteMovimientosObjects->render() !!}
        </div>
        
        @endif
    
    </div>
@endsection