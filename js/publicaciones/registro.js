//TODO MAYUSCULA
function may(e){
	e.value = e.value.toUpperCase();
}
//SOLO NÚMEROS
function valideKey(evt){
	var code = (evt.which) ? evt.which : evt.keyCode;
	if(code==8) { // backspace.
		return true;
	}else if(code>=48 && code<=57) { // is a number.
		return true;
	}else{ // other keys.
		return false;
	}
}

//CRUD BANCO
	//GUARDAR BANCO
	function guardar_b(){
		var codigo_b = $("#codigo_b").val();
		var nombre_b = $("#nombre_b").val();

		if (codigo_b == '') {
			document.getElementById("codigo_b").focus();
		}else if(nombre_b == ''){
			document.getElementById("nombre_b").focus();
		}else {
			event.preventDefault();
			swal.fire({
				title: '¿Registrar?',
				text: '¿Esta seguro de Guardar?',
				type: 'warning',
				showCancelButton: true,
				confirmButtonColor: '#3085d6',
				cancelButtonColor: '#d33',
				cancelButtonText: 'Cancelar',
				confirmButtonText: '¡Si, guardar!'
			}).then((result) => {
				if (result.value == true) {
					event.preventDefault();
					var datos = new FormData($("#guardar_ba")[0]);
					//var base_url =window.location.origin+'/asnc/index.php/publicaciones/registrar_b';
					var base_url = '/index.php/publicaciones/registrar_b';
					$.ajax({
						url:base_url,
						method: 'POST',
						data: datos,
						contentType: false,
						processData: false,
						success: function(response){
							if(response != '') {
								swal.fire({
									title: 'Registro Exitoso',
									type: 'success',
									showCancelButton: false,
									confirmButtonColor: '#3085d6',
									confirmButtonText: 'Ok'
								}).then((result) => {
									if (result.value == true){
										location.reload();
									}
								});
							}
						}
					})
				}
			});
		}
	}
	//BUSCAR BANCO PARA EDITAR
	function modal_ver(id){
		var id_banco = id;
		//var base_url = window.location.origin+'/asnc/index.php/Publicaciones/consulta_b';
		var base_url = '/index.php/Publicaciones/consulta_b';
		$.ajax({
			url: base_url,
			method:'post',
			data: {id_banco: id_banco},
			dataType:'json',

			success: function(response){
				$('#id').val(response['id_banco']);
				$('#cod_banco_edit').val(response['codigo_b']);
				$('#nombre_banco_edit').val(response['nombre_b']);
			}
		});
	}
	//EDITAR BANCO
	function editar_b(){
		var id_banco = $("#id").val();
		var codigo_b = $("#cod_banco_edit").val();
		var nombre_b = $("#nombre_banco_edit").val();

		var datos = new FormData($("#editar")[0]);
		if (codigo_b == '') {
			document.getElementById("codigo_b").focus();
		}else if(nombre_b == ''){
			document.getElementById("nombre_b").focus();
		}else {
			event.preventDefault();
			swal.fire({
				title: 'Modificar?',
				text: '¿Esta seguro de Modificar este registro?',
				type: 'warning',
				showCancelButton: true,
				confirmButtonColor: '#3085d6',
				cancelButtonColor: '#d33',
				cancelButtonText: 'Cancelar',
				confirmButtonText: '¡Si, guardar!'
			}).then((result) => {
				if (result.value == true) {
					event.preventDefault();
					var datos = new FormData($("#editar")[0]);
					//var base_urls =window.location.origin+'/asnc/index.php/publicaciones/editar_b';
					var base_urls = '/index.php/publicaciones/editar_b';
					$.ajax({
						url: base_urls,
						method:'post',
						data: {id_banco: id_banco,
							codigo_b: codigo_b,
							nombre_b: nombre_b
						},
					dataType:'json',
						success: function(response){
							if(response != '') {
								swal.fire({
									title: 'Modificación Exitosa',
									type: 'success',
									showCancelButton: false,
									confirmButtonColor: '#3085d6',
									confirmButtonText: 'Ok'
								}).then((result) => {
									if (result.value == true){
										location.reload();
									}
								});
							}
						}
					})
				}
			});
		}
	}
	//ELIMINAR
	function eliminar_b(id){
		event.preventDefault();
		swal.fire({
			title: '¿Seguro que desea eliminar el registro?',
			type: 'warning',
			showCancelButton: true,
			confirmButtonColor: '#3085d6',
			cancelButtonColor: '#d33',
			cancelButtonText: 'Cancelar',
			confirmButtonText: '¡Si, guardar!'
		}).then((result) => {
			if (result.value == true) {
				var id_banco = id
				//var base_url =window.location.origin+'/asnc/index.php/publicaciones/eliminar_b';
				var base_url = '/index.php/publicaciones/eliminar_b';

				$.ajax({
					url:base_url,
					method: 'post',
					data:{
						id_banco: id_banco
					},
					dataType: 'json',
					success: function(response){
						if(response == 1) {
							swal.fire({
								title: 'Eliminación Exitosa',
								type: 'success',
								showCancelButton: false,
								confirmButtonColor: '#3085d6',
								confirmButtonText: 'Ok'
							}).then((result) => {
								if (result.value == true) {
									location.reload();
								}
							});
						}
					}
				})
			}
		});
	}
