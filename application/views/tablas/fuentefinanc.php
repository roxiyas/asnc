<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- Toastr -->
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.6.1/css/buttons.bootstrap4.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap4.min.css"/>

<div class="sidebar-bg"></div>
<div id="content" class="content">
    <div class="row">
		<div class="col-lg-12">
			<div class="panel panel-inverse" data-sortable-id="form-validation-1">
				<div class="panel-heading">
					<h4 class="panel-title">Nueva Fuente de Fianciamiento</h4>
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
                                <h5 class="modal-title" id="exampleModalLabel">Crear Fuente de Financiamiento</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="" method="post" id="form">
                                    <div class="form-group">
                                        <label for="">desc_fuente_financiamiento</label>
                                        <input type="text" class="form-control" id="desc_fuente_financiamiento">
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
                                        <label for="">Descripción</label>
                                        <input type="text" class="form-control" id="edit_desc_fuente_financiamiento">
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
            <div class="col-md-12 mt-4">
            <div class="table-responsive">
                        <table class="table" id="records">
                        <thead>
                            <tr>
                            <th>Número de fila</th>
                            <th>Descripción</th>
                            <th>Acción</th>
                            </tr>
                        </thead>
                        </table>
                     </div>
                 </div>
            </div>


</div>
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <!-- Toastr -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <!-- Font Awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0/js/all.min.js"></script>
    <!-- DataTables -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.1/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.bootstrap4.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.flash.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.html5.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.print.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap4.min.js"></script>

    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    
<script>
    $(document).on('click', '#add', function(e) {
        e.preventDefault();
      //  alert("test");
       var desc_fuente_financiamiento = $("#desc_fuente_financiamiento").val();
       var id_usuario = 1; //esto debo arreglar
       var fecha = '12/15/2020'; //esto debo arreglar
       if (desc_fuente_financiamiento == "" ) {
            alert("debe ingresar un dato, REQUERIDO");
        } else {
     //  alert(name);
                        $.ajax({
                            url: "<?=base_url()?>index.php/Fuentefinanc/save",
                            type: "post",
                            dataType: "json",
                            data: {
                                desc_fuente_financiamiento: desc_fuente_financiamiento,
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
                                        url: "<?=base_url()?>index.php/Fuentefinanc/fetch",
                                        type: "post",
                                        dataType: "json",
                                        success: function(data) {
                                          //  console.log(data);
                                           // if (data.responce == "success") {

                                                    var i = "1";
                                                    $('#records').DataTable( {
                                                        "data": data.posts,
                                                        "columns": [
                                                              { "render": function(){
                                                                 return a = i++;
                                                               } },
                                                            { "data": "desc_fuente_financiamiento" },
                                                            { "render": function ( data, type, row, meta ) {
                                                                var a = `
                                    <a href="#" value="${row.id_fuente_financiamiento}" id="del" class="btn btn-sm btn-outline-danger"><i class="fas fa-trash"></i></a>
                                    <a href="#" value="${row.id_fuente_financiamiento}" id="edit" class="btn btn-sm btn-outline-success"><i class="fas fa-edit"></i></a>
                            `;
                                                                return a;
                                                            } }
                                                        ]
                                                    } );                
                                                    //}else{
                                                   // toastr["error"](data.message);
                                                   
                                                    }

                                                   // }
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
                                        url: "<?php echo base_url(); ?>index.php/Fuentefinanc/delete",
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
                url: "<?php echo base_url(); ?>index.php/Fuentefinanc/edit",
                type: "post",
                dataType: "json",
                data: {
                    edit_id: edit_id
                },
                success: function(data) {
                    //console.log(data);
                    if (data.response === 'success') {
                        $('#editModal').modal('show');
                        $("#edit_modal_id").val(data.post.id_fuente_financiamiento);
                        $("#edit_desc_fuente_financiamiento").val(data.post.desc_fuente_financiamiento);
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
        var edit_desc_fuente_financiamiento = $("#edit_desc_fuente_financiamiento").val();
        //alert(edit_id);
        if (edit_id == "" || edit_desc_fuente_financiamiento == "" ) {
            alert("debe ingresar un dato, REQUERIDO");
        } else {
                $.ajax({
                    url: "<?php echo base_url(); ?>index.php/Fuentefinanc/update",
                type: "post",
                dataType: "json",
                data: {
                    edit_id: edit_id,
                    edit_desc_fuente_financiamiento: edit_desc_fuente_financiamiento,
                   
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
