$(document).ready(function(){
    $('#acc_cargar').change(function(){
        var acc_cargar = $(this).val();
        if (acc_cargar === '1') {
            $("#acc_s").hide();
            $("#proyecto_s").show();
        }else if (acc_cargar === '2') {
            $("#proyecto_s").hide();
            $("#acc_s").show();
        }
    });

    $("#precio_total").on({
        "focus": function (event) {
            $(event.target).select();
        },
        "keyup": function (event) {
            $(event.target).val(function (index, value ) {
                return value.replace(/\D/g, "")
                            .replace(/([0-9])([0-9]{2})$/, '$1,$2')
                            .replace(/\B(?=(\d{3})+(?!\d)\.?)/g, ".");
            });
        }
    });

    $("#costo_unitario_acc").on({
        "focus": function (event) {
            $(event.target).select();
        },
        "keyup": function (event) {
            $(event.target).val(function (index, value ) {
                return value.replace(/\D/g, "")
                            .replace(/([0-9])([0-9]{2})$/, '$1,$2')
                            .replace(/\B(?=(\d{3})+(?!\d)\.?)/g, ".");
            });
        }
    });

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

});
