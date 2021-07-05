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
                <div class="panel-heading">
                    <h3 style="font-size: 16px;" class="panel-title text-center"><b>INFORMACIÓN DE LA EMPRESA
                            REGISTRADA</b></h3>
                </div>
                <div class="col-15 text-center">
                    <h4> <b style="color:red;" class="col-3 text-center"> <?= $rifced['descedocont'] ?> </b></h4>

                </div>

                <div class="panel-heading">
                    <h2 style="font-size: 16px;" class="panel-title text-center"><b>Infomación en el RNC</b></h2>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="form-group col-4">
                            <h5><b>Número de Certificado:</b></h5>
                            </div>
                            <div class="form-group col-6">
                            <h5><?= $rifced['numcertrnc2'] ?></h5>
                        </div>
                        <div class="form-group col-4">
                            <h5><b>Inscripción en el RNC:</b></h5>
                        </div>
                        <div class="form-group col-6">
                            <h5><?= date("d-m-Y", strtotime($rifced['fecinscrnc_at2'])) ?></h5>
                        </div>
                        <div class="form-group col-4">
                            <h5><b>Vencimiento en el RNC:</b></h5>
                        </div>
                        <div class="form-group col-3">
                          <h5><?= date("d-m-Y ", strtotime($rifced['fecvencrnc_at2'])) ?></h5>
                        </div>
                        <div class="form-group col-6">
                            <h5><b>Oficina Registro Auxiliar o Unico:</b></h5>
                            <h5></h5>
                        </div>

                    </div>
                </div>
                <div class="panel-heading">
                    <h2 style="font-size: 16px;" class="panel-title text-center"><b>Datos Generales de la Empresa</b>
                    </h2>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="form-group col-2">
                            <h5><b>Rif del Contratista:</b></h5>
                            <h5><?= $rifced['rifced'] ?></h5>
                        </div>
                        <div class="form-group col-4">
                            <h5><b>Nombre y Apellido o Razón Social:</b></h5>
                            <h5><?= $rifced['nombre'] ?></h5>
                        </div>
                        <div class="form-group col-2">
                            <h5><b>Tipo de Persona:</b></h5>
                            <h5><?php if ($rifced['tipopersona'] == 'J') {
                                    echo "Persona Jurídica";
                                } else {
                                    echo "Persona Natural";
                                } ?></h5>
                        </div>
                        <div class="form-group col-2">
                            <h5><b>Denominación Comercial:</b></h5>
                            <h5><?= $rifced['descdencom'] ?></h5>
                        </div>
                        <div class="form-group col-2">
                            <h5><b>Siglas:</b></h5>
                            <h5><?= $rifced['siglas'] ?></h5>
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="form-group col-2">
                            <h5><b>Nómina Promedio Anual:</b></h5>
                            <h5><?= $rifced['nomprom'] ?></h5>
                        </div>
                        <div class="form-group col-4">
                            <h5><b>Empresa de Seguro:</b></h5>
                            <h5><?php if ($rifced['empseguro'] == 0) {
                                    echo "NO";
                                } else {
                                    echo "SI";
                                } ?></h5>
                        </div>
                        <div class="form-group col-4">
                            <h5><b>Empresa del Vigilancia y Seguridad:</b></h5>
                            <h5><?php if ($rifced['vigilancia'] == 0) {
                                    echo "NO";
                                } else {
                                    echo "SI";
                                } ?></h5>
                        </div>
                        <div class="form-group col-2">
                            <h5><b>Fabricante de Prendas Militares:</b></h5>
                            <h5><?php if ($rifced['prendamilitar'] == 0) {
                                    echo "NO";
                                } else {
                                    echo "SI";
                                } ?></h5>
                        </div>
                        <div class="form-group col-2">
                            <h5><b>Objeto Principal de la Empresa:</b></h5>
                            <h5><?= $rifced['descobjcont'] ?></h5>
                        </div>
                        <div class="form-group col-2">
                            <h5><b>Proveedor</b></h5>
                            <div class="col-md-3">
                                <div class="form-group col-2">
                                    <label><b>Fabricante</b></label>
                                    <h6><?php if ($rifced['provf'] == 't') {
                                            echo "SI";
                                        } else {
                                            echo "NO";
                                        } ?></h6>
                                </div>
                                <div class="form-group col-2">
                                    <label><b>Distribuidor</b></label>
                                    <h6><?php if ($rifced['provd'] == 't') {
                                            echo "SI";
                                        } else {
                                            echo "NO";
                                        } ?></h6>
                                </div>
                                <div class="form-group col-2">
                                    <label><b>Distribuidor Autorizado</b></label>
                                    <h6><?php if ($rifced['prova'] == 't') {
                                            echo "SI";
                                        } else {
                                            echo "NO";
                                        } ?></h6>
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-2">
                            <h5><b>Obras</b></h5>
                            <div class="col-md-3">
                                <div class="form-group col-1">
                                    <label><b>Obras</b></label>
                                    <h6><?php if ($rifced['obras'] == 't') {
                                            echo "SI";
                                        } else {
                                            echo "NO";
                                        } ?></h6>
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-5">
                            <h5><b>Servicios</b></h5>
                            <div class="col-md-3">
                                <div class="form-group col-1">
                                    <label><b>Servicio </b></label>
                                    <h6><?php if ($rifced['servn'] == 't') {
                                            echo "SI";
                                        } else {
                                            echo "NO";
                                        } ?></h6>
                                </div>
                                <div class="form-group col-1">
                                    <label><b>Servicio Autorizado </b></label>
                                    <h6><?php if ($rifced['serva'] == 't') {
                                            echo "SI";
                                        } else {
                                            echo "NO";
                                        } ?></h6>
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-10">
                            <h5><b>Información de Domicilio Principal:</b></h5>

                        </div>
                        <div class="form-group col-4">
                            <h5><b>Sector/Zona/URb:</b></h5>
                            <h5><?= $rifced['dir1'] ?></h5>
                        </div>
                        <div class="form-group col-3">
                            <h5><b>Cale/Esquina/Av:</b></h5>
                            <h5><?= $rifced['dir2'] ?></h5>
                        </div>
                        <div class="form-group col-4">
                            <h5><b>Edif./Quinta/Residencia:</b></h5>
                            <h5><?= $rifced['dir3'] ?></h5>
                        </div>
                        <div class="form-group col-2">
                            <h5><b>Nro./Piso/Ofic:</b></h5>
                            <h5><?= $rifced['dir4'] ?></h5>
                        </div>
                        <div class="form-group col-2">
                            <h5><b>Punto de Referencia:</b></h5>
                            <h5><?= $rifced['ptoref'] ?></h5>
                        </div>
                        <div class="form-group col-2">
                            <h5><b>Estado:</b></h5>
                            <h5><?= $rifced['descedo'] ?></h5>
                        </div>
                        <div class="form-group col-2">
                            <h5><b>Ciudad:</b></h5>
                            <h5><?= $rifced['descciu'] ?></h5>
                        </div>
                        <div class="form-group col-2">
                            <h5><b>Municipio:</b></h5>
                            <h5><?= $rifced['descmun'] ?></h5>
                        </div>
                        <div class="form-group col-3">
                            <h5><b>Parroquia:</b></h5>
                            <h5><?= $rifced['descparro'] ?></h5>

                        </div>
                        <div class="form-group col-12">
                            <h5><b>Información de Contacto:</b></h5>
                        </div>
                        <div class="form-group col-2">
                            <h5><b>Persona Contacto:</b></h5>
                            <h5><?= $rifced['percontacto'] ?></h5>
                        </div>
                        <div class="form-group col-2">
                            <h5><b>Teléfono Fijo o Móvil:</b></h5>
                            <h5><?= $rifced['telf1'] ?></h5>
                        </div>
                        <div class="form-group col-2">
                            <h5><b>Teléfono Móvil:</b></h5>
                            <h5><?= $rifced['telf2'] ?></h5>
                        </div>
                        <div class="form-group col-3">
                            <h5><b>Fax o Telefax:</b></h5>
                            <h5><?= $rifced['telf3'] ?></h5>
                        </div>
                        <div class="form-group col-5">
                            <h5><b>Correo Electrónico:</b></h5>
                            <h5><?= $rifced['email'] ?></h5>
                        </div>
                        <div class="form-group col-2">
                            <h5><b>Página Web:</b></h5>
                            <h5><?= $rifced['website'] ?></h5>
                        </div>

                    </div>

                    <div class="panel-heading">
                        <h2 style="font-size: 16px;" class="panel-title text-center"><b>Acta Constitutiva y Modificaciones Estatutarias</b>
                        </h2>
                    </div>
                    <div class="panel-title text-center">

                        <table class="table  style="border: hidden"">
                            <thead style="background:#FFFFFF">
                                <tr class="text-center">
                                    <th>Descripción</th>
                                    <th>Tipo de Registro</th>
                                    <th>Circunscripción</th>
                                    <th>Nro. de Registro</th>
                                    <th>Fecha de Registro</th>
                                    <th>Tomo</th>
                                    <th>Folio</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($proceso_id as $lista):?>
                                <tr class="odd gradeX" style="text-align:center">
                                    <td><?=$lista['descmodif']?> </td>
                                    <td><?=$lista['descrm']?> </td>
                                    <td><?=$lista['desccirjudicial']?> </td>
                                    <td><?=$lista['numreg']?> </td>
                                    <td><?=date("d-m-Y ", strtotime($lista['fecreg_at']))?> </td>
                                    <td><?=$lista['tomo']?> </td>
                                    <td><?=$lista['folio']?> </td>
                                </tr>
                                <?php endforeach;?>
                            </tbody>
                        </table>

                    </div>

                    <div class="panel-heading">
                        <h5 style="font-size: 16px;" class="panel-title text-center"><b>Información del Registro Mercantil</b></h5>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="form-group col-10">
                                <h5><b>Dirección Fiscal:</b></h5>
                                <h5><?= $mercantil['domfiscal'] ?></h5>
                            </div>
                            <div class="form-group col-12">
                                <h5><b>Objeto Social:</b></h5>
                                <h5><?= $mercantil['objsocial'] ?></h5>
                            </div>
                            <div class="form-group col-12">
                                <h5><b>Duración de la Empresa Actual:</b></h5>
                                <h5><?= date("d-m-Y ", strtotime($mercantil['fecduremp_at']))  ?></h5>
                            </div>
                            <div class="form-group col-12">
                                <h5><b>Duración de la Junta Directiva Actual:</b></h5>
                                <h5><?= date("d-m-Y ", strtotime($mercantil['fecdurjd_at']))  ?></h5>
                            </div>
                            <div class="form-group col-12">
                                <h5><b>Cierre Fiscal Actual:</b></h5>
                                <h5><?= $mercantil['diaciefcal'] ?>/ <?= $mercantil['mesciefcal'] ?></h5>
                            </div>
                            <div class="form-group col-12">
                                <h5><b>Capital Social Suscrito Actual:</b></h5>
                                <h5>BsF.<?= number_format($mercantil['capsusc'], 2, ".", ",") ?></h5>
                            </div>
                            <div class="form-group col-12">
                                <h5><b>Capital Social Pagado Actual:</b></h5>
                                <h5>BsF.<?= number_format($mercantil['cappagado'], 2, ".", ",") ?></h5>
                            </div>
                        </div>
                    </div>
                    <div class="panel-heading">
                        <h5 style="font-size: 16px;" class="panel-title text-center"><b>Accionistas, Miembros de la Junta Directiva y Representantes Legales</b></h5>
                    </div>
                    <div class="panel-title text-center">

                        <table class="table  style="border: hidden"">
                            <thead style="background:#FFFFFF">
                                <tr class="text-center">
                                    <th>Nombres y Apellidos</th>
                                    <th>C.I o Pasaporte</th>
                                    <th>Acc</th>
                                    <th>J.D</th>
                                    <th>R.L</th>
                                    <th>% de Acciones</th>
                                    <th>Cargo</th>
                                    <th>Obligación</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($accionistas as $lista):?>
                                <tr class="odd gradeX" style="text-align:center">
                                    <td><?=$lista['apeacc']?>,<?=$lista['nomacc']?> </td>
                                    <td>V-<?=$lista['cedrif']?> </td>
                                    <td><?php if ($lista['acc'] == '1') {
                                            echo "SI";
                                        } else {
                                            echo "NO";
                                        } ?> </td>
                                    <td><?php if ($lista['jd'] == '1') {
                                            echo "SI";
                                        } else {
                                            echo "NO";
                                        } ?></td>
                                    <td><?php if ($lista['rl'] == '1') {
                                            echo "SI";
                                        } else {
                                            echo "NO";
                                        } ?> </td>
                                        <td><?=$lista['porcacc']?> </td>
                                        <td><?=$lista['cargo']?> </td>
                                        <td><?php if ($lista['tipobl'] == 'FS') {
                                                echo "Firmas Separadas";
                                            }  ?></td>

                                </tr>

                                <?php endforeach;?>
                                <tr class="odd gradeX" style="text-align:center">
                                    <td> </td><td> </td><td> </td><td> </td>
                                </tr>
                                <tr class="odd gradeX" style="text-align:center">
                                    <td> </td><td> </td><td> </td><td> </td>
                                </tr>
                                <tr class="odd gradeX" style="text-align:center">
                                    <td> </td><td> </td><td> </td><td> </td>
                                </tr>
                                <tr class="odd gradeX" style="text-align:center">
                                    <td> </td><td> </td><td> </td><td> </td>
                                </tr>
                                <tr class="odd gradeX" style="text-align:center">
                                    <td> </td><td> </td><td> </td><td> </td>
                                </tr>
                                <tr class="odd gradeX" style="text-align:center">
                                    <td> </td><td> </td><td> </td><td> </td>
                                </tr>
                                <tr class="odd gradeX" style="text-align:center">
                                    <td> </td><td> </td><td> </td><td> </td>
                                </tr>
                                <tr class="odd gradeX" style="text-align:center">
                                    <td> </td><td> </td><td> </td><td> </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>


                    <div class="panel-heading">
                        <h5 style="font-size: 16px;" class="panel-title text-center"><b>Comisario(s) de la Empresa</b></h5>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                          <div class="panel-title text-center">

                              <table class="table  style="border: hidden"">
                                  <thead style="background:#FFFFFF">
                                      <tr class="text-center">
                                          <th>Nombres y Apellidos</th>
                                          <th>C.I </th>
                                          <th>Tipo de Comisario</th>
                                          <th>Nro. Colegiado</th>
                                          <th>Vigente Hasta</th>

                                      </tr>
                                  </thead>
                                  <tbody>
                                      <?php foreach($comisarios as $lista):?>
                                      <tr class="odd gradeX" style="text-align:center">
                                          <td><?=$lista['nomcom']?>,<?=$lista['apecom']?> </td>
                                          <td>V-<?=$lista['cedcom']?> </td>
                                          <td><?php if ($lista['tipocom'] == 'CPC') {
                                                  echo "Contador Público Colegiado";
                                              }  ?> </td>

                                              <td><?=$lista['cpc']?> </td>
                                              <td><?=date("d-m-Y ", strtotime($lista['fecdurcom_at']))?> </td>
                                      </tr>
                                      <tr class="odd gradeX" style="text-align:center">
                                          <td> </td><td> </td><td> </td>
                                      </tr>
                                      <?php endforeach;?>
                                  </tbody>
                              </table>
                          </div>
                        </div>
                      </div>
                    <div class="panel-heading">
                        <h5 style="font-size: 16px;" class="panel-title text-center"><b>Actividades y Productos del Catálogo de Clasificación de Compras del Estado</b></h5>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                          <div class="panel-title text-center">

                              <table class="table  style="border: hidden"">
                                  <thead style="background:#FFFFFF">
                                      <tr class="text-center">
                                          <th>Descripción de las Actividades</th>
                                          <th>Experiencia</th>
                                          <th>Principal</th>
                                          <th>Tipo</th>
                                          <th>Descripción del Producto</th>
                                          <th>Información del Producto </th>
                                          <th>Tipo de Relación</th>
                                          </tr>

                                  </thead>
                                  <tbody>
                                      <?php foreach($actividad as $lista):?>
                                      <tr class="odd gradeX" style="text-align:center">
                                          <td><?=$lista['segmento_id']?>|<?=$lista['desc_seg_mostrar']?> </td>
                                          <td><?=$lista['anoexp']?> <?php if ($lista['tipexp'] == 'A') {
                                                  echo "AÑOS";
                                              } else {
                                                  echo "Meses";
                                              } ?></td>
                                          <td><?php if ($lista['principal'] == 'f') {
                                                  echo "NO";
                                              } else {
                                                  echo "SI";
                                              } ?>
                                             </td>
                                          <td><?php if ($lista['tipo'] == 'S') {
                                                  echo "Obras y/o Servicios";
                                              } else {
                                                  echo "Bienes";
                                              } ?>
                                             </td>
                                         <td><?=$lista['articulo_id']?>|<?=$lista['desc_arti_mostrar']?> </td>
                                         <td><?=$lista['infoprod']?> </td>
                                         <td><?=$lista['desctiprel']?> </td>
                                        </tr>
                                      <?php endforeach;?>
                                  </tbody>

                              </table>
                          </div>
                        </div>
                    </div>
                    <div class="panel-heading">
                        <h5 style="font-size: 16px;" class="panel-title text-center"><b>Relación de Obras y/o Servicios</b></h5>
                    </div>
                    <div class="row">
                      <div class="panel-title text-center">

                          <table class="table  style="border: hidden"">
                              <thead style="background:#FFFFFF">
                                  <tr class="text-center">
                                      <th>Clientes</th>
                                      <th>Número de Contrato</th>
                                      <th>Obra o servicio</th>
                                      <th>Fecha Inicio</th>
                                      <th>Fecha Final</th>
                                      <th>Ejecutado</th>
                                    </tr>
                              </thead>
                              <tbody>
                                  <?php foreach($obraservicio as $lista):?>
                                  <tr class="odd gradeX" style="text-align:center">
                                      <td><?=$lista['cliente']?> </td>
                                      <td><?=$lista['numcontrato']?> </td>
                                      <td><?=$lista['obraserv']?> </td>
                                      <td><?=date("d-m-Y ", strtotime($lista['fecini_at']))?></td>
                                     <td><?=date("d-m-Y ", strtotime($lista['fecfin_at']))?> </td>
                                     <td><?=$lista['porcejec']?>% </td>
                                    </tr>
                                  <?php endforeach;?>
                              </tbody>

                          </table>
                      </div>
                    </div>
                    <div class="panel-heading">
                        <h5 style="font-size: 16px;" class="panel-title text-center"><b>Relación de Clientes</b></h5>
                    </div>
                    <div class="row">
                      <div class="panel-title text-center">

                          <table class="table  style="border: hidden"">
                              <thead style="background:#FFFFFF">
                                  <tr class="text-center">
                                      <th>Cliente</th>
                                      <th>Número de Contrato</th>
                                      <th>Objeto del Contrato</th>
                                      <th>Persona Contacto</th>
                                      <th>Teléfono</th>
                                      <th>Descripción del Producto</th>
                                    </tr>
                              </thead>
                              <tbody>
                                  <?php foreach($relservicio as $lista):?>
                                  <tr class="odd gradeX" style="text-align:center">
                                      <td><?=$lista['cliente']?> </td>
                                      <td><?=$lista['numcontrato']?> </td>
                                      <td><?=$lista['objcontrato']?> </td>
                                      <td><?=$lista['replegal']?> </td>
                                      <td><?=$lista['telf1']?></td>
                                     <td><?=$lista['prodrel']?> </td>
                                    </tr>
                                  <?php endforeach;?>
                              </tbody>

                          </table>
                      </div>
                    </div>
                    <div class="panel-heading">
                        <h5 style="font-size: 16px;" class="panel-title text-center"><b>Informes de Distribución</b></h5>
                    </div>
                    <div class="row">
                      <div class="panel-title text-center">

                          <table class="table  style="border: hidden"">
                              <thead style="background:#FFFFFF">
                                  <tr class="text-center">
                                      <th>Producto</th>
                                      <th>Marca</th>
                                      <th>Capacidad de Almacenaje</th>
                                      <th>Mercadeo del Producto</th>
                                    </tr>
                              </thead>
                              <tbody>
                                  <?php foreach($inforproduc as $lista):?>
                                  <tr class="odd gradeX" style="text-align:center">
                                      <td><?=$lista['desc_arti_mostrar']?> </td>
                                      <td><?=$lista['marca']?> </td>
                                      <td><?=$lista['capalm']?> </td>
                                      <td><?=$lista['total']?>% </td>
                                      </tr>
                                  <?php endforeach;?>
                              </tbody>

                          </table>
                      </div>
                    </div>
                    <div class="panel-heading">
                        <h1 style="font-size: 16px;" class="panel-title text-center">Dictamen de Auditoría</h1>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="form-group col-7">
                              <h5><b>Apellidos del Contador Público Colegiado:</b></h5>
                                </div>
                                <div class="form-group col-2">
                                <h5><?= $consultadictamen['apecont'] ?></h5>
                                </div>
                                <div class="form-group col-7">
                                    <h5><b>Nombres del Contador Público Colegiado:</b></h5>
                                </div>
                                <div class="form-group col-2">
                                    <h5><?= $consultadictamen['nomcont'] ?></h5>
                                </div>
                                <div class="form-group col-7">
                                    <h5><b>Cedula del Contador Público Colegiado:</b></h5>
                                </div>
                                <div class="form-group col-2">
                                  <h5><?= $consultadictamen['cedcont'] ?></h5>
                                </div>
                                <div class="form-group col-7">
                                    <h5><b>Número del Contador Público Colegiado (CPC):</b></h5>
                                </div>
                                <div class="form-group col-2">
                                      <h5><?= $consultadictamen['cpc'] ?></h5>
                                </div>
                                <div class="form-group col-7">
                                    <h5><b>Fecha del Dictamen:</b></h5>
                                </div>
                                <div class="form-group col-2">
                                      <h5><?= date("d-m-Y ", strtotime($consultadictamen['fecha_at'])) ?></h5>
                                </div>
                                <div class="form-group col-7">
                                    <h5><b>Nombre de la firma de la Auditoría:</b></h5>
                                </div>
                                <div class="form-group col-2">
                                      <h5><?= $consultadictamen['firmaaudit'] ?></h5>
                                </div>
                                <div class="form-group col-7">
                                      <h5><b>Presenta Dictamen de opinión Limpia:</b></h5>
                                </div>
                                <div class="form-group col-2">
                                  <h5><?php if ($consultadictamen['opilimpia'] == '1') {
                                          echo "SI";
                                      } else {
                                          echo "NO";
                                      } ?>
                                    </h5>
                                </div>
                                <div class="form-group col-7">
                                      <h5><b>Presenta Dictamen de Absteción de Opinión:</b></h5>
                                </div>
                                <div class="form-group col-2">
                                  <h5><?php if ($consultadictamen['abstopinion'] == '1') {
                                          echo "SI";
                                      } else {
                                          echo "NO";
                                      } ?>
                                    </h5>
                                </div>
                                <div class="form-group col-7">
                                      <h5><b>Opinión con Salvedad:</b></h5>
                                </div>
                                <div class="form-group col-2">
                                    <h5><?= $consultadictamen['opinion'] ?></h5>
                                </div>

                        </div>
                    </div>
                  <div class="panel-heading">
                        <h5 style="font-size: 16px;" class="panel-title text-center"><b>Balance General de Cierre</b></h5>
                    </div>
                    <div class="row">
                        <div class="form-group col-4">
                          <h5><b>Fecha del Balance:</b></h5>
                            </div>
                            <div class="form-group col-6">
                            <h5><?= date("d-m-Y ", strtotime($consulta_Balance['fecbalgen_at'])) ?></h5>
                        </div>
                        <div class="form-group col-4">
                            <h5><b>¿Es Balance de Apertura?:</b></h5>
                        </div>
                        <div class="form-group col-6">
                          <h5><?php if ($consulta_Balance['apertura'] == '1') {
                                  echo "SI";
                              } else {
                                  echo "NO";
                              } ?>
                              </h5>
                        </div>
                        <div class="form-group col-4">
                            <h5><b>Tuvo Actididad Económica:</b></h5>
                        </div>
                        <div class="form-group col-3">
                          <h5><?php if ($consulta_Balance['actecon'] == '1') {
                                  echo "SI";
                              } else {
                                  echo "NO";
                              } ?></h5>
                        </div>
                        <div class="form-group col-6">
                              <h5><b>Los Valores del Balance están a Costos Históricos:</b></h5>
                            <h5></h5>
                        </div>
                        <div class="form-group col-6">
                          <h5><?php if ($consulta_Balance['costohist'] == '1') {
                                  echo "SI";
                              } else {
                                  echo "NO";
                              } ?></h5>
                            </div>

                    </div>
                    <div class="panel-heading">
                        <h1 style="font-size: 16px;" class="panel-title text-center">ACTIVOS</h1>
                    </div>
                    <div class="panel-heading">
                        <h1 style="font-size: 16px;" class="panel-title text-center">ACTIVO CIRCULANTE</h1>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="form-group col-4">
                                <h5><b>Efecivo en Caja Y Banco:</b></h5>
                                </div>
                            <div class="form-group col-4">
                                <h5></b></h5>
                            </div>
                            <div class="form-group col-2"> </div>
                            <div class="form-group col-2">
                            <h5><b><?= number_format($consulta_Balance['caja_banco'], 2, ".", ",") ?></b></h5>
                            </div>
                            <div class="form-group col-8">
                                <h5><b>Inversiones Temporales:</b></h5>
                                </div>

                            <div class="form-group col-2"> </div>
                            <div class="form-group col-2">
                            <h5><b><?= number_format($consulta_Balance['invtemp'], 2, ".", ",") ?></b></h5>
                            </div>
                            <div class="form-group col-8">
                                <h5><b>Cuentas por Cobrar Comerciales:</b></h5>
                                </div>
                            <div class="form-group col-2"> </div>
                            <div class="form-group col-2">
                            <h5><b><?= number_format($consulta_Balance['cxccom'], 2, ".", ",") ?></b></h5>
                            </div>
                            <div class="form-group col-8">
                                <h5><b>(Provisión Para Cuentas Incobrales):</b></h5>
                                </div>
                            <div class="form-group col-2"> </div>
                            <div class="form-group col-2">
                            <h5><b><?= number_format($consulta_Balance['provctasinco'], 2, ".", ",") ?></b></h5>
                            </div>
                            <div class="form-group col-4">
                                <h5><b>Cuentas por Cobrar Neto:</b></h5>
                                </div>
                            <div class="form-group col-4">
                                <h5></b></h5>
                            </div>
                            <div class="form-group col-2"> </div>
                            <div class="form-group col-2">
                            <h5><b><?= number_format($consulta_Balance['cxcneto'], 2, ".", ",") ?></b></h5>
                            </div>
                            <div class="form-group col-4">
                                <h5><b>Retenciones por Cobrar:</b></h5>
                                </div>
                                <div class="form-group col-4">
                                    <h5></b></h5>
                                </div>
                                <div class="form-group col-2"> </div>
                                <div class="form-group col-2">
                            <h5><b><?= number_format($consulta_Balance['retxcobrar'], 2, ".", ",") ?></b></h5>
                            </div>
                            <div class="form-group col-6">
                                <h5><b>Otras Cuentas por Cobrar:</b></h5>
                                </div>

                                <div class="form-group col-2">
                                    <h5></b></h5>
                                </div>
                                <div class="form-group col-2"> </div>
                                <div class="form-group col-2">
                            <h5><b><?= number_format($consulta_Balance['otrcxc'], 2, ".", ",") ?></b></h5>
                            </div>
                            <div class="form-group col-4">
                                <h5><b>Efectos por Cobrar:</b></h5>
                                </div>

                                <div class="form-group col-4">
                                    <h5></b></h5>
                                </div>
                                <div class="form-group col-2"> </div>
                                <div class="form-group col-2">
                            <h5><b><?= number_format($consulta_Balance['efectos_cobrar'], 2, ".", ",") ?></b></h5>
                            </div>
                            <div class="form-group col-4">
                                <h5><b>(Efectos por Cobrar Descontados):</b></h5>
                                </div>
                                <div class="form-group col-4">
                                    <h5></b></h5>
                                </div>
                                <div class="form-group col-2"> </div>
                                <div class="form-group col-2">
                              <h5><b><?= number_format($consulta_Balance['efectos_desc'], 2, ".", ",") ?></b></h5>
                            </div>
                            <div class="form-group col-4">
                                <h5><b>Efectos por Cobrar Descontados Neto:</b></h5>
                                </div>
                                <div class="form-group col-4">
                                    <h5></b></h5>
                                </div>
                                <div class="form-group col-2"> </div>
                                <div class="form-group col-2">
                              <h5><b><?= number_format($consulta_Balance['efectos_neto'], 2, ".", ",") ?></b></h5>
                            </div>
                            <div class="form-group col-4">
                                <h5><b>Inventarios:</b></h5>
                                </div>
                            <div class="form-group col-4"><h5></b></h5></div>
                            <div class="form-group col-2"> </div>
                            <div class="form-group col-2">
                              <h5><b><?= number_format($consulta_Balance['inventarios'], 2, ".", ",") ?></b></h5>
                            </div>
                            <div class="form-group col-4">
                                <h5><b>Anticipos Otorgados:</b></h5>
                                </div>
                            <div class="form-group col-4"><h5></b></h5></div>
                            <div class="form-group col-2"> </div>
                            <div class="form-group col-2">
                              <h5><b><?= number_format($consulta_Balance['antotorgados'], 2, ".", ",") ?></b></h5>
                            </div>
                            <div class="form-group col-4">
                                <h5><b>Gastos Prepagados:</b></h5>
                                </div>
                            <div class="form-group col-4"><h5></b></h5></div>
                            <div class="form-group col-2"> </div>
                            <div class="form-group col-2">
                              <h5><b><?= number_format($consulta_Balance['gastprepagados'], 2, ".", ",") ?></b></h5>
                            </div>
                            <div class="form-group col-4">
                                <h5><b>Otros Activos Circulantes:</b></h5>
                                </div>
                            <div class="form-group col-4"><h5></b></h5></div>
                            <div class="form-group col-2"> </div>
                            <div class="form-group col-2">
                              <h5><b><?= number_format($consulta_Balance['otractcirc'], 2, ".", ",") ?></b></h5>
                            </div>
                            <div class="form-group col-4"><h5></b></h5></div>
                            <div class="form-group col-6">
                                  <h5>TOTAL ACTIVO CIRCULANTE:</h5>
                                  </div>
                                  <div class="form-group col-1">
                              <h5><b><?= number_format($consulta_Balance['totactcirc'], 2, ".", ",") ?></b></h5>
                            </div>
                        </div>
                    </div>
                    <div class="panel-heading">
                        <h1 style="font-size: 16px;" class="panel-title text-center">PROPIEDAD, PLANTA Y EQUIPOS</h1>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="form-group col-4">
                                <h5><b>Edificaciones:</b></h5>
                                </div>
                            <div class="form-group col-4">
                                <h5></b></h5>
                            </div>
                            <div class="form-group col-2"> </div>
                            <div class="form-group col-2">
                            <h5><b><?= number_format($consulta_Balance['edif'], 2, ".", ",") ?></b></h5>
                            </div>
                            <div class="form-group col-8">
                                <h5><b>Maquinarias Y Equipo:</b></h5>
                                </div>

                            <div class="form-group col-2"> </div>
                            <div class="form-group col-2">
                            <h5><b><?= number_format($consulta_Balance['maqequipos'], 2, ".", ",") ?></b></h5>
                            </div>
                            <div class="form-group col-4">
                                <h5><b>Mobiliario y Vehículo:</b></h5>
                                </div>
                            <div class="form-group col-4">
                                <h5></b></h5>
                            </div>
                            <div class="form-group col-2"> </div>
                            <div class="form-group col-2">
                            <h5><b><?= number_format($consulta_Balance['mobvehiculos'], 2, ".", ",") ?></b></h5>
                            </div>
                            <div class="form-group col-4">
                                <h5><b>(Depreciación Acumulada):</b></h5>
                                </div>
                                <div class="form-group col-4">
                                    <h5></b></h5>
                                </div>
                                <div class="form-group col-2"> </div>
                                <div class="form-group col-2">
                            <h5><b><?= number_format($consulta_Balance['depacum'], 2, ".", ",") ?></b></h5>
                            </div>
                            <div class="form-group col-6">
                                <h5><b>Propiedades, Plantas y Equipos Neto:</b></h5>
                                </div>

                                <div class="form-group col-2">
                                    <h5></b></h5>
                                </div>
                                <div class="form-group col-2"> </div>
                                <div class="form-group col-2">
                            <h5><b><?= number_format($consulta_Balance['ppe_neto'], 2, ".", ",") ?></b></h5>
                            </div>
                            <div class="form-group col-4">
                                <h5><b>Terrenos:</b></h5>
                                </div>

                                <div class="form-group col-4">
                                    <h5></b></h5>
                                </div>
                                <div class="form-group col-2"> </div>
                                <div class="form-group col-2">
                            <h5><b><?= number_format($consulta_Balance['terrenos'], 2, ".", ",") ?></b></h5>
                            </div>
                            <div class="form-group col-4">
                                <h5><b>Construcciones en Proceso :</b></h5>
                                </div>
                                <div class="form-group col-4">
                                    <h5></b></h5>
                                </div>
                                <div class="form-group col-2"> </div>
                                <div class="form-group col-2">
                              <h5><b><?= number_format($consulta_Balance['constproc'], 2, ".", ",") ?></b></h5>
                            </div>
                            <div class="form-group col-4">
                                <h5><b>Otras Propiedades, Plantas y Equipos:</b></h5>
                                </div>
                                <div class="form-group col-4">
                                    <h5></b></h5>
                                </div>
                                <div class="form-group col-2"> </div>
                                <div class="form-group col-2">
                              <h5><b><?= number_format($consulta_Balance['otrppe'], 2, ".", ",") ?></b></h5>
                            </div>
                            <div class="form-group col-4">
                                <h5><b>     TOTAL PROPIEDAD, PLANTA Y EQUIPOS:</b></h5>
                                </div>
                            <div class="form-group col-4"><h5></b></h5></div>
                            <div class="form-group col-2"> </div>
                            <div class="form-group col-2">
                              <h5><b><?= number_format($consulta_Balance['totppe'], 2, ".", ",") ?></b></h5>
                            </div>
                            </div>
                            </div>
                            <div class="panel-heading">
                                <h1 style="font-size: 16px;" class="panel-title text-center">OTROS ACTIVOS</h1>
                            </div>
                            <div class="panel-body">
                                <div class="row">
                            <div class="form-group col-4">
                                <h5><b>Inversiones Acciones:</b></h5>
                                </div>
                            <div class="form-group col-4"><h5></b></h5></div>
                            <div class="form-group col-2"> </div>
                            <div class="form-group col-2">
                              <h5><b><?= number_format($consulta_Balance['invacciones'], 2, ".", ",") ?></b></h5>
                            </div>
                            <div class="form-group col-4">
                                <h5><b>Inversiones Bonos:</b></h5>
                                </div>
                            <div class="form-group col-4"><h5></b></h5></div>
                            <div class="form-group col-2"> </div>
                            <div class="form-group col-2">
                              <h5><b><?= number_format($consulta_Balance['invbonos'], 2, ".", ",") ?></b></h5>
                            </div>
                            <div class="form-group col-4">
                                <h5><b>Otras Inversiones a Largo Plazo:</b></h5>
                                </div>
                            <div class="form-group col-4"><h5></b></h5></div>
                            <div class="form-group col-2"> </div>
                            <div class="form-group col-2">
                              <h5><b><?= number_format($consulta_Balance['otrinvlp'], 2, ".", ",") ?></b></h5>
                            </div>
                            <div class="form-group col-9">
                                <h5><b>Cuentas Por Cobrar a Largo Plazo:</b></h5>
                                </div>
                            <div class="form-group col-4"><h5></b></h5></div>


                              <div class="form-group col-6">
                                  <h5><b>Comerciales:</b></h5>
                                  </div>
                                  <div class="form-group col-2">
                              <h5><b><?= number_format($consulta_Balance['cxclpcom'], 2, ".", ",") ?></b></h5>
                            </div>
                              <div class="form-group col-4"><h5></b></h5></div>
                            <div class="form-group col-6">
                                <h5><b>     Accionistas y Empleados:</b></h5>
                                </div>
                                <div class="form-group col-2">
                            <h5><b><?= number_format($consulta_Balance['cxclpaccemp'], 2, ".", ",") ?></b></h5>
                          </div>
                          <div class="form-group col-4"><h5></b></h5></div>
                          <div class="form-group col-6">
                              <h5><b>Compañís Relacionadas:</b></h5>
                              </div>
                              <div class="form-group col-2">
                          <h5><b><?= number_format($consulta_Balance['cxclpcomprel'], 2, ".", ",") ?></b></h5>
                        </div>



                        </div>
                    </div>
                    <div class="panel-heading">
                        <h1 style="font-size: 16px;" class="panel-title text-center">CARGOS DIFERIDOS</h1>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                    <div class="form-group col-4">
                        <h5><b>Dépositos en Garantia:</b></h5>
                        </div>
                    <div class="form-group col-4"><h5></b></h5></div>
                    <div class="form-group col-2"> </div>
                    <div class="form-group col-2">
                      <h5><b><?= number_format($consulta_Balance['depgarantia'], 2, ".", ",") ?></b></h5>
                    </div>
                    <div class="form-group col-4">
                        <h5><b>Otros Activos:</b></h5>
                        </div>
                    <div class="form-group col-4"><h5></b></h5></div>
                    <div class="form-group col-2"> </div>
                    <div class="form-group col-2">
                      <h5><b><?= number_format($consulta_Balance['otractivos'], 2, ".", ",") ?></b></h5>
                    </div>
                    <div class="form-group col-4"><h5></b></h5></div>
                    <div class="form-group col-4">
                        <h5><b>TOTAL OTROS ACTIVOS:</b></h5>
                        </div>

                    <div class="form-group col-2"> </div>
                    <div class="form-group col-2">
                      <h5><b><?= number_format($consulta_Balance['tototractivos'], 2, ".", ",") ?></b></h5>
                    </div>
                    <div class="form-group col-4"><h5></b></h5></div>
                    <div class="form-group col-6">
                          <h5><b>TOTAL ACTIVOS:</b></h5>
                          </div>
                          <div class="form-group col-2">
                      <h5><b><?= number_format($consulta_Balance['totactivos'], 2, ".", ",") ?></b></h5>
                    </div>
                      <div class="form-group col-4"><h5></b></h5></div>
                    <div class="form-group col-6">
                        <h5><b>    PASIVO Y PATRIMONIO:</b></h5>
                        </div>
                        <div class="form-group col-2">
                    <h5><b>MONTO</b></h5>
                  </div>
                  <div class="form-group col-4"><h5></b></h5></div>
                  <div class="form-group col-6">
                      <h5><b>PASIVO CIRCULANTE:</b></h5>
                      </div>
                      <div class="form-group col-2">
                  <h5><b></b></h5>
                </div>
                    <div class="form-group col-4">
                        <h5><b>Deudas y Sobregiros Bancarios:</b></h5>
                        </div>
                    <div class="form-group col-4"><h5></b></h5></div>
                    <div class="form-group col-2"> </div>
                    <div class="form-group col-2">
                      <h5><b><?= number_format($consulta_Balance['deusob'], 2, ".", ",") ?></b></h5>
                    </div>
                    <div class="form-group col-4">
                        <h5><b>Efectos Por Pagar:</b></h5>
                        </div>
                    <div class="form-group col-4"><h5></b></h5></div>
                    <div class="form-group col-2"> </div>
                    <div class="form-group col-2">
                      <h5><b><?= number_format($consulta_Balance['efecxp'], 2, ".", ",") ?></b></h5>
                    </div>
                    <div class="form-group col-4">
                        <h5><b>Cuentas Por Pagar:</b></h5>
                        </div>
                    <div class="form-group col-4"><h5></b></h5></div>
                    <div class="form-group col-2"> </div>
                    <div class="form-group col-2">
                      <h5><b><?= number_format($consulta_Balance['ctasxp'], 2, ".", ",") ?></b></h5>
                    </div>
                    <div class="form-group col-4">
                        <h5><b>Impuestos por Pagar:</b></h5>
                        </div>
                    <div class="form-group col-4"><h5></b></h5></div>
                    <div class="form-group col-2"> </div>
                    <div class="form-group col-2">
                      <h5><b><?= number_format($consulta_Balance['impxp'], 2, ".", ",") ?></b></h5>
                    </div>
                    <div class="form-group col-4">
                        <h5><b>Retenciones y Contribuciones por Pagar:</b></h5>
                        </div>
                    <div class="form-group col-4"><h5></b></h5></div>
                    <div class="form-group col-2"> </div>
                    <div class="form-group col-2">
                      <h5><b><?= number_format($consulta_Balance['retcontxp'], 2, ".", ",") ?></b></h5>
                    </div>

                    <div class="form-group col-4">
                        <h5><b>Dividendos por Pagar:</b></h5>
                        </div>
                    <div class="form-group col-4"><h5></b></h5></div>
                    <div class="form-group col-2"> </div>
                    <div class="form-group col-2">
                      <h5><b><?= number_format($consulta_Balance['divxp'], 2, ".", ",") ?></b></h5>
                    </div>

                    <div class="form-group col-4">
                        <h5><b>Gastos Acumulados por Pagar:</b></h5>
                        </div>
                    <div class="form-group col-4"><h5></b></h5></div>
                    <div class="form-group col-2"> </div>
                    <div class="form-group col-2">
                      <h5><b><?= number_format($consulta_Balance['gastacumxp'], 2, ".", ",") ?></b></h5>
                    </div>

                    <div class="form-group col-4">
                        <h5><b>Anticipos Recibidos :</b></h5>
                        </div>
                    <div class="form-group col-4"><h5></b></h5></div>
                    <div class="form-group col-2"> </div>
                    <div class="form-group col-2">
                      <h5><b><?= number_format($consulta_Balance['antrecib'], 2, ".", ",") ?></b></h5>
                    </div>

                    <div class="form-group col-4">
                        <h5><b>Porción Circulante Deuda a Largo Plazo:</b></h5>
                        </div>
                    <div class="form-group col-4"><h5></b></h5></div>
                    <div class="form-group col-2"> </div>
                    <div class="form-group col-2">
                      <h5><b><?= number_format($consulta_Balance['circdeudalp'], 2, ".", ",") ?></b></h5>
                    </div>

                    <div class="form-group col-4">
                        <h5><b>Participación Estatuaria:</b></h5>
                        </div>
                    <div class="form-group col-4"><h5></b></h5></div>
                    <div class="form-group col-2"> </div>
                    <div class="form-group col-2">
                      <h5><b><?= number_format($consulta_Balance['partestat'], 2, ".", ",") ?></b></h5>
                    </div>

                    <div class="form-group col-4">
                        <h5><b>Otras cuentas por Pagar:</b></h5>
                        </div>
                    <div class="form-group col-4"><h5></b></h5></div>
                    <div class="form-group col-2"> </div>
                    <div class="form-group col-2">
                      <h5><b><?= number_format($consulta_Balance['otrascxp'], 2, ".", ",") ?></b></h5>
                    </div>

                    <div class="form-group col-4">
                        <h5><b>Otros Pasivos Circulantes:</b></h5>
                        </div>
                    <div class="form-group col-4"><h5></b></h5></div>
                    <div class="form-group col-2"> </div>
                    <div class="form-group col-2">
                      <h5><b><?= number_format($consulta_Balance['otrpascirc'], 2, ".", ",") ?></b></h5>
                    </div>
                    <div class="form-group col-4"><h5></b></h5></div>
                    <div class="form-group col-6">
                          <h5><b>TOTAL PASIVO CIRCULANTE:</b></h5>
                          </div>
                          <div class="form-group col-2">
                      <h5><b><?= number_format($consulta_Balance['totpascirc'], 2, ".", ",") ?></b></h5>
                    </div>
                      <div class="form-group col-4"><h5></b></h5></div>
                    <div class="form-group col-6">
                        <h5><b>    PASIVO A LARGO PLAZO:</b></h5>
                        </div>
                        <div class="form-group col-2">
                    <h5><b></b></h5>
                    </div>
                    <div class="form-group col-4"><h5></b></h5></div>
                    <div class="form-group col-6">
                      <h5><b></b></h5>
                      </div>
                      <div class="form-group col-2">
                    <h5><b></b></h5>
                    </div>
                    <div class="form-group col-4">
                        <h5><b>Deuda a Largo Plazo:</b></h5>
                        </div>
                    <div class="form-group col-4"><h5></b></h5></div>
                    <div class="form-group col-2"> </div>
                    <div class="form-group col-2">
                      <h5><b><?= number_format($consulta_Balance['deudalp'], 2, ".", ",") ?></b></h5>
                    </div>
                    <div class="form-group col-4">
                        <h5><b>Prestaciones Sociales:</b></h5>
                        </div>
                    <div class="form-group col-4"><h5></b></h5></div>
                    <div class="form-group col-2"> </div>
                    <div class="form-group col-2">
                      <h5><b><?= number_format($consulta_Balance['prestsociales'], 2, ".", ",") ?></b></h5>
                    </div>
                    <div class="form-group col-4">
                        <h5><b>Otros Pasivos a Largo Plazo:</b></h5>
                        </div>
                    <div class="form-group col-4"><h5></b></h5></div>
                    <div class="form-group col-2"> </div>
                    <div class="form-group col-2">
                      <h5><b><?= number_format($consulta_Balance['otrplp'], 2, ".", ",") ?></b></h5>
                    </div>
                    <div class="form-group col-4"><h5></b></h5></div>
                    <div class="form-group col-6">
                          <h5><b>TOTAL PASIVO  A LARGO PLAZO:</b></h5>
                          </div>
                          <div class="form-group col-2">
                      <h5><b><?= number_format($consulta_Balance['totpaslp'], 2, ".", ",") ?></b></h5>
                    </div>
                      <div class="form-group col-4"><h5></b></h5></div>
                    <div class="form-group col-6">
                        <h5><b>   OTROS PASIVO</b></h5>
                        </div>
                        <div class="form-group col-2">
                    <h5><b></b></h5>
                    </div>
                    <div class="form-group col-4">
                        <h5><b>Cuentas Por Pagar Accionistas/Empleados:</b></h5>
                        </div>
                    <div class="form-group col-4"><h5></b></h5></div>
                    <div class="form-group col-2"> </div>
                    <div class="form-group col-2">
                      <h5><b><?= number_format($consulta_Balance['cxpaccemp'], 2, ".", ",") ?></b></h5>
                    </div>
                    <div class="form-group col-4">
                        <h5><b>Cuentas Por Pagar Compañías Relacionadas:</b></h5>
                        </div>
                    <div class="form-group col-4"><h5></b></h5></div>
                    <div class="form-group col-2"> </div>
                    <div class="form-group col-2">
                      <h5><b><?= number_format($consulta_Balance['cxpcomprel'], 2, ".", ",") ?></b></h5>
                    </div>

                    <div class="form-group col-4">
                        <h5><b>Créditos Diferidos:</b></h5>
                        </div>
                    <div class="form-group col-4"><h5></b></h5></div>
                    <div class="form-group col-2"> </div>
                    <div class="form-group col-2">
                      <h5><b><?= number_format($consulta_Balance['creddif'], 2, ".", ",") ?></b></h5>
                    </div>

                    <div class="form-group col-4">
                        <h5><b>Otros Pasivos:</b></h5>
                        </div>
                    <div class="form-group col-4"><h5></b></h5></div>
                    <div class="form-group col-2"> </div>
                    <div class="form-group col-2">
                      <h5><b><?= number_format($consulta_Balance['otrpasivos'], 2, ".", ",") ?></b></h5>
                    </div>
                    <div class="form-group col-4"><h5></b></h5></div>
                    <div class="form-group col-6">
                          <h5><b>TOTAL OTROS PASIVOS:</b></h5>
                          </div>
                          <div class="form-group col-2">
                      <h5><b><?= number_format($consulta_Balance['tototrpasivos'], 2, ".", ",") ?></b></h5>
                    </div>
                      <div class="form-group col-4"><h5></b></h5></div>
                    <div class="form-group col-6">
                        <h5><b>    TOTAL PASIVOS:</b></h5>
                        </div>
                        <div class="form-group col-2">
                    <h5><b><?= number_format($consulta_Balance['totpasivos'], 2, ".", ",") ?></b></h5>
                  </div>
                  <div class="form-group col-4"><h5></b></h5></div>
                <div class="form-group col-6">
                    <h5><b>    PATRIMONIO:</b></h5>
                    </div>
                    <div class="form-group col-4">
                        <h5><b>Capital Social Actualizado:</b></h5>
                        </div>
                    <div class="form-group col-4"><h5></b></h5></div>
                    <div class="form-group col-2"> </div>
                    <div class="form-group col-2">
                      <h5><b><?= number_format($consulta_Balance['capsocact'], 2, ".", ",") ?></b></h5>
                    </div>

                    <div class="form-group col-4">
                        <h5><b>Utilidades o Pérdidas Acumuladas:</b></h5>
                        </div>
                    <div class="form-group col-4"><h5></b></h5></div>
                    <div class="form-group col-2"> </div>
                    <div class="form-group col-2">
                      <h5><b><?= number_format($consulta_Balance['utilperacum'], 2, ".", ",") ?></b></h5>
                    </div>

                    <div class="form-group col-4">
                        <h5><b>Reserva Legal:</b></h5>
                        </div>
                    <div class="form-group col-4"><h5></b></h5></div>
                    <div class="form-group col-2"> </div>
                    <div class="form-group col-2">
                      <h5><b><?= number_format($consulta_Balance['reslegal'], 2, ".", ",") ?></b></h5>
                    </div>

                    <div class="form-group col-4">
                        <h5><b>Otras Reservas de Capital:</b></h5>
                        </div>
                    <div class="form-group col-4"><h5></b></h5></div>
                    <div class="form-group col-2"> </div>
                    <div class="form-group col-2">
                      <h5><b><?= number_format($consulta_Balance['otrasrescap'], 2, ".", ",") ?></b></h5>
                    </div>

                    <div class="form-group col-4">
                        <h5><b>Resultado No realizado por tenencia de Activos:</b></h5>
                        </div>
                    <div class="form-group col-4"><h5></b></h5></div>
                    <div class="form-group col-2"> </div>
                    <div class="form-group col-2">
                      <h5><b><?= number_format($consulta_Balance['tenenactivos'], 2, ".", ",") ?></b></h5>
                    </div>
                    <div class="form-group col-4">
                        <h5><b>Otros Patrimonios:</b></h5>
                        </div>
                    <div class="form-group col-4"><h5></b></h5></div>
                    <div class="form-group col-2"> </div>
                    <div class="form-group col-2">
                      <h5><b><?= number_format($consulta_Balance['otrpatrim'], 2, ".", ",") ?></b></h5>
                    </div>

                    <div class="form-group col-4"><h5></b></h5></div>
                    <div class="form-group col-6">
                          <h5><b>TOTAL PATRIMONIO:</b></h5>
                          </div>
                          <div class="form-group col-2">
                      <h5><b><?= number_format($consulta_Balance['totpatri'], 2, ".", ",") ?></b></h5>
                    </div>
                      <div class="form-group col-4"><h5></b></h5></div>
                    <div class="form-group col-6">
                        <h5><b>    TOTAL  PASIVO Y PATRIMONIO:</b></h5>
                        </div>
                        <div class="form-group col-2">
                    <h5><b><?= number_format($consulta_Balance['totpaspatri'], 2, ".", ",") ?></b></h5>
                    </div>
         </div>
       </div>
            <br>
            <div class="row">
              <div class="panel-title text-center">

                  <table class="table  style="border: hidden"">
                        <tbody>
                          <?php foreach($edoresultados as $lista):?>
                          <tr class="odd gradeX" style="text-align:center">
                          <td> Estado de Resultado de Cierre</td>
                         </tr>
                         <tr class="odd gradeX" style="text-align:center">
                           <td> Fecha de Inicio</td>
                           <td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td>
                           <td><?=$lista['fecini_at']?> </td>
                         </tr>
                         <tr class="odd gradeX" style="text-align:center">
                           <td> Fecha de Cierre</td>
                           <td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td>
                           <td><?=$lista['feccie_at']?> </td>
                         </tr>
                         <tr class="odd gradeX" style="text-align:center">
                           <td> Ingresos Por Obras, Servicios o Ventas (Neto)</td>
                           <td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td>
                           <td><?=number_format($lista['ingnetoosv'], 2, ".", ",")?> </td>
                         </tr>
                         <tr class="odd gradeX" style="text-align:center">
                           <td> (Costos de Obra, Servicios o Ventas)</td>
                           <td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td>
                           <td><?=number_format($lista['costoosv'], 2, ".", ",")?> </td>
                         </tr>
                         <tr class="odd gradeX" style="text-align:center">
                           <td> Utilidad (PERDIDA) BRUTA</td>
                           <td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td>
                           <td><?=number_format($lista['up_bruta'], 2, ".", ",")?> </td>
                         </tr>
                         <tr class="odd gradeX" style="text-align:center">
                           <td> GASTOS OPERATIVOS</td>
                           <td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td>
                         </tr>
                         <tr class="odd gradeX" style="text-align:center">
                           <td> (Gastos de Venta)</td>
                           <td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td>
                           <td><?=number_format($lista['gastventas'], 2, ".", ",")?> </td>
                         </tr>
                         <tr class="odd gradeX" style="text-align:center">
                           <td> (Gastos Generales y Administrativos)</td>
                           <td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td>
                           <td><?=number_format($lista['gastadmin'], 2, ".", ",")?> </td>
                         </tr>
                         <tr class="odd gradeX" style="text-align:center">
                           <td> (Gastos de Depreciación)</td>
                           <td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td>
                           <td><?=number_format($lista['gastdepre'], 2, ".", ",")?> </td>
                         </tr>
                         <tr class="odd gradeX" style="text-align:center">
                           <td> TOTAL GASTOS OPERATIVOS </td>
                           <td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td>
                           <td><?=number_format($lista['totgastop'], 2, ".", ",")?> </td>
                         </tr>
                         <tr class="odd gradeX" style="text-align:center">
                           <td> Utilidad (Perdida) En Operaciones</td>
                           <td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td>
                           <td><?=number_format($lista['up_op'], 2, ".", ",")?> </td>
                         </tr>
                         <tr class="odd gradeX" style="text-align:center">
                           <td> (COSTO) BENEFICIO INTEGRAL DE FINANCIAMIENTO</td>
                         <td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td>
                         </tr>
                         <tr class="odd gradeX" style="text-align:center">
                           <td> Intereses Ganados y Causados Netos</td>
                           <td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td>
                           <td><?=number_format($lista['intgancaunetos'], 2, ".", ",")?> </td>
                         </tr>

                         <tr class="odd gradeX" style="text-align:center">
                           <td> Ganancia o Pérdida Cambiaria</td>
                           <td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td>
                           <td><?=number_format($lista['gpcamb'], 2, ".", ",")?> </td>
                         </tr>
                         <tr class="odd gradeX" style="text-align:center">
                           <td> Ganancia o Pérdida Monetaria (REME)</td>
                           <td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td>
                           <td><?=number_format($lista['reme'], 2, ".", ",")?> </td>
                         </tr>
                         <tr class="odd gradeX" style="text-align:center">
                           <td> TOTAL (COSTO) BENEFICIO INTEGRAL DE FINANCIAMIENTO </td>
                           <td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td>
                           <td><?=number_format($lista['totbeneficfinan'], 2, ".", ",")?> </td>
                         </tr>
                         <tr class="odd gradeX" style="text-align:center">
                           <td>Resultado Realizado Por Tenencia de Activos </td>
                           <td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td>
                           <td><?=number_format($lista['tenenactivos'], 2, ".", ",")?> </td>
                         </tr>
                         <tr class="odd gradeX" style="text-align:center">
                           <td> Otros Ingresos y Egresos </td>
                           <td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td>
                           <td><?=number_format($lista['otringegr'], 2, ".", ",")?> </td>
                         </tr>
                         <tr class="odd gradeX" style="text-align:center">
                           <td> UTILIDAD (PÉRDIDA) ANTES DEL I.S.L.R </td>
                           <td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td>
                           <td><?=number_format($lista['up_antesislr'], 2, ".", ",")?> </td>
                         </tr>
                         <tr class="odd gradeX" style="text-align:center">
                           <td> Impuestos sobre la Renta </td>
                           <td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td>
                           <td><?=number_format($lista['islr'], 2, ".", ",")?> </td>
                         </tr>
                         <tr class="odd gradeX" style="text-align:center">
                           <td> Impuestos Activos Empresariales</td>
                           <td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td>
                           <td><?=number_format($lista['impactemp'], 2, ".", ",")?> </td>
                         </tr>
                         <tr class="odd gradeX" style="text-align:center">
                           <td> UTILIDAD (PÉRDIDA) NETA DEL EJERCICIO</td>
                           <td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td>
                           <td><?=number_format($lista['up_neta'], 2, ".", ",")?> </td>
                         </tr>
                         <tr class="odd gradeX" style="text-align:center">
                           <td> Apartado Reserva Legal </td>
                           <td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td>
                           <td><?=number_format($lista['apresrleg'], 2, ".", ",")?> </td>
                         </tr>
                         <tr class="odd gradeX" style="text-align:center">
                           <td>TRASLADO A UTILIDADES O PERDIDAS ACUMULADAS</td>
                           <td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td>
                           <td><?=number_format($lista['trasupacum'], 2, ".", ",")?> </td>
                           </tr>
                              <?php endforeach;?>
                      </tbody>
                  </table>



              </div>
            </div>
            <div class="row">
              <div class="panel-title text-center">

                  <table class="table  style="border: hidden"">
                        <tbody>
                          <?php foreach($anafinancieros as $lista):?>

                          <tr class="odd gradeX" style="text-align:center">

                          <td> Análisis Financiero de Ciere</td> </tr>
                            <tr class="odd gradeX" style="text-align:center">
                              <td> Empresa en Porceso de Descapitalización</td>
                              <td> </td><td> </td>
                              <td><?php if ($lista['descapital'] == 'f') {
                                        echo "NO";
                                  } else {
                                        echo "SI";
                                  } ?>
                                 </td>
                            </tr>
                            <tr class="odd gradeX" style="text-align:center">
                              <td> ¿Los Valores del Balance están a Costo Histórico?</td>
                              <td> </td><td> </td>
                              <td><?php if ($lista['costohist'] == 'f') {
                                      echo "NO";
                                  } else {
                                      echo "SI";
                                  } ?>
                                 </td>
                            </tr>
                            <tr class="odd gradeX" style="text-align:center">
                            <td> </td><td> </td>
                            </tr>
                            <tr class="odd gradeX" style="text-align:center">

                            <td> Indicador Financiero</td>
                            <td> </td> <td> </td><td> </td>
                              <td> Valor Ponderado del Indicador</td>
                           </tr>
                            <tr class="odd gradeX" style="text-align:center">
                              <td>Solvencia</td>
                              <td> </td>
                              <td><?=number_format($lista['solvencia'], 3, ".", ",")?> </td>
                              <td> </td>
                              <td><?=number_format($lista['solvpond'], 3, ".", ",")?> </td>
                            </tr>
                            <tr class="odd gradeX" style="text-align:center">
                              <td>Ácido</td>
                              <td> </td>
                              <td><?=number_format($lista['acido'], 3, ".", ",")?> </td>
                              <td> </td>
                              <td><?=number_format($lista['acidopond'], 3, ".", ",")?> </td>
                            </tr>
                            <tr class="odd gradeX" style="text-align:center">
                              <td>Rendimiento Sobre los Activos (ROA)</td>
                              <td> </td>
                              <td><?=number_format($lista['roa'], 3, ".", ",")?> </td>
                              <td> </td>
                              <td><?=number_format($lista['roapond'], 3, ".", ",")?> </td>
                            </tr>
                            <tr class="odd gradeX" style="text-align:center">
                              <td>Rotación de Cuentas por Cobrar</td>
                              <td> </td>
                              <td><?=number_format($lista['rotcxc'], 3, ".", ",")?> </td>
                              <td> </td>
                              <td><?=number_format($lista['rotcxcpond'], 3, ".", ",")?> </td>
                            </tr>
                            <tr class="odd gradeX" style="text-align:center">
                              <td>Endeudamiento</td>
                              <td> </td>
                              <td><?=number_format($lista['endeu'], 3, ".", ",")?> </td>
                              <td> </td>
                              <td><?=number_format($lista['endeudpond'], 3, ".", ",")?> </td>
                            </tr>
                            <tr class="odd gradeX" style="text-align:center">
                              <td>Rentabilidad</td>
                              <td> </td>
                              <td><?=number_format($lista['rentab'], 3, ".", ",")?> </td>
                              <td> </td>
                              <td><?=number_format($lista['rentabpond'], 3, ".", ",")?> </td>
                            </tr>

                      </tbody>

                  </table>

                          <?php endforeach;?>

              </div>
            </div>

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
