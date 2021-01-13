function consultar_rif(){ //PARA LLENAR EN SELECT DE CCNNU DENTRO DEL MODAL
    var rif = $('#rif').val();
        $("#items").show();


    // var base_url =window.location.origin+'/asnc/index.php/Programacion/llenar_selc_ccnu_m';
    // // var base_url = '/index.php/Programacion/llenar_selc_ccnu_m';
    // $.ajax({
    //     url:base_url,
    //     method: 'post',
    //     data: {ccnu_b_m: ccnu_b},
    //     dataType: 'json',
    //     success: function(data){
    //         console.log(data);
    //         $('#id_ccnu').find('option').not(':first').remove();
    //         $.each(data, function(index, response){
    //             $('#id_ccnu').append('<option value="'+response['codigo_ccnu']+'/'+response['desc_ccnu']+'">'+response['desc_ccnu']+'</option>');
    //         });
    //     }
    // })
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
