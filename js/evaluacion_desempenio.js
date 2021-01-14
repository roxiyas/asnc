function consultar_rif(){ //PARA LLENAR EN SELECT DE CCNNU DENTRO DEL MODAL
    var rif_b = $('#rif_b').val();
    if (rif_b == ''){
        swal({
            title: "¡ATENCION!",
            text: "El campo no puede estar vacio.",
            type: "warning",
            showCancelButton: false,
            confirmButtonColor: "#00897b",
            confirmButtonText: "CONTINUAR",
            closeOnConfirm: false
        }, function(){
            swal("Deleted!", "Your imaginary file has been deleted.", "success");
        });
        $('#ueba').attr("disabled", true);
    }else{
        $("#items").show();
        var base_url =window.location.origin+'/asnc/index.php/evaluacion_desempenio/llenar_contratista';
        var base_url2 =window.location.origin+'/asnc/index.php/evaluacion_desempenio/llenar_contratista_rp';

        $.ajax({
            url:base_url,
            method: 'post',
            data: {rif_b: rif_b},
            dataType: 'json',
            success: function(data){
                if (data == null) {
                    $("#no_existe").show();
                    $("#existe").hide();

                }else{
                    $("#existe").show();
                    $("#no_existe").hide();

                    $('#rif_cont').val(data['rifced']);
                    $('#nombre').val(data['nombre']);
                    $('#estado').val(data['descedo']);
                    $('#municipio').val(data['descmun']);
                    $('#ciudad').val(data['ciudade_id']);

                    var user_id = data['user_id'];
                    $.ajax({
                        url:base_url2,
                        method: 'post',
                        data: {user_id: user_id},
                        dataType: 'json',
                        success: function(data){
                            console.log(data);
                            $.each(data, function(index, response){
                               $('#tabla_rep tbody').append('<tr><td>' + response['cedrif'] + '</td><td>' + response['repr'] + '</td><td>' + response['cargo'] + '</td></tr>');
                            });
                        }

                    });
                }
            }
        })
    }

}

$("#monto").on({
    "focus": function (event) {
        $(event.target).select();
    },
    "keyup": function (event) {
        $(event.target).val(function (index, value ) {
            return value.replace(/\D/g, "")
                        .replace(/([0-9])([0-9]{2})$/, '$1,$2')
                        .replace(/\B(?=(\d{3})+(?!\d)\.?)/g, ".");
        });
    }
});

function valideKey(evt){
   var code = (evt.which) ? evt.which : evt.keyCode;
    if(code==8) { // backspace.
        return true;
    }else if(code>=48 && code<=57) { // is a number.
        return true;
    }else{ // other keys.
        return false;
    }
}

function llenar_municipio(){
    var id_estado_n = $('#id_estado_n').val();
    var base_url = window.location.origin+'/asnc/index.php/configuracion/listar_municipio';
    // var base_url = '/index.php/Programacion/listar_municipio';

    $.ajax({
        url: base_url,
        method:'post',
        data: {id_estado: id_estado_n},
        dataType:'json',

        success: function(response){
            $('#id_municipio_n').find('option').not(':first').remove();
            $.each(response, function(index, data){
                $('#id_municipio_n').append('<option value="'+data['id_municipio']+'">'+data['descripcion']+'</option>');
            });
        }
    });
}

function llenar_sub_mod(){
    var id_modalidad = $('#id_modalidad').val();
    var base_url = window.location.origin+'/asnc/index.php/evaluacion_desempenio/llenar_sub_modalidad';
    // var base_url = '/index.php/Programacion/listar_municipio';

    $.ajax({
        url: base_url,
        method:'post',
        data: {id_modalidad: id_modalidad},
        dataType:'json',

        success: function(response){
            console.log(response);
            $('#id_sub_modalidad').find('option').not(':first').remove();
            $.each(response, function(index, data){
                $('#id_sub_modalidad').append('<option value="'+data['id']+'">'+data['descripcion']+'</option>');
            });
        }
    });
}

