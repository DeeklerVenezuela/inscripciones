@extends('layouts.app')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading clearfix">

        <span class="pull-left">
            <h4 class="mt-5 mb-5">{{ isset($title) ? $title : 'Colegio' }}</h4>
        </span>

        <div class="pull-right">

            <form method="POST" action="{!! route('colegios.colegio.destroy', $colegio->ID) !!}" accept-charset="UTF-8">
            <input name="_method" value="DELETE" type="hidden">
            {{ csrf_field() }}
                <div class="btn-group btn-group-sm" role="group">
                    <a href="{{ route('colegios.colegio.index') }}" class="btn btn-primary" title="Show All Colegio">
                        <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
                    </a>

                    <a href="{{ route('colegios.colegio.create') }}" class="btn btn-success" title="Create New Colegio">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                    </a>
                    
                    <a href="{{ route('colegios.colegio.edit', $colegio->ID ) }}" class="btn btn-primary" title="Edit Colegio">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </a>

                    <button type="submit" class="btn btn-danger" title="Delete Colegio" onclick="return confirm(&quot;Delete Colegio??&quot;)">
                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                    </button>
                </div>
            </form>

        </div>

    </div>

    <div class="panel-body">
        <dl class="dl-horizontal">
            <dt>Codigo Colegio</dt>
            <dd>{{ $colegio->CodigoColegio }}</dd>
            <dt>I D Recinto</dt>
            <dd>{{ $colegio->IDRecinto }}</dd>
            <dt>Cantidad Inscritos</dt>
            <dd>{{ $colegio->CantidadInscritos }}</dd>

        </dl>

    </div>
</div>

@endsection