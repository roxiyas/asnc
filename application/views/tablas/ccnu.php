<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
<div class="sidebar-bg"></div>
<div id="content" class="content">


    <div class="row">
		<div class="col-lg-12">
			<div class="panel panel-inverse" data-sortable-id="form-validation-1">
				<div class="panel-heading">
					<h4 class="panel-title">Nuevo CCNU</h4>
				</div>
				<div class="row">
             <div class="col-md-12 mt-2">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-outline-primary btn-sm" data-toggle="modal"
                    data-target="#exampleModal">
                    Nuevo
                </button>

                <!-- Modal insert -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Crear CCNU</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="" method="post" id="form">
                                    <div class="form-group">
                                        <label for="">Codigo del CCNU</label>
                                        <input type="text" class="form-control" id="codigo_ccnu">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Descripción del CCNU</label>
                                        <input type="text" class="form-control" id="desc_ccnu">
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                <button type="button" class="btn btn-primary" id="add">AGREGAR</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                <!-- Edit Modal -->
                <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Editar</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="" method="post" id="update_form">
                                    <input type="hidden" id="edit_modal_id">
                                    <div class="form-group">
                                        <label for="">Codigo CCNU</label>
                                        <input type="text" class="form-control" id="edit_codigo_ccnu">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Descripción del CCNU</label>
                                        <input type="text" class="form-control" id="edit_desc_ccnu">
                                    </div>
                                    
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                <button type="button" class="btn btn-primary" id="update">Editar</button>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
            <div class="row">
                    <div class="col-md-12 mt-3">
                        <table class="table" id="data-table-default" class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Codigo</th>
                                    <th>Descripción</th>
                                    <th>Acción</th>
                                </tr>
                            </thead>
                            <tbody id="tbody">

                            </tbody>
                        </table>
                    </div>
                </div>


</div>

    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>


