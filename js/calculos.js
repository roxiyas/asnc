    function calculo(){

        var cantidad = 100;
        var i = $('#I').val();
        var ii = $('#II').val();
        var iii = $('#III').val();
        var iv = $('#IV').val();

        var can_x_distr =   cantidad - i - ii - iii - iv
        $('#cant_total_distribuir').val(can_x_distr);

        var cantidad_total = Number(i) + Number(ii) + Number(iii) + Number(iv)
        // var costo_unitario = $('#costo_unitario').val();
        // var tota = cantidad2 * costo_unitario
        // var total = parseFloat(tota);
        // $('#precio_total').val(total);

        var precio_total = $('#precio_total').val();
         var total = parseFloat(precio_total);
        var id_alicuota_iva = $('#id_alicuota_iva').val();
        var separar = id_alicuota_iva.split("/");
        var porcentaje = parseFloat(separar['0']);
        var monto_iva_estimado = total*porcentaje;

        console.log(monto_iva_estimado);

        var iva_estimado = parseFloat(monto_iva_estimado).toFixed(2);
        console.log(iva_estimado);
        $('#iva_estimado').val(iva_estimado);

        var monto_total_estimado = Number(precio_total) + Number(iva_estimado);
        console.log(monto_total_estimado);
        $('#monto_estimado').val(monto_total_estimado);


        // var primer = Number(monto_total_estimado) / Number(cantidad2)  * Number(i)

        var primer = Number(monto_total_estimado)  * Number(i) / Number(cantidad)
        $('#estimado_i').val(primer);
        var segun = Number(monto_total_estimado)  * Number(ii) / Number(cantidad)
        $('#estimado_ii').val(segun);
        var terc = Number(monto_total_estimado)  * Number(iii) / Number(cantidad)
        $('#estimado_iii').val(terc);
        var cuar = Number(monto_total_estimado)  * Number(iv) / Number(cantidad)
        $('#estimado_iV').val(cuar);
        
        var total_est = primer+segun+terc+cuar
        $('#estimado_total_t').val(total_est);

    }
