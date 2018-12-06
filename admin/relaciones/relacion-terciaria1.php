<?php include('admin/session-admin.php') ?> 
<?php
            $db = mysqli_connect('localhost', 'root', '254088Ma!', 'mandra');
      mysqli_set_charset($db, 'utf8')
          ?>
<div class="jumbotron">
               <div class="container">
                       <h2><strong>CONSULTA</strong> TRABAJO POR CATEGORÍA, HABILIDAD E INGLÉS.</h2><br>
    </div>
    <div class="container">
    <div class="row">
             <div class="col-md-2"></div>
            <div class="col-md-8">
                <table class="table table-bordered">
                    <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Salario</th>
                    <th>Fecha de alta oferta</th>
                    <th>Empresa</th>
                    <th>Consultar</th>
                    </tr> 
                            <?php
        
        $query="select * from trabajo where activo='Activar' order by id_trabajo";
        $result= mysqli_query($db, $query);
        if($result)
        {
            while($row=mysqli_fetch_array($result)){
                $empresa = $row['empresa_idempresa'];
                 $query2="select * from empresa where idempresa='$empresa'";
                $result2= mysqli_query($db, $query2);
                $rowempresa=mysqli_fetch_array($result2);
        $empresa2 = $rowempresa['nombre'];
                echo'<tr><td>'.$row['id_trabajo'].'</td>
                <td>'.$row['nombre'].'</td>
                <td>'.$row['salario'].'</td>
                <td>'.$row['fecha_post'].'</td>
                <td>'.$empresa2.'</td>
                 <td><a href="partials/admin/action.php?vp5trabajo='.$row['id_trabajo'].'" class="btn btn-info">Consultar trabajo</a></td>
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