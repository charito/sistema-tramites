<?php require_once("header.php");?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Derivar Trámite
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
         <div class="col-md-12">
          <!-- Horizontal Form -->
          <div class="box box-danger">
            <!-- form start -->
            <form class="form-vertical">
              <div class="box-body">
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Nro. FUT</label>
                    <div class="input-group col-sm-9">
                      <input type="text" class="form-control">
                      <span class="input-group-addon"><i class="fa fa-search"></i></span>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">Solicitante</label>
                    <div class="input-group col-sm-9">
                      <input type="text" class="form-control">
                      <span class="input-group-addon"><i class="fa fa-search"></i></span>
                    </div>
                  </div>
                </div>

              </div>
             </form>

             <div class="box box-success">
              <div class="box-header">
                <h3 class="box-title">Documento</h3>
              </div>
              <div class="box-body">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Tipo de Trámite</label>
                    <div class="input-group col-sm-9">
                      <input type="text" class="form-control">
                      <span class="input-group-addon"><i class="fa fa-search"></i></span>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Asunto</label>
                    <div class="input-group col-sm-9">
                      <input type="text" class="form-control">
                      <span class="input-group-addon"><i class="fa fa-search"></i></span>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Fecha de Registro</label>
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

            <div class="box box-primary">
              <div class="box-header">
                <h3 class="box-title">Datos de envío</h3>
              </div>
              <div class="box-body">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Oficina Origen</label>
                    <div class="input-group col-sm-9">
                      <input type="text" class="form-control">
                      <span class="input-group-addon"><i class="fa fa-search"></i></span>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Remitente</label>
                    <div class="input-group col-sm-9">
                      <input type="text" class="form-control">
                      <span class="input-group-addon"><i class="fa fa-search"></i></span>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Oficina Destino</label>
                    <div class="input-group col-sm-9">
                      <input type="text" class="form-control">
                      <span class="input-group-addon"><i class="fa fa-search"></i></span>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Destino</label>
                    <div class="input-group col-sm-9">
                      <input type="text" class="form-control">
                      <span class="input-group-addon"><i class="fa fa-search"></i></span>
                    </div>
                  </div>
                </div>
              </div>
            </div>



              <div class="box-body">
                <div class="col-md-20">
                  <section class="content">
                    <div class="row">
                      <div class="col-md-80">
                        <div class="box box-info">
                          <div class="box-header">
                            <h3 class="box-title">Respuesta

                            </h3>
                            <!-- tools box -->
                            <div class="pull-right box-tools">
                              <button type="button" class="btn btn-info btn-sm" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                                <i class="fa fa-minus"></i></button>
                            </div>
                            <!-- /. tools -->
                          </div>
                          <!-- /.box-header -->
                          <div class="box-body pad">
                            <form>
                                  <textarea id="editor1" name="editor1" rows="10" cols="190">Colocar Respuesta de profesor
                                  </textarea>
                            </form>
                          </div>

                        </div>
                        <!-- /.box -->
                      </div>  <!-- /.col-->
                    </div>  <!-- ./row -->
                  </section>
              </div>
                </div>
                <td>

                  <div class="row">
                   <div class="col-md-12">
                   <div class="box box-primary">

                  <td>
                       <button type="button" class="btn btn-block btn-primary btn-lg">Aceptar</button>
                     </td>
                  <td>
                   <button type="button" class="btn btn-block btn-danger btn-lg">Cancelar</button>
                 </td>

               </div>
      <!-- /.col -->
              </div>
          </div>
          </div>
         </div>
        </div>
    </section>
  </div>

<?php require_once("footer.php");?>