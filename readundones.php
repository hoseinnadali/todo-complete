<?php
//this file will doing read the records from database that not seted on done by isDone value from ocifetchstatement

require_once "main.php";

if($_SERVER["REQUEST_METHOD" ] == "POST") {
  $readUndonesCrud = new MyCrud();
  $readUndonesQuery = "SELECT * FROM $readUndonesCrud->tableName WHERE isDone=0";
  $readUndonesConnection = $readUndonesCrud->setConnection();
  $readedRecords = json_encode($readUndonesCrud->read($readUndonesConnection,$readUndonesQuery));
  echo $readedRecords;
  exit();
}
 ?>
