@extends('layouts.app')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading clearfix">

        <span class="pull-left">
            <h4 class="mt-5 mb-5">{{ isset($title) ? $title : 'Distritosms' }}</h4>
        </span>

        <div class="pull-right">

            <form method="POST" action="{!! route('distritosms.distritosms.destroy', $distritosms->ID) !!}" accept-charset="UTF-8">
            <input name="_method" value="DELETE" type="hidden">
            {{ csrf_field() }}
                <div class="btn-group btn-group-sm" role="group">
                    <a href="{{ route('distritosms.distritosms.index') }}" class="btn btn-primary" title="Show All Distritosms">
                        <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
                    </a>

                    <a href="{{ route('distritosms.distritosms.create') }}" class="btn btn-success" title="Create New Distritosms">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                    </a>
                    
                    <a href="{{ route('distritosms.distritosms.edit', $distritosms->ID ) }}" class="btn btn-primary" title="Edit Distritosms">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </a>

                    <button type="submit" class="btn btn-danger" title="Delete Distritosms" onclick="return confirm(&quot;Delete Distritosms??&quot;)">
                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                    </button>
                </div>
            </form>

        </div>

    </div>

    <div class="panel-body">
        <dl class="dl-horizontal">
            <dt>D E S C R I P C I O N</dt>
            <dd>{{ $distritosms->DESCRIPCION }}</dd>
            <dt>I D Municipio Padre</dt>
            <dd>{{ $distritosms->IDMunicipioPadre }}</dd>

        </dl>

    </div>
</div>

@endsection