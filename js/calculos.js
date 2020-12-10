    function calculo(){

        var cantidad = 100;
        var i = $('#I').val();
        var ii = $('#II').val();
        var iii = $('#III').val();
        var iv = $('#IV').val();
        var calculo2 = cantidad - i - ii - iii - iv
        $('#cantidad').val(calculo2);

        var cantidad2 = Number(i) + Number(ii) + Number(iii) + Number(iv)
        var costo_unitario = $('#costo_unitario').val();
        var tota = cantidad2 * costo_unitario
        var total = parseFloat(tota);
        $('#precio_total').val(total);

        var id_alicuota_iva = $('#id_alicuota_iva').val();
        var separar = id_alicuota_iva.split("/");
        var porcentaje = parseFloat(separar['0']);
        var monto_iva_estimado = total*porcentaje;
        var iva_estimado = parseFloat(monto_iva_estimado).toFixed(2);
        $('#iva_estimado').val(iva_estimado);

        var monto_total_estimado = Number(total) + Number(iva_estimado);
        $('#monto_estimado').val(monto_total_estimado);


        var primer = (Number(i) * Number(costo_unitario))
        $('#estimado_i').val(primer);
        var segun = (Number(ii) * costo_unitario)
        $('#estimado_ii').val(segun);
        var terc = (Number(iii) * costo_unitario)
        $('#estimado_iii').val(terc);
        var cuar = (Number(iv) * costo_unitario)
        $('#estimado_iV').val(cuar);

        var total_est = primer+segun+terc+cuar+Number(iva_estimado)
        $('#estimado_total_t').val(total_est);

    }
