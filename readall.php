<?php
//this file create to display all records of SQLiteDatabase
#call main.php for use from that
require_once "main.php";


if($_SERVER["REQUEST_METHOD"] == "POST"){
  $readAllCrud = new MyCrud();
  $readAllQuery = "SELECT * FROM $readAllCrud->tableName";
  $readAllConnection = $readAllCrud->setConnection();
  $readedRecords = json_encode($readAllCrud->read($readAllConnection,$readAllQuery));
  echo $readedRecords;
  exit();
}
 ?>
