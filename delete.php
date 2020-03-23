<?php
//this file work on deleting a row job from database
//deleting from database by title value
#call the main.php
require_once "main.php";

//#check out for request that GET or POST,that require(title) is set or no
if($_SERVER["REQUEST_METHOD"] == "POST"){
  if(isset($_POST["id"]) && !empty($_POST["id"])){
    $id = setSequrity($_POST["id"]);
    #here if there is valid record into database by posted id then return the same record
    $readOneCrud = new MyCrud();
    $readOneQuery = "SELECT * FROM $readOneCrud->tableName WHERE id='$id'";
    $readOneConnection = $readOneCrud->setConnection();
    $readedRecords = $readOneCrud->read($readOneConnection,$readOneQuery);
    #if is not the same record then below codes not work
    if(empty($readedRecords)){
      exit();
    }
    $deleteCrud = new MyCrud();
    $deleteConnection = $deleteCrud->setConnection();
    $deleteCrud->delete($deleteConnection,$id);
    exit();
  }
  echo json_encode("The posted request is invalid");
  exit();
}
?>
