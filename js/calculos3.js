    function calcular_bienes(){

        var cantidad = 100;
        var i = $('#I_acc').val();
        var ii = $('#II_acc').val();
        var iii = $('#III_acc').val();
        var iv = $('#IV_acc').val();
        var calculo2 = cantidad - i - ii - iii - iv


        var cantidad2 = Number(i) + Number(ii) + Number(iii) + Number(iv)
        $('#cant_total_distribuir_acc').val(cantidad2);


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

        var primer = (Number(i) * Number(costo_unitario))
        $('#estimado_i_acc').val(primer);
        var segun = (Number(ii) * costo_unitario)
        $('#estimado_ii_acc').val(segun);
        var terc = (Number(iii) * costo_unitario)
        $('#estimado_iii_acc').val(terc);
        var cuar = (Number(iv) * costo_unitario)
        $('#estimado_iV_acc').val(cuar);

        var total_est = primer+segun+terc+cuar+Number(iva_estimado)
        $('#estimado_total_t_acc').val(total_est);

    }
