<?php
//this file create to display all records of SQLiteDatabase
#call main.php for use from that
require_once "main.php";


if($_SERVER["REQUEST_METHOD"] == "POST"){
  $readCrud = new MyCrud();
  $query = "SELECT * FROM $readCrud->tableName";
  $readAllConnection = $readCrud->setConnection();
  $readCrud->readAll($readAllConnection,$query);
  exit();
}
echo "Sorry!!!There is missing request";






 ?>
