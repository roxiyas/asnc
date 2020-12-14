    function calcular_otros(){

        var i = $('#I').val();
        var ii = $('#II').val();
        var iii = $('#III').val();
        var iv = $('#IV').val();
        var cantidad2 = Number(i) + Number(ii) + Number(iii) + Number(iv)
        $('#cant_total_distribuir').val(cantidad2);

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


        var primer = Number(monto_total_estimado) / Number(cantidad2)  * Number(i)
        $('#estimado_i').val(primer);
        var segun = Number(monto_total_estimado) / Number(cantidad2) * Number(ii)
        $('#estimado_ii').val(segun);
        var terc = Number(monto_total_estimado) / Number(cantidad2) * Number(iii)
        $('#estimado_iii').val(terc);
        var cuar = Number(monto_total_estimado) / Number(cantidad2) * Number(iv)
        $('#estimado_iV').val(cuar);

        var total_est = primer+segun+terc+cuar
        $('#estimado_total_t').val(total_est);

    }