/////////
//CRUD CUENTA
	//GUARDAR
	function guardar_tc(){
		var tipo_cuenta = $("#tipo_cuenta").val();

		if (tipo_cuenta == '') {
			document.getElementById("tipo_cuenta").focus();
		}else{
			event.preventDefault();
			swal.fire({
				title: '¿Registrar?',
				text: '¿Esta seguro de Guardar?',
				type: 'warning',
				showCancelButton: true,
				confirmButtonColor: '#3085d6',
				cancelButtonColor: '#d33',
				cancelButtonText: 'Cancelar',
				confirmButtonText: '¡Si, guardar!'
			}).then((result) => {
				if (result.value == true) {
					event.preventDefault();
					var datos = new FormData($("#guardar_tcu")[0]);
					//var base_url =window.location.origin+'/asnc/index.php/publicaciones/registrar_tc';
					var base_url = '/index.php/publicaciones/registrar_tc';
					$.ajax({
						url:base_url,
						method: 'POST',
						data: datos,
						contentType: false,
						processData: false,
						success: function(response){
							if(response != '') {
								swal.fire({
									title: 'Registro Exitoso',
									type: 'success',
									showCancelButton: false,
									confirmButtonColor: '#3085d6',
									confirmButtonText: 'Ok'
								}).then((result) => {
									if (result.value == true){
										location.reload();
									}
								});
							}
						}
					})
				}
			});
		}
	}
	//BUSCAR BANCO PARA EDITAR
	function modal_ver_tc(id){
		var id_tipocuenta = id;
		//var base_url = window.location.origin+'/asnc/index.php/Publicaciones/consulta_tc';
		var base_url = '/index.php/Publicaciones/consulta_tc';
		$.ajax({
			url: base_url,
			method:'post',
			data: {id_tipocuenta: id_tipocuenta},
			dataType:'json',

			success: function(response){
				$('#id').val(response['id_tipocuenta']);
				$('#tipo_cuenta_edit').val(response['tipo_cuenta']);
			}
		});
	}
	//EDITAR BANCO
	function editar_tc(){
		var id_tipocuenta = $("#id").val();
		var tipo_cuenta = $("#tipo_cuenta_edit").val();

		if (tipo_cuenta == '') {
			document.getElementById("codigo_b").focus();
		}else {
			event.preventDefault();
			swal.fire({
				title: 'Modificar?',
				text: '¿Esta seguro de Modificar este registro?',
				type: 'warning',
				showCancelButton: true,
				confirmButtonColor: '#3085d6',
				cancelButtonColor: '#d33',
				cancelButtonText: 'Cancelar',
				confirmButtonText: '¡Si, guardar!'
			}).then((result) => {
				if (result.value == true) {
					event.preventDefault();
					var datos = new FormData($("#editar")[0]);
					//var base_urls =window.location.origin+'/asnc/index.php/publicaciones/editar_tc';
					var base_urls = '/index.php/publicaciones/editar_tc';
					$.ajax({
						url: base_urls,
						method:'post',
						data: {id_tipocuenta: id_tipocuenta,
							tipo_cuenta: tipo_cuenta
						},
					dataType:'json',
						success: function(response){
							if(response != '') {
								swal.fire({
									title: 'Modificación Exitosa',
									type: 'success',
									showCancelButton: false,
									confirmButtonColor: '#3085d6',
									confirmButtonText: 'Ok'
								}).then((result) => {
									if (result.value == true){
										location.reload();
									}
								});
							}
						}
					})
				}
			});
		}
	}
	//ELIMINAR
	function eliminar_tc(id){
		event.preventDefault();
		swal.fire({
			title: '¿Seguro que desea eliminar el registro?',
			type: 'warning',
			showCancelButton: true,
			confirmButtonColor: '#3085d6',
			cancelButtonColor: '#d33',
			cancelButtonText: 'Cancelar',
			confirmButtonText: '¡Si, guardar!'
		}).then((result) => {
			if (result.value == true) {
				var id_tipocuenta = id
				//var base_url =window.location.origin+'/asnc/index.php/publicaciones/eliminar_tc';
				var base_url = '/index.php/publicaciones/eliminar_tc';

				$.ajax({
					url:base_url,
					method: 'post',
					data:{
						id_tipocuenta: id_tipocuenta
					},
					dataType: 'json',
					success: function(response){
						if(response == 1) {
							swal.fire({
								title: 'Eliminación Exitosa',
								type: 'success',
								showCancelButton: false,
								confirmButtonColor: '#3085d6',
								confirmButtonText: 'Ok'
							}).then((result) => {
								if (result.value == true) {
									location.reload();
								}
							});
						}
					}
				})
			}
		});
	}
