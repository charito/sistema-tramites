<?php require_once("header.php");?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Trámites
      </h1>
      <ol class="breadcrumb">
        <li><a href="alumnos.php"><i class="fa fa-user"></i> Alumnos</a></li>
        <li><a href="usuarios.php"><i class="fa fa-user"></i> Usuarios</a></li>
        <li><a href="agregarTramite"><i class="fa fa-plus-circle"></i> Agregar Trámite</a></li>

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
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Tipo de Trámite</label>
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
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Estado</label>
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
              <h3 class="box-title">Historial de Trámites</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Nro de FUT</th>
                  <th>Tipo de Trámite</th>
                  <th>Solicitante</th>
                  <th>Asunto</th>
                  <th>Estado</th>
                  <th>Fecha Registro</th>
                  <th>Acciones</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>Trident</td>
                  <td>Internet
                    Explorer 4.0
                  </td>
                  <td>Win 95+</td>
                  <td> 4</td>
                  <td>X</td>
                </tr>
                <tr>
                  <td>Trident</td>
                  <td>Internet
                    Explorer 5.0
                  </td>
                  <td>Win 95+</td>
                  <td>5</td>
                  <td>C</td>
                </tr>
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