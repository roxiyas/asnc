
function agregar_ccnu(button) {
	var row = button.parentNode.parentNode;
  	var cells = row.querySelectorAll('td:not(:last-of-type)');
  	agregar_ccnuToCartTable(cells);

	$("#id_unidad_medida").val($("#id_unidad_medida").data("default-value"));
	$("#id_alicuota_iva").val($("#id_alicuota_iva").data("default-value"));
 	$("#especificacion").val('');
	$("#fecha_desde").val('');
	$("#fecha_hasta").val('');
	$("#cantidad").val('0');
	$("#precio_total").val('0');
	$('#I').val('0');
	$('#II').val('0');
	$('#III').val('0');
	$('#IV').val('0');
	$("#cant_total_distribuir").val('0');
	$("#iva_estimado").val('0');
	$("#monto_estimado").val('0');
	$("#estimado_i").val('0');
	$("#estimado_ii").val('0');
	$("#estimado_iii").val('0');
	$("#estimado_iV").val('0');
	$("#estimado_total_t").val('0');
}

function remove_proy() {
	var row = this.parentNode.parentNode;
    document.querySelector('#target_req tbody').removeChild(row);

	$("#id_unidad_medida").val($("#id_unidad_medida").data("default-value"));
	$("#id_alicuota_iva").val($("#id_alicuota_iva").data("default-value"));
 	$("#especificacion").val('');
	$("#fecha_desde").val('');
	$("#fecha_hasta").val('');
	$("#cantidad").val('0');
	$("#precio_total").val('0');
	$('#I').val('0');
	$('#II').val('0');
	$('#III').val('0');
	$('#IV').val('0');
	$("#cant_total_distribuir").val('0');
	$("#iva_estimado").val('0');
	$("#monto_estimado").val('0');
	$("#estimado_i").val('0');
	$("#estimado_ii").val('0');
	$("#estimado_iii").val('0');
	$("#estimado_iV").val('0');
	$("#estimado_total_t").val('0');
}

function agregar_ccnuToCartTable(cells){
	var pp = $("#par_presupuestaria").val();
	var pp1 = pp.split("/")[0];
   	var pp2 = pp.split("/")[1];
	var pp3 = pp.split("/")[2];

	var ccnu = $("#id_ccnu").val();
	var ccnu1 = ccnu.split("/")[0];
   	var ccnu2 = ccnu.split("/")[1];

	var fecha_desde = $("#fecha_desde").val();
	var fecha_hasta = $("#fecha_hasta").val();

   	var esp = $("#especificacion").val();
	var id_unid = $("#id_unidad_medida").val();
	var id_unid1 = id_unid.split("/")[0];
	var id_unid2 = id_unid.split("/")[1];

 	var can  = $("#cantidad").val();
   	var pret  = $("#precio_total").val();

	var i = $('#I').val();
	var ii = $('#II').val();
	var iii = $('#III').val();
	var iv = $('#IV').val();

	var al_iva  = $("#id_alicuota_iva").val();
	var al_iva1 = al_iva.split("/")[0];
   	var al_iva2 = al_iva.split("/")[1];
   	var ica_est  = $("#iva_estimado").val();
   	var mo_est  = $("#monto_estimado").val();
	if (ccnu == 0 || esp == 0 || pp == 0){
		console.log('No paso');
	}else{
		var newRow = document.createElement('tr');
		var increment = increment +1;
		newRow.className='myTr';
		newRow.innerHTML = `
		<td>${pp3}<input type="text" name="par_presupuestaria[]" id="ins-type-${increment}" hidden value="${pp1}"></td>

		<td>${ccnu2}<input type="text" name="id_ccnu[]" id="ins-type-${increment}" hidden value="${ccnu1}"></td>
		<td>${fecha_desde}<input type="text" name="fecha_desde[]" id="ins-type-${increment}" hidden value="${fecha_desde}"></td>
		<td>${fecha_hasta}<input type="text" name="fecha_hasta[]" id="ins-type-${increment}" hidden value="${fecha_hasta}"></td>

		<td>${esp}<input type="text" name="especificacion[]" id="ins-subtype-${increment}" hidden value="${esp}"></td>
		<td>${id_unid2}<input type="text" name="id_unidad_medida[]" id="ins-subtype-${increment}" hidden value="${id_unid1}"></td>

		<td>${i}<input type="text" hidden name="i[]" id="ins-pres-${increment}" value="${i}"></td>
		<td>${ii}<input type="text" hidden name="ii[]" id="ins-pres-${increment}" value="${ii}"></td>
		<td>${iii}<input type="text" hidden name="iii[]" id="ins-pres-${increment}" value="${iii}"></td>
		<td>${iv}<input type="text" hidden name="iv[]" id="ins-pres-${increment}" value="${iv}"></td>

		<td>${pret}<input type="text" hidden name="precio_total[]" id="ins-pres-${increment}" value="${pret}"></td>
		<td>${al_iva1}<input type="text" hidden name="id_alicuota_iva[]" id="ins-pres-${increment}" value="${al_iva1}"></td>
		<td>${ica_est}<input type="text" hidden name="iva_estimado[]" id="ins-pres-${increment}" value="${ica_est}"></td>
		<td>${mo_est}<input type="text" hidden name="monto_estimado[]" id="ins-pres-${increment}" value="${mo_est}"></td>
		`;

		var cellremove_proyBtn = createCell();

		cellremove_proyBtn.appendChild(createremove_proyBtn())
		newRow.appendChild(cellremove_proyBtn);
		document.querySelector('#target_req tbody').appendChild(newRow);
	}
}

function createremove_proyBtn() {
    var btnremove_proy = document.createElement('button');
    btnremove_proy.className = 'btn btn-xs btn-danger';
    btnremove_proy.onclick = remove_proy;
    btnremove_proy.innerText = 'Descartar';
    return btnremove_proy;
}

function createCell(text) {
	var td = document.createElement('td');
  if(text) {
  	td.innerText = text;
  }
  return td;
}
