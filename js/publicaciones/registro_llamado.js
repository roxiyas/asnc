function llenar(){
	var id_modalidad = $('#id_modalidad').val();

	//var base_url = window.location.origin+'/asnc/index.php/Publicaciones/buscar_mec';
	var base_url = '/index.php/Publicaciones/buscar_mec';
	$.ajax({
		url: base_url,
		method:'post',
		data: {id_modalidad: id_modalidad},
		dataType:'json',

		success: function(response){
			$('#id_mecanismo').find('option').not(':first').remove();
			$.each(response, function(index, data){
				$('#id_mecanismo').append('<option value="'+data['id_mecanismo']+'">'+data['decr_mecanismo']+'</option>');
			});
		}
	});
}

function llenarca(){
	var id_modalidad = $('#id_modalidad').val();
	var id_mecanismo = $('#id_mecanismo').val();
	var id_obj_cont	 = $('#id_obj_cont').val();

	//var base_url = window.location.origin+'/asnc/index.php/Publicaciones/buscar_act';
	var base_url = '/index.php/Publicaciones/buscar_act';

	$.ajax({
		url: base_url,
		method:'post',
		data: {id_modalidad: id_modalidad,
			   id_mecanismo: id_mecanismo,
			   id_obj_cont: id_obj_cont},
		dataType:'json',

		success: function(response){
			$('#id_actividad').find('option').not(':first').remove();
			$.each(response, function(index, data){
				$('#id_actividad').append('<option value="'+data['id_actividad']+'">'+data['dias']+'</option>');
			});
		}
	});
}

function verificar(){
	var check = document.getElementById('inlineCssCheckbox2').checked;
	if (check == true) {
		$("#datos1").show();
	}else{
		$("#datos1").hide();
	}
}

function verificar2(){
	var check = document.getElementById('inlineCssCheckbox3').checked;
	if (check == true) {
		$("#datos2").show();
	}else{
		$("#datos2").hide();
	}
}
