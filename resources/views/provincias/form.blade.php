
<div class="form-group {{ $errors->has('Descripcion') ? 'has-error' : '' }}">
    <label for="Descripcion" class="col-md-2 control-label">Descripcion</label>
    <div class="col-md-10">
        <input class="form-control" name="Descripcion" type="text" id="Descripcion" value="{{ old('Descripcion', optional($provincia)->Descripcion) }}" maxlength="22" placeholder="Enter descripcion here...">
        {!! $errors->first('Descripcion', '<p class="help-block">:message</p>') !!}
    </div>
</div>

