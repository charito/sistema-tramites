<?php
  // varibles to all controllers
  session_start();  
  $_currentPath = $_SERVER['REQUEST_URI'];
  
  // funciones PHP
  function method() {
    $method = $_SERVER['REQUEST_METHOD'];
    if ($method == 'POST' && array_key_exists('_method', $_POST)) {
      if ($_POST['_method'] == 'DELETE') {
        $method = 'DELETE';
      } else if ($_POST['_method'] == 'PUT') {
        $method = 'PUT';
      } else {
        $method = 'NONE';
      }
    }
    return $method;
  }
  function leerParam($param, $default) {
     if ( isset($_POST["$param"] ) )
        return trim($_POST["$param"]);
     if ( isset($_GET["$param"] ) )
        return trim($_GET["$param"]);
     return trim($default);
  }
  function conectar() {
     $xc = mysqli_connect("localhost","root","root");
     mysqli_select_db($xc,"tramitedb");
     return $xc;
  }

  function desconectar($xc) {
     mysqli_close( $xc );
  }
?>
