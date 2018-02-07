
<div class="form-group {{ $errors->has('CodigoColegio') ? 'has-error' : '' }}">
    <label for="CodigoColegio" class="col-md-2 control-label">Codigo Colegio</label>
    <div class="col-md-10">
        <input class="form-control" name="CodigoColegio" type="text" id="CodigoColegio" value="{{ old('CodigoColegio', optional($colegio)->CodigoColegio) }}" maxlength="13" placeholder="Enter codigo colegio here...">
        {!! $errors->first('CodigoColegio', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('IDRecinto') ? 'has-error' : '' }}">
    <label for="IDRecinto" class="col-md-2 control-label">I D Recinto</label>
    <div class="col-md-10">
        <input class="form-control" name="IDRecinto" type="text" id="IDRecinto" value="{{ old('IDRecinto', optional($colegio)->IDRecinto) }}" maxlength="9" placeholder="Enter i d recinto here...">
        {!! $errors->first('IDRecinto', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('CantidadInscritos') ? 'has-error' : '' }}">
    <label for="CantidadInscritos" class="col-md-2 control-label">Cantidad Inscritos</label>
    <div class="col-md-10">
        <input class="form-control" name="CantidadInscritos" type="text" id="CantidadInscritos" value="{{ old('CantidadInscritos', optional($colegio)->CantidadInscritos) }}" maxlength="17" placeholder="Enter cantidad inscritos here...">
        {!! $errors->first('CantidadInscritos', '<p class="help-block">:message</p>') !!}
    </div>
</div>

