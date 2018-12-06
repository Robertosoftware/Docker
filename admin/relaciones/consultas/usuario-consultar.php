<?php session_start();?>
<div class="jumbotron labelac">
<form method="post" action="">
<?php
        $id = $_SESSION['id_usuario'];
       ?>
   <h1>Perfil del usuario</h1>
                      <?php
           $db = mysqli_connect('localhost', 'root', '254088Ma!', 'mandra');
      mysqli_set_charset($db, 'utf8')
          ?>
    <div class="labelac">Id usuario</div>
  <input type="text" class="form-control" name="id" ria-describedby="sizing-addon1" value="<?php
echo $_SESSION['id_usuario'];
?>" placeholder="" readonly>
    <?php
        $qnombre="select * from usuario where user_register_id_usuario = $id;";
        $rnombre =mysqli_query($db, $qnombre);
        $rownombre=mysqli_fetch_array($rnombre);
        $vnombre = $rownombre['nombre'];
    ?>
    <?php
        $activo="select * from usuario where user_register_id_usuario = $id;";
        $activoq =mysqli_query($db, $activo);
        $row=mysqli_fetch_array($activoq);
        $vactivo = $row['activo'];
    ?>
 <div class="labelac">Activo</div>
       <div class="input-group input-group-lg">
                     <span class="input-group-addon" id="sizing-addon1"></span>
                     <input type="text" class="form-control" name="sueldo_des" ria-describedby="sizing-addon1" value="<?php  echo $vactivo  ?>" readonly>
                        </div>
    
       <div class="labelac">Nombre</div>
 <div class="input-group input-group-lg">
 <span class="input-group-addon" id="sizing-addon1"></span>
  <input type="text" class="form-control" name="nombre" ria-describedby="sizing-addon1" value="<?php  echo $vnombre  ?>" readonly>
      </div>

    <?php
        $qapellidop="select * from usuario where user_register_id_usuario = $id;";
        $rapellidop =mysqli_query($db, $qapellidop);
        $rowapellidop=mysqli_fetch_array($rapellidop);
        $vapellidop = $rowapellidop['apellido_paterno'];
    ?>

      <div class="labelac">Apellido Paterno</div>
