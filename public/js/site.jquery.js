$("document").ready(function() {

  $('.datepicker').datepicker();

  $("#find").click(function() {
    findByCedula();
  });

  function findByCedula() {
    var cedula = $("#cedula").val();

    if (cedula !== "") {
      $.ajax({
        url: cedula + "/bycedula",
        method: "GET"
      }).done(function(res) {
        if (res && res.padron && res.padron_interno) {
          //Rellenar form
          $("#nombrefamiliar").val(res.padron.nombre + " " + res.padron.apellido1);
          $("#telefono1").val(res.padron_interno.teleono1);
          $("#telefono2").val(res.padron_interno.telefono2);
          $("#telefono3").val(res.padron_interno.telefono3);
          $("#email").val(res.padron_interno.email);
          $("#direccion").val(res.padron_interno.direccion);
          $("#inscritopor").val(res.padron_interno.inscritopor);
          $("#profesionoficio").val(res.padron_interno.prefesionoficio);
          $("#frentemovimiento").val(res.padron_interno.frentemovimiento);
          $("#notas").val(res.padron_interno.notas);
          $("#activo").val(res.padron_interno.activo);
          $("#dirigente").val(res.padron_interno.dirigente);
          $("#usrinscripcion").val(res.padron_interno.usrinscripcion);
          $("#fechainscripcion").val(res.padron_interno.fechainscripcion);
          $("#usrupdate").val(res.padron_interno.usrupdate);
          $("#fechaupdate").val(res.padron_interno.fechaupdate);
        }
      });
    } else {
      alert("Debe insgresar una cedula valida");
    }
  }
});
