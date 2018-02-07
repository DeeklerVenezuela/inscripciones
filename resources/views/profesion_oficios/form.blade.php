
<div class="form-group {{ $errors->has('PROFESION_OFICIO') ? 'has-error' : '' }}">
    <label for="PROFESION_OFICIO" class="col-md-2 control-label">P R O F E S I O N  O F I C I O</label>
    <div class="col-md-10">
        <input class="form-control" name="PROFESION_OFICIO" type="text" id="PROFESION_OFICIO" value="{{ old('PROFESION_OFICIO', optional($profesionOficios)->PROFESION_OFICIO) }}" maxlength="28" placeholder="Enter p r o f e s i o n  o f i c i o here...">
        {!! $errors->first('PROFESION_OFICIO', '<p class="help-block">:message</p>') !!}
    </div>
</div>