<script>
    $(document).on('click', '#add', function(e) {
        e.preventDefault();
      //  alert("test");
       var codigo_ccnu = $("#codigo_ccnu").val();
       var desc_ccnu = $("#desc_ccnu").val();
       var id_usuario = 1; //esto debo arreglar
       var fecha = '12/15/2020'; //esto debo arreglar
       if (codigo_ccnu == "" || desc_ccnu == "" ) {
            alert("debe ingresar un dato, REQUERIDO");
        } else {
     //  alert(name);
                        $.ajax({
                            url: "<?=base_url()?>index.php/Fuentefinanc/saveccnu",
                            type: "post",
                            dataType: "json",
                            data: {
                                codigo_ccnu: codigo_ccnu,
                                desc_ccnu: desc_ccnu,
                                id_usuario: id_usuario,
                                fecha: fecha
                            
                            },
                            success: function(data) {
                                fetch();
                                if (data.response == "success") {
                                    
                                    $('#exampleModal').modal('hide')
                                    $("#form")[0].reset();
                                    Command: toastr["success"](data.message)

                                    toastr.options = {
                                        "closeButton": false,
                                        "debug": false,
                                        "newestOnTop": false,
                                        "progressBar": false,
                                        "positionClass": "toast-top-right",
                                        "preventDuplicates": false,
                                        "onclick": null,
                                        "showDuration": "300",
                                        "hideDuration": "1000",
                                        "timeOut": "5000",
                                        "extendedTimeOut": "1000",
                                        "showEasing": "swing",
                                        "hideEasing": "linear",
                                        "showMethod": "fadeIn",
                                        "hideMethod": "fadeOut"
                                    }
                                } else {
                                    Command: toastr["error"](data.message)

                                    toastr.options = {
                                        "closeButton": false,
                                        "debug": false,
                                        "newestOnTop": false,
                                        "progressBar": false,
                                        "positionClass": "toast-top-right",
                                        "preventDuplicates": false,
                                        "onclick": null,
                                        "showDuration": "300",
                                        "hideDuration": "1000",
                                        "timeOut": "5000",
                                        "extendedTimeOut": "1000",
                                        "showEasing": "swing",
                                        "hideEasing": "linear",
                                        "showMethod": "fadeIn",
                                        "hideMethod": "fadeOut"
                                    }
                                }
                                }
                        });
                    }
                   $("#form")[0].reset();

});
            function fetch() {
                                    $.ajax({
                                        url: "<?=base_url()?>index.php/Fuentefinanc/fetchccnu",
                                        type: "get",
                                        dataType: "json",
                                        success: function(data) {
                                            var i = 1;
                                            var tbody = "";
                                            for (var key in data) {
                                                tbody += "<tr>";
                                                tbody += "<td>" + i++ + "</td>";
                                                tbody += "<td>" + data[key]['codigo_ccnu'] + "</td>";
                                                tbody += "<td>" + data[key]['desc_ccnu'] + "</td>";
                                                tbody += `<td>
                                                                <a href="#" id="del" class="btn btn-sm btn-outline-danger" value="${data[key]['id_ccnu']}"><i class="fas fa-trash-alt"></i></a>
                                                                <a href="#" id="edit" class="btn btn-sm btn-outline-info" value="${data[key]['id_ccnu']}"><i class="fas fa-edit"></i></a>
                                                            </td>`;
                                                tbody += "<tr>";
                                            }

                                            $("#tbody").html(tbody);
                                        }
                                    });
                                }
                fetch();
                $(document).on("click", "#del", function(e) {
                            e.preventDefault();

                       // alert("delet");
                            var del_id = $(this).attr("value");
                           // alert(del_id);
                           if (del_id == "") {
                                alert("Delete id required");
                         } else {                           
                           
                            const swalWithBootstrapButtons = Swal.mixin({
                                customClass: {
                                    confirmButton: 'btn btn-success',
                                    cancelButton: 'btn btn-danger m-2'
                                },
                                buttonsStyling: false
                                })

                                swalWithBootstrapButtons.fire({
                                title: '¿Esta Seguro de borrar este Registro?',
                                text: "No se Podra revertir esta Acción!",
                                icon: 'warning',
                                showCancelButton: true,
                                confirmButtonText: 'Si, Borrar!',
                                cancelButtonText: 'No, Cancelar!',
                                reverseButtons: true
                                }).then((result) => {
                                    if (result.value) {

                                    $.ajax({
                                        url: "<?php echo base_url(); ?>index.php/Fuentefinanc/deleteccnu",
                                        type: "post",
                                        dataType: "json",
                                        data: {
                                            del_id: del_id
                                        },
                                        success: function(data) {
                                                fetch();
                                                if (data.response === 'success') {
                                                    swalWithBootstrapButtons.fire(
                                                        'BORRADO!',
                                                        'El Registro Fue Borrado Con Exito.',
                                                        'success'
                                                    )
                                                }
                                            }
                                        });

                                    }else if (
                                    /* Read more about handling dismissals below */
                                    result.dismiss === Swal.DismissReason.cancel
                                ) {
                                    swalWithBootstrapButtons.fire(
                                    'Cancelado',
                                    'El Registro esta salvo :)',
                                    'error'
                                    )
                                }
                                })    
                        }

    });

    $(document).on("click", "#edit", function(e) {
        e.preventDefault();
        var edit_id = $(this).attr("value");
           //alert(edit_id);
           if (edit_id == "") {
            alert("Edit id required");
        } 
        else {
            $.ajax({
                url: "<?php echo base_url(); ?>index.php/Fuentefinanc/editccnu",
                type: "post",
                dataType: "json",
                data: {
                    edit_id: edit_id
                },
                success: function(data) {
                    //console.log(data);
                    if (data.response === 'success') {
                        $('#editModal').modal('show');
                        $("#edit_modal_id").val(data.post.id_ccnu);
                        $("#edit_codigo_ccnu").val(data.post.codigo_ccnu);
                        $("#edit_desc_ccnu").val(data.post.desc_ccnu);
                      } else {
                                Command: toastr["error"](data.message)

                                toastr.options = {
                                    "closeButton": false,
                                    "debug": false,
                                    "newestOnTop": false,
                                    "progressBar": false,
                                    "positionClass": "toast-top-right",
                                    "preventDuplicates": false,
                                    "onclick": null,
                                    "showDuration": "300",
                                    "hideDuration": "1000",
                                    "timeOut": "5000",
                                    "extendedTimeOut": "1000",
                                    "showEasing": "swing",
                                    "hideEasing": "linear",
                                    "showMethod": "fadeIn",
                                    "hideMethod": "fadeOut"
                                }
                    }
                }
            });
        }
    });
    $(document).on("click", "#update", function(e) {
        e.preventDefault();
        var edit_id = $("#edit_modal_id").val();
        var edit_codigo_ccnu = $("#edit_codigo_ccnu").val();
        var edit_desc_ccnu = $("#edit_desc_ccnu").val();
        //alert(edit_id);
        if (edit_id == "" || edit_codigo_ccnu == "" || edit_desc_ccnu == "" ) {
            alert("debe ingresar un dato, REQUERIDO");
        } else {
                $.ajax({
                    url: "<?php echo base_url(); ?>index.php/Fuentefinanc/updateccnu",
                type: "post",
                dataType: "json",
                data: {
                    edit_id: edit_id,
                    edit_codigo_ccnu: edit_codigo_ccnu,
                    edit_desc_ccnu: edit_desc_ccnu
                   
                },
                success: function(data) {
                    fetch();
                   // console.log(data);
                   if (data.response === 'success') {
                        $('#editModal').modal('hide');
                        Command: toastr["success"](data.message)

                        toastr.options = {
                            "closeButton": false,
                            "debug": false,
                            "newestOnTop": false,
                            "progressBar": false,
                            "positionClass": "toast-top-right",
                            "preventDuplicates": false,
                            "onclick": null,
                            "showDuration": "300",
                            "hideDuration": "1000",
                            "timeOut": "5000",
                            "extendedTimeOut": "1000",
                            "showEasing": "swing",
                            "hideEasing": "linear",
                            "showMethod": "fadeIn",
                            "hideMethod": "fadeOut"
                        }
                    } 
                    else {
                        Command: toastr["error"](data.message)

                        toastr.options = {
                            "closeButton": false,
                            "debug": false,
                            "newestOnTop": false,
                            "progressBar": false,
                            "positionClass": "toast-top-right",
                            "preventDuplicates": false,
                            "onclick": null,
                            "showDuration": "300",
                            "hideDuration": "1000",
                            "timeOut": "5000",
                            "extendedTimeOut": "1000",
                            "showEasing": "swing",
                            "hideEasing": "linear",
                            "showMethod": "fadeIn",
                            "hideMethod": "fadeOut"
                        }
                    }
                }

                 });
        }
    });
</script>    
