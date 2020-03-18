<?php
//call the requiremants(by "require_once") from other files on project foulder...

#there calling the main file that include the main codes
require_once "main.php";

#there calling the jdf library to convert dates to shamsi
require_once "jdf/jdf.php";


#check out for variables that GET or POST,that requires is set or no
if($_SERVER["REQUEST_METHOD"] == "POST"){
  if(!isset($_POST["title"]) || empty($_POST["title"]) || !isset($_POST["description"]) || empty($_POST["description"])){
    echo "Sorry!!!<br>There are not <i>nothing for require variables</i>";
    exit();
  }else{
  (isset($_POST["dueDate"]) && !empty($_POST["dueDate"])) ? $dueDate = $_POST["dueDate"] : $dueDate = null;
  (isset($_POST["isDone"]) && !empty($_POST["isDone"])) ? $isDone = $_POST["isDone"] : $isDone = false;
  $title = setSequrity($_POST["title"]);
  $description = setSequrity($_POST["description"]);
  #use the jdf library and its jdate function to converting date to solardate
  $dueDate = jdate(setSequrity($dueDate));
  $addDate = jdate("Ynj");
  $editDate = null;
  $isDone = setSequrity($isDone);
  $insertCrud = new MyCrud();
  $insertConnection = $insertCrud->setConnection();
  $insertCrud->insert($insertConnection,$title,$description,$dueDate,$addDate,$editDate,$isDone);
  exit();
  }
}
echo "Sorry!!!There is missing request";






 ?>
