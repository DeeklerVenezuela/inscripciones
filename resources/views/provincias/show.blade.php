@extends('layouts.app')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading clearfix">

        <span class="pull-left">
            <h4 class="mt-5 mb-5">{{ isset($title) ? $title : 'Provincia' }}</h4>
        </span>

        <div class="pull-right">

            <form method="POST" action="{!! route('provincias.provincia.destroy', $provincia->ID) !!}" accept-charset="UTF-8">
            <input name="_method" value="DELETE" type="hidden">
            {{ csrf_field() }}
                <div class="btn-group btn-group-sm" role="group">
                    <a href="{{ route('provincias.provincia.index') }}" class="btn btn-primary" title="Show All Provincia">
                        <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
                    </a>

                    <a href="{{ route('provincias.provincia.create') }}" class="btn btn-success" title="Create New Provincia">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                    </a>
                    
                    <a href="{{ route('provincias.provincia.edit', $provincia->ID ) }}" class="btn btn-primary" title="Edit Provincia">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </a>

                    <button type="submit" class="btn btn-danger" title="Delete Provincia" onclick="return confirm(&quot;Delete Provincia??&quot;)">
                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                    </button>
                </div>
            </form>

        </div>

    </div>

    <div class="panel-body">
        <dl class="dl-horizontal">
            <dt>Descripcion</dt>
            <dd>{{ $provincia->Descripcion }}</dd>

        </dl>

    </div>
</div>

@endsection