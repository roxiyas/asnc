<div class="sidebar-bg"></div>
<div id="content" class="content">
    <div class="row">
        <div class="col-6 mb-3">
            <a class="btn btn-circle waves-effect btn-lg waves-circle waves-float btn-primary" href="javascript:history.back()"> Volver</a>
        </div>
        <div class="col-lg-12" id="imp1" >
         <div class="col-10 pull-left pull-left">

	          <img src="<?php echo base_url('Plantilla/img/membretesnc.png'); ?>" height="50"  />
        </div>

            <div class="panel panel-inverse">

                <br>
                <table class="table  style="border: hidden"">
                    <tbody>
                      <tr>
                      <td align="right" colspan="2" style="border: hidden">Nro Correlativo
                      </h5></td>
                        <td align="right"  style="border: hidden">
                          <h5><?= $consulta['nro_correlativo'] ?></h5>
                    </tr>
                    <tr>
                    <td align="center" colspan="3"  style="border: hidden"> <strong>COMPROBANTE DE INSCRIPCIÓN EN EL REGISTRO NACIONAL DE CONTRATISTAS </strong></td>
                  </tr>
                  <tr>
                  <td align="center" colspan="2"  style="border: hidden">Este Registro Nacional de Contratistas, hace constar que: </td>
                  <td align="rigth"   style="border: hidden"> <img src="<?php echo base_url('Plantilla/img/logosnc.png'); ?>" height="80"  /> </td>
                </tr>
                <tr>
                <td align="center" colspan="3"  style="border: hidden"><strong>INFORMACIÓN DEL CONTRATISTA </strong></td>
              </tr>
  <tr class="odd gradeX" style="text-align:center">
                            <th>Razón Social:</th>
                            <td><?=$consulta['nombre']?> </td>
                        </tr>
                        <tr class="odd gradeX" style="text-align:center">
                            <th>RIF:</th>
                            <td><?=$consulta['rifced']?> </td>
                        </tr>
                        <tr>


                				<td align="justify" colspan="3">Se encuentra HABILITADO para contratar con la Administración Pública Nacional, Estadal y Municipal en adquisición de bienes, servicios y ejecución de obras, de conformidad con lo previsto en el artículo 8 de la Ley Constitucional Contra la Guerra Económica para la Racionalidad y Uniformidad en la Adquisición de Bienes, Servicios y Obras Públicas, publicada en Gaceta Oficial de la República Bolivariana de Venezuela N° 40.398, de fecha 11 de enero de 2018 en concordancia con el artículo 47 del Decreto con Rango, Valor y Fuerza de Ley de Contrataciones Públicas, publicado en Gaceta Oficial de la República Bolivariana de Venezuela Extraordinario N° 6.154, de fecha 19 de noviembre de 2014, para el período:</td>
                			</tr>
                      <tr class="odd gradeX" style="text-align:center">
                          <th>Desde:</th>
                          <td><?=$consulta['fecinscrnc_at2']?> </td>
                      </tr>
                      <tr class="odd gradeX" style="text-align:center">
                          <th>Hasta:</th>
                          <td><?=$consulta['fecvencrnc_at2']?> </td>
                      </tr>
                      <tr class="odd gradeX" style="text-align:center">
                          <th>N° de Comprobante:</th>
                          <td><?=$consulta['numcertrnc2']?> </td>
                      </tr>
                      <tr>
                      <td align="justify" colspan="3">El contratista acepta someterse a lo establecido en el artículo 10 de la Ley Constitucional Contra la Guerra Económica para la Racionalidad y Uniformidad en la Adquisición de Bienes, Servicios y Obras Públicas, el cual establece lo siguiente. Artículo 10. Las personas naturales o jurídicas que presten declaraciones falsas para obtener el comprobante de inscripción a que se refiere el artículo precedente serán inhabilitados para contratar con el estado, por un plazo de diez (10) años. Si la inhabilitación recae sobre sujetos que poseen contrataciones en ejecución con el Estado, estas serán susceptibles de resolución unilateral por causas imputables al contratista o nulidad de esos contratos por parte del contratante, con fundamento a lo establecido en el Decreto con Rango, Valor y Fuerza de Ley de Contrataciones Públicas.</td>
                    </tr>
                    <tr>
                    <td align="center" colspan="3" style="border: hidden">Anthoni Camilo Torres.</td>
                  </tr>
                  <tr>
                  <td align="center" colspan="3" style="border: hidden">Director General.</td>
                </tr>
                <tr>
                <td align="center" colspan="3" style="border: hidden">"Resolución CCP/DGCJ N° 001/2014 de fecha 07 de enero de 2014, Publicada
                </td>
              </tr>
              <tr>
                <td align="center" colspan="3" style="border: hidden"> en la Gaceta Oficial de la República Bolivariana de Venezuela
                </td>
              </tr>
              <tr>
                <td align="center" colspan="3" style="border: hidden"> N° 40.334 de fecha 15 de enero de 2014"
                </td>
              </tr>
                                </tbody>
                </table>
                <div class="form-group col-3 pull-right pull-right">
                    <label>Fecha de Consulta:</label>
                    <h5><?php echo date("d-m-Y"); ?></h5>
                </div>
<br>

                <div class="form-group col-3 ">
                    <label>Firma electrónica de datos consultados:
XaN-cixoSyPa5Kyop8k-Ac7TzWROZ4iUzQmlhcayO9eGIi-9964
a132BUqtwdDIIDdT8BxYlAjIsd61Wnsqobpb01742NPUUjM2J21BhdUOcoRd3sZELb8yx5fAw+k5ch8-
Firmado electrónico por Anthoni Camilo Torres, avalado por la autoridad certificadora Fundación Instituto
de Ingeniería, adscrito a SUSCERTE
La validez del presente certificado debe ser consultado en la dirección electrónica www.snc.gob.ve y se
exhorta a todos los Órganos y Entes del Estado responsables de las contrataciones públicas a imprimir
un ejemplar a objeto de ser incorporado al expediente de la contratación o concurso a ejecutar.
</label>

                </div>


      </div>
      </div>
    </div>
    <div class="form-group col 12 text-center">
        <button class="btn btn-default mt-1 mb-1" type="button" id="print" onclick="printContent('imp1');" >Imprimir </button>


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
