<?php //require_once("../_header.php");?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Cargos
      </h1>
      <ol class="breadcrumb">
        <li><a href="#" data-toggle="modal" data-target="#modalEdit"><i class="fa fa-plus-circle"></i> Agregar Cargo</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered table-hover js-table">
                <thead>
                <tr>
                  <th>Id</th>
                  <th>Cargo</th>
                  <th>Acciones</th>
                </tr>
                </thead>
                <tbody>
                  <?php foreach ($values as $key => $value) { ?>
                    <tr>
                      <td><?php echo "$value[id_cargo]"; ?></td>
                      <td><?php echo "$value[desc_cargo]"; ?></td>
                      <td>
                        <div class="btn-group btn-group-sm" role="group" aria-label="...">
                          <button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button>
                          <button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button>
                        </div>
                      </td>
                    </tr>
                  <?php } ?>
                  
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


  <div id="modalEdit" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="modalEdit">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <form action="/controllers/admin/cargos.php" method="POST" class="js-add-position">
          <!--<input type="hidden" name="_method" value="PUT">-->
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="modalEdit">Editar cargo</h4>
          </div>
          <div class="modal-body">
            <div class="form-horizontal">
              <div class="form-group">
                <label for="form_description" class="col-sm-2 control-label">Cargo</label>
                <div class="col-sm-10">
                  <input name="form_description" type="text" class="form-control" id="form_description" placeholder="Cargo">
                </div>
              </div>
            </div>
            
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-primary">Guardar Cambios</button>
          </div>
        </form><!-- /form -->
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->

<?php //require_once("../_footer.php");?>