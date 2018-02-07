@extends('layouts.app')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading clearfix">

        <span class="pull-left">
            <h4 class="mt-5 mb-5">{{ isset($title) ? $title : 'Profesion Oficios' }}</h4>
        </span>

        <div class="pull-right">

            <form method="POST" action="{!! route('profesion_oficios.profesion_oficios.destroy', $profesionOficios->ID) !!}" accept-charset="UTF-8">
            <input name="_method" value="DELETE" type="hidden">
            {{ csrf_field() }}
                <div class="btn-group btn-group-sm" role="group">
                    <a href="{{ route('profesion_oficios.profesion_oficios.index') }}" class="btn btn-primary" title="Show All Profesion Oficios">
                        <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
                    </a>

                    <a href="{{ route('profesion_oficios.profesion_oficios.create') }}" class="btn btn-success" title="Create New Profesion Oficios">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                    </a>
                    
                    <a href="{{ route('profesion_oficios.profesion_oficios.edit', $profesionOficios->ID ) }}" class="btn btn-primary" title="Edit Profesion Oficios">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </a>

                    <button type="submit" class="btn btn-danger" title="Delete Profesion Oficios" onclick="return confirm(&quot;Delete Profesion Oficios??&quot;)">
                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                    </button>
                </div>
            </form>

        </div>

    </div>

    <div class="panel-body">
        <dl class="dl-horizontal">
            <dt>P R O F E S I O N  O F I C I O</dt>
            <dd>{{ $profesionOficios->PROFESION_OFICIO }}</dd>

        </dl>

    </div>
</div>

@endsection