function evaluar(){
    var bienes = document. getElementById('cssCheckbox1').checked;
    var servicios = document. getElementById('cssCheckbox2').checked;
    var obras = document. getElementById('cssCheckbox3').checked;

    if (bienes == false && servicios == false && obras == false) {
        swal({
            title: "¡ATENCION!",
            text: "Debe Seleccionar al menos un Objeto de Contratación.",
            type: "warning",
            showCancelButton: false,
            confirmButtonColor: "#00897b",
            confirmButtonText: "CONTINUAR",
            closeOnConfirm: false
        }, function(){
            swal("Deleted!", "Your imaginary file has been deleted.", "success");
        });
        $('#calidad').attr("disabled", true);
        $('#responsabilidad').attr("disabled", true);
        $('#conocimiento').attr("disabled", true);
        $('#oportunidad').attr("disabled", true);
    }else {
        $('#calidad').attr("disabled", false);
        $('#responsabilidad').attr("disabled", false);
        $('#conocimiento').attr("disabled", false);
        $('#oportunidad').attr("disabled", false);
        if(bienes && servicios){
            var rif_b = $('#rif_b').val();

            var calidad = $('#calidad').val();
            var responsabilidad = $('#responsabilidad').val();
            var conocimiento = $('#conocimiento').val();
            var oportunidad = $('#oportunidad').val();

            var calidad_p = 6
            var responsabilidad_p = 6
            var conocimiento_p = 2
            var oportunidad_p = 6

            var calidad_t = calidad * calidad_p
            var responsabilidad_t = responsabilidad * responsabilidad_p
            var conocimiento_t = conocimiento * conocimiento_p
            var oportunidad_t = oportunidad * oportunidad_p
            var total = calidad_t + responsabilidad_t + conocimiento_t + oportunidad_t

            $('#total_claf').val(total);

            if (total >= 18 && total<=20) {
                var clasificacion = 'EXCELENTE'
                $('#clasificacion').val(clasificacion);
            }

            if (total >= 15 && total<=17) {
                var clasificacion = 'MUY BUENO'
                $('#clasificacion').val(clasificacion);
            }

            if (total >= 12 && total<=14) {
                var clasificacion = 'BUENO'
                $('#clasificacion').val(clasificacion);
            }

            if (total >= 10 && total<=11) {
                var clasificacion = 'REGULAR'
                $('#clasificacion').val(clasificacion);
            }

            if (total >= 2 && total<=9) {
                var clasificacion = 'DEFICIENTE'
                $('#clasificacion').val(clasificacion);
            }

            if (total == 0) {
                var clasificacion = 'SIN CALIFICACIÓN'
                $('#clasificacion').val(clasificacion);
            }
        }

        if(bienes && obras){
            var rif_b = $('#rif_b').val();

            var calidad = $('#calidad').val();
            var responsabilidad = $('#responsabilidad').val();
            var conocimiento = $('#conocimiento').val();
            var oportunidad = $('#oportunidad').val();

            var calidad_p = 5
            var responsabilidad_p = 5
            var conocimiento_p = 5
            var oportunidad_p = 5

            var calidad_t = calidad * calidad_p
            var responsabilidad_t = responsabilidad * responsabilidad_p
            var conocimiento_t = conocimiento * conocimiento_p
            var oportunidad_t = oportunidad * oportunidad_p
            var total = calidad_t + responsabilidad_t + conocimiento_t + oportunidad_t

            $('#total_claf').val(total);

            if (total >= 18 && total<=20) {
                var clasificacion = 'EXCELENTE'
                $('#clasificacion').val(clasificacion);
            }

            if (total >= 15 && total<=17) {
                var clasificacion = 'MUY BUENO'
                $('#clasificacion').val(clasificacion);
            }

            if (total >= 12 && total<=14) {
                var clasificacion = 'BUENO'
                $('#clasificacion').val(clasificacion);
            }

            if (total >= 10 && total<=11) {
                var clasificacion = 'REGULAR'
                $('#clasificacion').val(clasificacion);
            }

            if (total >= 2 && total<=9) {
                var clasificacion = 'DEFICIENTE'
                $('#clasificacion').val(clasificacion);
            }

            if (total == 0) {
                var clasificacion = 'SIN CALIFICACIÓN'
                $('#clasificacion').val(clasificacion);
            }
        }

        if(servicios && obras){
            var rif_b = $('#rif_b').val();

            var calidad = $('#calidad').val();
            var responsabilidad = $('#responsabilidad').val();
            var conocimiento = $('#conocimiento').val();
            var oportunidad = $('#oportunidad').val();

            var calidad_p = 5
            var responsabilidad_p = 5
            var conocimiento_p = 5
            var oportunidad_p = 5

            var calidad_t = calidad * calidad_p
            var responsabilidad_t = responsabilidad * responsabilidad_p
            var conocimiento_t = conocimiento * conocimiento_p
            var oportunidad_t = oportunidad * oportunidad_p
            var total = calidad_t + responsabilidad_t + conocimiento_t + oportunidad_t

            $('#total_claf').val(total);

            if (total >= 18 && total<=20) {
                var clasificacion = 'EXCELENTE'
                $('#clasificacion').val(clasificacion);
            }

            if (total >= 15 && total<=17) {
                var clasificacion = 'MUY BUENO'
                $('#clasificacion').val(clasificacion);
            }

            if (total >= 12 && total<=14) {
                var clasificacion = 'BUENO'
                $('#clasificacion').val(clasificacion);
            }

            if (total >= 10 && total<=11) {
                var clasificacion = 'REGULAR'
                $('#clasificacion').val(clasificacion);
            }

            if (total >= 2 && total<=9) {
                var clasificacion = 'DEFICIENTE'
                $('#clasificacion').val(clasificacion);
            }

            if (total == 0) {
                var clasificacion = 'SIN CALIFICACIÓN'
                $('#clasificacion').val(clasificacion);
            }
        }

        if(bienes){
            var rif_b = $('#rif_b').val();

            var calidad = $('#calidad').val();
            var responsabilidad = $('#responsabilidad').val();
            var conocimiento = $('#conocimiento').val();
            var oportunidad = $('#oportunidad').val();

            var calidad_p = 6
            var responsabilidad_p = 6
            var conocimiento_p = 2
            var oportunidad_p = 6

            var calidad_t = calidad * calidad_p
            var responsabilidad_t = responsabilidad * responsabilidad_p
            var conocimiento_t = conocimiento * conocimiento_p
            var oportunidad_t = oportunidad * oportunidad_p
            var total = calidad_t + responsabilidad_t + conocimiento_t + oportunidad_t

            $('#total_claf').val(total);

            if (total >= 18 && total<=20) {
                var clasificacion = 'EXCELENTE'
                $('#clasificacion').val(clasificacion);
            }

            if (total >= 15 && total<=17) {
                var clasificacion = 'MUY BUENO'
                $('#clasificacion').val(clasificacion);
            }

            if (total >= 12 && total<=14) {
                var clasificacion = 'BUENO'
                $('#clasificacion').val(clasificacion);
            }

            if (total >= 10 && total<=11) {
                var clasificacion = 'REGULAR'
                $('#clasificacion').val(clasificacion);
            }

            if (total >= 2 && total<=9) {
                var clasificacion = 'DEFICIENTE'
                $('#clasificacion').val(clasificacion);
            }

            if (total == 0) {
                var clasificacion = 'SIN CALIFICACIÓN'
                $('#clasificacion').val(clasificacion);
            }
        }

        if(servicios){
            var rif_b = $('#rif_b').val();

            var calidad = $('#calidad').val();
            var responsabilidad = $('#responsabilidad').val();
            var conocimiento = $('#conocimiento').val();
            var oportunidad = $('#oportunidad').val();

            var calidad_p = 5
            var responsabilidad_p = 6
            var conocimiento_p = 5
            var oportunidad_p = 4

            var calidad_t = calidad * calidad_p
            var responsabilidad_t = responsabilidad * responsabilidad_p
            var conocimiento_t = conocimiento * conocimiento_p
            var oportunidad_t = oportunidad * oportunidad_p
            var total = calidad_t + responsabilidad_t + conocimiento_t + oportunidad_t

            $('#total_claf').val(total);

            if (total >= 18 && total<=20) {
                var clasificacion = 'EXCELENTE'
                $('#clasificacion').val(clasificacion);
            }

            if (total >= 15 && total<=17) {
                var clasificacion = 'MUY BUENO'
                $('#clasificacion').val(clasificacion);
            }

            if (total >= 12 && total<=14) {
                var clasificacion = 'BUENO'
                $('#clasificacion').val(clasificacion);
            }

            if (total >= 10 && total<=11) {
                var clasificacion = 'REGULAR'
                $('#clasificacion').val(clasificacion);
            }

            if (total >= 2 && total<=9) {
                var clasificacion = 'DEFICIENTE'
                $('#clasificacion').val(clasificacion);
            }

            if (total == 0) {
                var clasificacion = 'SIN CALIFICACIÓN'
                $('#clasificacion').val(clasificacion);
            }
        }

        if(obras){
            var rif_b = $('#rif_b').val();

            var calidad = $('#calidad').val();
            var responsabilidad = $('#responsabilidad').val();
            var conocimiento = $('#conocimiento').val();
            var oportunidad = $('#oportunidad').val();

            var calidad_p = 5
            var responsabilidad_p = 5
            var conocimiento_p = 5
            var oportunidad_p = 5

            var calidad_t = calidad * calidad_p
            var responsabilidad_t = responsabilidad * responsabilidad_p
            var conocimiento_t = conocimiento * conocimiento_p
            var oportunidad_t = oportunidad * oportunidad_p
            var total = calidad_t + responsabilidad_t + conocimiento_t + oportunidad_t

            $('#total_claf').val(total);

            if (total >= 18 && total<=20) {
                var clasificacion = 'EXCELENTE'
                $('#clasificacion').val(clasificacion);
            }

            if (total >= 15 && total<=17) {
                var clasificacion = 'MUY BUENO'
                $('#clasificacion').val(clasificacion);
            }

            if (total >= 12 && total<=14) {
                var clasificacion = 'BUENO'
                $('#clasificacion').val(clasificacion);
            }

            if (total >= 10 && total<=11) {
                var clasificacion = 'REGULAR'
                $('#clasificacion').val(clasificacion);
            }

            if (total >= 2 && total<=9) {
                var clasificacion = 'DEFICIENTE'
                $('#clasificacion').val(clasificacion);
            }

            if (total == 0) {
                var clasificacion = 'SIN CALIFICACIÓN'
                $('#clasificacion').val(clasificacion);
            }
        }
    }
}

