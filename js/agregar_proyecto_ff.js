
function agregar_ff(button) {
	var row = button.parentNode.parentNode;
  	var cells = row.querySelectorAll('td:not(:last-of-type)');
  	agregar_ffToCartTable(cells);
}

function remove_ff() {
	var row = this.parentNode.parentNode;
    document.querySelector('#target_ff tbody').removeChild(row);
	// var fd = $("#fecha_desde").val('0');
	// var fh = $("#fecha_hasta").val('0');
	// var par = $("#par_presupuestaria").val('0');
}

function agregar_ffToCartTable(cells){
	var pp = $("#par_presupuestaria").val();
	var pp1 = pp.split("/")[0];
   	var pp2 = pp.split("/")[1];

	var ff = $("#fuente_financiamiento").val();
	var ff1 = ff.split("/")[0];
   	var ff2 = ff.split("/")[1];
	var pc = $("#porcentaje").val();

	if (pp == 0 || ff == 0 || pc == 0){
		console.log('No paso');
	}else{
		var newRow = document.createElement('tr');
		var increment = increment +1;
		newRow.className='myTr';
		newRow.innerHTML = `
		<td>${pp2}<input type="text" name="par_presupuestaria[]" id="ins-type-${increment}" hidden value="${pp1}"></td>
		<td>${ff2}<input type="text" name="fuente_financiamiento[]" id="ins-type-${increment}" hidden value="${ff1}"></td>
		<td>${pc}<input type="text" name="porcentaje[]" id="ins-type-${increment}" hidden value="${pc}"></td>

		`;

		var cellremove_ffBtn = createCell();

		cellremove_ffBtn.appendChild(createremove_ffBtn())
		newRow.appendChild(cellremove_ffBtn);
		document.querySelector('#target_ff tbody').appendChild(newRow);
	}
}

function createremove_ffBtn() {
    var btnremove_ff = document.createElement('button');
    btnremove_ff.className = 'btn btn-xs btn-danger';
    btnremove_ff.onclick = remove_ff;
    btnremove_ff.innerText = 'Descartar';
    return btnremove_ff;
}

function createCell(text) {
	var td = document.createElement('td');
  if(text) {
  	td.innerText = text;
  }
  return td;
}
