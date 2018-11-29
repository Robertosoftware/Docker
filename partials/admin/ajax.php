 <?php
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
        $query="select DISTINCT(usr.user_register_id_usuario) as id_usuario, correo as correo, usr.Registro as fecha from user_register reg,usuario_has_habilidad hab, usuario_has_tecnica tec, usuario usr where usr.user_register_id_usuario=reg.id_usuario and usr.user_register_id_usuario=hab.user_register_id_usuario and tec.user_register_id_usuario=usr.user_register_id_usuario and usr.edad>='$edad' and usr.activo='Activar' and usr.horario_id_horario='$horario' and usr.educacion_ideducacion<='$educacion' and usr.localidad_idlocalidad='$localidad' and usr.ingles_idingles>='$ingles' and (hab.habilidad_idhabilidad='$habilidad1' or hab.habilidad_idhabilidad='$habilidad2' or hab.habilidad_idhabilidad='$habilidad3') and (tec.tecnica_idtecnica='$competencia1' or tec.tecnica_idtecnica='$competencia2' or tec.tecnica_idtecnica='$competencia3')";
        $result2= mysqli_query($db, $query);
        if($result2)
        {
            while($row2=mysqli_fetch_array($result2)){
                echo'<tr><td>'.$row2['id_usuario'].'</td>
                <td>'.$row2['correo'].'</td>
                <td>'.$row2['fecha'].'</td>
                 <td><a href="partials/admin/action.php?eusuario='.$row['id_usuario'].'" class="btn btn-info">Editar</a></td>
                    <td><a href="partials/admin/action.php?dusuario='.$row['id_usuario'].'" class="btn btn-danger">Eliminar</a></td>
                    </tr>
                ';
            }
        }
        ?>