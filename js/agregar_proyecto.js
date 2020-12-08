
function agregar_ccnu(button) {
	var row = button.parentNode.parentNode;
  	var cells = row.querySelectorAll('td:not(:last-of-type)');
  	agregar_ccnuToCartTable(cells);
}

function remove_med() {
	var row = this.parentNode.parentNode;
    document.querySelector('#target_req tbody').removeChild(row);
	// var fd = $("#fecha_desde").val('0');
	// var fh = $("#fecha_hasta").val('0');
	// var par = $("#par_presupuestaria").val('0');
}

function agregar_ccnuToCartTable(cells){
	var fd = $("#fecha_desde").val();
	var fh = $("#fecha_hasta").val();
	var par = $("#par_presupuestaria").val();
	var par1 = par.split("/")[0];
   	var par2 = par.split("/")[1];

	var fuente = $("#fuente_financiamiento").val();
	var acti = $("#actividad_comercial").val();
	var est = $("#estado").val();
	var ccnu = $("#id_ccnu").val();
	var ccnu1 = ccnu.split("/")[0];
   	var ccnu2 = ccnu.split("/")[1];
   	var esp = $("#especificacion").val();
	var ccnu = $("#id_unidad_medida").val();
 	var can  = $("#cantidad").val();
   	var cos  = $("#costo_unitario").val();
   	var pret  = $("#precio_total").val();

	var al_iva  = $("#id_alicuota_iva").val();
	var al_iva1 = al_iva.split("/")[0];
   	var al_iva2 = al_iva.split("/")[1];
   	var ica_est  = $("#iva_estimado").val();
   	var mo_est  = $("#monto_estimado").val();
	if (ccnu == 0 || esp == 0 || can == 0){
		console.log('No paso');
	}else{
		var newRow = document.createElement('tr');
		var increment = increment +1;
		newRow.className='myTr';
		newRow.innerHTML = `
		<td>${fd}<input type="text" name="fecha_desde[]" id="ins-type-${increment}" hidden value="${fd}"></td>
		<td>${fh}<input type="text" name="fecha_hasta[]" id="ins-type-${increment}" hidden value="${fh}"></td>
		<td>${par2}<input type="text" name="par_presupuestaria[]" id="ins-type-${increment}" hidden value="${par}"></td>
		<td hidden>${fuente}<input type="text" name="fuente_financiamiento[]" id="ins-type-${increment}" hidden value="${fuente}"></td>
		<td hidden>${acti}<input type="text" name="actividad_comercial[]" id="ins-type-${increment}" hidden value="${acti}"></td>
		<td hidden>${est}<input type="text" name="estado[]" id="ins-type-${increment}" hidden value="${est}"></td>

		  <td>${ccnu2}<input type="text" name="id_ccnu[]" id="ins-type-${increment}" hidden value="${ccnu}"></td>
		  <td>${esp}<input type="text" name="especificacion[]" id="ins-subtype-${increment}" hidden value="${esp} "></td>
		  <td>${can}<input type="text" hidden name="cantidad[]" id="ins-pres-${increment}" value="${can}"></td>
		  <td>${cos}<input type="text" hidden name="costo_unitario[]" id="ins-pres-${increment}" value="${cos}"></td>
		  <td>${pret}<input type="text" hidden name="precio_total[]" id="ins-pres-${increment}" value="${pret}"></td>

		  <td>${al_iva2}<input type="text" hidden name="id_alicuota_iva[]" id="ins-pres-${increment}" value="${al_iva}"></td>
		  <td>${ica_est}<input type="text" hidden name="iva_estimado[]" id="ins-pres-${increment}" value="${ica_est}"></td>
		  <td>${mo_est}<input type="text" hidden name="monto_estimado[]" id="ins-pres-${increment}" value="${mo_est}"></td>
		`;

		var cellremove_medBtn = createCell();

		cellremove_medBtn.appendChild(createremove_medBtn())
		newRow.appendChild(cellremove_medBtn);
		document.querySelector('#target_req tbody').appendChild(newRow);
	}
}

function createremove_medBtn() {
    var btnremove_med = document.createElement('button');
    btnremove_med.className = 'btn btn-xs btn-danger';
    btnremove_med.onclick = remove_med;
    btnremove_med.innerText = 'Descartar';
    return btnremove_med;
}

function createCell(text) {
	var td = document.createElement('td');
  if(text) {
  	td.innerText = text;
  }
  return td;
}