<div class="input-group input-group-lg">
<span class="input-group-addon" id="sizing-addon1"></span>
 <input type="text" class="form-control" name="apellido_pat" ria-describedby="sizing-addon1" value="<?php  echo $vapellidop  ?>" readonly>
     </div>

    <?php
        $qapellidom="select * from usuario where user_register_id_usuario = $id;";
        $rapellidom =mysqli_query($db, $qapellidom);
        $rowapellidom=mysqli_fetch_array($rapellidom);
        $vapellidom = $rowapellidom['apellido_materno'];
    ?>

   <div class="labelac">Apellido Materno</div>
 <div class="input-group input-group-lg">
 <span class="input-group-addon" id="sizing-addon1"></span>
  <input type="text" class="form-control" name="apellido_mat" ria-describedby="sizing-addon1" value="<?php  echo $vapellidom  ?>" readonly>
      </div>

    <?php
        $qedad="select * from usuario where user_register_id_usuario = $id;";
        $redad =mysqli_query($db, $qedad);
        $rowedad=mysqli_fetch_array($redad);
        $vedad = $rowedad['edad'];
    ?>

      <div class="labelac">Edad</div>
      <div class="input-group input-group-lg">
      <span class="input-group-addon" id="sizing-addon1"></span>
      <input type="number" class="form-control" name="edad" ria-describedby="sizing-addon1" value="<?php  echo $vedad  ?>" readonly>
         </div>

        <?php
        $qtelefono="select * from usuario where user_register_id_usuario = $id;";
        $rtelefono =mysqli_query($db, $qtelefono);
        $rowtelefono=mysqli_fetch_array($rtelefono);
        $vtelefono = $rowtelefono['telefono'];
        ?>

         <div class="labelac">Teléfono</div>
         <div class="input-group input-group-lg">
         <span class="input-group-addon" id="sizing-addon1"></span>
         <input type="text" class="form-control" name="telefono" ria-describedby="sizing-addon1" value="<?php  echo $vtelefono  ?>" readonly>
            </div>

            <?php
        $qcelular="select * from usuario where user_register_id_usuario = $id;";
        $rcelular =mysqli_query($db, $qcelular);
        $rowcelular=mysqli_fetch_array($rcelular);
        $vcelular = $rowcelular['celular'];
    ?>

            <div class="labelac">Celular</div>
            <div class="input-group input-group-lg">
            <span class="input-group-addon" id="sizing-addon1"></span>
            <input type="text" class="form-control" name="celular" ria-describedby="sizing-addon1" value="<?php  echo $vcelular  ?>" readonly>
               </div>

                   <?php
        $qlinkedin="select * from usuario where user_register_id_usuario = $id;";
        $rlinkedin =mysqli_query($db, $qlinkedin);
        $rowlinkedin=mysqli_fetch_array($rlinkedin);
        $vlinkedin = $rowlinkedin['linkedin'];
    ?>

               <div class="labelac">LinkedIn</div>
               <div class="input-group input-group-lg">
               <span class="input-group-addon" id="sizing-addon1"></span>
               <input type="text" class="form-control" name="linkedin" ria-describedby="sizing-addon1" value="<?php  echo $vlinkedin  ?>" readonly>
                  </div>


                   <?php
        $qsueldoa="select * from usuario where user_register_id_usuario = $id;";
        $rsueldoa =mysqli_query($db, $qsueldoa);
        $rowsueldoa=mysqli_fetch_array($rsueldoa);
        $vsueldoa = $rowsueldoa['sueldo_actual'];
    ?>

                  <div class="labelac">Sueldo Actual</div>
                  <div class="input-group input-group-lg">
                  <span class="input-group-addon" id="sizing-addon1"></span>
                  <input type="number" class="form-control" name="sueldo_ac" ria-describedby="sizing-addon1" value="<?php  echo $vsueldoa  ?>" readonly>
                     </div>

                   <?php
        $qsueldod="select * from usuario where user_register_id_usuario = $id;";
        $rsueldod =mysqli_query($db, $qsueldod);
        $rowsueldod=mysqli_fetch_array($rsueldod);
        $vsueldod = $rowsueldod['salario_deseado'];
    ?>

                     <div class="labelac">Sueldo deseado</div>
                     <div class="input-group input-group-lg">
                     <span class="input-group-addon" id="sizing-addon1"></span>
                     <input type="number" class="form-control" name="sueldo_des" ria-describedby="sizing-addon1" value="<?php  echo $vsueldod  ?>" readonly>
                        </div>

                    <?php
        $qdeschab="select * from usuario where user_register_id_usuario = $id;";
        $rdeschab =mysqli_query($db, $qdeschab);
        $rowdeschab=mysqli_fetch_array($rdeschab);
        $vdeschab = $rowdeschab['descripcion_habilidad'];
    ?>

                        <div class="labelac">Descripción Habilidades</div>
                        <div class="input-group input-group-lg">
                        <span class="input-group-addon" id="sizing-addon1"></span>
                        <input style="height:100px !important;" type="textarea" class="form-control" name="descripcionhab" ria-describedby="sizing-addon1" value="<?php  echo $vdeschab ?>" readonly> 
                           </div>


                   <?php
        $qdescper="select * from usuario where user_register_id_usuario = $id;";
        $rdescper =mysqli_query($db, $qdescper);
        $rowdescper=mysqli_fetch_array($rdescper);
        $vdescper = $rowdescper['descripcion_persona'];
    ?>

                           <div class="labelac">Descripción Personal</div>
                           <div class="input-group input-group-lg">
                           <span class="input-group-addon" id="sizing-addon1"></span>
                           <input style="height:100px !important;" type="textarea" class="form-control" name="descripcionper" ria-describedby="sizing-addon1" value="<?php  echo $vdescper ?>" readonly>
                              </div>

                    <?php
        $qeducacion="select * from usuario where user_register_id_usuario = $id;";
        $reducacion =mysqli_query($db, $qeducacion);
        $roweducacion=mysqli_fetch_array($reducacion);
        $veducacion = $roweducacion['educacion_ideducacion'];
        $qeducacion2="select * from educacion where ideducacion = $veducacion;";
        $reducacion2 =mysqli_query($db, $qeducacion2);
        $roweducacion2=mysqli_fetch_array($reducacion2);
        $veducacion2 = $roweducacion2['nombre'];


    ?>

                    <div class="labelac">Educación</div>
                       <div class="input-group input-group-lg">
                     <span class="input-group-addon" id="sizing-addon1"></span>
                     <input type="text" class="form-control" name="sueldo_des" ria-describedby="sizing-addon1" value="<?php  echo $veducacion2 ?>" readonly>
                        </div>
                   <?php
        $qhorario="select * from usuario where user_register_id_usuario = $id;";
        $rhorario =mysqli_query($db, $qhorario);
        $rowhorario=mysqli_fetch_array($rhorario);
        $vhorario = $rowhorario['horario_id_horario'];
        $qhorario2="select * from horario where id_horario = $vhorario;";
        $rhorario2 =mysqli_query($db, $qhorario2);
        $rowhorario2=mysqli_fetch_array($rhorario2);
        $vhorario2 = $rowhorario2['tipo'];


    ?>

                    <div class="labelac">Horario</div>
                          <div class="input-group input-group-lg">
                     <span class="input-group-addon" id="sizing-addon1"></span>
                     <input type="text" class="form-control" name="sueldo_des" ria-describedby="sizing-addon1" value="<?php  echo $vhorario2 ?>" readonly>
                        </div>


 <?php
        $qsexo="select * from usuario where user_register_id_usuario = $id;";
        $rsexo =mysqli_query($db, $qsexo);
        $rowsexo=mysqli_fetch_array($rsexo);
        $vsexo = $rowsexo['sexo_idsexo'];
        $qsexo2="select * from sexo where idsexo = $vsexo;";
        $rsexo2 =mysqli_query($db, $qsexo2);
        $rowsexo2=mysqli_fetch_array($rsexo2);
        $vsexo2 = $rowsexo2['nombre'];


    ?>


                              <div class="labelac">Sexo</div>
                       <div class="input-group input-group-lg">
                     <span class="input-group-addon" id="sizing-addon1"></span>
                     <input type="text" class="form-control" name="sueldo_des" ria-describedby="sizing-addon1" value="<?php  echo $vsexo2 ?>" readonly>
                        </div>


                    <?php
        $qcategoria="select * from usuario where user_register_id_usuario = $id;";
        $rcategoria =mysqli_query($db, $qcategoria);
        $rowcategoria=mysqli_fetch_array($rcategoria);
        $vcategoria = $rowcategoria['categoria_idcategoria'];
        $qcategoria2="select * from categoria where idcategoria = $vcategoria;";
        $rcategoria2 =mysqli_query($db, $qcategoria2);
        $rowcategoria2=mysqli_fetch_array($rcategoria2);
        $vcategoria2 = $rowcategoria2['nombre'];


    ?>


                          <div class="labelac">Categoría</div>
                   <div class="input-group input-group-lg">
                     <span class="input-group-addon" id="sizing-addon1"></span>
                     <input type="text" class="form-control" name="sueldo_des" ria-describedby="sizing-addon1" value="<?php  echo $vcategoria2 ?>" readonly>
                        </div>

  <?php
        $qsubcategoria="select * from usuario where user_register_id_usuario = $id;";
        $rsubcategoria =mysqli_query($db, $qsubcategoria);
        $rowsubcategoria=mysqli_fetch_array($rsubcategoria);
        $vsubcategoria = $rowsubcategoria['subcategoria_idsubcategoria'];
        $qsubcategoria2="select * from subcategoria where idsubcategoria = $vsubcategoria;";
        $rsubcategoria2 =mysqli_query($db, $qsubcategoria2);
        $rowsubcategoria2=mysqli_fetch_array($rsubcategoria2);
        $vsubcategoria2 = $rowsubcategoria2['nombre'];


    ?>

                      <div class="labelac">Subcategoría</div>
               <div class="input-group input-group-lg">
                     <span class="input-group-addon" id="sizing-addon1"></span>
                     <input type="text" class="form-control" name="sueldo_des" ria-describedby="sizing-addon1" value="<?php  echo $vsubcategoria2 ?>" readonly>
                        </div>

                   <?php
        $qlocalidad="select * from usuario where user_register_id_usuario = $id;";
        $rlocalidad =mysqli_query($db,$qlocalidad);
        $rowlocalidad=mysqli_fetch_array($rlocalidad);
        $vlocalidad = $rowlocalidad['localidad_idlocalidad'];
        $qlocalidad2="select * from localidad where idlocalidad = $vlocalidad;";
        $rlocalidad2 =mysqli_query($db, $qlocalidad2);
        $rowlocalidad2=mysqli_fetch_array($rlocalidad2);
        $vlocalidad2 = $rowlocalidad2['nombre'];


    ?>


                  <div class="labelac">Localidad</div>
      <div class="input-group input-group-lg">
                     <span class="input-group-addon" id="sizing-addon1"></span>
                     <input type="text" class="form-control" name="sueldo_des" ria-describedby="sizing-addon1" value="<?php  echo $vlocalidad2 ?>" readonly>
                        </div>


                    <?php
        $qingles="select * from usuario where user_register_id_usuario = $id;";
        $ringles =mysqli_query($db,$qingles);
        $rowingles=mysqli_fetch_array($ringles);
        $vingles = $rowingles['ingles_idingles'];
        $qingles2="select * from ingles where idingles = $vingles;";
        $ringles2 =mysqli_query($db, $qingles2);
        $rowingles2=mysqli_fetch_array($ringles2);
        $vingles2 = $rowingles2['nivel'];


    ?>

         <div class="labelac">Nivel de inglés</div>
 <div class="input-group input-group-lg">
                     <span class="input-group-addon" id="sizing-addon1"></span>
                     <input type="text" class="form-control" name="sueldo_des" ria-describedby="sizing-addon1" value="<?php  echo $vingles2 ?>" readonly>
                        </div>
    <?php
