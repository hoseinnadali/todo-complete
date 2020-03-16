<?php
//call the requiremants(by "require_once") from other files on project foulder...

#there calling the main file that include the main codes
require_once "main.php";

#there calling the jdf library to convert dates to shamsi
require_once "jdf.php";

#define a function to setting the sequrity for variables that responsed...
public function setSequrity($data){
  $data = trim(stripslashes(htmlspecialchars($data)));
  return $data;
}
#check out for variables that GET or POST,that requires is set or no
if($_SERVER[REQUEST_METHOD] == "POST"){
  if(!isset($_POST[])){
    echo "Sorry!!!<br>There is <i>nothing</i>";
    exit();
  }
  if(!isset($_POST["title"]) || !isset($_POST["description"])){
    echo "Sorry!!!<br>There are not <i>nothing for require variables</i>";
    exit();
  }
  !empty($_POST["dueDate"]) ? $dueDate = jdate("Ynj",setSequrity($_POST["dueDate"])) : $dueDate = null;
  $title = setSequrity($_POST["title"]);
  $description = setSequrity($_POST["description"]);
  $addDate = setSequrity(jdate("Ynj"));
  $editDate = null;
  $isDone = false;
  $insertCrud = new MyCrud();
  $insertConnection = $insertCrud->setConnection();
  $insertCrud->insert($insertConnection,$title,$description,$dueDate,$addDate,$editDate,$isDone);
}
echo "Sorry!!!<br>There is <i>missing request</i>";






 ?>
