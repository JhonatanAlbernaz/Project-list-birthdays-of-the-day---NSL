<?php 

  ini_set('display_errors', 1);
  error_reporting(E_ERROR);

  require_once("../classes/models/User.php");
  require_once("../classes/DAO/UserDAO.php");

  UserDAO::getInstance()->save(new User($_POST['nome'], $_POST['dataNasc'], $_POST['funcao']));

  header("Location: ../index.php");

?>