function consultar_rif() { //PARA LLENAR EN SELECT DE CCNNU DENTRO DEL MODAL
    var rif_b = $('#rif_b').val();
    if (rif_b == '') {
        swal({
            title: "¡ATENCION!",
            text: "El campo no puede estar vacio.",
            type: "warning",
            showCancelButton: false,
            confirmButtonColor: "#00897b",
            confirmButtonText: "CONTINUAR",
            closeOnConfirm: false
        }, function () {
            swal("Deleted!", "Your imaginary file has been deleted.", "success");
        });
        $('#ueba').attr("disabled", true);
    } else {
        $("#items").show();
        //var base_url = window.location.origin + '/asnc/index.php/Contratista/llenar_contratista';
        // var base_url =window.location.origin+'/asnc/index.php/Contratista/llenar_contratista';

        var base_url = '/index.php/Contratista/llenar_contratista';
      //  var base_url2 = '/index.php/Contratista/llenar_contratista_rp';

        $.ajax({
            url: base_url,
            method: 'post',
            data: { rif_b: rif_b },
            dataType: 'json',
            success: function (data) {
                if (data == null) {
                    $("#no_existe").show();
                    $("#existe").hide();

                    $('#exitte').val(0);

                } else {
                    $("#existe").show();
                    $("#no_existe").hide();

                    $('#exitte').val(1);
                    $('#descedocont').val(data['descedocont']);
                    $('#infoadic').val(data['infoadic']);
                    $('#idedocontratistas').val(data['idedocontratistas']);
                    $('#rif_cont').val(data['rifced']);
                    $('#nombre').val(data['nombre']);
                    $('#tipopersona').val(data['tipopersona']);
                    $('#descdencom').val(data['descdencom']);
                    $('#descobjcont').val(data['descobjcont']);
                    $('#dirfiscal').val(data['dirfiscal']);
                    $('#percontacto').val(data['percontacto']);
                    $('#telf1').val(data['telf1']);
                    $('#fecactsusc_at').val(data['fecactsusc_at']);
                    $('#fecvencsusc_at').val(data['fecvencsusc_at']);
                    $('#numcertrnc').val(data['numcertrnc']);
                    $('#numcontrol_certrnc').val(data['numcontrol_certrnc']);
                    $('#fecinscrnc_at').val(data['fecinscrnc_at']);
                    $('#fecvencrnc_at').val(data['fecvencrnc_at']);
                    $('#situacionact').val(data['descedocont']);
                    $('#proceso_id').val(data['proceso_id']);

                  //  var rif_cont_nr = data['rifced'];
                  //  var proceso_id = data['proceso_id'];
                  //  $.ajax({
                    //    url:base_url2,
                      //  method: 'post',
                      //  data: {proceso_id: proceso_id,
                      //        rif_cont_nr: rif_cont_nr},
                      ///  dataType: 'json',
                      //  success: function(data){
                          //  $.each(data, function(index, response){
                          //     $('#tabla_rep tbody').append('<tr><td>' + response['descmodif'] + '</td><td>' + response['descrm'] + '</td><td>' + response['desccirjudicial'] + '</td><td>' + response['numreg'] + '</td><td>' + response['fecreg_at'] + '</td><td>' + response['tomo'] + '</td><td>' + response['folio']+ '</td></tr>');
                        //    });
                      //  }
                  //  });
                }
            }
        })
    }
}
/*$('#resumen').click(function() {
   var rif_cont = $('rif_cont').val();


});*/
$(document).ready(function(){
    $('.action').click(function(){
        var st = $(this).attr('name');
        $('#id').attr('value',st);
        $('.send').click();
    });
});
function fetch() {
    $.ajax({
        url: "<?= var base_url2 =/index.php/Contratista/llenar_contratista_rp",
        type: "post",
        dataType: "json",
        success: function(data) {
            console.log(data);
            // if (data.responce == "success") {

            var i = "1";
            $('#records').DataTable({
              data: {proceso_id: proceso_id},
                "data": data.posts,
                "columns": [{
                        "render": function() {
                            return a = i++;
                        }
                    },
                    {
                        "data": "descmodif"
                    },

                ]
            });
            //}else{
            // toastr["error"](data.message);

        }

        // }
    });

}
/*function check() {
    var descedocont = document.getElementById('descedocont');
var porId=document.getElementById("idedocontratistas").value;
var t=1;
alert(porId);
    if (porId = t) {
        descedocont.style.color = '#000';
    } else {
        descedocont.style.color = '#FF0000';

    }
}
descedocont.addEventListener('blur', check);
check();
function mayus(e) {
e.value = e.value.toUpperCase();
}*/

function valideKey(evt) {
    var code = (evt.which) ? evt.which : evt.keyCode;
    if (code == 8) { // backspace.
        return true;
    } else if (code >= 48 && code <= 57) { // is a number.
        return true;
    } else { // other keys.
        return false;
    }
}
