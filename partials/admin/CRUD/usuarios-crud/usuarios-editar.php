<?php session_start();?>
<div class="jumbotron labelac">
<form method="post" action="partials/admin/CRUD/action.php">
<?php
        $id = $_SESSION['id'];
       ?>
   <h1>Perfil del usuario</h1>
                      <?php
           $db = mysqli_connect('localhost', 'root', '254088Ma!', 'mandra');
      mysqli_set_charset($db, 'utf8')
          ?>
    <div class="labelac">Id usuario</div>
  <input type="text" class="form-control" name="id" ria-describedby="sizing-addon1" value="<?php
echo $_SESSION['id'];
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
 <select required name="activo" class="form-control dropd">
    <option value="<?php  echo $vactivo  ?>">
        <?php  echo $vactivo  ?>
        </option>
     <option value="Activar">Activar</option>
     <option value="Desactivar" >Desactivar</option>
                   </select>
       <div class="labelac">Nombre</div>
 <div class="input-group input-group-lg">
 <span class="input-group-addon" id="sizing-addon1"></span>
  <input type="text" class="form-control" name="nombre" ria-describedby="sizing-addon1" value="<?php  echo $vnombre  ?>" required>
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
 <input type="text" class="form-control" name="apellido_pat" ria-describedby="sizing-addon1" value="<?php  echo $vapellidop  ?>" required>
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
  <input type="text" class="form-control" name="apellido_mat" ria-describedby="sizing-addon1" value="<?php  echo $vapellidom  ?>" required>
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
      <input type="number" class="form-control" name="edad" ria-describedby="sizing-addon1" value="<?php  echo $vedad  ?>" required>
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
         <input type="text" class="form-control" name="telefono" ria-describedby="sizing-addon1" value="<?php  echo $vtelefono  ?>">
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
            <input type="text" class="form-control" name="celular" ria-describedby="sizing-addon1" value="<?php  echo $vcelular  ?>" required>
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
               <input type="text" class="form-control" name="linkedin" ria-describedby="sizing-addon1" value="<?php  echo $vlinkedin  ?>">
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
                  <input type="number" class="form-control" name="sueldo_ac" ria-describedby="sizing-addon1" value="<?php  echo $vsueldoa  ?>" required>
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
                     <input type="number" class="form-control" name="sueldo_des" ria-describedby="sizing-addon1" value="<?php  echo $vsueldod  ?>" required>
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
                        <input style="height:100px !important;" type="textarea" class="form-control" name="descripcionhab" ria-describedby="sizing-addon1" value="<?php  echo $vdeschab ?>">
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
                           <input style="height:100px !important;" type="textarea" class="form-control" name="descripcionper" ria-describedby="sizing-addon1" value="<?php  echo $vdescper ?>">
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
                       <select required name="educacion" class="form-control dropd" value="<?php  echo $veducacion ?>">

                         <option value="<?php  echo $veducacion ?>">
                             <?php  echo $veducacion2 ?>
                             </option>
                             <?php
                            $stedu="";
                           $query="select * from educacion";
                             $result= mysqli_query($db, $query);
                             if($result)
                             {

                                 while($row=mysqli_fetch_array($result)){


                                     echo'<option value="'.$row['ideducacion'].'">'.$row['nombre'].'</option>';
                                 }
                             }
                             ?>
                          </select>

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
                       <select required name="horario" class="form-control dropd" value="<?php  echo $vhorario; ?>">
                         <!--<option>
                             Selecciona el correspondiente
                             </option>-->

                           <option value="<?php  echo $vhorario; ?>">
                             <?php  echo $vhorario2; ?>
                             </option>
                             <?php
                           $query="select * from horario";
                             $result= mysqli_query($db, $query);
                             if($result)
                             {
                                 while($row=mysqli_fetch_array($result)){
                                     echo'<option value="'.$row['id_horario'].'">'.$row['tipo'].'</option>';
                                 }
                             }
                             ?>
                          </select>


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
                       <select required name="sexo" class="form-control dropd">
                         <option value="<?php  echo $vsexo ?>">
                             <?php  echo $vsexo2 ?>
                             </option>
                             <?php
                           $query="select * from sexo";
                             $result= mysqli_query($db, $query);
                             if($result)
                             {
                                 while($row=mysqli_fetch_array($result)){
                                     echo'<option value="'.$row['idsexo'].'">'.$row['nombre'].'</option>';
                                 }
                             }
                             ?>
                          </select>


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
                   <select required name="categoria" class="form-control dropd">
                     <option value="<?php  echo $vcategoria ?>">
                             <?php  echo $vcategoria2 ?>
                             </option>
                         <?php
                         $query="select * from categoria";
                         $result= mysqli_query($db, $query);
                         if($result)
                         {
                             while($row=mysqli_fetch_array($result)){
                                 echo'<option value="'.$row['idcategoria'].'">'.$row['nombre'].'</option>';
                             }
                         }
                         ?>
                      </select>

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
               <select required name="subcategoria" class="form-control dropd">
                 <option value="<?php  echo $vsubcategoria ?>">
                             <?php  echo $vsubcategoria2 ?>
                             </option>
                     <?php
                     $query="select * from subcategoria";
                     $result= mysqli_query($db, $query);
                     if($result)
                     {
                         while($row=mysqli_fetch_array($result)){
                             echo'<option value="'.$row['idsubcategoria'].'">'.$row['nombre'].'</option>';
                         }
                     }
                     ?>
                  </select>


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
      <select required name="localidad" class="form-control dropd">
        <option value="<?php  echo $vlocalidad ?>">
                             <?php  echo $vlocalidad2 ?>
                             </option>
            <?php
            $query="select * from localidad";
            $result= mysqli_query($db, $query);
            if($result)
            {
                while($row=mysqli_fetch_array($result)){
                    echo'<option value="'.$row['idlocalidad'].'">'.$row['nombre'].'</option>';
                }
            }
            ?>
         </select>



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
 <select required name="ingles" class="form-control dropd">
    <option value="<?php  echo $vingles ?>">
                             <?php  echo $vingles2 ?>
                             </option>
        <?php
        $query="select * from ingles";
        $result= mysqli_query($db, $query);
        if($result)
        {
            while($row=mysqli_fetch_array($result)){
                echo'<option value="'.$row['idingles'].'">'.$row['nivel'].'</option>';
            }
        }
        ?>
     </select>
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
  <select name="competencia1" required class="form-control dropd">
    <option value="<?php  echo $otroarreglo[1]; ?>">
         <?php  echo $arreglo[1]; ?>
        </option>
        <?php
                                 
         $query="select * from tecnica where competencia_idcompetencia='$competencia1'";
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
                                 
                                     ?>
     <?php
     $qpericidad1="select * from usuario_has_tecnica where user_register_id_usuario = $id and importancia=1";
     $rpericidad1 =mysqli_query($db,$qpericidad1);
     $rowpericidad1=mysqli_fetch_array($rpericidad1);
     $vpericidad1 = $rowpericidad1['pericidad'];
                                 
      ?>


                       <div class="labelac">Semestres con experiencia</div>
 <div class="input-group input-group-lg">
 <span class="input-group-addon" id="sizing-addon1"></span>
  <input type="number" class="form-control" name="pericidad1" ria-describedby="sizing-addon1" value="<?php echo $vpericidad1 ?>" required>
                   </div>



