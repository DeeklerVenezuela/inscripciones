
<div class="form-group {{ $errors->has('AREA_TRABAJO_PQDC') ? 'has-error' : '' }}">
    <label for="AREA_TRABAJO_PQDC" class="col-md-2 control-label">A R E A  T R A B A J O  P Q D C</label>
    <div class="col-md-10">
        <input class="form-control" name="AREA_TRABAJO_PQDC" type="text" id="AREA_TRABAJO_PQDC" value="{{ old('AREA_TRABAJO_PQDC', optional($frenteMovimientos)->AREA_TRABAJO_PQDC) }}" maxlength="46" placeholder="Enter a r e a  t r a b a j o  p q d c here...">
        {!! $errors->first('AREA_TRABAJO_PQDC', '<p class="help-block">:message</p>') !!}
    </div>
</div>

