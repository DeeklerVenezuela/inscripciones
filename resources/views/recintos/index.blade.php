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
                <h4 class="mt-5 mb-5">Recintos</h4>
            </div>

            <div class="btn-group btn-group-sm pull-right" role="group">
                <a href="{{ route('recintos.recintos.create') }}" class="btn btn-success" title="Create New Recintos">
                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                </a>
            </div>

        </div>
        
        @if(count($recintosObjects) == 0)
            <div class="panel-body text-center">
                <h4>No Recintos Available!</h4>
            </div>
        @else
        <div class="panel-body panel-body-with-table">
            <div class="table-responsive">

                <table class="table table-striped ">
                    <thead>
                        <tr>
                            <th>D E S C R I P C I O N</th>
                            <th>D I R E C C I O N</th>
                            <th>C O D  M U N I C I P I O</th>
                            <th>C O D  C I U D A D</th>
                            <th>C O D  S E C T O R</th>
                            <th>C O D  C I R C U N S C R I P C I O N</th>

                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($recintosObjects as $recintos)
                        <tr>
                            <td>{{ $recintos->DESCRIPCION }}</td>
                            <td>{{ $recintos->DIRECCION }}</td>
                            <td>{{ $recintos->COD_MUNICIPIO }}</td>
                            <td>{{ $recintos->COD_CIUDAD }}</td>
                            <td>{{ $recintos->COD_SECTOR }}</td>
                            <td>{{ $recintos->COD_CIRCUNSCRIPCION }}</td>

                            <td>

                                <form method="POST" action="{!! route('recintos.recintos.destroy', $recintos->COD_RECINTO) !!}" accept-charset="UTF-8">
                                <input name="_method" value="DELETE" type="hidden">
                                {{ csrf_field() }}

                                    <div class="btn-group btn-group-xs pull-right" role="group">
                                        <a href="{{ route('recintos.recintos.show', $recintos->COD_RECINTO ) }}" class="btn btn-info" title="Show Recintos">
                                            <span class="glyphicon glyphicon-open" aria-hidden="true"></span>
                                        </a>
                                        <a href="{{ route('recintos.recintos.edit', $recintos->COD_RECINTO ) }}" class="btn btn-primary" title="Edit Recintos">
                                            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                        </a>

                                        <button type="submit" class="btn btn-danger" title="Delete Recintos" onclick="return confirm(&quot;Delete Recintos?&quot;)">
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
            {!! $recintosObjects->render() !!}
        </div>
        
        @endif
    
    </div>
@endsection