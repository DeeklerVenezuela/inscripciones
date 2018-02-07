
<div class="form-group {{ $errors->has('DESCRIPCION') ? 'has-error' : '' }}">
    <label for="DESCRIPCION" class="col-md-2 control-label">D E S C R I P C I O N</label>
    <div class="col-md-10">
        <input class="form-control" name="DESCRIPCION" type="text" id="DESCRIPCION" value="{{ old('DESCRIPCION', optional($distritosms)->DESCRIPCION) }}" maxlength="35" placeholder="Enter d e s c r i p c i o n here...">
        {!! $errors->first('DESCRIPCION', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('IDMunicipioPadre') ? 'has-error' : '' }}">
    <label for="IDMunicipioPadre" class="col-md-2 control-label">I D Municipio Padre</label>
    <div class="col-md-10">
        <input class="form-control" name="IDMunicipioPadre" type="text" id="IDMunicipioPadre" value="{{ old('IDMunicipioPadre', optional($distritosms)->IDMunicipioPadre) }}" maxlength="16" placeholder="Enter i d municipio padre here...">
        {!! $errors->first('IDMunicipioPadre', '<p class="help-block">:message</p>') !!}
    </div>
</div>

