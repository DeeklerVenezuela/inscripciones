
<div class="form-group {{ $errors->has('nombre') ? 'has-error' : '' }}">
    <label for="nombre" class="col-md-2 control-label">Nombre</label>
    <div class="col-md-10">
        <input class="form-control" name="nombre" type="text" id="nombre" value="{{ old('nombre', optional($padrones)->nombre) }}" minlength="1" maxlength="60" required="true" placeholder="Enter nombre here...">
        {!! $errors->first('nombre', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('apellido1') ? 'has-error' : '' }}">
    <label for="apellido1" class="col-md-2 control-label">Apellido1</label>
    <div class="col-md-10">
        <input class="form-control" name="apellido1" type="text" id="apellido1" value="{{ old('apellido1', optional($padrones)->apellido1) }}" minlength="1" maxlength="60" required="true" placeholder="Enter apellido1 here...">
        {!! $errors->first('apellido1', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('apellido2') ? 'has-error' : '' }}">
    <label for="apellido2" class="col-md-2 control-label">Apellido2</label>
    <div class="col-md-10">
        <input class="form-control" name="apellido2" type="text" id="apellido2" value="{{ old('apellido2', optional($padrones)->apellido2) }}" maxlength="45" placeholder="Enter apellido2 here...">
        {!! $errors->first('apellido2', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('fechanac') ? 'has-error' : '' }}">
    <label for="fechanac" class="col-md-2 control-label">Fechanac</label>
    <div class="col-md-10">
        <input class="form-control" name="fechanac" type="text" id="fechanac" value="{{ old('fechanac', optional($padrones)->fechanac) }}" placeholder="Enter fechanac here...">
        {!! $errors->first('fechanac', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('sexo') ? 'has-error' : '' }}">
    <label for="sexo" class="col-md-2 control-label">Sexo</label>
    <div class="col-md-10">
        <input class="form-control" name="sexo" type="text" id="sexo" value="{{ old('sexo', optional($padrones)->sexo) }}" maxlength="1" placeholder="Enter sexo here...">
        {!! $errors->first('sexo', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('estadocivil') ? 'has-error' : '' }}">
    <label for="estadocivil" class="col-md-2 control-label">Estadocivil</label>
    <div class="col-md-10">
        <input class="form-control" name="estadocivil" type="text" id="estadocivil" value="{{ old('estadocivil', optional($padrones)->estadocivil) }}" maxlength="1" placeholder="Enter estadocivil here...">
        {!! $errors->first('estadocivil', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('codigocolegio') ? 'has-error' : '' }}">
    <label for="codigocolegio" class="col-md-2 control-label">Codigocolegio</label>
    <div class="col-md-10">
        <input class="form-control" name="codigocolegio" type="text" id="codigocolegio" value="{{ old('codigocolegio', optional($padrones)->codigocolegio) }}" maxlength="7" placeholder="Enter codigocolegio here...">
        {!! $errors->first('codigocolegio', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('codigorecinto') ? 'has-error' : '' }}">
    <label for="codigorecinto" class="col-md-2 control-label">Codigorecinto</label>
    <div class="col-md-10">
        <input class="form-control" name="codigorecinto" type="text" id="codigorecinto" value="{{ old('codigorecinto', optional($padrones)->codigorecinto) }}" maxlength="7" placeholder="Enter codigorecinto here...">
        {!! $errors->first('codigorecinto', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('recinto') ? 'has-error' : '' }}">
    <label for="recinto" class="col-md-2 control-label">Recinto</label>
    <div class="col-md-10">
        <input class="form-control" name="recinto" type="text" id="recinto" value="{{ old('recinto', optional($padrones)->recinto) }}" maxlength="150" placeholder="Enter recinto here...">
        {!! $errors->first('recinto', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('iddistritomunicipal') ? 'has-error' : '' }}">
    <label for="iddistritomunicipal" class="col-md-2 control-label">Iddistritomunicipal</label>
    <div class="col-md-10">
        <input class="form-control" name="iddistritomunicipal" type="text" id="iddistritomunicipal" value="{{ old('iddistritomunicipal', optional($padrones)->iddistritomunicipal) }}" maxlength="7" placeholder="Enter iddistritomunicipal here...">
        {!! $errors->first('iddistritomunicipal', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('distritomunicipal') ? 'has-error' : '' }}">
    <label for="distritomunicipal" class="col-md-2 control-label">Distritomunicipal</label>
    <div class="col-md-10">
        <input class="form-control" name="distritomunicipal" type="text" id="distritomunicipal" value="{{ old('distritomunicipal', optional($padrones)->distritomunicipal) }}" maxlength="100" placeholder="Enter distritomunicipal here...">
        {!! $errors->first('distritomunicipal', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('codigocircunscripcion') ? 'has-error' : '' }}">
    <label for="codigocircunscripcion" class="col-md-2 control-label">Codigocircunscripcion</label>
    <div class="col-md-10">
        <input class="form-control" name="codigocircunscripcion" type="text" id="codigocircunscripcion" value="{{ old('codigocircunscripcion', optional($padrones)->codigocircunscripcion) }}" maxlength="7" placeholder="Enter codigocircunscripcion here...">
        {!! $errors->first('codigocircunscripcion', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('idmunicipio') ? 'has-error' : '' }}">
    <label for="idmunicipio" class="col-md-2 control-label">Idmunicipio</label>
    <div class="col-md-10">
        <input class="form-control" name="idmunicipio" type="number" id="idmunicipio" value="{{ old('idmunicipio', optional($padrones)->idmunicipio) }}" min="-2147483648" max="2147483647" placeholder="Enter idmunicipio here...">
        {!! $errors->first('idmunicipio', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('municipio') ? 'has-error' : '' }}">
    <label for="municipio" class="col-md-2 control-label">Municipio</label>
    <div class="col-md-10">
        <input class="form-control" name="municipio" type="text" id="municipio" value="{{ old('municipio', optional($padrones)->municipio) }}" maxlength="100" placeholder="Enter municipio here...">
        {!! $errors->first('municipio', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('idprovincia') ? 'has-error' : '' }}">
    <label for="idprovincia" class="col-md-2 control-label">Idprovincia</label>
    <div class="col-md-10">
        <input class="form-control" name="idprovincia" type="number" id="idprovincia" value="{{ old('idprovincia', optional($padrones)->idprovincia) }}" min="-2147483648" max="2147483647" placeholder="Enter idprovincia here...">
        {!! $errors->first('idprovincia', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('provincia') ? 'has-error' : '' }}">
    <label for="provincia" class="col-md-2 control-label">Provincia</label>
    <div class="col-md-10">
        <input class="form-control" name="provincia" type="text" id="provincia" value="{{ old('provincia', optional($padrones)->provincia) }}" maxlength="100" placeholder="Enter provincia here...">
        {!! $errors->first('provincia', '<p class="help-block">:message</p>') !!}
    </div>
</div>

