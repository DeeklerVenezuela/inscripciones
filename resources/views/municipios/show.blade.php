@extends('layouts.app')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading clearfix">

        <span class="pull-left">
            <h4 class="mt-5 mb-5">{{ isset($title) ? $title : 'Municipios' }}</h4>
        </span>

        <div class="pull-right">

            <form method="POST" action="{!! route('municipios.municipios.destroy', $municipios->ID) !!}" accept-charset="UTF-8">
            <input name="_method" value="DELETE" type="hidden">
            {{ csrf_field() }}
                <div class="btn-group btn-group-sm" role="group">
                    <a href="{{ route('municipios.municipios.index') }}" class="btn btn-primary" title="Show All Municipios">
                        <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
                    </a>

                    <a href="{{ route('municipios.municipios.create') }}" class="btn btn-success" title="Create New Municipios">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                    </a>
                    
                    <a href="{{ route('municipios.municipios.edit', $municipios->ID ) }}" class="btn btn-primary" title="Edit Municipios">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </a>

                    <button type="submit" class="btn btn-danger" title="Delete Municipios" onclick="return confirm(&quot;Delete Municipios??&quot;)">
                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                    </button>
                </div>
            </form>

        </div>

    </div>

    <div class="panel-body">
        <dl class="dl-horizontal">
            <dt>Descripcion</dt>
            <dd>{{ $municipios->descripcion }}</dd>
            <dt>I D Provincia</dt>
            <dd>{{ $municipios->IDProvincia }}</dd>

        </dl>

    </div>
</div>

@endsection