if ($('#id_programacion').val().length != " "){
    var id_programacion = $('#id_programacion').val();
    var separar   = id_programacion.split("/");
    var id_p_programacion = separar['0'];
    var id_p_proyecto = separar['1'];

    var base_url =window.location.origin+'/asnc/index.php/Programacion/ver_proy_editar';
    // var base_url = '/index.php/Programacion/ver_proy_editar';
    $.ajax({
       url:base_url,
       method: 'post',
       data: {id_p_proyecto: id_p_proyecto},
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
                        <td>${value.porcentaje}<input type="text" hidden name="porcentaje[]" id="ins-pres-${increment}" value="${value.porcentaje}">
                        </td>
                    `;

                    var cellremove_ffBtn = createCell();
                    cellremove_ffBtn.appendChild(createremove_ffBtn())
            		newRow.appendChild(cellremove_ffBtn);

                    //
                    // var cell_editar = createCell();
                    // cell_editar.appendChild(editar())
            		// newRow.appendChild(cell_editar);

                    document.querySelector('#target_ff tbody').appendChild(newRow);

                    function remove_ff() {
                	       var row = this.parentNode.parentNode;
                           document.querySelector('#target_ff tbody')
                           .removeChild(row);
                    }
                    //
                    // function editar() {
                	//        $('#myModal').modal('show'); // abrir
                    // }

                    function createremove_ffBtn() {
                        var btnremove_ff = document.createElement('button');
                        btnremove_ff.className = 'btn btn-xs btn-danger';
                        btnremove_ff.onclick = remove_ff;
                        btnremove_ff.innerText = 'Descartar';
                        return btnremove_ff;
                    }
                    //
                    // function editar() {
                    //     var btn_editar = document.createElement('button');
                    //     btn_editar.className = 'btn btn-xs btn-yellow';
                    //     btn_editar.onclick = editar;
                    //     btn_editar.innerText = 'Editar';
                    //     return btn_editar;
                    // }
                });
            }
        }
    })
}

if ($('#id_programacion').val().length != " "){
        var id_programacion = $('#id_programacion').val();
        var separar   = id_programacion.split("/");
        var id_p_programacion = separar['0'];
        var id_p_proyecto = separar['1'];

        var base_url =window.location.origin+'/asnc/index.php/Programacion/ver_proy_editar_items';
        // var base_url = '/index.php/Programacion/ver_proy_editar';
        $.ajax({
           url:base_url,
           method: 'post',
           data: {id_p_proyecto: id_p_proyecto},
           dataType: 'json',

            success: function(data){
                $("#target_req tbody").html('');
                if(data != null && $.isArray(data)){
                    $.each(data, function(index, value){

                        var newRow = document.createElement('tr');

                        var increment = increment +1;
                        newRow.className='myTr';
                        newRow.innerHTML = `
                        <td>${value.id_p_items}<input type="text" name="id_p_items[]" id="ins-type-${increment}" hidden value="${value.id_p_items}"></td>
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
                        <td>
                            <button type="button" class="btn btn-info btn-xs" data-toggle="modal" id="editarrrrr" onclick="editar_modal(${value.id_p_items});" data-target="#myModal"><i class="fas fa-lg fa-fw fa-edit"></i></button>
                        </td>
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

var fila ; //para capturar el id de la fila

function editar_modal(id){

    var id_items_proy = id
    var base_url =window.location.origin+'/asnc/index.php/Programacion/cons_items_proy';

    $.ajax({
        url:base_url,
        method: 'post',
        data: {id_items_proy: id_items_proy},
        dataType: 'json',
        success: function(response){
            $('#id_items').val(id);
            $('#cod_partida_pre').val(response['codigopartida_presupuestaria']);
            $('#partida_pre').val(response['desc_partida_presupuestaria']);
            $('#ccnu').val(response['desc_ccnu']);
            $('#fecha_desde_e').val(response['fecha_desde']);
            $('#fecha_hasta_e').val(response['fecha_hasta']);
            $('#esp').val(response['especificacion']);
            $('#unid_med').val(response['desc_unidad_medida']);

            $('#primero').val(response['i']);
            $('#segundo').val(response['ii']);
            $('#tercero').val(response['iii']);
            $('#cuarto').val(response['iv']);

            $('#prec_t').val(response['precio_total']);
            $('#iva_e').val(response['alicuota_iva']);
            $('#monto_iva_e').val(response['iva_estimado']);
            $('#monto_tot_est').val(response['monto_estimado']);
        }
    })
}

function guardar_tabla(){

    // var id_items_proy = $('#id_items').val();
    // var partida_pre = $('#partida_pre').val();
    // var cod_partida_pre = $('#cod_partida_pre').val();
    // var ccnu = $('#ccnu').val();
    // var fecha_desde_e = $('#fecha_desde_e').val();
    // var fecha_hasta_e = $('#fecha_hasta_e').val();
    // var esp = $('#esp').val();
    // var unid_med = $('#unid_med').val();
    // var primero = $('#primero').val();
    // var segundo = $('#segundo').val();
    // var tercero = $('#tercero').val();
    // var cuarto = $('#cuarto').val();
    // var prec_t = $('#prec_t').val();
    // var iva_e = $('#iva_e').val();
    // var monto_iva_e = $('#monto_iva_e').val();
    // var monto_tot_est = $('#monto_tot_est').val();

    event.preventDefault();

        swal.fire({
            title: '¿Seguro que desea guardar el registro? Se editara en la Base de Datos',
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            cancelButtonText: 'Cancelar',
            confirmButtonText: '¡Si, guardar!'
        }).then((result) => {
            if (result.value == true) {
                var id_items_proy = $('#id_items').val();
                var partida_pre = $('#partida_pre').val();
                var cod_partida_pre = $('#cod_partida_pre').val();
                var ccnu = $('#ccnu').val();
                var fecha_desde_e = $('#fecha_desde_e').val();
                var fecha_hasta_e = $('#fecha_hasta_e').val();
                var esp = $('#esp').val();
                var unid_med = $('#unid_med').val();
                var primero = $('#primero').val();
                var segundo = $('#segundo').val();
                var tercero = $('#tercero').val();
                var cuarto = $('#cuarto').val();
                var prec_t = $('#prec_t').val();
                var iva_e = $('#iva_e').val();
                var monto_iva_e = $('#monto_iva_e').val();
                var monto_tot_est = $('#monto_tot_est').val();

                var base_url =window.location.origin+'/asnc/index.php/Programacion/editar_fila_ip';

                $.ajax({
                    url:base_url,
                    method: 'post',
                    data: {id_items_proy: id_items_proy,
                           partida_pre: partida_pre,
                           cod_partida_pre: cod_partida_pre,
                           ccnu: ccnu,
                           fecha_desde_e: fecha_desde_e,
                           fecha_hasta_e: fecha_hasta_e,
                           esp: esp,
                           unid_med: unid_med,
                           primero: primero,
                           segundo: segundo,
                           tercero: tercero,
                           cuarto: cuarto,
                           prec_t: prec_t,
                           iva_e : iva_e,
                           monto_iva_e: monto_iva_e,
                           monto_tot_est: monto_tot_est
                    },
                    dataType: 'json',
                      success: function(response){
                        console.log(response);
                      }
                  })
              }
        });

    // var newRow = document.createElement('tr');
    // var increment = increment +1;
    // newRow.className='myTr';
    // newRow.innerHTML = `
    // <td>${id_items_proy}<input type="text" name="id_items_proy[]" id="ins-type-${increment}" hidden value="${id_items_proy}"></td>
    // <td>${cod_partida_pre}<input type="text" name="par_presupuestaria[]" id="ins-type-${increment}" hidden value="${cod_partida_pre}"></td>
    //
    // <td>${ccnu}<input type="text" name="id_ccnu[]" id="ins-type-${increment}" hidden value="${ccnu}"></td>
    // <td>${fecha_desde_e}<input type="text" name="fecha_desde[]" id="ins-type-${increment}" hidden value="${fecha_desde_e}"></td>
    // <td>${fecha_hasta_e}<input type="text" name="fecha_hasta[]" id="ins-type-${increment}" hidden value="${fecha_hasta_e}"></td>
    //
    // <td>${esp}<input type="text" name="especificacion[]" id="ins-subtype-${increment}" hidden value="${esp}"></td>
    // <td>${unid_med}<input type="text" name="id_unidad_medida[]" id="ins-subtype-${increment}" hidden value="${unid_med}"></td>
    //
    // <td>${primero}<input type="text" hidden name="i[]" id="ins-pres-${increment}" value="${primero}"></td>
    // <td>${segundo}<input type="text" hidden name="ii[]" id="ins-pres-${increment}" value="${segundo}"></td>
    // <td>${tercero}<input type="text" hidden name="iii[]" id="ins-pres-${increment}" value="${tercero}"></td>
    // <td>${cuarto}<input type="text" hidden name="iv[]" id="ins-pres-${increment}" value="${cuarto}"></td>
    //
    // <td>${prec_t}<input type="text" hidden name="precio_total[]" id="ins-pres-${increment}" value="${prec_t}"></td>
    // <td>${iva_e}<input type="text" hidden name="id_alicuota_iva[]" id="ins-pres-${increment}" value="${iva_e}"></td>
    // <td>${monto_iva_e}<input type="text" hidden name="iva_estimado[]" id="ins-pres-${increment}" value="${monto_iva_e}"></td>
    // <td>${monto_tot_est}<input type="text" hidden name="monto_estimado[]" id="ins-pres-${increment}" value="${monto_tot_est}"></td>
    // <td>
    //     <button type="button" class="btn btn-info btn-xs" data-toggle="modal" id="editarrrrr" onclick="editar_modal(${id_items_proy});" data-target="#myModal"><i class="fas fa-lg fa-fw fa-edit"></i></button>
    // </td>
    // `;
    // document.querySelector('#target_req tbody').appendChild(newRow);
}
