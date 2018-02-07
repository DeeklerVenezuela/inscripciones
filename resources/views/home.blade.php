@extends('layouts.app')

@section('content')

<div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Esto es una INSCRIPCIÓN DIRECTA sin proceso de verificación.</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form role="form">
                <!-- text input -->
                <div class="input-group col-md-6">
                  <label>Cédula de Identidad y Electoral</label>
                  <input type="text" class="form-control" placeholder="Cédula de Identidad y Electoral">
                  <span class="input-group-addon"><i class="fa fa-search"></i></span>
                </div>
                <div class="form-group col-md-6">
                  <label>No. Colegio Electoral</label>
                  <input type="text" class="form-control" placeholder="No. Colegio Electoral">
                </div>
                <div class="form-group col-md-6">
                  <label>Nombres</label>
                  <input type="text" class="form-control" placeholder="Nombres">
                </div>
                <div class="form-group col-md-6">
                  <label>Apellidos</label>
                  <input type="text" class="form-control" placeholder="Apellidos">
                </div>
                <div class="form-group col-md-6">
                <label>Fecha de Nacimiento</label>

                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="date" class="form-control pull-right" id="datepicker">
                </div>
                <!-- /.input group -->
              </div>

              <div class="form-group col-md-6">
                  <label>Select</label>
                  <select class="form-control">
                    <option>Seleccione su Sexo</option>
                    <option>Masculino</option>
                    <option>Femenino</option>
                  </select>
                </div>
                
              </form>
      </div>
      <!-- /.tab-pane -->
    </div>
@endsection
