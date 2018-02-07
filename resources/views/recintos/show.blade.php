@extends('layouts.app')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading clearfix">

        <span class="pull-left">
            <h4 class="mt-5 mb-5">{{ isset($title) ? $title : 'Recintos' }}</h4>
        </span>

        <div class="pull-right">

            <form method="POST" action="{!! route('recintos.recintos.destroy', $recintos->COD_RECINTO) !!}" accept-charset="UTF-8">
            <input name="_method" value="DELETE" type="hidden">
            {{ csrf_field() }}
                <div class="btn-group btn-group-sm" role="group">
                    <a href="{{ route('recintos.recintos.index') }}" class="btn btn-primary" title="Show All Recintos">
                        <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
                    </a>

                    <a href="{{ route('recintos.recintos.create') }}" class="btn btn-success" title="Create New Recintos">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                    </a>
                    
                    <a href="{{ route('recintos.recintos.edit', $recintos->COD_RECINTO ) }}" class="btn btn-primary" title="Edit Recintos">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </a>

                    <button type="submit" class="btn btn-danger" title="Delete Recintos" onclick="return confirm(&quot;Delete Recintos??&quot;)">
                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                    </button>
                </div>
            </form>

        </div>

    </div>

    <div class="panel-body">
        <dl class="dl-horizontal">
            <dt>D E S C R I P C I O N</dt>
            <dd>{{ $recintos->DESCRIPCION }}</dd>
            <dt>D I R E C C I O N</dt>
            <dd>{{ $recintos->DIRECCION }}</dd>
            <dt>C O D  M U N I C I P I O</dt>
            <dd>{{ $recintos->COD_MUNICIPIO }}</dd>
            <dt>C O D  C I U D A D</dt>
            <dd>{{ $recintos->COD_CIUDAD }}</dd>
            <dt>C O D  S E C T O R</dt>
            <dd>{{ $recintos->COD_SECTOR }}</dd>
            <dt>C O D  C I R C U N S C R I P C I O N</dt>
            <dd>{{ $recintos->COD_CIRCUNSCRIPCION }}</dd>

        </dl>

    </div>
</div>

@endsection