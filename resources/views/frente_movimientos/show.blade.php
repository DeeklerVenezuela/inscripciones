@extends('layouts.app')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading clearfix">

        <span class="pull-left">
            <h4 class="mt-5 mb-5">{{ isset($title) ? $title : 'Frente Movimientos' }}</h4>
        </span>

        <div class="pull-right">

            <form method="POST" action="{!! route('frente_movimientos.frente_movimientos.destroy', $frenteMovimientos->ID) !!}" accept-charset="UTF-8">
            <input name="_method" value="DELETE" type="hidden">
            {{ csrf_field() }}
                <div class="btn-group btn-group-sm" role="group">
                    <a href="{{ route('frente_movimientos.frente_movimientos.index') }}" class="btn btn-primary" title="Show All Frente Movimientos">
                        <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
                    </a>

                    <a href="{{ route('frente_movimientos.frente_movimientos.create') }}" class="btn btn-success" title="Create New Frente Movimientos">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                    </a>
                    
                    <a href="{{ route('frente_movimientos.frente_movimientos.edit', $frenteMovimientos->ID ) }}" class="btn btn-primary" title="Edit Frente Movimientos">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </a>

                    <button type="submit" class="btn btn-danger" title="Delete Frente Movimientos" onclick="return confirm(&quot;Delete Frente Movimientos??&quot;)">
                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                    </button>
                </div>
            </form>

        </div>

    </div>

    <div class="panel-body">
        <dl class="dl-horizontal">
            <dt>A R E A  T R A B A J O  P Q D C</dt>
            <dd>{{ $frenteMovimientos->AREA_TRABAJO_PQDC }}</dd>

        </dl>

    </div>
</div>

@endsection