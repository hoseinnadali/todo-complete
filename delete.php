<?php
//this file work on deleting a row job from database
//deleting from database by title value
#call the main.php
require_once "main.php";

//#check out for request that GET or POST,that require(title) is set or no
if($_SERVER["REQUEST_METHOD"] == "POST"){
  if(isset($_POST["title"]) && !empty($_POST["title"])){
    $title = setSequrity($_POST["title"]);
    $deleteCrud = new MyCrud();
    $deleteConnection = $deleteCrud->setConnection();
    $deleteCrud->delete($deleteConnection,$title);
    exit();
  }
  echo "The posted request is invalid";
  exit();
}
echo "Sorry!!!There is missing request";









?>