//CRUD DATOS BANCARIOS
	//GUARDAR BANCO
	function guardar_datosb(){
		var id_banco 		= $("#id_banco").val();
		var id_tipocuenta   = $("#id_tipocuenta").val();
		var n_cuenta 		= $("#n_cuenta").val();
		var beneficiario    = $("#beneficiario").val();

		if (id_banco == '0') {
			document.getElementById("id_banco").focus();
		}else if(id_tipocuenta == '0'){
			document.getElementById("id_tipocuenta").focus();
		}else if(n_cuenta == ''){
			document.getElementById("n_cuenta").focus();
		}else if(beneficiario == ''){
			document.getElementById("beneficiario").focus();
		}else {
			event.preventDefault();
			swal.fire({
				title: '¿Registrar?',
				text: '¿Esta seguro de Guardar?',
				type: 'warning',
				showCancelButton: true,
				confirmButtonColor: '#3085d6',
				cancelButtonColor: '#d33',
				cancelButtonText: 'Cancelar',
				confirmButtonText: '¡Si, guardar!'
			}).then((result) => {
				if (result.value == true) {
					event.preventDefault();
					var datos = new FormData($("#guardar_datosb")[0]);
					//var base_url =window.location.origin+'/asnc/index.php/publicaciones/registrar_datosb';
					var base_url = '/index.php/publicaciones/registrar_datosb';
					$.ajax({
						url:base_url,
						method: 'POST',
						data: datos,
						contentType: false,
						processData: false,
						success: function(response){
							if(response != '') {
								swal.fire({
									title: 'Registro Exitoso',
									type: 'success',
									showCancelButton: false,
									confirmButtonColor: '#3085d6',
									confirmButtonText: 'Ok'
								}).then((result) => {
									if (result.value == true){
										location.reload();
									}
								});
							}
						}
					})
				}
			});
		}
	}
	//BUSCAR BANCO PARA EDITAR
	function modal_ver(id_datob){
		var datos = id_datob;
		var dbanco = datos.split("/");
		id_datob = dbanco[0];
		id_banco = dbanco[1];
		id_tipocuenta = dbanco[2];

		//var base_url = window.location.origin+'/asnc/index.php/Publicaciones/consulta_datosb';
		var base_url = '/index.php/Publicaciones/consulta_datosb';

		//var base_url1 = window.location.origin+'/asnc/index.php/Publicaciones/consulta_bancoe';
		var base_url1 = '/index.php/Publicaciones/consulta_bancoe';

		//var base_url2 = window.location.origin+'/asnc/index.php/Publicaciones/consulta_tipocentae';
		var base_url2 = '/index.php/Publicaciones/consulta_tipocentae';

		//LLENA SELECT DENTRO DE MODAL DE BANCOS
		$.ajax({
			url:base_url1,
			method: 'post',
			data: {id_banco: id_banco},
			dataType: 'json',
			success: function(data){
				$('#id_banco_edit').find('option').not(':first').remove();
				$.each(data, function(index, response){
					$('#id_banco_edit').append('<option value="'+response['id_banco']+'">'+response['codigo_b']+' '+response['nombre_b']+'</option>');
				});
			}
		})
		//LLENA SELECT DENTRO DE MODAL DE TIPO DE CUENTA
		$.ajax({
			url:base_url2,
			method: 'post',
			data: {id_tipocuenta: id_tipocuenta},
			dataType: 'json',
			success: function(data){
				$('#id_tipocuenta_edit').find('option').not(':first').remove();
				$.each(data, function(index, response){
					$('#id_tipocuenta_edit').append('<option value="'+response['id_tipocuenta']+'">'+response['tipo_cuenta']+'</option>');
				});
			}
		})
		//LLENA EL MODAl
		$.ajax({
			url: base_url,
			method:'post',
			data: {id_datob: id_datob},
			dataType:'json',

			success: function(response){
				$('#id').val(response['id_datosb']);
				$('#ncuenta_edit').val(response['n_cuenta']);
				$('#beneficiario_edit').val(response['beneficiario']);
				$('#id_bancoc').val(response['id_banco']);
				$('#bancoc').val(response['nombre_b']);
				$('#id_tipocuentac').val(response['id_tipocuenta']);
				$('#tipocuentac').val(response['tipo_cuenta']);
			}
		});
	}
	//EDITAR BANCO
	function editar_datosb(){
		var id_datosb = $("#id").val();

		var id_bancoc = $("#id_bancoc").val();
		var id_banco_edit = $("#id_banco_edit").val();

		if (id_banco_edit == '0') {
			id_banco = id_bancoc
		}else{
			id_banco = id_banco_edit
		}

		var id_tipocuentac = $("#id_tipocuentac").val();
		var id_tipocuenta_edit = $("#id_tipocuenta_edit").val();

		if (id_tipocuenta_edit == '0') {
			id_tipocuenta = id_tipocuentac
		}else{
			id_tipocuenta = id_tipocuenta_edit
		}

		var ncuenta_edit = $("#ncuenta_edit").val();
		var beneficiario_edit = $("#beneficiario_edit").val();

		if (ncuenta_edit == '') {
			document.getElementById("ncuenta_edit").focus();
		}else if(beneficiario_edit == ''){
			document.getElementById("beneficiario_edit").focus();
		}else {
			event.preventDefault();
			swal.fire({
				title: 'Modificar?',
				text: '¿Esta seguro de Modificar este registro?',
				type: 'warning',
				showCancelButton: true,
				confirmButtonColor: '#3085d6',
				cancelButtonColor: '#d33',
				cancelButtonText: 'Cancelar',
				confirmButtonText: '¡Si, guardar!'
			}).then((result) => {
				if (result.value == true) {
					event.preventDefault();
					var datos = new FormData($("#editar")[0]);
					//var base_urls =window.location.origin+'/asnc/index.php/publicaciones/editar_datosb';
					var base_urls = '/index.php/publicaciones/editar_datosb';
					$.ajax({
						url: base_urls,
						method:'post',
						data: {id_datosb : id_datosb,
								id_banco : id_banco,
								id_tipocuenta : id_tipocuenta,
								ncuenta_edit : ncuenta_edit,
								beneficiario_edit : beneficiario_edit
						},
					dataType:'json',
						success: function(response){
							if(response != '') {
								swal.fire({
									title: 'Modificación Exitosa',
									type: 'success',
									showCancelButton: false,
									confirmButtonColor: '#3085d6',
									confirmButtonText: 'Ok'
								}).then((result) => {
									if (result.value == true){
										location.reload();
									}
								});
							}
						}
					})
				}
			});
		}
	}
	//ELIMINAR
	function eliminar_datosb(id){
		event.preventDefault();
		swal.fire({
			title: '¿Seguro que desea eliminar el registro?',
			type: 'warning',
			showCancelButton: true,
			confirmButtonColor: '#3085d6',
			cancelButtonColor: '#d33',
			cancelButtonText: 'Cancelar',
			confirmButtonText: '¡Si, guardar!'
		}).then((result) => {
			if (result.value == true) {
				var id_datosb = id
				//var base_url =window.location.origin+'/asnc/index.php/publicaciones/eliminar_datosb';
				var base_url = '/index.php/publicaciones/eliminar_datosb';

				$.ajax({
					url:base_url,
					method: 'post',
					data:{
						id_datosb: id_datosb
					},
					dataType: 'json',
					success: function(response){
						if(response == 1) {
							swal.fire({
								title: 'Eliminación Exitosa',
								type: 'success',
								showCancelButton: false,
								confirmButtonColor: '#3085d6',
								confirmButtonText: 'Ok'
							}).then((result) => {
								if (result.value == true) {
									location.reload();
								}
							});
						}
					}
				})
			}
		});
	}
