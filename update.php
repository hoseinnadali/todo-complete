<?php
//this file is do the updates on records of SQLiteDatabase

require_once "main.php";
require_once "jdf/jdf.php";
#check the below statements To see if the request is valid
if($_SERVER["REQUEST_METHOD"] == "POST"){
  if(isset($_POST["id"]) && !empty($_POST["id"])){
    $id = setSequrity($_POST["id"]);
    #here if there is valid record into database by posted id then return the same record
    $readOneCrud = new MyCrud();
    $readOneQuery = "SELECT * FROM $readOneCrud->tableName WHERE id='$id'";
    $readOneConnection = $readOneCrud->setConnection();
    $readedRecords = $readOneCrud->read($readOneConnection,$readOneQuery);
    #if is not the same record then below codes not work
    empty($readedRecords)?exit():
    //set new values to update
    (isset($_POST["newTitle"]) && !empty($_POST["newTitle"])) ? $newTitle = setSequrity($_POST["newTitle"]) : $newTitle = $readedRecords[0]["title"];
    (isset($_POST["newDescription"]) && !empty($_POST["newDescription"])) ? $newDescription = setSequrity($_POST["newDescription"]) : $newDescription = $readedRecords[0]["description"];
    isset($_POST["newDueDate"]) ? $newDueDate = tr_num(setSequrity($_POST["newDueDate"]),"en") : $newDueDate = $readedRecords[0]["dueDate"];
    $newEditDate = jdate("Ymd","","","","en");
    isset($_POST["newIsDone"]) ? $newIsDone = setSequrity($_POST["newIsDone"]) : $newIsDone = $readedRecords[0]["isDone"];
    #use the update function from main.php to updating defined record
    $updateCrud = new MyCrud();
    $updateConnection = $updateCrud->setConnection();
    $updateCrud->update($updateConnection,$id,$newTitle,$newDescription,$newDueDate,$newEditDate,$newIsDone);
    exit();
  }
  echo json_encode("Sorry!!!Please post the correct id value");
  exit();
}
 ?>
