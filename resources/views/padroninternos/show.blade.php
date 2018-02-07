@extends('layouts.app')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading clearfix">

        <span class="pull-left">
            <h4 class="mt-5 mb-5">{{ isset($title) ? $title : 'Padroninternos' }}</h4>
        </span>

        <div class="pull-right">

            <form method="POST" action="{!! route('padroninternos.padroninternos.destroy', $padroninternos->cedula) !!}" accept-charset="UTF-8">
            <input name="_method" value="DELETE" type="hidden">
            {{ csrf_field() }}
                <div class="btn-group btn-group-sm" role="group">
                    <a href="{{ route('padroninternos.padroninternos.index') }}" class="btn btn-primary" title="Show All Padroninternos">
                        <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
                    </a>

                    <a href="{{ route('padroninternos.padroninternos.create') }}" class="btn btn-success" title="Create New Padroninternos">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                    </a>
                    
                    <a href="{{ route('padroninternos.padroninternos.edit', $padroninternos->cedula ) }}" class="btn btn-primary" title="Edit Padroninternos">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </a>

                    <button type="submit" class="btn btn-danger" title="Delete Padroninternos" onclick="return confirm(&quot;Delete Padroninternos??&quot;)">
                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                    </button>
                </div>
            </form>

        </div>

    </div>

    <div class="panel-body">
        <dl class="dl-horizontal">
            <dt>Teleono1</dt>
            <dd>{{ $padroninternos->teleono1 }}</dd>
            <dt>Telefono2</dt>
            <dd>{{ $padroninternos->telefono2 }}</dd>
            <dt>Telefono3</dt>
            <dd>{{ $padroninternos->telefono3 }}</dd>
            <dt>Nombrefamiliar</dt>
            <dd>{{ $padroninternos->nombrefamiliar }}</dd>
            <dt>Email</dt>
            <dd>{{ $padroninternos->email }}</dd>
            <dt>Direccion</dt>
            <dd>{{ $padroninternos->direccion }}</dd>
            <dt>Inscritopor</dt>
            <dd>{{ $padroninternos->inscritopor }}</dd>
            <dt>Prefesionoficio</dt>
            <dd>{{ $padroninternos->prefesionoficio }}</dd>
            <dt>Frentemovimiento</dt>
            <dd>{{ $padroninternos->frentemovimiento }}</dd>
            <dt>Notas</dt>
            <dd>{{ $padroninternos->notas }}</dd>
            <dt>Activo</dt>
            <dd>{{ $padroninternos->activo }}</dd>
            <dt>Dirigente</dt>
            <dd>{{ $padroninternos->dirigente }}</dd>
            <dt>Usrinscripcion</dt>
            <dd>{{ $padroninternos->usrinscripcion }}</dd>
            <dt>Fechainscripcion</dt>
            <dd>{{ $padroninternos->fechainscripcion }}</dd>
            <dt>Usrupdate</dt>
            <dd>{{ $padroninternos->usrupdate }}</dd>
            <dt>Fechaupdate</dt>
            <dd>{{ $padroninternos->fechaupdate }}</dd>

        </dl>

    </div>
</div>

@endsection