$qcompetencia1="select * from usuario_has_tecnica where user_register_id_usuario = $id;";
$rcompetencia1 =mysqli_query($db,$qcompetencia1);
//$rowcompetencia1=mysqli_fetch_array($rcompetencia1);
//$vcompetencia1 = $rowcompetencia1['tecnica_idtecnica'];

                   
                   $i=0;
                   $arreglo = array();
                   $otroarreglo = array();
                                 $arreglo2 = array();
                  
                   
                    while($res=mysqli_fetch_array($rcompetencia1)){
                        $i++;
                        $arreglo2[$i] = $res['tecnica_idtecnica'];
              
                           $cons=mysqli_query($db,"select * from tecnica where idtecnica = $arreglo2[$i];");
                  // $resultado = mysqli_fetch_array($cons);
                             
                           
                                 
                                 
    
                                 while($resultado=mysqli_fetch_array($cons)){
                                      
                                     $arreglo[$i] = $resultado['nombre'];
                                     $otroarreglo[$i] = $resultado['idtecnica'];
                                
                                     
                                 }
                    }
                   
                          ?>

                    <div class="labelac">Competencia técnica 1</div>
       <div class="input-group input-group-lg">
                     <span class="input-group-addon" id="sizing-addon1"></span>
                     <input type="text" class="form-control" name="sueldo_des" ria-describedby="sizing-addon1" value="<?php  echo $arreglo[1] ?>" readonly>
                        </div>
