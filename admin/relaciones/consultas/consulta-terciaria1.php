<?php include('admin/session-admin.php') ?> 
<?php session_start();?>
<?php
            $db = mysqli_connect('localhost', 'root', '254088Ma!', 'mandra');
      mysqli_set_charset($db, 'utf8')
          ?>
<div class="jumbotron">
               <div class="container">
                   <h1><strong>MATCH</strong> TERCIARIO DE USUARIOS HABILIDAD</h1>
    </div>
    <div class="container">
    <div class="row">
             <div class="col-md-1"></div>
            <div class="col-md-8">
                <table class="table table-bordered">
                    <tr>
                    <th>#</th>
                    <th>Nombre completo</th>
                    <th>Correo</th>
                    <th>Fecha de registro</th>
                    <th>&nbsp;</th>
                    </tr>
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
        $query="select DISTINCT(usr.user_register_id_usuario) as id_usuario, correo as correo, nombre, apellido_paterno, apellido_materno, usr.Registro as fecha from user_register reg,usuario_has_habilidad hab, usuario_has_tecnica tec, usuario usr where usr.user_register_id_usuario=reg.id_usuario and usr.user_register_id_usuario=hab.user_register_id_usuario and tec.user_register_id_usuario=usr.user_register_id_usuario and usr.edad>='$edad' and usr.activo='Activar' and usr.horario_id_horario='$horario' and usr.educacion_ideducacion<='$educacion' and usr.localidad_idlocalidad='$localidad' and (hab.habilidad_idhabilidad='$habilidad1' or hab.habilidad_idhabilidad='$habilidad2' or hab.habilidad_idhabilidad='$habilidad3')";
        $result2= mysqli_query($db, $query);
        if($result2)
        {
            while($row2=mysqli_fetch_array($result2)){
                echo'<tr><td>'.$row2['id_usuario'].'</td>
                <td>'.$row2['nombre']." ".$row2['apellido_paterno']." ".$row2['apellido_materno'].'</td>
                <td>'.$row2['correo'].'</td>
                <td>'.$row2['fecha'].'</td>
                 <td><a href="admin/relaciones/action.php?cusuario='.$row2['id_usuario'].'" class="btn btn-info">Consultar</a></td>
                    </tr>
                ';
            }
        }
        ?>
                   <!-- <tr>
                    <td>1</td>
                    <td>Ingeneir</td>
                    <td>Nel</td>
                    <td><a href="#" class="btn btn-info">Editar</a></td>
                    <td><a href="#" class="btn btn-danger">Eliminar</a></td>
                    </tr>
                    -->
                </table>
        </div>
            <div class="col-md-2"></div>
    </div>
</div>