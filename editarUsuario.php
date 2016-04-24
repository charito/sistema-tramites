<?php require_once("header.php"); ?>
<?php require_once("funciones.php"); ?>
<?php
$id_solicitante=leerParam("id","");
$xc = conectar();
$sql="SELECT * FROM solicitante WHERE id_solicitante='$id_solicitante'";
$res=mysqli_query($xc,$sql);
$row=mysqli_fetch_array($res);
$dni_solicitante=$row[1];
$nom_solicitante=$row[2];
$ape_solicitante=$row[3];
$login_solicitante=$row[4];


desconectar($xc);


 ?>

<section class="content"> 
  <div class="row">
    <div class="col-md-12">
      <!-- Horizontal Form -->
      <div class="box box-danger">
      <!-- form start -->
        <form class="form-horizontal">

              <div class="form-group">

                  <div class="register-box">
                    <div class="register-logo">
                      <b>Editar</b>Usuario
                    </div>

                    <div class="register-box-body">

                      <form class="horizontal" method="post" action="grabarAlumno.php">
                        <div class="form-group">
                          <label for="idsol">ID Solicitante</label>
                          <input type="text" class="form-control" readonly="readonly" id="idsol" placeholder="Nro. DNI" name="id_solicitante" value="<?php echo $id_solicitante; ?>">
                        </div>
                           <div class="form-group">
                             <label for="dni">Nro. DNI:</label>
                             <input type="text" class="form-control" id="dni" placeholder="Nro. DNI" name="dni_solicitante"value="<?php echo $dni_solicitante; ?>" >
                           </div>
                        <div class="form-group">
                            <label for="nomSol">Nombres:</label>
                            <input type="text" class="form-control" id="nomSol" placeholder="Nombres" name="nom_solicitante"value="<?php echo $nom_solicitante; ?>" >
                        </div>
                        <div class="form-group">
                            <label for="apeSol">Apellidos:</label>
                            <input type="text" class="form-control" id="apeSol" placeholder="Apellidos" name="ape_solicitante" value="<?php echo $ape_solicitante; ?>">
                        </div>
                        <div class="form-group">
                            <label for="loginSol">Usuario(Login):</label>
                            <input type="text" class="form-control" id="loginSol" placeholder="Login" name="login_solicitante" value="<?php echo $login_solicitante; ?>">
                        </div>
                        <div class="row">
                         <div class="col-xs-6">
                           <input type="text" name="accion" hidden="yes" value="edit">
                           <button type="button" class="btn btn-block btn-success btn-lg">Grabar</button>
                         </div>
                       <!-- /.col -->
                         <div class="col-xs-6">
                           <input type="text" name="accion" hidden="yes" value="edit">
                           <button type="button" class="btn btn-block btn-danger btn-lg">Cancelar</button>
                         </div>
                        </div>
                      </form>
                    </div>
                  </div>
         
              </div>
        </form>
       </div>

      </div>
    </div>
  </div>
</section>


</div>
<!-- /.register-box -->

<!-- jQuery 2.2.0 -->
<script src="plugins/jQuery/jQuery-2.2.0.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
</body>
  
</html>