<?php
                                 
                                     ?>
     <?php
     $qpericidad1="select * from usuario_has_tecnica where user_register_id_usuario = $id  and importancia=1;";
     $rpericidad1 =mysqli_query($db,$qpericidad1);
     $rowpericidad1=mysqli_fetch_array($rpericidad1);
     $vpericidad1 = $rowpericidad1['pericidad'];
                                 
      ?>


                       <div class="labelac">Semestres con experiencia</div>
 <div class="input-group input-group-lg">
 <span class="input-group-addon" id="sizing-addon1"></span>
  <input type="number" class="form-control" name="pericidad1" ria-describedby="sizing-addon1" value="<?php echo $vpericidad1 ?>" readonly>
                   </div>



<?php
$qcompetencia2="select * from usuario_has_tecnica where user_register_id_usuario = $id ";
$rcompetencia2 =mysqli_query($db,$qcompetencia2);
$rowcompetencia2=mysqli_fetch_array($rcompetencia2);
$vcompetencia2 = $rowcompetencia2['tecnica_idtecnica'];
         
         
         

 ?>



                      <div class="labelac">Competencia técnica 2</div>
 <div class="input-group input-group-lg">
                     <span class="input-group-addon" id="sizing-addon1"></span>
                     <input type="text" class="form-control" name="sueldo_des" ria-describedby="sizing-addon1" value="<?php  echo $arreglo[2] ?>" readonly>
                        </div>

     <?php
     $qpericidad2="select * from usuario_has_tecnica where user_register_id_usuario = $id  and importancia=2;";
     $rpericidad2 =mysqli_query($db,$qpericidad2);
     $rowpericidad2=mysqli_fetch_array($rpericidad2);
     $vpericidad2 = $rowpericidad2['pericidad'];

      ?>
                   <div class="labelac">Semestres con experiencia</div>
 <div class="input-group input-group-lg">
 <span class="input-group-addon" id="sizing-addon1"></span>
  <input type="number" class="form-control" name="pericidad2" ria-describedby="sizing-addon1" value="<?php echo $vpericidad2 ?>" readonly>
                   </div>

                   <?php
                   $qcompetencia3="select * from usuario_has_tecnica where user_register_id_usuario = $id ";
                   $rcompetencia3 =mysqli_query($db,$qcompetencia3);
                   $rowcompetencia3=mysqli_fetch_array($rcompetencia3);
                   $vcompetencia3 = $rowcompetencia3['tecnica_idtecnica'];

                    ?>



        <div class="labelac">Competencia técnica 3</div>
 <div class="input-group input-group-lg">
                     <span class="input-group-addon" id="sizing-addon1"></span>
                     <input type="text" class="form-control" name="sueldo_des" ria-describedby="sizing-addon1" value="<?php  echo $arreglo[3] ?>" readonly>
                        </div>

     <?php
     $qpericidad3="select * from usuario_has_tecnica where user_register_id_usuario = $id  and importancia=3;";
     $rpericidad3 =mysqli_query($db,$qpericidad3);
     $rowpericidad3=mysqli_fetch_array($rpericidad3);
     $vpericidad3 = $rowpericidad3['pericidad'];
                                 
      ?>

                <div class="labelac">Semestres con experiencia</div>
 <div class="input-group input-group-lg">
 <span class="input-group-addon" id="sizing-addon1"></span>
  <input type="number" class="form-control" name="pericidad3" ria-describedby="sizing-addon1" value="<?php echo $vpericidad3; ?>" readonly>
                   </div>
    <?php  $db = mysqli_connect('localhost', 'root', '254088Ma!', 'mandra');
      mysqli_set_charset($db, 'utf8');
                     $query="select * from usuario_has_habilidad where user_register_id_usuario='$id' and importancia=1";
        $result= mysqli_query($db, $query);
    $row= mysqli_fetch_array($result);
    $habilidad1= $row{'habilidad_idhabilidad'};
    $query="select * from usuario_has_habilidad where user_register_id_usuario='$id' and importancia=2";
        $result= mysqli_query($db, $query);
    $row= mysqli_fetch_array($result);
    $habilidad2= $row{'habilidad_idhabilidad'};
    $query="select * from usuario_has_habilidad where user_register_id_usuario='$id' and importancia=3";
        $result= mysqli_query($db, $query);
    $row= mysqli_fetch_array($result);
    $habilidad3= $row{'habilidad_idhabilidad'};
                   ?>
    <div class="labelac">Habilidad 1</div>
     <div class="input-group input-group-lg">
 <span class="input-group-addon" id="sizing-addon1"></span>
 <select name="habilidad1" class="form-control dropd" readonly>
    <?php
        $query="select idhabilidad, nombre from habilidad where idhabilidad='$habilidad1'";
        $result= mysqli_query($db, $query);
        if($result)
        {
            while($row=mysqli_fetch_array($result)){
                echo'<option value="'.$row['idhabilidad'].'">'.$row['nombre'].'</option>';
            }
        }
        ?>      
     </select>
    </div> 
                   <div class="labelac">Habilidad 2</div>
     <div class="input-group input-group-lg">
 <span class="input-group-addon" id="sizing-addon1"></span>
  <select name="habilidad2" class="form-control dropd" readonly>
    <?php
        $query="select idhabilidad, nombre from habilidad where idhabilidad='$habilidad2'";
        $result= mysqli_query($db, $query);
        if($result)
        {
            while($row=mysqli_fetch_array($result)){
                echo'<option value="'.$row['idhabilidad'].'">'.$row['nombre'].'</option>';
            }
        }
        ?>      
     </select>
             </div> 
                   <div class="labelac">Habilidad 3</div>
     <div class="input-group input-group-lg">
 <span class="input-group-addon" id="sizing-addon1"></span>
   <select name="habilidad3" class="form-control dropd" readonly>
    <?php
        $query="select idhabilidad, nombre from habilidad where idhabilidad='$habilidad3'";
        $result= mysqli_query($db, $query);
        if($result)
        {
            while($row=mysqli_fetch_array($result)){
                echo'<option value="'.$row['idhabilidad'].'">'.$row['nombre'].'</option>';
            }
        }
        ?>      
     </select>
                      </div> 
    <h1>Oferta de trabajo</h1>
   
