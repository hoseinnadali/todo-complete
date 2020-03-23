<?php
//this file will doing read the records from database that seted on done by isDone value from ocifetchstatement
require_once "main.php";

if($_SERVER["REQUEST_METHOD"] == "POST"){
  $readDonesCrud = new MyCrud();
  $readDonesQuery = "SELECT * FROM $readDonesCrud->tableName WHERE isDone=1";
  $readDonesConnection = $readDonesCrud->setConnection();
  $readedRecords = json_encode($readDonesCrud->read($readDonesConnection,$readDonesQuery));
  echo $readedRecords;
  exit();
}
 ?>
