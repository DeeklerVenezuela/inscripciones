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
                <h4 class="mt-5 mb-5">Municipios</h4>
            </div>

            <div class="btn-group btn-group-sm pull-right" role="group">
                <a href="{{ route('municipios.municipios.create') }}" class="btn btn-success" title="Create New Municipios">
                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                </a>
            </div>

        </div>
        
        @if(count($municipiosObjects) == 0)
            <div class="panel-body text-center">
                <h4>No Municipios Available!</h4>
            </div>
        @else
        <div class="panel-body panel-body-with-table">
            <div class="table-responsive">

                <table class="table table-striped ">
                    <thead>
                        <tr>
                            <th>Descripcion</th>
                            <th>I D Provincia</th>

                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($municipiosObjects as $municipios)
                        <tr>
                            <td>{{ $municipios->descripcion }}</td>
                            <td>{{ $municipios->IDProvincia }}</td>

                            <td>

                                <form method="POST" action="{!! route('municipios.municipios.destroy', $municipios->ID) !!}" accept-charset="UTF-8">
                                <input name="_method" value="DELETE" type="hidden">
                                {{ csrf_field() }}

                                    <div class="btn-group btn-group-xs pull-right" role="group">
                                        <a href="{{ route('municipios.municipios.show', $municipios->ID ) }}" class="btn btn-info" title="Show Municipios">
                                            <span class="glyphicon glyphicon-open" aria-hidden="true"></span>
                                        </a>
                                        <a href="{{ route('municipios.municipios.edit', $municipios->ID ) }}" class="btn btn-primary" title="Edit Municipios">
                                            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                        </a>

                                        <button type="submit" class="btn btn-danger" title="Delete Municipios" onclick="return confirm(&quot;Delete Municipios?&quot;)">
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
            {!! $municipiosObjects->render() !!}
        </div>
        
        @endif
    
    </div>
@endsection