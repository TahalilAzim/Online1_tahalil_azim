<?php
  require_once 'dbconfig.php';
  if(isset($_POST['send'])){
    $name = $_POST['name'];
    $date = $_POST['date'];
    $from = $_POST['from'];
    $to = $_POST['to'];
    $sql = "INSERT INTO `ticket_booking`(`Name`, `APPT_DATE`, `FORM_LOCATION`, `TO_LOCATION`) VALUES ('$name','$date','$from','$to')";
    $con->query($sql);
    header("Location: index.php");
  }
?>