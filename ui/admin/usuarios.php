<?php require_once("../_header.php");?>  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Trámites
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-user-plus"></i> Agregar Alumno</a></li>
        <li><a href="#"><i class="fa fa-plus-circle"></i> Agregar Trámite</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
         <div class="col-md-6">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <!-- form start -->
            <form class="form-horizontal">
              <div class="box-body">
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Trámites</label>
                  <div class="input-group col-sm-9 ">
                      <select class="form-control select2" style="width: 100%;">
                        <option selected="selected">Credito educativo</option>
                        <option> ......... </option>
                        <option> ......... </option>
                        <option> ......... </option>
                      </select>             
                  </div>
                </div>
              </div>
            </form>
         </div>
        </div>

         <div class="col-md-6">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <!-- form start -->
            <form class="form-horizontal">
              <div class="box-body">
                
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Estado</label>
                  <div class="input-group col-sm-9 ">
                      <select class="form-control select2" style="width: 100%;">
                        <option selected="selected">En proceso</option>
                        <option>Anulado</option>
                        <option> ......... </option>
                        <option> ......... </option>
                      </select>             
                  </div>
                </div>
              </div>
            </form>
         </div>
      </div>
      </div>
     


      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Nro FUT</th>
                  <th>Tipo Trámite</th>
                  <th>Solicitante</th>
                  <th>Asunto</th>
                  <th>Nro. documentos</th>
                  <th>Estado</th>
                  <th>Fecha Registro</th>
                  <th>Acciones</th>
                </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>0001</td>
                    <td>Crédito Educativo
                    </td>
                    <td>Rosario Huanca</td>
                    <td>Solicito crédito educativo</td>
                    <td>2</td>
                    <td>En proceso</td>
                    <td>10/03/16</td>
                    <td> - - - </td>
                  </tr>
                  <tr>
                    <td>0002</td>
                    <td>Crédito Educativo
                    </td>
                    <td>Rosario Huanca</td>
                    <td>Solicito crédito educativo</td>
                    <td>2</td>
                    <td>En proceso</td>
                    <td>10/03/16</td>
                    <td> - - - </td>
                  </tr>
                  <tr>
                    <td>0003</td>
                    <td>Crédito Educativo
                    </td>
                    <td>Rosario Huanca</td>
                    <td>Solicito crédito educativo</td>
                    <td>2</td>
                    <td>En proceso</td>
                    <td>10/03/16</td>
                    <td> - - - </td>
                  </tr>
                
                </tbody>
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
<?php require_once("../_footer.php");?>
<?php require_once("../_scripts.php");?>
<?php require_once("../_end.php");?>