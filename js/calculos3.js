    function calcular_bienes(){

        var cantidad_a_dis = $('#cant_a_distribuir_acc').val();
        $('#cant_total_distribuir_acc').val(cantidad_a_dis);
        var i = $('#I_acc').val();
        var ii = $('#II_acc').val();
        var iii = $('#III_acc').val();
        var iv = $('#IV_acc').val();
        var cant_total_distribuir = cantidad_a_dis - i - ii - iii - iv


        var cantidad2 = Number(i) + Number(ii) + Number(iii) + Number(iv)
        $('#cant_total_distribuir_acc').val(cant_total_distribuir);


        var costo_unitario = $('#costo_unitario_acc').val();
        var tota = cantidad2 * costo_unitario
        var total = parseFloat(tota);
        $('#precio_total_acc').val(total);

        var id_alicuota_iva = $('#id_alicuota_iva_acc').val();
        var separar = id_alicuota_iva.split("/");
        var porcentaje = parseFloat(separar['0']);
        var monto_iva_estimado = total*porcentaje;
        var iva_estimado = parseFloat(monto_iva_estimado).toFixed(2);
        $('#iva_estimado_acc').val(iva_estimado);

        var monto_total_estimado = Number(total) + Number(iva_estimado);
        $('#monto_estimado_acc').val(monto_total_estimado);

        var primer =  parseFloat(Number(monto_total_estimado) / Number(cantidad2) * Number(i)).toFixed(2);
        $('#estimado_i_acc').val(primer);
        var segun = parseFloat(Number(monto_total_estimado) / Number(cantidad2) * Number(ii)).toFixed(2);
        $('#estimado_ii_acc').val(segun);
        var terc = parseFloat(Number(monto_total_estimado) / Number(cantidad2) * Number(iii)).toFixed(2);
        $('#estimado_iii_acc').val(terc);
        var cuar = parseFloat(Number(monto_total_estimado) / Number(cantidad2) * Number(iv)).toFixed(2);
        $('#estimado_iV_acc').val(cuar);

        var total_est = Number(primer)+Number(segun)+Number(terc)+Number(cuar)
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
