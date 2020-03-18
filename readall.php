<?php
//this file create to display all records of SQLiteDatabase
#call main.php for use from that
require_once "main.php";


if($_SERVER["REQUEST_METHOD"] == "POST"){
  $readAllCrud = new MyCrud();
  $readAllQuery = "SELECT * FROM $readAllCrud->tableName";
  $readAllConnection = $readAllCrud->setConnection();
  $readAllCrud->read($readAllConnection,$readAllQuery);
  exit();
}
echo "Sorry!!!There is missing request";






 ?>
