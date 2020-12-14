
function agregar_acc_ff(button) {
	var row = button.parentNode.parentNode;
  	var cells = row.querySelectorAll('td:not(:last-of-type)');
  	agregar_acc_ffToCartTable(cells);
}

function remove_ff_acc() {
	var row = this.parentNode.parentNode;
    document.querySelector('#target_acc_ff tbody').removeChild(row);
	// var fd = $("#fecha_desde").val('0');
	// var fh = $("#fecha_hasta").val('0');
	// var par = $("#par_presupuestaria").val('0');
}

function agregar_acc_ffToCartTable(cells){
	var pp = $("#par_presupuestaria_acc").val();
	var pp1 = pp.split("/")[0];
   	var pp2 = pp.split("/")[1];

	var estad = $("#id_estado_acc").val();
	var estad1 = estad.split("/")[0];
   	var estad2 = estad.split("/")[1];

	var ff = $("#fuente_financiamiento_acc").val();
	var ff1 = ff.split("/")[0];
   	var ff2 = ff.split("/")[1];

	var pc = $("#porcentaje_acc").val();

	var acti = $("#actividad_comercial_acc").val();
	var acti1 = acti.split("/")[0];
   	var acti2 = acti.split("/")[1];

	console.log(pp1);
	console.log(estad1);
	console.log(ff1);
	console.log(acti1);

	if (pp1 == 0 || estad1 == 0 || ff1 == 0|| acti1 == 0){
		console.log('No paso');
	}else{
		var newRow = document.createElement('tr');
		var increment = increment +1;
		newRow.className='myTr';
		newRow.innerHTML = `
		<td>${pp2}<input type="text" name="par_presupuestaria_acc_1[]" id="ins-type-${increment}" hidden value="${pp1}"></td>
		<td>${estad2}<input type="text" name="id_estado_acc[]" id="ins-type-${increment}" hidden value="${estad1}"></td>

		<td>${ff2}<input type="text" name="fuente_financiamiento_acc[]" id="ins-type-${increment}" hidden value="${ff1}"></td>
		<td>${pc}<input type="text" name="porcentaje_acc[]" id="ins-type-${increment}" hidden value="${pc}"></td>
		<td>${acti2}<input type="text" name="actividad_comercial_acc[]" id="ins-type-${increment}" hidden value="${acti1}"></td>

		`;

		var cellremove_ff_accBtn = createCell();

		cellremove_ff_accBtn.appendChild(createremove_ff_accBtn())
		newRow.appendChild(cellremove_ff_accBtn);
		document.querySelector('#target_acc_ff tbody').appendChild(newRow);
	}
}

function createremove_ff_accBtn() {
    var btnremove_ff_acc = document.createElement('button');
    btnremove_ff_acc.className = 'btn btn-xs btn-danger';
    btnremove_ff_acc.onclick = remove_ff_acc;
    btnremove_ff_acc.innerText = 'Descartar';
    return btnremove_ff_acc;
}

function createCell(text) {
	var td = document.createElement('td');
  if(text) {
  	td.innerText = text;
  }
  return td;
}
