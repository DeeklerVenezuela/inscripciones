@extends('layouts.app')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading clearfix">

        <span class="pull-left">
            <h4 class="mt-5 mb-5">{{ isset($title) ? $title : 'Padrones' }}</h4>
        </span>

        <div class="pull-right">

            <form method="POST" action="{!! route('padrones.padrones.destroy', $padrones->cedula) !!}" accept-charset="UTF-8">
            <input name="_method" value="DELETE" type="hidden">
            {{ csrf_field() }}
                <div class="btn-group btn-group-sm" role="group">
                    <a href="{{ route('padrones.padrones.index') }}" class="btn btn-primary" title="Show All Padrones">
                        <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
                    </a>

                    <a href="{{ route('padrones.padrones.create') }}" class="btn btn-success" title="Create New Padrones">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                    </a>
                    
                    <a href="{{ route('padrones.padrones.edit', $padrones->cedula ) }}" class="btn btn-primary" title="Edit Padrones">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </a>

                    <button type="submit" class="btn btn-danger" title="Delete Padrones" onclick="return confirm(&quot;Delete Padrones??&quot;)">
                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                    </button>
                </div>
            </form>

        </div>

    </div>

    <div class="panel-body">
        <dl class="dl-horizontal">
            <dt>Nombre</dt>
            <dd>{{ $padrones->nombre }}</dd>
            <dt>Apellido1</dt>
            <dd>{{ $padrones->apellido1 }}</dd>
            <dt>Apellido2</dt>
            <dd>{{ $padrones->apellido2 }}</dd>
            <dt>Fechanac</dt>
            <dd>{{ $padrones->fechanac }}</dd>
            <dt>Sexo</dt>
            <dd>{{ $padrones->sexo }}</dd>
            <dt>Estadocivil</dt>
            <dd>{{ $padrones->estadocivil }}</dd>
            <dt>Codigocolegio</dt>
            <dd>{{ $padrones->codigocolegio }}</dd>
            <dt>Codigorecinto</dt>
            <dd>{{ $padrones->codigorecinto }}</dd>
            <dt>Recinto</dt>
            <dd>{{ $padrones->recinto }}</dd>
            <dt>Iddistritomunicipal</dt>
            <dd>{{ $padrones->iddistritomunicipal }}</dd>
            <dt>Distritomunicipal</dt>
            <dd>{{ $padrones->distritomunicipal }}</dd>
            <dt>Codigocircunscripcion</dt>
            <dd>{{ $padrones->codigocircunscripcion }}</dd>
            <dt>Idmunicipio</dt>
            <dd>{{ $padrones->idmunicipio }}</dd>
            <dt>Municipio</dt>
            <dd>{{ $padrones->municipio }}</dd>
            <dt>Idprovincia</dt>
            <dd>{{ $padrones->idprovincia }}</dd>
            <dt>Provincia</dt>
            <dd>{{ $padrones->provincia }}</dd>

        </dl>

    </div>
</div>

@endsection