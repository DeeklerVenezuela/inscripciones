
<div class="form-group {{ $errors->has('DESCRIPCION') ? 'has-error' : '' }}">
    <label for="DESCRIPCION" class="col-md-2 control-label">D E S C R I P C I O N</label>
    <div class="col-md-10">
        <input class="form-control" name="DESCRIPCION" type="text" id="DESCRIPCION" value="{{ old('DESCRIPCION', optional($recintos)->DESCRIPCION) }}" maxlength="52" placeholder="Enter d e s c r i p c i o n here...">
        {!! $errors->first('DESCRIPCION', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('DIRECCION') ? 'has-error' : '' }}">
    <label for="DIRECCION" class="col-md-2 control-label">D I R E C C I O N</label>
    <div class="col-md-10">
        <input class="form-control" name="DIRECCION" type="text" id="DIRECCION" value="{{ old('DIRECCION', optional($recintos)->DIRECCION) }}" maxlength="51" placeholder="Enter d i r e c c i o n here...">
        {!! $errors->first('DIRECCION', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('COD_MUNICIPIO') ? 'has-error' : '' }}">
    <label for="COD_MUNICIPIO" class="col-md-2 control-label">C O D  M U N I C I P I O</label>
    <div class="col-md-10">
        <input class="form-control" name="COD_MUNICIPIO" type="text" id="COD_MUNICIPIO" value="{{ old('COD_MUNICIPIO', optional($recintos)->COD_MUNICIPIO) }}" maxlength="13" placeholder="Enter c o d  m u n i c i p i o here...">
        {!! $errors->first('COD_MUNICIPIO', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('COD_CIUDAD') ? 'has-error' : '' }}">
    <label for="COD_CIUDAD" class="col-md-2 control-label">C O D  C I U D A D</label>
    <div class="col-md-10">
        <input class="form-control" name="COD_CIUDAD" type="text" id="COD_CIUDAD" value="{{ old('COD_CIUDAD', optional($recintos)->COD_CIUDAD) }}" maxlength="10" placeholder="Enter c o d  c i u d a d here...">
        {!! $errors->first('COD_CIUDAD', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('COD_SECTOR') ? 'has-error' : '' }}">
    <label for="COD_SECTOR" class="col-md-2 control-label">C O D  S E C T O R</label>
    <div class="col-md-10">
        <input class="form-control" name="COD_SECTOR" type="text" id="COD_SECTOR" value="{{ old('COD_SECTOR', optional($recintos)->COD_SECTOR) }}" maxlength="10" placeholder="Enter c o d  s e c t o r here...">
        {!! $errors->first('COD_SECTOR', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('COD_CIRCUNSCRIPCION') ? 'has-error' : '' }}">
    <label for="COD_CIRCUNSCRIPCION" class="col-md-2 control-label">C O D  C I R C U N S C R I P C I O N</label>
    <div class="col-md-10">
        <input class="form-control" name="COD_CIRCUNSCRIPCION" type="text" id="COD_CIRCUNSCRIPCION" value="{{ old('COD_CIRCUNSCRIPCION', optional($recintos)->COD_CIRCUNSCRIPCION) }}" maxlength="19" placeholder="Enter c o d  c i r c u n s c r i p c i o n here...">
        {!! $errors->first('COD_CIRCUNSCRIPCION', '<p class="help-block">:message</p>') !!}
    </div>
</div>

