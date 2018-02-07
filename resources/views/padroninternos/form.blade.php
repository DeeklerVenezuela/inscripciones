<div class="form-group {{ $errors->has('cedula') ? 'has-error' : '' }} col-md-6">
    <label for="cedula" class="col-md-2 control-label">Cédula:</label>
    <div class="col-md-12">
    <div class="input-group">
    @if ($edit)
            <input class="form-control" name="cedula" readonly type="text" id="cedula" value="{{ old('cedula', optional($padroninternos)->cedula) }}" min="-2147483648" max="2147483647" placeholder="Enter teleono1 here...">
        @else
            <input class="form-control" name="cedula" type="text" id="cedula" value="{{ old('cedula', optional($padroninternos)->cedula) }}" min="-2147483648" max="2147483647" placeholder="Enter teleono1 here...">
            <span class="input-group-addon" id="find"><i class="glyphicon glyphicon-search"></i></span>       
        @endif
        {!! $errors->first('cedula', '<p class="help-block">:message</p>') !!}
    </div>
       
    </div>
</div>

<div class="form-group {{ $errors->has('teleono1') ? 'has-error' : '' }} col-md-6">
    <label for="teleono1" class="col-md-4 control-label">Teléfono 1</label>
    <div class="col-md-12">
        <input class="form-control" name="teleono1" type="number" id="telefono1" value="{{ old('teleono1', optional($padroninternos)->teleono1) }}" min="-2147483648" max="2147483647" placeholder="Enter teleono1 here...">
        {!! $errors->first('teleono1', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('telefono2') ? 'has-error' : '' }} col-md-6">
    <label for="telefono2" class="col-md-4 control-label">Teléfono 2</label>
    <div class="col-md-12">
        <input class="form-control" name="telefono2" type="number" id="telefono2" value="{{ old('telefono2', optional($padroninternos)->telefono2) }}" min="-2147483648" max="2147483647" placeholder="Enter telefono2 here...">
        {!! $errors->first('telefono2', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('telefono3') ? 'has-error' : '' }} col-md-6">
    <label for="telefono3" class="col-md-4 control-label">Teléfono 3</label>
    <div class="col-md-12">
        <input class="form-control" name="telefono3" type="number" id="telefono3" value="{{ old('telefono3', optional($padroninternos)->telefono3) }}" min="-2147483648" max="2147483647" placeholder="Enter telefono3 here...">
        {!! $errors->first('telefono3', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('nombrefamiliar') ? 'has-error' : ''}} col-md-6">
    <label for="nombrefamiliar" class="col-md-6 control-label">Nombre Familiar</label>
    <div class="col-md-12">
        <input class="form-control" name="nombrefamiliar" type="text" id="nombrefamiliar" value="{{ old('nombrefamiliar', optional($padroninternos)->nombrefamiliar) }}" minlength="1" maxlength="100" required="true" placeholder="Enter nombrefamiliar here...">
        {!! $errors->first('nombrefamiliar', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('email') ? 'has-error' : '' }} col-md-6">
    <label for="email" class="col-md-2 control-label">Email</label>
    <div class="col-md-12">
        <input class="form-control" name="email" type="text" id="email" value="{{ old('email', optional($padroninternos)->email) }}" maxlength="60" placeholder="Enter email here...">
        {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('direccion') ? 'has-error' : '' }} col-md-6"> 
    <label for="direccion" class="col-md-3 control-label">Dirección</label>
    <div class="col-md-12">
        <input class="form-control" name="direccion" type="text" id="direccion" value="{{ old('direccion', optional($padroninternos)->direccion) }}" maxlength="200" placeholder="Enter direccion here...">
        {!! $errors->first('direccion', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('inscritopor') ? 'has-error' : '' }} col-md-6">
    <label for="inscritopor" class="col-md-4 control-label">Inscrito por</label>
    <div class="col-md-12">
        <input class="form-control" name="inscritopor" type="text" id="inscritopor" value="{{ old('inscritopor', optional($padroninternos)->inscritopor) }}" maxlength="60" placeholder="Enter inscritopor here...">
        {!! $errors->first('inscritopor', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('prefesionoficio') ? 'has-error' : ' ' }} col-md-6">
    <label for="profesionoficio" class="col-md-3 control-label">Profesión/Oficio</label>
    <div class="col-md-12">
        <input class="form-control" name="profesionoficio" type="text" id="profesionoficio" value="{{ old('prefesionoficio', optional($padroninternos)->prefesionoficio) }}" maxlength="20" placeholder="Enter prefesionoficio here...">
        {!! $errors->first('prefesionoficio', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('frentemovimiento') ? 'has-error' : '' }} col-md-6">
    <label for="frentemovimiento" class="col-md-6 control-label">Frente Movimiento</label>
    <div class="col-md-12">
        <input class="form-control" name="frentemovimiento" type="text" id="frentemovimiento" value="{{ old('frentemovimiento', optional($padroninternos)->frentemovimiento) }}" maxlength="10" placeholder="Enter frentemovimiento here...">
        {!! $errors->first('frentemovimiento', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('notas') ? 'has-error' : '' }} col-md-6">
    <label for="notas" class="col-md-2 control-label">Notas</label>
    <div class="col-md-12">
        <input class="form-control" name="notas" type="text" id="notas" value="{{ old('notas', optional($padroninternos)->notas) }}" maxlength="200" placeholder="Enter notas here...">
        {!! $errors->first('notas', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('activo') ? 'has-error' : '' }} col-md-6">
    <label for="activo" class="col-md-3 control-label">Activo</label>
    <div class="col-md-12">
        <input class="form-control" name="activo" type="text" id="activo" value="{{ old('activo', optional($padroninternos)->activo) }}" maxlength="2" placeholder="Enter activo here...">
        {!! $errors->first('activo', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('dirigente') ? 'has-error' : '' }} col-md-6"> 
    <label for="dirigente" class="col-md-3 control-label">Dirigente</label>
    <div class="col-md-12">
        <input class="form-control" name="dirigente" type="text" id="dirigente" value="{{ old('dirigente', optional($padroninternos)->dirigente) }}" maxlength="2" placeholder="Enter dirigente here...">
        {!! $errors->first('dirigente', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('usrinscripcion') ? 'has-error' : '' }}  col-md-6">
    <label for="usrinscripcion" class="col-md-7 control-label">Usuario de Inscripción</label>
    <div class="col-md-12">
        <input class="form-control" name="usrinscripcion" type="text" id="usrinscripcion" value="{{ old('usrinscripcion', optional($padroninternos)->usrinscripcion) }}" maxlength="60" placeholder="Enter usrinscripcion here...">
        {!! $errors->first('usrinscripcion', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('fechainscripcion') ? 'has-error' : '' }} col-md-6">
    <label for="fechainscripcion" class="text-left col-md-12 control-label">Fecha de Inscripción</label>
    <div class="col-md-12">
        <div class="input-group col-md-12">
            <input class="form-control datepicker" data-date-format="yyyy-mm-dd" name="fechainscripcion" type="text" id="fechainscripcion" value="{{ old('fechainscripcion', optional($padroninternos)->fechainscripcion) }}" placeholder="Enter fechainscripcion here...">
            {!! $errors->first('fechainscripcion', '<p class="help-block">:message</p>') !!}
        </div>        
    </div>
</div>

<div class="form-group {{ $errors->has('usrupdate') ? 'has-error' : '' }} col-md-6"> 
    <label for="usrupdate" class="col-md-8 control-label">Usuario de Actualización</label>
    <div class="col-md-12">
        <input class="form-control" name="usrupdate" type="text" id="usrupdate" value="{{ old('usrupdate', optional($padroninternos)->usrupdate) }}" maxlength="60" placeholder="Enter usrupdate here...">
        {!! $errors->first('usrupdate', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('fechaupdate') ? 'has-error' : '' }} col-md-6">
    <label for="fechaupdate" class="col-md-7 control-label">Fecha de Actualización</label>
    <div class="col-md-12">
        <div class="input-group date col-md-12">
            <input class="form-control datepicker" data-date-format="yyyy-mm-dd" name="fechaupdate" type="text" id="fechaupdate" value="{{ old('fechaupdate', optional($padroninternos)->fechaupdate) }}" placeholder="Enter fechaupdate here...">
            {!! $errors->first('fechaupdate', '<p class="help-block">:message</p>') !!}
        </div>
    </div>
</div>


</script>