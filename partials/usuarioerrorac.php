<?php include('../usuario/session.php') ?>
<?php session_start();?>
<div class="fondo">
     <div class="jumbotron">
             <div class="presentacion">
        <?php  if (isset($_SESSION['correo'])) : ?>
            <form method="post" action="partials/action.php">
          <div class="labelac">Correo electrónico</div>
<div class="input-group input-group-lg">
 <span class="input-group-addon" id="sizing-addon1"></span>
  <input type="text" class="form-control" name="correo" ria-describedby="sizing-addon1" value="<?php echo $_SESSION['correo']?>" readonly>
      </div> 
        <div class="labelac">Contraseña actual</div>
<div class="input-group input-group-lg">
 <span class="input-group-addon" id="sizing-addon1"></span>
  <input type="password" class="form-control" name="password2" ria-describedby="sizing-addon1" value="" required>
      </div> 
             <div class="labelac">Cambia tú contraseña</div>
 <div class="input-group input-group-lg">
 <span class="input-group-addon" id="sizing-addon1"></span>
  <input type="password" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" class="form-control" name="password3" ria-describedby="sizing-addon1" value="" required>
      </div>
                <div class="labelac">Confirma tú contraseña</div>
 <div class="input-group input-group-lg">
 <span class="input-group-addon" id="sizing-addon1"></span>
  <input type="password" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" class="form-control" name="password4" ria-describedby="sizing-addon1" value="" required>
      </div>
                <div class="input-group">
    <button type="submit" class="btn btn-danger btn-lg" name="cambiar_password">Siguiente</button>
  	</div>
                                 </form>
      </div>         
    </div>
<!--<a role="button" class="btn btn-success btn-lg btn-block" href="#!Registro">Registrar Alumno</a>-->
    <?php endif ?>