<?php
$qcompetencia2="select * from usuario_has_tecnica where user_register_id_usuario = $id;";
$rcompetencia2 =mysqli_query($db,$qcompetencia2);
$rowcompetencia2=mysqli_fetch_array($rcompetencia2);
$vcompetencia2 = $rowcompetencia2['tecnica_idtecnica'];
         
         
         

 ?>



                      <div class="labelac">Competencia técnica 2</div>
  <select name="competencia2" required class="form-control dropd">
    <option value="<?php  echo $otroarreglo[2]; ?>">
        <?php  echo $arreglo[2]; ?>
        </option>
        <?php
         $query="select * from tecnica where competencia_idcompetencia='$competencia2'";
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
     $qpericidad2="select * from usuario_has_tecnica where user_register_id_usuario = $id and importancia=2";
     $rpericidad2 =mysqli_query($db,$qpericidad2);
     $rowpericidad2=mysqli_fetch_array($rpericidad2);
     $vpericidad2 = $rowpericidad2['pericidad'];

      ?>
                   <div class="labelac">Semestres con experiencia</div>
 <div class="input-group input-group-lg">
 <span class="input-group-addon" id="sizing-addon1"></span>
  <input type="number" class="form-control" name="pericidad2" ria-describedby="sizing-addon1" value="<?php echo $vpericidad2 ?>" required>
                   </div>

                   <?php
                   $qcompetencia3="select * from usuario_has_tecnica where user_register_id_usuario = $id;";
                   $rcompetencia3 =mysqli_query($db,$qcompetencia3);
                   $rowcompetencia3=mysqli_fetch_array($rcompetencia3);
                   $vcompetencia3 = $rowcompetencia3['tecnica_idtecnica'];

                    ?>



        <div class="labelac">Competencia técnica 3</div>
  <select name="competencia3" required class="form-control dropd">
    <option value="<?php  echo $otroarreglo[3]; ?>">
        <?php  echo $arreglo[3]; ?>
        </option>
        <?php
         $query="select * from tecnica where competencia_idcompetencia='$competencia3'";
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
     $qpericidad3="select * from usuario_has_tecnica where user_register_id_usuario = $id and importancia=3";
     $rpericidad3 =mysqli_query($db,$qpericidad3);
     $rowpericidad3=mysqli_fetch_array($rpericidad3);
     $vpericidad3 = $rowpericidad3['pericidad'];
                                 
      ?>

                <div class="labelac">Semestres con experiencia</div>
 <div class="input-group input-group-lg">
 <span class="input-group-addon" id="sizing-addon1"></span>
  <input type="number" class="form-control" name="pericidad3" ria-describedby="sizing-addon1" value="<?php echo $vpericidad3; ?>" required>
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
 <select name="habilidad1" class="form-control dropd">
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
        <?php
        $query="select * from habilidad where idhabilidad!='$habilidad1'";
        $result= mysqli_query($db, $query);
        if($result)
        {
            while($row=mysqli_fetch_array($result)){
                echo'<option value="'.$row['idhabilidad'].'">'.$row['nombre'].'</option>';
            }
        }
        ?>
     </select>
                   <div class="labelac">Habilidad 2</div>
  <select name="habilidad2" class="form-control dropd">
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
        <?php
        $query="select * from habilidad where idhabilidad!='$habilidad2'";
        $result= mysqli_query($db, $query);
        if($result)
        {
            while($row=mysqli_fetch_array($result)){
                echo'<option value="'.$row['idhabilidad'].'">'.$row['nombre'].'</option>';
            }
        }
        ?>
     </select>
                   <div class="labelac">Habilidad 3</div>
   <select name="habilidad3" class="form-control dropd">
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
        <?php
        $query="select * from habilidad where idhabilidad!='$habilidad3'";
        $result= mysqli_query($db, $query);
        if($result)
        {
            while($row=mysqli_fetch_array($result)){
                echo'<option value="'.$row['idhabilidad'].'">'.$row['nombre'].'</option>';
            }
        }
        ?>
     </select>
    <div class="input-group">
  		<button type="submit" class="btn btn-info btn-lg" name="usuario_editar">Cambiar datos</button>
  	</div>
      	<p>
         <a href="index-admin.php#!/Usuarios">¿Deseas regresar?</a>
  	</p>
  </form>
</div>
