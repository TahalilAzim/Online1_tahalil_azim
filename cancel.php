<?php
  require_once 'dbconfig.php';
  if(isset($_POST['send'])){
    $id = $_POST['id'];
    $sql = "DELETE FROM `ticket_booking` WHERE ID = $id";
    $con->query($sql);
    header("Location: index.php");
  }
?>