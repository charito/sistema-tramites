<?php require_once("header.php");
require_once("funciones.php");
$xc = conectar();
$sql="SELECT * FROM solicitante";
$res=mysqli_query($xc,$sql);

desconectar($xc);
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Alumnos - Solicitantes
      </h1>
      <ol class="breadcrumb">
        <li><a href="agregarTramite"><i class="fa fa-plus-circle"></i> Agregar Alumnos</a></li>
        <li><a href="tramite.php"><i class="fa fa-user"></i>Trámites</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
         <div class="col-md-12">
          <!-- Horizontal Form -->
          <div class="box box-info">

              <div class="box-body">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Número de FUT</label>
                    <div class="input-group col-sm-9">
                      <input type="text" class="form-control">
                      <span class="input-group-addon"><i class="fa fa-search"></i></span>
                    </div>
                  </div>                  
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">DNI</label>
                    <div class="input-group col-sm-9">
                      <input type="text" class="form-control">
                      <span class="input-group-addon"><i class="fa fa-search"></i></span>
                    </div>
                  </div>                  
                </div>
              </div>

          </div>
         </div>
      </div>

      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Historial de Usuarios</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Item</th>
                  <th>Nombres</th>
                  <th>Apellidos</th>
                  <th>DNI</th>
                  <th>User</th>
                  <th>Password</th>
                  <th>Acción Editar</th>
                  <th>Acción Eliminar</th>
                </tr>
                </thead>
                <tbody>
                <?php
                while ($row=mysqli_fetch_array($res))
                {
                  echo"<tr> <td>";
                    echo $row['id_solicitante'];
                  echo"</td>";
                  echo"<td>";
                    echo $row['nom_solicitante'];
                  echo"</td>";
                  echo"<td>";
                    echo $row['ape_solicitante'];
                  echo"</td>";
                  echo"<td>";
                    echo $row['dni_solicitante'];
                  echo"</td>";
                  echo"<td>";
                    echo $row['login_solicitante'];
                  echo"</td>";
                  echo"<td>";
                    echo $row['pass_solicitante'];
                  echo"</td>";
                  echo"<td>";
                    echo "<a href='editarUsuario.php?id=$row[id_solicitante]'>Editar</a>";
                  echo"</td>";
                  echo"<td>";
                    echo "<a href='eliminarUsuario.php?id=$row[id_solicitante]'>Eliminar</a>";
                  echo"</td>";

                  echo"</tr>";

                }
                 ?>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
  
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<?php require_once("footer.php");?>