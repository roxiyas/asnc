function porc_acc(){
    var porcentaje_acc = $('#porcentaje_acc').val();
    console.log(porcentaje_acc);
    if (porcentaje_acc > 100) {
        swal({
            title: "¡ATENCION!",
            text: "El porcentaje no puede ser mayor a 100.",
            type: "warning",
            showCancelButton: false,
            confirmButtonColor: "#00897b",
            confirmButtonText: "CONTINUAR",
            closeOnConfirm: false
        }, function(){
            swal("Deleted!", "Your imaginary file has been deleted.", "success");
        });
        $('#prueba2').attr("disabled", true);
    }else {
        $('#prueba2').attr("disabled", false);
    }
}


    function calcular_bienes(){

        var cantidad_acc = $('#cantidad_acc').val();
        $('#cant_total_distribuir_acc').val(cantidad_acc);
        var i = $('#I_acc').val();
        var ii = $('#II_acc').val();
        var iii = $('#III_acc').val();
        var iv = $('#IV_acc').val();
        var cant_total_distribuir = cantidad_acc - i - ii - iii - iv


        var cantidad2 = Number(i) + Number(ii) + Number(iii) + Number(iv)
        $('#cant_total_distribuir_acc').val(cant_total_distribuir);

        //Remplazar decimales para caculos
            var costo_unitario = $('#costo_unitario_acc').val();
            var newstr = costo_unitario.replace('.', "");
            var newstr2 = newstr.replace('.', "");
            var newstr3 = newstr2.replace('.', "");
            var precio = newstr3.replace(',', ".");

            var tota = cantidad2 * precio
            var tota2 = parseFloat(tota).toFixed(2);
            var precio_total_acc = Intl.NumberFormat("de-DE").format(tota2);
            $('#precio_total_acc').val(precio_total_acc);

        var id_alicuota_iva = $('#id_alicuota_iva_acc').val();
        var separar = id_alicuota_iva.split("/");
        var porcentaje = parseFloat(separar['0']);

        var newstr4 = precio_total_acc.replace('.', "");
        var newstr5 = newstr4.replace('.', "");
        var newstr6 = newstr5.replace('.', "");
        var precio_total_ac = newstr6.replace(',', ".");

        var monto_iva_estimado = precio_total_ac*porcentaje;
        var iva_estimado = parseFloat(monto_iva_estimado).toFixed(2);
        var iva_estimado_acc = Intl.NumberFormat("de-DE").format(iva_estimado);
        $('#iva_estimado_acc').val(iva_estimado_acc);

        var newstr7 = iva_estimado_acc.replace('.', "");
        var newstr8 = newstr7.replace('.', "");
        var newstr9 = newstr8.replace('.', "");
        var iva_estimado_ac = newstr9.replace(',', ".");

        var monto_t_estimado = Number(precio_total_ac) + Number(iva_estimado_ac);
        var monto_total_estimadoo = parseFloat(monto_t_estimado).toFixed(2);
        var monto_total_estimado = Intl.NumberFormat("de-DE").format(monto_total_estimadoo);
        $('#monto_estimado_acc').val(monto_total_estimado);

        var primer =  parseFloat(Number(monto_t_estimado) / Number(cantidad2) * Number(i)).toFixed(2);
        var primer_e = parseFloat(primer).toFixed(2);
        var estimado_i = Intl.NumberFormat("de-DE").format(primer_e);
        $('#estimado_i_acc').val(estimado_i);

        var segun = parseFloat(Number(monto_t_estimado) / Number(cantidad2) * Number(ii)).toFixed(2);
        var segun_e = parseFloat(segun).toFixed(2);
        var estimado_i = Intl.NumberFormat("de-DE").format(segun_e);
        $('#estimado_ii_acc').val(estimado_i);

        var terc = parseFloat(Number(monto_t_estimado) / Number(cantidad2) * Number(iii)).toFixed(2);
        var terc_e = parseFloat(terc).toFixed(2);
        var estimado_iii = Intl.NumberFormat("de-DE").format(terc_e);
        $('#estimado_iii_acc').val(estimado_iii);


        var cuar = parseFloat(Number(monto_t_estimado) / Number(cantidad2) * Number(iv)).toFixed(2);
        var cuar_e = parseFloat(cuar).toFixed(2);
        var estimado_iv = Intl.NumberFormat("de-DE").format(cuar_e);
        $('#estimado_iV_acc').val(estimado_iv);

        var total_e = Number(primer)+Number(segun)+Number(terc)+Number(cuar)
        var total_es = parseFloat(total_e).toFixed(2);
        var total_est = Intl.NumberFormat("de-DE").format(total_es);
        $('#estimado_total_t_acc').val(total_est);
    }

    function control(){
        var acc_cargar_acc = $('#cambiar').val();

        if (acc_cargar_acc === '1') {
            console.log(1);
            $("#acc_acc").hide();
            $("#proyecto_acc").show();
        }else if (acc_cargar_acc === '2') {
            console.log(2);
            $("#proyecto_acc").hide();
            $("#acc_acc").show();
        }
    }
