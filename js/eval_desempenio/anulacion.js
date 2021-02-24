function modal(id){
    $('#id').val(id);
}

function modal_ver(id){
    var id_evaluacion = id;
    var base_url = window.location.origin+'/asnc/index.php/Evaluacion_desempenio/consulta_anulacion';
    // var base_url = '/index.php/Configuracion/consulta_anulacion';
    $.ajax({
        url: base_url,
        method:'post',
        data: {id_evaluacion: id_evaluacion},
        dataType:'json',

        success: function(response){
            $('#id_ver').val(response['id_evaluacion']);
            $('#nro_oficicio_ver').val(response['nro_oficicio']);
            $('#fec_solicitud_ver').val(response['fecha_anulacion']);
            $('#nro_expediente_ver').val(response['nro_expediente']);
            $('#cedula_solc_ver').val(response['cedula_solc']);
            $('#nom_ape_solc_ver').val(response['nom_ape_solc']);
            $('#cargo_ver').val(response['cargo']);
        }
    });
}

function guardar_anulacion(){
    var id              = $("#id").val();
    var nro_oficicio    = $("#nro_oficicio").val();
    var fecha           = $("#datepicker-default").val();
    var nro_expediente  = $("#nro_expediente").val();
    var cedula_solc     = $("#cedula_solc").val();
    var nom_ape_solc    = $("#nom_ape_solc").val();
    var cargo           = $("#cargo").val();

    if (nro_oficicio == '') {
        document.getElementById("nro_oficicio").focus();
    }else if (fecha == '') {
        document.getElementById("datepicker-default").focus();
    }else if (nro_expediente == '') {
        document.getElementById("nro_expediente").focus();
    }else if (cedula_solc == '') {
        document.getElementById("cedula_solc").focus();
    }else if (nom_ape_solc == '') {
        document.getElementById("nom_ape_solc").focus();
    }else if (cargo == '') {
        document.getElementById("cargo").focus();
    }else {
        event.preventDefault();
        swal.fire({
            title: '¿Registrar?',
            text: '¿Esta seguro que desea anular la Evaluación de Desempeño?',
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            cancelButtonText: 'Cancelar',
            confirmButtonText: '¡Si, guardar!'
        }).then((result) => {
            if (result.value == true) {

                event.preventDefault();
                var datos = new FormData($("#resgistrar_anulacion")[0]);
                var base_url =window.location.origin+'/asnc/index.php/evaluacion_desempenio/resgistrar_anulacion';
                // var base_url = '/index.php/evaluacion_desempenio/registrar';
                $.ajax({
                    url:base_url,
                    method: 'POST',
                    data: datos,
                    contentType: false,
                    processData: false,
                    success: function(response){
                        if(response != '') {
                                var menj = 'Se ha anulado la Evaluación de Desempeño Nroº: ';
                            swal.fire({
                                title: 'Registro Exitoso',
                                text: menj + response,
                                type: 'success',
                                showCancelButton: false,
                                confirmButtonColor: '#3085d6',
                                confirmButtonText: 'Ok'
                            }).then((result) => {
                                if (result.value == true){
                                    location.reload();
                                    // $('#registrar_eval').attr("disabled", true)
                                    // $('#exampleModal').modal('show');
                                    // $('#id').val(response);
                                }
                            });
                        }
                    }
                })
            }
        });
    }
}
