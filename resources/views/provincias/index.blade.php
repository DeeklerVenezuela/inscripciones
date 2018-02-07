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
                <h4 class="mt-5 mb-5">Provincias</h4>
            </div>

            <div class="btn-group btn-group-sm pull-right" role="group">
                <a href="{{ route('provincias.provincia.create') }}" class="btn btn-success" title="Create New Provincia">
                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                </a>
            </div>

        </div>
        
        @if(count($provincias) == 0)
            <div class="panel-body text-center">
                <h4>No Provincias Available!</h4>
            </div>
        @else
        <div class="panel-body panel-body-with-table">
            <div class="table-responsive">

                <table class="table table-striped ">
                    <thead>
                        <tr>
                            <th>Descripcion</th>

                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($provincias as $provincia)
                        <tr>
                            <td>{{ $provincia->Descripcion }}</td>

                            <td>

                                <form method="POST" action="{!! route('provincias.provincia.destroy', $provincia->ID) !!}" accept-charset="UTF-8">
                                <input name="_method" value="DELETE" type="hidden">
                                {{ csrf_field() }}

                                    <div class="btn-group btn-group-xs pull-right" role="group">
                                        <a href="{{ route('provincias.provincia.show', $provincia->ID ) }}" class="btn btn-info" title="Show Provincia">
                                            <span class="glyphicon glyphicon-open" aria-hidden="true"></span>
                                        </a>
                                        <a href="{{ route('provincias.provincia.edit', $provincia->ID ) }}" class="btn btn-primary" title="Edit Provincia">
                                            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                        </a>

                                        <button type="submit" class="btn btn-danger" title="Delete Provincia" onclick="return confirm(&quot;Delete Provincia?&quot;)">
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
            {!! $provincias->render() !!}
        </div>
        
        @endif
    
    </div>
@endsection