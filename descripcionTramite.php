<?php require_once("header.php");?>
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Trámites
      </h1>
      
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
                  <label for="inputEmail3" class="col-sm-3 control-label">Nro. FUT</label>
                  <div class="input-group col-sm-8">
                    <input type="text" class="form-control">
                    
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Trámites</label>
                  <div class="input-group col-sm-8 ">
                      <input type="text" class="form-control">
                        
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
                  <label for="inputEmail3" class="col-sm-3 control-label">Fecha de registro</label>
                  <div class="input-group col-sm-8">
                    <input type="text" class="form-control">
                    
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Estado</label>
                  <div class="input-group col-sm-8 ">
                      <select class="form-control select2" style="width: 100%;">
                     
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
                  <th>Departamento</th>
                  <th>Descripcion</th>
                  <th>Fecha</th>
                  
                </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Mesa de Partes</td>
                    <td>Derivado al departamento de informatica.
                    </td>
                    <td>13/05/16</td>
                    
                  </tr>
                  <tr>
                    <td>Informatica</td>
                    <td>Derivado al departamento de estudios generales.
                    </td>
                    <td>14/05/16</td>
                    
                  </tr>
                  <tr>
                  

                    <td>Estudios Generales
                    </td>
                    <td>Derivado a Mesa de Partes con una respuesta final</td>
                    <td>16//05/16</td>
               
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

  <section class="content-header">
      <h1>
        Respueta Final </p>
      </h1>
  
    </section>


      <div class="row">
         <div class="col-md-12">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <!-- form start -->
            <form class="form-horizontal">
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-1 control-label"></label>
                  <div class="input-group col-sm-10">
                    <input type="text" class="form-control">
                  
                    
      
                  </div>
                </div>
                
                </div>
              </div>
            </form>
         </div>
        </div>

       <div class="btn">
         <div class="col-md-12">  
      
           <a href="#" class="btn btn-primary btn-block"><b>Regresar</b></a>
         
           </a>
           
       </div>

       
    </section>
    <!-- /.content -->
  </div>

<?php require_once("footer.php");?>