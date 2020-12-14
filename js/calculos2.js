$(document).ready(function(){
    $('#actividad_comercial').change(function(){
        var actividad_comercial = $(this).val();

        var cod_act = actividad_comercial.split("/")[0];
        var des_act = actividad_comercial.split("/")[1];

        if(cod_act == '1'){
                // Ocultar
                $("#fecha_desdee").hide();
                $("#fecha_hastaa").hide();
                $("#costo_unitariod").hide();
                $("#calcular_otros").hide();
                // Mostrar
                $("#ccnu").show();
                $("#esp").show();
                $("#uni_med").show();
                $("#cant_dis").show();

                $("#i").show();
                $("#ii").show();
                $("#iii").show();
                $("#iv").show();
                $("#cant_total_distr").show();
                $("#costo_unitariod").show();

                $("#pre_tot").show();
                $("#alic").show();
                $("#iva_est").show();
                $("#mont_est").show();
                $("#estimados").show();

                $("#calcular_bienes").show();

                $("#agregar").show();
                $("#otros").show();

        }else{
                // Ocultar
                $("#monto_total_cantidadd").hide();
                $("#calcular_bienes").hide();

                // Mostrar
                $("#ccnu").show();
                $("#fecha_desdee").show();
                $("#fecha_hastaa").show();
                $("#esp").show();
                $("#uni_med").show();
                $("#cant_dis").show();

                $("#i").show();
                $("#ii").show();
                $("#iii").show();
                $("#iv").show();
                $("#cant_total_distr").show();
                $("#costo_unitariod").show();

                $("#pre_tot").show();
                $("#alic").show();
                $("#iva_est").show();
                $("#mont_est").show();
                $("#estimados").show();
                $("#calcular_otros").show();
                $("#agregar").show();
                $("#otros").show();
        }
    });
});
