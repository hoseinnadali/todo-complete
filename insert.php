<?php
//call the requiremants(by "require_once") from other files on project foulder...

#there calling the main file that include the main codes
require_once "main.php";

#there calling the jdf library to convert dates to shamsi
require_once "jdf/jdf.php";

#check out for variables that GET or POST,that requires is set or no
if($_SERVER["REQUEST_METHOD"] == "POST"){
  if(!isset($_POST["title"]) || empty($_POST["title"]) || !isset($_POST["description"]) || empty($_POST["description"])){
    echo json_encode("Sorry!!!There are not nothing for require variables");
    exit();
  }else{
  (isset($_POST["dueDate"]) && !empty($_POST["dueDate"])) ? $dueDate = setSequrity($_POST["dueDate"]) : $dueDate = null;
  (isset($_POST["isDone"]) && !empty($_POST["isDone"])) ? $isDone = setSequrity($_POST["isDone"]) : $isDone = false;
  $title = setSequrity($_POST["title"]);
  $description = setSequrity($_POST["description"]);
  #use the jdf library and its jdate function to converting date to solardate
  $dueDate = tr_num($dueDate);
  $addDate = jdate("Ymd","","","","en");
  $editDate = null;
  $isDone = $isDone;
  $insertCrud = new MyCrud();
  $insertConnection = $insertCrud->setConnection();
  $insertCrud->insert($insertConnection,$title,$description,$dueDate,$addDate,$editDate,$isDone);
  exit();
  }
}
 ?>
