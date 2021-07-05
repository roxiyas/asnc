<div class="sidebar-bg"></div>
<div id="content" class="content">
    <div class="row">
        <div class="col-6 mb-3">
            <a class="btn btn-circle waves-effect btn-lg waves-circle waves-float btn-primary" href="javascript:history.back()"> Volver</a>
        </div>
        <?                       //var_dump($mercantil['domfiscal'] );
        //  exit ($mercantil['domfiscal'] );
        ?>
       <div class="col-3 text-center">

        </div>
        <div class="col-lg-12" id="imp1" >
            <div class="panel panel-inverse">

                <br>
                <div class="form-group col-4">
                    <label>Número de Control del Certificado RNC</label>
                    <h5><?= $consulta['rifced'] ?></h5>
                </div>
                <br>
                <div class="panel-heading">
                    <h2 style="font-size: 16px;" class="panel-title text-center"><b>COMPROBANTE DE INSCRIPCIÓN EN EL REGISTRO NACIONAL DE CONTRATISTAS
</b></h2>
                </div>
                <div class="col-15 text-center">
                    <h6 style="font-size: 10px;" class="panel-title text-center"> Este Registro Nacional de Contratistas, hace constar que: </h6>

                </div>
                <div class="col-15 text-center">
                    <h4> <b style="font-size: 16px;" class="col-3 text-center"> INFORMACIÓN DEL CONTRATISTA </b></h4>

                </div>


                    <





















            <div class="form-group col 12 text-center">
                <button class="btn btn-default mt-1 mb-1" type="button" id="print" onclick="printContent('imp1');" >Imprimir Panilla Resumen</button>


            </div>
      </div>
      </div>
    </div>
            <script src="<?= base_url() ?>/js/contratista/contratista.js"></script>
            <script>
          function printContent(imp1){
          var restorepage = $('body').html();
          var printcontent = $('#' + imp1).clone();
          $('body').empty().html(printcontent);
          window.print();
          $('body').html(restorepage);
          }
          </script>
