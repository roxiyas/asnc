
function agregar_ccnu(button) {
	var row = button.parentNode.parentNode;
  	var cells = row.querySelectorAll('td:not(:last-of-type)');
  	agregar_ccnuToCartTable(cells);
}

function remove_med() {
	var row = this.parentNode.parentNode;
    document.querySelector('#target_req tbody').removeChild(row);
	$("#id_medicina").val('0');
	$("#id_presentacion").val('0');
}

function agregar_ccnuToCartTable(cells){
   var ccnu = $("#id_ccnu").val();
   // var id_medicina = code.split("/")[0]
   // var medicina = code.split("/")[1]

   var esp = $("#especificación").val();
   // var id_presenacion = name.split("/")[0]
   // var presentacion = name.split("/")[1]
 	var can  = $("#cantidad").val();
   	var cos  = $("#costo_unitario").val();
   	var pret  = $("#precio_total").val();

	if (ccnu == 0 || esp == 0 || can == 0){
		console.log('No paso');
	}else{
		var newRow = document.createElement('tr');
		var increment = increment +1;
		newRow.className='myTr';
		newRow.innerHTML = `
		  <td>${ccnu}<input type="text" name="id_ccnu[]" id="ins-type-${increment}" hidden value="${ccnu}"></td>
		  <td>${esp}<input type="text" name="especificación[]" id="ins-subtype-${increment}" hidden value="${esp} "></td>
		  <td>${can}<input type="text" hidden name="cantidad[]" id="ins-pres-${increment}" value="${can}"></td>
		  <td>${cos}<input type="text" hidden name="costo_unitario[]" id="ins-pres-${increment}" value="${cos}"></td>
		  <td>${pret}<input type="text" hidden name="precio_total[]" id="ins-pres-${increment}" value="${pret}"></td>
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