<?php
        $db = mysqli_connect('localhost', 'root', '254088Ma!', 'mandra');
        mysqli_set_charset($db, 'utf8');
        $numero = $_SESSION['id'];
        $query="select * from trabajo where id_trabajo='$numero'";
        $result= mysqli_query($db, $query);
     if($result)
        {
            while($row=mysqli_fetch_array($result)){
                $anos= $row['anos_exp'];
                $activo= $row['activo'];
                $nombre= $row['nombre'];
                $salario= $row['salario'];
                $fecha = $row['fecha_post'];
                $descripcion = $row['descripcion'];
                $telefono = $row['telefono'];
                $correo = $row['correo'];
                $horario = $row['horario_id_horario'];
                $subcategoria = $row['subcategoria_idsubcategoria'];
                $categoria = $row['categoria_idcategoria'];
                $localidad = $row['localidad_idlocalidad'];
                $ingles = $row['ingles_idingles'];
                $empresa = $row['empresa_idempresa'];
                $sexo = $row['sexo_idsexo'];
                $educacion = $row['educacion_ideducacion'];
                $edad = $row['edad_req'];
            }
        }
     $query="select * from trabajo_has_habilidad where trabajo_id_trabajo='$numero' and importancia=1";
        $result= mysqli_query($db, $query);
    $row= mysqli_fetch_array($result);
    $habilidad1= $row{'habilidad_idhabilidad'};
    $query="select * from trabajo_has_habilidad where trabajo_id_trabajo='$numero' and importancia=2";
        $result= mysqli_query($db, $query);
    $row= mysqli_fetch_array($result);
    $habilidad2= $row{'habilidad_idhabilidad'};
    $query="select * from trabajo_has_habilidad where trabajo_id_trabajo='$numero' and importancia=3";
        $result= mysqli_query($db, $query);
    $row= mysqli_fetch_array($result);
    $habilidad3= $row{'habilidad_idhabilidad'};
    $query="select * from trabajo_has_tecnica where trabajo_id_trabajo='$numero' and importancia=1";
        $result= mysqli_query($db, $query);
    $row= mysqli_fetch_array($result);
    $competencia1= $row{'tecnica_idtecnica'};
    $query="select * from trabajo_has_tecnica where trabajo_id_trabajo='$numero' and importancia=2";
        $result= mysqli_query($db, $query);
    $row= mysqli_fetch_array($result);
    $competencia2= $row{'tecnica_idtecnica'};
    $query="select * from trabajo_has_tecnica where trabajo_id_trabajo='$numero' and importancia=3";
        $result= mysqli_query($db, $query);
    $row= mysqli_fetch_array($result);
    $competencia3= $row{'tecnica_idtecnica'};
          ?>
           <label>Id</label>
 <div class="input-group input-group-lg">
 <span class="input-group-addon" id="sizing-addon1"></span>
  <input type="text" class="form-control" name="id" ria-describedby="sizing-addon1" value="<?php 