/////////
//CRUD CUENTA
	//GUARDAR
	function guardar_modalidad(){
		var decr_modalidad = $("#decr_modalidad").val();

		if (decr_modalidad == '') {
			document.getElementById("decr_modalidad").focus();
		}else{
			event.preventDefault();
			swal.fire({
				title: '¿Registrar?',
				text: '¿Esta seguro de Guardar?',
				type: 'warning',
				showCancelButton: true,
				confirmButtonColor: '#3085d6',
				cancelButtonColor: '#d33',
				cancelButtonText: 'Cancelar',
				confirmButtonText: '¡Si, guardar!'
			}).then((result) => {
				if (result.value == true) {
					event.preventDefault();
					var datos = new FormData($("#guardar_modalidad")[0]);
					//var base_url =window.location.origin+'/asnc/index.php/publicaciones/registrar_modalidad';
					var base_url = '/index.php/publicaciones/registrar_modalidad';
					$.ajax({
						url:base_url,
						method: 'POST',
						data: datos,
						contentType: false,
						processData: false,
						success: function(response){
							if(response != '') {
								swal.fire({
									title: 'Registro Exitoso',
									type: 'success',
									showCancelButton: false,
									confirmButtonColor: '#3085d6',
									confirmButtonText: 'Ok'
								}).then((result) => {
									if (result.value == true){
										location.reload();
									}
								});
							}
						}
					})
				}
			});
		}
	}
	//BUSCAR BANCO PARA EDITAR
	function modal_ver_mod(id){
		var id_modalidad = id;
		//var base_url = window.location.origin+'/asnc/index.php/Publicaciones/consulta_mod';
		var base_url = '/index.php/Publicaciones/consulta_mod';
		$.ajax({
			url: base_url,
			method:'post',
			data: {id_modalidad: id_modalidad},
			dataType:'json',

			success: function(response){
				$('#id').val(response['id_modalidad']);
				$('#decr_modalidad_edit').val(response['decr_modalidad']);
			}
		});
	}
	//EDITAR BANCO
	function editar_m(){
		var id_modalidad = $("#id").val();
		var decr_modalidad = $("#decr_modalidad_edit").val();

		if (decr_modalidad == '') {
			document.getElementById("decr_modalidad").focus();
		}else {
			event.preventDefault();
			swal.fire({
				title: 'Modificar?',
				text: '¿Esta seguro de Modificar este registro?',
				type: 'warning',
				showCancelButton: true,
				confirmButtonColor: '#3085d6',
				cancelButtonColor: '#d33',
				cancelButtonText: 'Cancelar',
				confirmButtonText: '¡Si, guardar!'
			}).then((result) => {
				if (result.value == true) {
					event.preventDefault();
					//var base_urls =window.location.origin+'/asnc/index.php/publicaciones/editar_m';
					var base_urls = '/index.php/publicaciones/editar_m';
					$.ajax({
						url: base_urls,
						method:'post',
						data: {id_modalidad: id_modalidad,
							decr_modalidad: decr_modalidad
						},
					dataType:'json',
						success: function(response){
							if(response != '') {
								swal.fire({
									title: 'Modificación Exitosa',
									type: 'success',
									showCancelButton: false,
									confirmButtonColor: '#3085d6',
									confirmButtonText: 'Ok'
								}).then((result) => {
									if (result.value == true){
										location.reload();
									}
								});
							}
						}
					})
				}
			});
		}
	}
	//ELIMINAR
	function eliminar_m(id){
		event.preventDefault();
		swal.fire({
			title: '¿Seguro que desea eliminar el registro?',
			type: 'warning',
			showCancelButton: true,
			confirmButtonColor: '#3085d6',
			cancelButtonColor: '#d33',
			cancelButtonText: 'Cancelar',
			confirmButtonText: '¡Si, guardar!'
		}).then((result) => {
			if (result.value == true) {
				var id_modalidad = id
				//var base_url =window.location.origin+'/asnc/index.php/publicaciones/eliminar_m';
				var base_url = '/index.php/publicaciones/eliminar_m';

				$.ajax({
					url:base_url,
					method: 'post',
					data:{
						id_modalidad: id_modalidad
					},
					dataType: 'json',
					success: function(response){
						if(response == 1) {
							swal.fire({
								title: 'Eliminación Exitosa',
								type: 'success',
								showCancelButton: false,
								confirmButtonColor: '#3085d6',
								confirmButtonText: 'Ok'
							}).then((result) => {
								if (result.value == true) {
									location.reload();
								}
							});
						}
					}
				})
			}
		});
	}
