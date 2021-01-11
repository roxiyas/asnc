function guardar_proy(){
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

            $.ajax(window.location.origin+'/asnc/index.php/Programacion/save_programacion', function(data) {
                   alert(data);
            });

            // var base_url =window.location.origin+'/asnc/index.php/Programacion/save_programacion';
            // $.ajax({
            //     url:base_url,
            //     method: 'post',
            //     // data:{
            //     //     id_items_proy: id_items_proy
            //     // },
            //     dataType: 'json',
            //     success: function(response){
            //         if(response == 1) {
            //             swal.fire({
            //                 title: 'Eliminación Exitosa',
            //                 type: 'success',
            //                 showCancelButton: false,
            //                 confirmButtonColor: '#3085d6',
            //                 confirmButtonText: 'Ok'
            //             }).then((result) => {
            //                 if (result.value == true) {
            //                     location.reload();
            //                 }
            //             });
            //         }
            //     }
            // })
        }
    });
}
