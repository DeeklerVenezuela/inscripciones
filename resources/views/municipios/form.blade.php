
<div class="form-group {{ $errors->has('descripcion') ? 'has-error' : '' }}">
    <label for="descripcion" class="col-md-2 control-label">Descripcion</label>
    <div class="col-md-10">
        <input class="form-control" name="descripcion" type="text" id="descripcion" value="{{ old('descripcion', optional($municipios)->descripcion) }}" maxlength="35" placeholder="Enter descripcion here...">
        {!! $errors->first('descripcion', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('IDProvincia') ? 'has-error' : '' }}">
    <label for="IDProvincia" class="col-md-2 control-label">I D Provincia</label>
    <div class="col-md-10">
        <input class="form-control" name="IDProvincia" type="text" id="IDProvincia" value="{{ old('IDProvincia', optional($municipios)->IDProvincia) }}" maxlength="11" placeholder="Enter i d provincia here...">
        {!! $errors->first('IDProvincia', '<p class="help-block">:message</p>') !!}
    </div>
</div>

