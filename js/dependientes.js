$(document).ready(function(){

    $('#id_estado').change(function(){
        var id_estado = $(this).val();

        var base_url = window.location.origin+'/asnc/index.php/configuracion/listar_municipio';

        $.ajax({
            url: base_url,
            method:'post',
            data: {id_estado: id_estado},
            dataType:'json',

            success: function(response){

                $('#id_municipio').find('option').not(':first').remove();
                $('#id_parroquia').find('option').not(':first').remove();
                $.each(response, function(index, data){
                    $('#id_municipio').append('<option value="'+data['id_municipio']+'">'+data['descripcion']+'</option>');
                });
            }
        });
    });

    $('#id_municipio').change(function(){
        var id_municipio = $(this).val();
        var base_url = window.location.origin+'/asnc/index.php/configuracion/listar_parroquia';
        $.ajax({
            url: base_url,
            method:'post',
            data: {id_municipio: id_municipio},
            dataType:'json',

            success: function(response){

                $('#id_parroquia').find('option').not(':first').remove();

                $.each(response, function(index, data){
                    $('#id_parroquia').append('<option value="'+data['id_parroquia']+'">'+data['descripcion']+'</option>');
                });
            }
        });
    });

    // // CUENTA DANTE
    // $('#id_org').change(function(){
    //     var id_org = $(this).val();
    //     var base_url = window.location.origin+'/asnc/index.php/User/listar_entes';
    //     $.ajax({
    //         url: base_url,
    //         method:'post',
    //         data: {id_org: id_org},
    //         dataType:'json',
    //
    //         success: function(response){
    //             $('#id_ente').find('option').not(':first').remove();
    //             $.each(response, function(index, data){
    //                 $('#id_ente').append('<option value="'+data['id_entes']+'">'+data['desc_entes']+' / '+data['rif']+'</option>');
    //             });
    //         }
    //     });
    // });
    //
    // $('#id_ente').change(function(){
    //     var id_ente = $(this).val();
    //     var base_url = window.location.origin+'/asnc/index.php/User/listar_entesads';
    //     $.ajax({
    //         url: base_url,
    //         method:'post',
    //         data: {id_ente: id_ente},
    //         dataType:'json',
    //
    //         success: function(response){
    //             $('#id_ente_ads').find('option').not(':first').remove();
    //             $.each(response, function(index, data){
    //                 $('#id_ente_ads').append('<option value="'+data['id_entes_ads']+'">'+data['desc_entes_ads']+' / '+data['rif']+'</option>');
    //             });
    //         }
    //     });
    // });
});
