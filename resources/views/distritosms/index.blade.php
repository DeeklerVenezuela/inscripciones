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
                <h4 class="mt-5 mb-5">Distritosms</h4>
            </div>

            <div class="btn-group btn-group-sm pull-right" role="group">
                <a href="{{ route('distritosms.distritosms.create') }}" class="btn btn-success" title="Create New Distritosms">
                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                </a>
            </div>

        </div>
        
        @if(count($distritosmsObjects) == 0)
            <div class="panel-body text-center">
                <h4>No Distritosms Available!</h4>
            </div>
        @else
        <div class="panel-body panel-body-with-table">
            <div class="table-responsive">

                <table class="table table-striped ">
                    <thead>
                        <tr>
                            <th>D E S C R I P C I O N</th>
                            <th>I D Municipio Padre</th>

                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($distritosmsObjects as $distritosms)
                        <tr>
                            <td>{{ $distritosms->DESCRIPCION }}</td>
                            <td>{{ $distritosms->IDMunicipioPadre }}</td>

                            <td>

                                <form method="POST" action="{!! route('distritosms.distritosms.destroy', $distritosms->ID) !!}" accept-charset="UTF-8">
                                <input name="_method" value="DELETE" type="hidden">
                                {{ csrf_field() }}

                                    <div class="btn-group btn-group-xs pull-right" role="group">
                                        <a href="{{ route('distritosms.distritosms.show', $distritosms->ID ) }}" class="btn btn-info" title="Show Distritosms">
                                            <span class="glyphicon glyphicon-open" aria-hidden="true"></span>
                                        </a>
                                        <a href="{{ route('distritosms.distritosms.edit', $distritosms->ID ) }}" class="btn btn-primary" title="Edit Distritosms">
                                            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                        </a>

                                        <button type="submit" class="btn btn-danger" title="Delete Distritosms" onclick="return confirm(&quot;Delete Distritosms?&quot;)">
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
            {!! $distritosmsObjects->render() !!}
        </div>
        
        @endif
    
    </div>
@endsection