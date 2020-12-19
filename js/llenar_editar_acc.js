if ($('#id_programacion').val().length != " "){
    var id_programacion = $('#id_programacion').val();
    var separar   = id_programacion.split("/");
    var id_p_programacion = separar['0'];
    var id_p_acc_centralizada = separar['1'];

    var base_url =window.location.origin+'/asnc/index.php/Programacion/ver_acc_editar';
    // var base_url = '/index.php/Programacion/ver_proy_editar';
    $.ajax({
       url:base_url,
       method: 'post',
       data: {id_p_acc_centralizada: id_p_acc_centralizada},
       dataType: 'json',

        success: function(data){
            $("#target_ff tbody").html('');
            if(data != null && $.isArray(data)){
                $.each(data, function(index, value){

                    var newRow = document.createElement('tr');

                    var increment = increment +1;
                    newRow.className='myTr';
                    newRow.innerHTML = `
                        <td>${value.codigopartida_presupuestaria}<input type="text" name="par_presupuestaria_ff[]" id="ins-type-${increment}" hidden value="${ value.id_partidad_presupuestaria}"></td>

                        <td>${value.desc_partida_presupuestaria}<input type="text" name="des_par_presupuestaria_ff[]" id="ins-type-${increment}" hidden value="${ value.desc_partida_presupuestaria}"></td>
                        <td>${value.id_estado}<input type="text" name="id_estado[]" id="ins-subtype-${increment}" hidden value="${value.id_estado} "></td>
                        <td>${value.desc_fuente_financiamiento}<input type="text" hidden name="fuente_financiamiento[]" id="ins-pres-${increment}" value="${value.id_fuente_financiamiento}"></td>
                        <td>${value.porcentaje}<input type="text" hidden name="porcentaje[]" id="ins-pres-${increment}" value="${value.porcentaje}"></td>
                    `;

                    var cellremove_medBtn = createCell();
                    cellremove_medBtn.appendChild(createremove_medBtn())
                    newRow.appendChild(cellremove_medBtn);

                    document.querySelector('#target_ff tbody').appendChild(newRow);

                    function remove_med() {
                	       var row = this.parentNode.parentNode;
                           document.querySelector('#target_ff tbody')
                           .removeChild(row);
                    }

                    function createremove_medBtn() {
                        var btnremove_med = document.createElement('button');
                        btnremove_med.className = 'btn btn-xs btn-danger';
                        btnremove_med.onclick = remove_med;
                        btnremove_med.innerText = 'Descartar';
                        return btnremove_med;
                    }
                });
            }
        }
    })
}

if ($('#id_programacion').val().length != " "){
        var id_programacion = $('#id_programacion').val();
        var separar   = id_programacion.split("/");
        var id_p_programacion = separar['0'];
        var id_p_acc_centralizada = separar['1'];

        var base_url =window.location.origin+'/asnc/index.php/Programacion/ver_acc_editar_items';
        // var base_url = '/index.php/Programacion/ver_proy_editar';
        $.ajax({
           url:base_url,
           method: 'post',
           data: {id_p_acc_centralizada: id_p_acc_centralizada},
           dataType: 'json',

            success: function(data){
                $("#target_req tbody").html('');
                if(data != null && $.isArray(data)){
                    $.each(data, function(index, value){

                        var newRow = document.createElement('tr');

                        var increment = increment +1;
                        newRow.className='myTr';
                        newRow.innerHTML = `
                        <td>${value.codigopartida_presupuestaria}<input type="text" name="par_presupuestaria[]" id="ins-type-${increment}" hidden value="${value.id_partidad_presupuestaria}"></td>

                        <td>${value.desc_ccnu}<input type="text" name="id_ccnu[]" id="ins-type-${increment}" hidden value="${value.id_ccnu}"></td>
                        <td>${value.fecha_desde}<input type="text" name="fecha_desde[]" id="ins-type-${increment}" hidden value="${value.fecha_desde}"></td>
                        <td>${value.fecha_hasta}<input type="text" name="fecha_hasta[]" id="ins-type-${increment}" hidden value="${value.fecha_hasta}"></td>

                        <td>${value.especificacion}<input type="text" name="especificacion[]" id="ins-subtype-${increment}" hidden value="${value.especificacion}"></td>
                        <td>${value.desc_unidad_medida}<input type="text" name="id_unidad_medida[]" id="ins-subtype-${increment}" hidden value="${value.id_unidad_medida}"></td>

                        <td>${value.i}<input type="text" hidden name="i[]" id="ins-pres-${increment}" value="${value.i}"></td>
                        <td>${value.ii}<input type="text" hidden name="ii[]" id="ins-pres-${increment}" value="${value.ii}"></td>
                        <td>${value.iii}<input type="text" hidden name="iii[]" id="ins-pres-${increment}" value="${value.iii}"></td>
                        <td>${value.iv}<input type="text" hidden name="iv[]" id="ins-pres-${increment}" value="${value.iv}"></td>

                        <td>${value.precio_total}<input type="text" hidden name="precio_total[]" id="ins-pres-${increment}" value="${value.precio_total}"></td>
                        <td>${value.alicuota_iva}<input type="text" hidden name="id_alicuota_iva[]" id="ins-pres-${increment}" value="${value.alicuota_iva}"></td>
                        <td>${value.iva_estimado}<input type="text" hidden name="iva_estimado[]" id="ins-pres-${increment}" value="${value.iva_estimado}"></td>
                        <td>${value.monto_estimado}<input type="text" hidden name="monto_estimado[]" id="ins-pres-${increment}" value="${value.monto_estimado}"></td>
                        `;

                        var cellremove_medBtn = createCell();
                        cellremove_medBtn.appendChild(createremove_medBtn())
                        newRow.appendChild(cellremove_medBtn);

                        document.querySelector('#target_req tbody').appendChild(newRow);

                        function remove_med() {
                    	       var row = this.parentNode.parentNode;
                               document.querySelector('#target_req tbody')
                               .removeChild(row);
                        }

                        function createremove_medBtn() {
                            var btnremove_med = document.createElement('button');
                            btnremove_med.className = 'btn btn-xs btn-danger';
                            btnremove_med.onclick = remove_med;
                            btnremove_med.innerText = 'Descartar';
                            return btnremove_med;
                        }
                    });
                }
            }
        })
    }
