<?php
  require_once("funciones.php");
?>

<?php
  $xlogin = leerParam('xlogin_usu','' );
  $xpass  = leerParam('xpass_usu','' );
  //echo "$xlogin + $xpass";
  //die();
  $xc = conectar();

  $sql = "SELECT count(*) FROM usuario WHERE login_usuario='$xlogin' AND pass_usuario='$xpass'";

  $res = mysqli_query($xc,$sql);
  $fila = mysqli_fetch_array($res);
  $xcan = $fila[0];
  //desconectar($xc);
//print($xcan + "-");
//die();

  if ( $xcan > 0 ) {
    echo "estoy aqui.......";
    die();
		$sql1 = "SELECT t.desc_tipo_usu, u.id_usuario, u.nom_usuario, u.ape_usuario,c.desc_cargo,a.desc_area FROM tipousu t,usuario u, cargo c, area a WHERE u.login_usuario='$xlogin' AND u.pass_usuario='$xpass' AND u.id_tipo_usu=t.id_tipo_usu AND u.id_cargo=c.id_cargo AND u.id_area=a.id_area";
		$res1 = mysqli_query( $xc,$sql1 );
	  $fila1 = mysqli_fetch_array($res1);
    		session_start();
	  $xtipo_usu = $fila1[0];
    $xid_usu=$fila1[1];
    $xnom_usu=$fila1[2];
    $xape_usu=$fila1[3];
    $xcargo=$fila1[4];
    $xarea=$fila1[5];
    $_SESSION["id_usu"]=$xid_usu;
    $_SESSION["nom_usu"]=$xnom_usu;
    $_SESSION["ape_usu"]=$xape_usu;
    $_SESSION["area"]=$xarea;
    $_SESSION["cargo"]=$xcargo;

					if($xtipo_usu== 'Mesa de Partes')
					{
              desconectar($xc);
						 header("Location: mmain.php");
					}
					else{

							if($xtipo_usu== 'Dependencia')
							{
                  desconectar($xc);
								 header("Location: dmain.php");
							}
              else {
                desconectar($xc);
                session_destroy();
                header("Location: index.php");
              }
					}
  }
  else
  {
    desconectar($xc);
    header("Location: index.php");
  }
?>