function registrar(){
    var clasificacion = $('#clasificacion').val();

    if (clasificacion == 'REGULAR' || clasificacion == 'DEFICIENTE' || clasificacion == 'SIN CALIFICACIÓN'){
        event.preventDefault();
        swal.fire({
            title: 'ALERTA',
            text: 'Con base al resultado de la evaluación de desempeño, deberá remitir al Servicio Nacional de Contrataciones, el expediente administrativo contentivo de la decisión del contratante con respecto a los supuestos generadores de sanción, así como el deposito correspondiente a la multa por trecientas (300) UCAU, a beneficio del Servicio Nacional de Contrataciones de conformidad a lo establecido en los artículos 167 y 168 del Decreto con Rango, Valor y Fuerza de Ley de Contrataciones Públicas.                                                 ¿Esta Seguro de Registrar?',
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            cancelButtonText: 'Cancelar',
            confirmButtonText: '¡Si, guardar!'
        }).then((result) => {
            if (result.value == true) {
                var base_url =window.location.origin+'/asnc/index.php/evaluacion_desempenio/registrar';
                // var base_url = '/index.php/evaluacion_desempenio/registrar';
                $.ajax({
                    url:base_url,
                    method: 'post',
                    dataType: 'json',
                    success: function(response){
                        if(response == 1) {
                            swal.fire({
                                title: 'Modificacion Exitosa',
                                type: 'success',
                                showCancelButton: false,
                                confirmButtonColor: '#3085d6',
                                confirmButtonText: 'Ok'
                            }).then((result) => {
                                if (result.value == true) {
                                    location.reload();
                                }
                            });
                        }
                    }
                })
            }
        });
    }else {
        event.preventDefault();
        swal.fire({
            title: '¿Registrar?',
            text: '¿Esta seguro de Registrar la Evaluación de Desempeño?',
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            cancelButtonText: 'Cancelar',
            confirmButtonText: '¡Si, guardar!'
        }).then((result) => {
            if (result.value == true) {
                var base_url =window.location.origin+'/asnc/index.php/evaluacion_desempenio/registrar';
                // var base_url = '/index.php/evaluacion_desempenio/registrar';
                $.ajax({
                    url:base_url,
                    method: 'post',
                    dataType: 'json',
                    success: function(response){
                        if(response == 1) {
                            swal.fire({
                                title: 'Modificacion Exitosa',
                                type: 'success',
                                showCancelButton: false,
                                confirmButtonColor: '#3085d6',
                                confirmButtonText: 'Ok'
                            }).then((result) => {
                                if (result.value == true) {
                                    location.reload();
                                }
                            });
                        }
                    }
                })
            }
        });
    }
}