echo $_SESSION['id'];
?>" placeholder="" readonly>
</div>
    <label>Estatus</label>
    <select name="activo" class="form-control dropd" readonly>
    <?php
                echo'<option value="'.$activo.'">'.$activo.'</option>';
        ?>
    </select>
        <label>Nombre</label>
      <div class="input-group input-group-lg">
 <span class="input-group-addon" id="sizing-addon1"></span>
  <input type="text" class="form-control" name="nombre" aria-describedby="sizing-addon1" value="<?php
echo $nombre;                                                                                                
?>" readonly>
</div>
    <label>Salario</label>
      <div class="input-group input-group-lg">
 <span class="input-group-addon" id="sizing-addon1"></span>
  <input type="text" class="form-control" name="salario" aria-describedby="sizing-addon1" value="<?php
echo $salario;        
?>" readonly>
</div>
    <label>Fecha de activación</label>
      <div class="input-group input-group-lg">
 <span class="input-group-addon" id="sizing-addon1"></span>
  <input type="text" class="form-control" name="fecha" aria-describedby="sizing-addon1" value="<?php
echo $fecha;        
?>" readonly>
</div>
                    <label>Descripción</label>
      <div class="input-group input-group-lg">
 <span class="input-group-addon" id="sizing-addon1"></span>
  <input type="text" class="form-control" name="descripcion" aria-describedby="sizing-addon1" value="<?php
echo $descripcion;        
?>" readonly>
</div>
                        <label>Teléfono</label>
      <div class="input-group input-group-lg">
 <span class="input-group-addon" id="sizing-addon1"></span>
  <input type="text" class="form-control" name="telefono" aria-describedby="sizing-addon1" value="<?php
echo $telefono;                                         
?>" readonly>
</div>
                        <label>Correo electrónico de la oferta </label>
      <div class="input-group input-group-lg">
 <span class="input-group-addon" id="sizing-addon1"></span>
  <input type="email" class="form-control" name="correo" aria-describedby="sizing-addon1" value="<?php