//CRUD MECANISMO
	//GUARDAR
	function guardar_mec(){
		var id_modalidad = $("#id_modalidad").val();
		var descr_mecanismo = $("#descr_mecanismo").val();

		if (id_modalidad == '0') {
			document.getElementById("id_modalidad").focus();
		}else if(descr_mecanismo == ''){
			document.getElementById("descr_mecanismo").focus();
		}else {
			event.preventDefault();
			swal.fire({
				title: '¿Registrar?',
				text: '¿Esta seguro de Guardar?',
				type: 'warning',
				showCancelButton: true,
				confirmButtonColor: '#3085d6',
				cancelButtonColor: '#d33',
				cancelButtonText: 'Cancelar',
				confirmButtonText: '¡Si, guardar!'
			}).then((result) => {
				if (result.value == true) {
					event.preventDefault();
					var datos = new FormData($("#guardar_mec")[0]);
					//var base_url =window.location.origin+'/asnc/index.php/publicaciones/registrar_mec';
					var base_url = '/index.php/publicaciones/registrar_mec';
					$.ajax({
						url:base_url,
						method: 'POST',
						data: datos,
						contentType: false,
						processData: false,
						success: function(response){
							if(response != '') {
								swal.fire({
									title: 'Registro Exitoso',
									type: 'success',
									showCancelButton: false,
									confirmButtonColor: '#3085d6',
									confirmButtonText: 'Ok'
								}).then((result) => {
									if (result.value == true){
										location.reload();
									}
								});
							}
						}
					})
				}
			});
		}
	}
	//BUSCAR BANCO PARA EDITAR
	function modal_ver_mec(id){
		var datos = id;
		var dato = datos.split("/");
		id_mecanismo = dato[0];
		id_modalidad = dato[1];

		//var base_url = window.location.origin+'/asnc/index.php/Publicaciones/consulta_mec';
		var base_url = '/index.php/Publicaciones/consulta_mec';

		//var base_url1 = window.location.origin+'/asnc/index.php/Publicaciones/consulta_modalidades';
		var base_url1 = '/index.php/Publicaciones/consulta_modalidades';

		//LLENA SELECT DENTRO DE MODAL DE MECANISMO
		$.ajax({
			url:base_url1,
			method: 'post',
			data: {id_modalidad: id_modalidad},
			dataType: 'json',
			success: function(data){
				$('#id_modalidad_edit').find('option').not(':first').remove();
				$.each(data, function(index, response){
					$('#id_modalidad_edit').append('<option value="'+response['id_modalidad']+'">'+response['decr_modalidad']+'</option>');
				});
			}
		})

		$.ajax({
			url: base_url,
			method:'post',
			data: {id_mecanismo: id_mecanismo,
						id_modalidad: id_modalidad},
			dataType:'json',

			success: function(response){
				$('#id').val(response['id_mecanismo']);
				$('#id_modalidadc').val(response['id_modalidad']);
				$('#decr_modalidadc').val(response['decr_modalidad']);
				$('#decr_mecanismo_edit').val(response['decr_mecanismo']);
			}
		});
	}
	//EDITAR
	function editar_mec(){
		var id_mecanismo = $("#id").val();
		var id_modalidadc = $("#id_modalidadc").val();
		var id_modalidad_edit = $("#id_modalidad_edit").val();
		var decr_mecanismo = $("#decr_mecanismo_edit").val();

		if (id_modalidad_edit =='0') {
			id_modalidad = id_modalidadc
		}else{
			id_modalidad = id_modalidad_edit
		}

		if (decr_mecanismo_edit == '') {
			document.getElementById("decr_mecanismo_edit").focus();
		}else {
			event.preventDefault();
			swal.fire({
				title: 'Modificar?',
				text: '¿Esta seguro de Modificar este registro?',
				type: 'warning',
				showCancelButton: true,
				confirmButtonColor: '#3085d6',
				cancelButtonColor: '#d33',
				cancelButtonText: 'Cancelar',
				confirmButtonText: '¡Si, guardar!'
			}).then((result) => {
				if (result.value == true) {
					event.preventDefault();
					//var base_urls =window.location.origin+'/asnc/index.php/publicaciones/editar_mec';
					var base_urls = '/index.php/publicaciones/editar_mec';
					$.ajax({
						url: base_urls,
						method:'post',
						data: {id_mecanismo: id_mecanismo,
							   id_modalidad: id_modalidad,
							   decr_mecanismo: decr_mecanismo
						},
					dataType:'json',
						success: function(response){
							if(response != '') {
								swal.fire({
									title: 'Modificación Exitosa',
									type: 'success',
									showCancelButton: false,
									confirmButtonColor: '#3085d6',
									confirmButtonText: 'Ok'
								}).then((result) => {
									if (result.value == true){
										location.reload();
									}
								});
							}
						}
					})
				}
			});
		}
	}
	//ELIMINAR
	function eliminar_mec(id){
		event.preventDefault();
		swal.fire({
			title: '¿Seguro que desea eliminar el registro?',
			type: 'warning',
			showCancelButton: true,
			confirmButtonColor: '#3085d6',
			cancelButtonColor: '#d33',
			cancelButtonText: 'Cancelar',
			confirmButtonText: '¡Si, eliminar!'
		}).then((result) => {
			if (result.value == true) {
				var id_mecanismo = id
				//var base_url =window.location.origin+'/asnc/index.php/publicaciones/eliminar_mec';
				var base_url = '/index.php/publicaciones/eliminar_mec';

				$.ajax({
					url:base_url,
					method: 'post',
					data:{
						id_mecanismo: id_mecanismo
					},
					dataType: 'json',
					success: function(response){
						if(response == 1) {
							swal.fire({
								title: 'Eliminación Exitosa',
								type: 'success',
								showCancelButton: false,
								confirmButtonColor: '#3085d6',
								confirmButtonText: 'Ok'
							}).then((result) => {
								if (result.value == true) {
									location.reload();
								}
							});
						}
					}
				})
			}
		});
	}
