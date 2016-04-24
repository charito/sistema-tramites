<?php require_once("header.php");?>

<section class="content"> 
  <div class="row">
    <div class="col-md-12">
      <!-- Horizontal Form -->
      <div class="box box-danger">
      <!-- form start -->
        <form class="form-horizontal">
          <div class="box-body">
            <div class="col-md-7">
              <div class="form-group">
                <body class="hold-transition register-page">
                  <div class="register-box">
                    <div class="register-logo">
                      <a><b>Registrar</b>Alumno</a>
                    </div>

                    <div class="register-box-body">
                      <p class="login-box-msg">Registrar Alumno Nuevo</p>

                      <form action="#" method="post">

                        <div class="form-group has-feedback">
                          <input type="text" class="form-control" placeholder="Nombres">
                          <span class="glyphicon glyphicon-user form-control-feedback"></span>
                        </div>
                        <div class="form-group has-feedback">
                          <input type="email" class="form-control" placeholder="Apellidos">
                        </div>
                        <div class="form-group has-feedback">
                          <input type="numeric" class="form-control" placeholder="DNI">
                        </div>
                        <div class="form-group has-feedback">
                          <input type="text" class="form-control" placeholder="Teléfono">
                          <span class="glyphicon glyphicon-phone form-control-feedback"></span>
                        </div>
                        <div class="form-group has-feedback">
                          <input type="email" class="form-control" placeholder="Email">
                          <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                        </div>
                      </form>
                    </div>
                  </div>
                </body>            
              </div>
            </div>

            <div class="col-md-3">
              <div class="form-group">

              <div class="box box-primary">
            <div class="box-body box-profile">
              <img class="profile-user-img img-responsive img-circle" src="dist/img/user4-128x128.jpg" alt="User profile picture">

              <h3 class="profile-username text-center">Name</h3>

              <p class="text-muted text-center">Descripcion</p>
            </div>
            <!-- /.box-body -->
            </div>

                    <body class="hold-transition register-page">
                       <div class="register-box">
                       <div class="register-logo"></div>
                       <div class="form-group has-feedback">
                        <input type="numeric" class="form-control" placeholder="User">
                        <span class="glyphicon glyphicon-user form-control-feedback"></span>
                      </div>
                      <div class="form-group has-feedback">
                        <input type="password" class="form-control" placeholder="Password">
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                       </div> 
      

                  <!--/.registrar -->
                    <div class="row">
                       <div class="col-xs-6">
                         <button type="submit" class="btn btn-primary btn-block btn-flat"><a href="#">Registrar</a></button>
                       </div>
                       <!-- /.col -->
                       <div class="col-xs-6">                       
                         <button type="submit" class="btn btn-second btn-block btn-flat"><a href="#">Cancelar</a></button>
                       </div>
                    </div>
                  </div>
                </body>
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
