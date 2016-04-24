<?php require_once("header.php");//crear
require_once("funciones.php");
$accion=leerParam("accion","");
$id_solicitante=leerParam("id_solicitante","");
$dni_solicitante=leerParam("dni_solicitante","");
$nom_solicitante=leerParam("nom_solicitante","");
$ape_solicitante=leerParam("ape_solicitante","");
$login_solicitante=leerParam("login_solicitante","");


$xc = conectar();
if($accion=="crear")
{
  $pass_solicitante=leerParam("pass_solicitante","");
  $sql = "INSERT INTO solicitante (dni_solicitante,nom_solicitante,ape_solicitante,login_solicitante,pass_solicitante) VALUES ('$dni_solicitante','$nom_solicitante','$ape_solicitante','$login_solicitante','$pass_solicitante')";
  try {
    mysqli_query($xc,$sql);
  } catch (Exception $e) {
   header("Location:error.php");
  }

  desconectar($xc);
  ?>

 <div class="example-modal">
    <div class="modal modal-success">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Muy bien</h4>
          </div>
          <div class="modal-body">
            <p>Solicitante creado correctamente</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-outline"><a class="btn btn-info" href="agregarTramite.php">Regresar</a></button>
          </div>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
  </div>

<?php
}
if($accion=="edit")
{

    $sqlupdate="UPDATE solicitante SET nom_solicitante='$nom_solicitante',dni_solicitante='$dni_solicitante',ape_solicitante='$ape_solicitante',login_solicitante='$login_solicitante' WHERE id_solicitante='$id_solicitante'";
    //echo $sqlupdate;
  //  die();
    try {
      mysqli_query($xc,$sqlupdate);
    } catch (Exception $e) {
     header("Location:error.php");
    }

    desconectar($xc);
    ?>
    <div class="jumbotron">
      <div class="container">
        <h2>Solicitante Modificado Correctamente!</h2>
        <a class="btn btn-info" href="solicitantes.php"><span class="glyphicon glyphicon-search"> Regresar a NUEVO TRÁMITE</span></a>
      </div>
    </div>
    <?php
}
else {
  $sqleliminar="DELETE FROM solicitante WHERE id_solicitante='$id_solicitante'";

    mysqli_query($xc,$sqleliminar);
    desconectar($xc);
    ?>
    <div class="jumbotron">
      <div class="container">
        <h2>Solicitante Eliminado Correctamente!</h2>
        <a class="btn btn-info" href="solicitantes.php"><span class="glyphicon glyphicon-search"> Regresar a NUEVO TRÁMITE</span></a>
      </div>
    </div>
    <?php

}
?>



<?php require_once("footer.php"); ?>