//CRUD ACTIVIDAD
	function buscar_mec(){
		var id_modalidad = $('#id_modalidad').val();

		//var base_url = window.location.origin+'/asnc/index.php/Publicaciones/buscar_mec';
		var base_url = '/index.php/publicaciones/buscar_mec';
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
	//GUARDAR BANCO
	function guardar_act(){
		var id_modalidad 	= $("#id_modalidad").val();
		var id_mecanismo 	= $("#id_mecanismo").val();
		var id_obj_cont     = $("#id_obj_cont").val();
		var dias		 	= $("#dias").val();

		if (id_modalidad == '0') {
			document.getElementById("id_modalidad").focus();
		}else if(id_mecanismo == '0'){
			document.getElementById("id_mecanismo").focus();
		}else if(id_obj_cont == '0'){
			document.getElementById("nombrid_obj_conte_b").focus();
		}else if(dias == ''){
			document.getElementById("dias").focus();
		}else {
			event.preventDefault();
			swal.fire({
				title: '¿Registrar?',
				text: '¿Esta seguro de Guardar?',
				type: 'warning',
				showCancelButton: true,
				confirmButtonColor: '#3085d6',
				cancelButtonColor: '#d33',
				cancelButtonText: 'Cancelar',
				confirmButtonText: '¡Si, guardar!'
			}).then((result) => {
				if (result.value == true) {
					event.preventDefault();
					var datos = new FormData($("#guardar_act")[0]);
					//var base_url =window.location.origin+'/asnc/index.php/publicaciones/registrar_act';
					var base_url = '/index.php/publicaciones/registrar_act';
					$.ajax({
						url:base_url,
						method: 'POST',
						data: datos,
						contentType: false,
						processData: false,
						success: function(response){
							if(response != '') {
								swal.fire({
									title: 'Registro Exitoso',
									type: 'success',
									showCancelButton: false,
									confirmButtonColor: '#3085d6',
									confirmButtonText: 'Ok'
								}).then((result) => {
									if (result.value == true){
										location.reload();
									}
								});
							}
						}
					})
				}
			});
		}
	}
	//BUSCAR BANCO PARA EDITAR
	function modal_ver_act(id){
		var datos = id;
		var inf = datos.split("/");
		id_actividad = inf[0];
		id_modalidad = inf[1];
		id_mecanismo = inf[2];
		id_obj_cont  = inf[3];

		//var base_url = window.location.origin+'/asnc/index.php/Publicaciones/consulta_act';
		var base_url = '/index.php/Publicaciones/consulta_act';

		//var base_url1 = window.location.origin+'/asnc/index.php/Publicaciones/consulta_modalidades';
		var base_url1 = '/index.php/Publicaciones/consulta_modalidades';

		//var base_url2 = window.location.origin+'/asnc/index.php/Publicaciones/consulta_mecanismos';
		var base_url2 = '/index.php/Publicaciones/consulta_mecanismos';

		//var base_url3 = window.location.origin+'/asnc/index.php/Publicaciones/consulta_objconta';
		var base_url3 = '/index.php/Publicaciones/consulta_objconta';

		$.ajax({
			url: base_url1,
			method:'post',
			data: {id_modalidad: id_modalidad},
			dataType:'json',
			success: function(data){
				$('#id_modalidad_edit').find('option').not(':first').remove();
				$.each(data, function(index, response){
					$('#id_modalidad_edit').append('<option value="'+response['id_modalidad']+'">'+response['decr_modalidad']+'</option>');
				});
			}
		});

		$.ajax({
			url: base_url2,
			method:'post',
			data: {id_mecanismo: id_mecanismo},
			dataType:'json',

			success: function(data){
				$('#id_mecanismo_edit').find('option').not(':first').remove();
				$.each(data, function(index, response){
					$('#id_mecanismo_edit').append('<option value="'+response['id_mecanismo']+'">'+response['decr_mecanismo']+'</option>');
				});
			}
		});

		$.ajax({
			url: base_url3,
			method:'post',
			data: {id_obj_cont: id_obj_cont},
			dataType:'json',

			success: function(data){
				$('#id_obj_cont_edit').find('option').not(':first').remove();
				$.each(data, function(index, response){
					$('#id_obj_cont_edit').append('<option value="'+response['id_objeto_contrata']+'">'+response['desc_objeto_contrata']+'</option>');
				});
			}
		});

		$.ajax({
			url: base_url,
			method:'post',
			data: {id_actividad: id_actividad},
			dataType:'json',

			success: function(response){
				$('#id').val(response['id_actividad']);
				$('#id_modalidadc').val(response['id_modalidad']);
				$('#decr_modalidadc').val(response['decr_modalidad']);
				$('#id_mecanismoc').val(response['id_mecanismo']);
				$('#decr_mecanismoc').val(response['decr_mecanismo']);
				$('#id_obj_contc').val(response['id_obj_cont']);
				$('#id_obj_contc').val(response['id_obj_cont']);
				$('#desc_objeto_contratac').val(response['desc_objeto_contrata']);
				$('#dias_edit').val(response['dias']);
			}
		});
	}
	function editar_act(){
		var id_actividad = $("#id").val();
		var id_modalidadc = $("#id_modalidadc").val();
		var id_modalidad_edit = $("#id_modalidad_edit").val();
		var id_mecanismoc = $("#id_mecanismoc").val();
		var id_mecanismo_edit = $("#id_mecanismo_edit").val();
		var id_obj_contc = $("#id_obj_contc").val();
		var id_obj_cont_edit = $("#id_obj_cont_edit").val();
		var dias = $("#dias_edit").val();

		if (id_modalidad_edit == '0') {
			id_modalidad = id_modalidadc
		}else{
			id_modalidad = id_modalidad_edit
		}

		if (id_mecanismo_edit == '0') {
			id_mecanismo = id_mecanismoc
		}else{
			id_mecanismo = id_mecanismo_edit
		}

		if (id_obj_cont_edit == '0') {
			id_obj_cont = id_obj_contc
		}else{
			id_obj_cont = id_obj_cont_edit
		}

		if (dias_edit == '') {
			document.getElementById("dias_edit").focus();
		}else {
			event.preventDefault();
			swal.fire({
				title: 'Modificar?',
				text: '¿Esta seguro de Modificar este registro?',
				type: 'warning',
				showCancelButton: true,
				confirmButtonColor: '#3085d6',
				cancelButtonColor: '#d33',
				cancelButtonText: 'Cancelar',
				confirmButtonText: '¡Si, guardar!'
			}).then((result) => {
				if (result.value == true) {
					event.preventDefault();
					var datos = new FormData($("#editar")[0]);
					//var base_urls =window.location.origin+'/asnc/index.php/publicaciones/editar_act';
					var base_urls = '/index.php/publicaciones/editar_act';
					$.ajax({
						url: base_urls,
						method:'post',
						data: {id_actividad: id_actividad,
							id_modalidad: id_modalidad,
							id_mecanismo: id_mecanismo,
							id_obj_cont: id_obj_cont,
							dias: dias
						},
					dataType:'json',
						success: function(response){
							if(response != '') {
								swal.fire({
									title: 'Modificación Exitosa',
									type: 'success',
									showCancelButton: false,
									confirmButtonColor: '#3085d6',
									confirmButtonText: 'Ok'
								}).then((result) => {
									if (result.value == true){
										location.reload();
									}
								});
							}
						}
					})
				}
			});
		}
	}
	//ELIMINAR
	function eliminar_act(id){
		event.preventDefault();
		swal.fire({
			title: '¿Seguro que desea eliminar el registro?',
			type: 'warning',
			showCancelButton: true,
			confirmButtonColor: '#3085d6',
			cancelButtonColor: '#d33',
			cancelButtonText: 'Cancelar',
			confirmButtonText: '¡Si, guardar!'
		}).then((result) => {
			if (result.value == true) {
				var id_actividad = id
				//var base_url =window.location.origin+'/asnc/index.php/publicaciones/eliminar_act';
				var base_url = '/index.php/publicaciones/eliminar_act';

				$.ajax({
					url:base_url,
					method: 'post',
					data:{
						id_actividad: id_actividad
					},
					dataType: 'json',
					success: function(response){
						if(response == 1) {
							swal.fire({
								title: 'Eliminación Exitosa',
								type: 'success',
								showCancelButton: false,
								confirmButtonColor: '#3085d6',
								confirmButtonText: 'Ok'
							}).then((result) => {
								if (result.value == true) {
									location.reload();
								}
							});
						}
					}
				})
			}
		});
	}