echo $correo;                                  
?>" readonly>
</div>
    <label>Años de experiencia necesarios</label>
      <div class="input-group input-group-lg">
 <span class="input-group-addon" id="sizing-addon1"></span>
  <input type="text" class="form-control" name="anos_exp" aria-describedby="sizing-addon1" value="<?php
echo $anos;        
?>" readonly>
</div>
    <label>Edad mínima requerida</label>
      <div class="input-group input-group-lg">
 <span class="input-group-addon" id="sizing-addon1"></span>
  <input type="text" class="form-control" name="edad" aria-describedby="sizing-addon1" value="<?php
echo $edad;        
?>" readonly>
</div>
    <label>Horario</label>
  <select name="horario" class="form-control dropd" readonly>
    <?php
        $query="select id_horario, tipo from horario where id_horario='$horario'";
        $result= mysqli_query($db, $query);
        if($result)
        {
            while($row=mysqli_fetch_array($result)){
                echo'<option value="'.$row['id_horario'].'">'.$row['tipo'].'</option>';
            }
        }
        ?>      
     </select>
     <label>Categoría</label>
  <select name="categoria" class="form-control dropd" readonly>
    <?php
        $query="select idcategoria, nombre from categoria where idcategoria='$categoria'";
        $result= mysqli_query($db, $query);
        if($result)
        {
            while($row=mysqli_fetch_array($result)){
                echo'<option value="'.$row['idcategoria'].'">'.$row['nombre'].'</option>';
            }
        }
        ?>      
     </select>
    <label>Subcategoría</label>
  <select name="subcategoria" class="form-control dropd" readonly>
    <?php
        $query="select idsubcategoria, nombre from subcategoria where idsubcategoria='$subcategoria'";
        $result= mysqli_query($db, $query);
        if($result)
        {
            while($row=mysqli_fetch_array($result)){
                echo'<option value="'.$row['idsubcategoria'].'">'.$row['nombre'].'</option>';
            }
        }
        ?>     
     </select>
     <label>Localidad</label>
  <select name="localidad" class="form-control dropd" readonly>
    <?php
        $query="select idlocalidad, nombre from localidad where idlocalidad='$localidad'";
        $result= mysqli_query($db, $query);
        if($result)
        {
            while($row=mysqli_fetch_array($result)){
                echo'<option value="'.$row['idlocalidad'].'">'.$row['nombre'].'</option>';
            }
        }
        ?>      
     </select>
     <label>Nivel de inglés</label>
  <select name="ingles" class="form-control dropd" readonly>
    <?php
        $query="select idingles, nivel from ingles where idingles='$ingles'";
        $result= mysqli_query($db, $query);
        if($result)
        {
            while($row=mysqli_fetch_array($result)){
                echo'<option value="'.$row['idingles'].'">'.$row['nivel'].'</option>';
            }
        }
        ?>      
     </select>
    <label>Empresa</label>
  <select name="empresa" class="form-control dropd" readonly>
    <?php
        $query="select idempresa, nombre from empresa where idempresa='$empresa'";
        $result= mysqli_query($db, $query);
        if($result)
        {
            while($row=mysqli_fetch_array($result)){
                echo'<option value="'.$row['idempresa'].'">'.$row['nombre'].'</option>';
            }
        }
        ?>      
     </select>
    <label>Sexo</label>
  <select name="sexo" class="form-control dropd" readonly>
    <?php
        $query="select idsexo, nombre from sexo where idsexo='$sexo'";
        $result= mysqli_query($db, $query);
        if($result)
        {
            while($row=mysqli_fetch_array($result)){
                echo'<option value="'.$row['idsexo'].'">'.$row['nombre'].'</option>';
            }
        }
        ?>      
     </select>
    <label>Educación necesaria</label>
  <select name="educacion" class="form-control dropd" readonly>
    <?php
        $query="select ideducacion, nombre from educacion where ideducacion='$educacion'";
        $result= mysqli_query($db, $query);
        if($result)
        {
            while($row=mysqli_fetch_array($result)){
                echo'<option value="'.$row['ideducacion'].'">'.$row['nombre'].'</option>';
            }
        }
        ?>      
     </select>
    <label>Habilidad con importancia 1</label>
  <select name="habilidad1t" class="form-control dropd" readonly>
    <?php
        $query="select idhabilidad, nombre from habilidad where idhabilidad='$habilidad1'";
        $result= mysqli_query($db, $query);
        if($result)
        {
            while($row=mysqli_fetch_array($result)){
                echo'<option value="'.$row['idhabilidad'].'">'.$row['nombre'].'</option>';
            }
        }
        ?>      
     </select>
    <label>Habilidad con importancia 2</label>
  <select name="habilidad2t" class="form-control dropd" readonly>
    <?php
        $query="select idhabilidad, nombre from habilidad where idhabilidad='$habilidad2'";
        $result= mysqli_query($db, $query);
        if($result)
        {
            while($row=mysqli_fetch_array($result)){
                echo'<option value="'.$row['idhabilidad'].'">'.$row['nombre'].'</option>';
            }
        }
        ?>      
     </select>
    <label>Habilidad con importancia 3</label>
  <select name="habilidad3t" class="form-control dropd" readonly>
    <?php
        $query="select idhabilidad, nombre from habilidad where idhabilidad='$habilidad3'";
        $result= mysqli_query($db, $query);
        if($result)
        {
            while($row=mysqli_fetch_array($result)){
                echo'<option value="'.$row['idhabilidad'].'">'.$row['nombre'].'</option>';
            }
        }
        ?>      
     </select>
      <label>Competencia con importancia 1</label>
  <select name="tecnica1t" class="form-control dropd" readonly>
    <?php
        $query="select idtecnica, nombre from tecnica where idtecnica='$competencia1'";
        $result= mysqli_query($db, $query);
        if($result)
        {
            while($row=mysqli_fetch_array($result)){
                echo'<option value="'.$row['idtecnica'].'">'.$row['nombre'].'</option>';
            }
        }
        ?>      

     </select>
      <?php
     $qpericidad3="select * from trabajo_has_tecnica where trabajo_id_trabajo = $numero and  importancia=1;";
     $rpericidad3 =mysqli_query($db,$qpericidad3);
     $rowpericidad3=mysqli_fetch_array($rpericidad3);
     $vpericidad3 = $rowpericidad3['pericidad'];
                                 
      ?>

                <label>Semestres con experiencia</label>
 <div class="input-group input-group-lg">
 <span class="input-group-addon" id="sizing-addon1"></span>
  <input type="number" class="form-control" name="pericidad3" ria-describedby="sizing-addon1" value="<?php echo $vpericidad3; ?>" readonly>
                   </div>

    <label>Competencia con importancia 2</label>
  <select name="tecnica2t" class="form-control dropd" readonly>
    <?php
        $query="select idtecnica, nombre from tecnica where idtecnica='$competencia2'";
        $result= mysqli_query($db, $query);
        if($result)
        {
            while($row=mysqli_fetch_array($result)){
                echo'<option value="'.$row['idtecnica'].'">'.$row['nombre'].'</option>';
            }
        }
        ?>      
     </select>
      <?php
     $qpericidad2="select * from trabajo_has_tecnica where trabajo_id_trabajo = $numero and importancia=2;";
     $rpericidad2 =mysqli_query($db,$qpericidad2);
     $rowpericidad2=mysqli_fetch_array($rpericidad2);
     $vpericidad2 = $rowpericidad2['pericidad'];
                                 
      ?>

                <label>Semestres con experiencia</label>
 <div class="input-group input-group-lg">
 <span class="input-group-addon" id="sizing-addon1"></span>
  <input type="number" class="form-control" name="pericidad3" ria-describedby="sizing-addon1" value="<?php echo $vpericidad2; ?>" readonly>
                   </div>
     <label>Competencia con importancia 3</label>
  <select name="tecnica3t" class="form-control dropd" readonly>
    <?php
        $query="select idtecnica, nombre from tecnica where idtecnica='$competencia3'";
        $result= mysqli_query($db, $query);
        if($result)
        {
            while($row=mysqli_fetch_array($result)){
                echo'<option value="'.$row['idtecnica'].'">'.$row['nombre'].'</option>';
            }
        }
        ?>      
    </select>
     <?php
     $qpericidad3="select * from trabajo_has_tecnica where trabajo_id_trabajo = $numero and  importancia=3;";
     $rpericidad3 =mysqli_query($db,$qpericidad3);
     $rowpericidad3=mysqli_fetch_array($rpericidad3);
     $vpericidad3 = $rowpericidad3['pericidad'];
                                 
      ?>
                <label>Semestres con experiencia</label>
 <div class="input-group input-group-lg">
 <span class="input-group-addon" id="sizing-addon1"></span>
  <input type="number" class="form-control" name="pericidad3" ria-describedby="sizing-addon1" value="<?php echo $vpericidad3; ?>" readonly>
                   </div>

      	<p>
         <a href="index-admin.php#!/Relacion-primaria">¿Deseas regresar?</a>
  	</p>
  </form>
</div>
