<?php
  require_once("../utils.php");
  
  $_header   = "../../ui/_header.php";
  $_template = '../../ui/admin/cargos.php';
  $_footer   = "../../ui/_footer.php";
  
  $_connection = conectar();
  switch (method () ) {
    case 'GET':
      $id = (int) leerParam('id', '0');
      if ($id)
        echo "get_id";
        //get_one();
      break;
    case 'POST':
      if (save ($_connection) ) {
        $_SESSION["message"] = array(
          'title'   => 'Guardado',
          'content' => 'Cargo guardado con exito!',
          'type'    => 'success'
        );
      } else {
        $_SESSION["message"] = array(
          'title'   => 'Error',
          'content' => 'Ocurrio un error al guardar!',
          'type'    => 'danger'
        );
      }
      header("Location: ".$_currentPath);
      die();
      break;
    case 'PUT':
      break;
    case 'DELETE':
      break;
    default:
      break;
  }

  /// variables to template
  $values = get_all($_connection);
  if (isset ($_SESSION["message"]) ) {
    $message = $_SESSION["message"];
    unset($_SESSION["message"]);
  }
  

  require_once($_header);
  require_once($_template);
  require_once($_footer);

  desconectar($_connection);





  function save($connection)
  {
    $form_description = leerParam('form_description', '');

    if (empty ($form_description) )
      return false;

    $query = "INSERT INTO cargo (desc_cargo) VALUES(?)";
    $statement = $connection->prepare($query);
    //bind parameters for markers, where (s = string, i = integer, d = double,  b = blob)
    $statement->bind_param('s', $form_description);

    if($statement->execute()){
      $id = $statement->insert_id;
    }else{
      //die('Error : ('. $connection->errno .') '. $connection->error);
      $id = false;
    }
    $statement->close();
    return $id;
  }

  function get_all($connection)
  {
    $query = "SELECT id_cargo, desc_cargo FROM cargo";
    $statement = $connection->prepare($query);
    $statement->execute();
    $statement->bind_result($id_cargo, $desc_cargo);
    $results = array();
    while($statement->fetch()) {
        $results[] = array(
          'id_cargo' => $id_cargo,
          'desc_cargo' => $desc_cargo
        );
    }
    $statement->close();
    return $results;
  }

