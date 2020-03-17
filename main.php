<?php
//define constants for server connection configure
define("serverName","localhost");
define("userName","root");
define("password","");
define("dbName","tododb");
define("tableName","todolist");

#define a function to setting the sequrity for variables that responsed...
function setSequrity($data){
  $data = trim(stripslashes(htmlspecialchars($data)));
  return $data;
}

class MyCrud{
  public function __construct(){
    $this->serverName = serverName;
    $this->userName = userName;
    $this->password = password;
    $this->dbName = dbName;
    $this->tableName = tableName;
  }
  public function setConnection(){
    try {
      $connection = new PDO("mysql:host=".$this->serverName.";dbname=".$this->dbName,$this->userName,$this->password);
      $connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
      echo "Connected successfully!!!";
      return $connection;
    } catch (PDOException $e) {
      echo "Connection failed: ".$e->getMessage();
    }
  }
  public function insert($insertConnection,$title,$description,$dueDate,$addDate,$editDate,$isDone){
    try {
      $insertConnection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
      $query ="INSERT INTO $this->tableName (title,description,dueDate,addDate,editDate,isDone)
      VALUES ('$title','$description','$dueDate','$addDate','$editDate','$isDone')";
      $insertConnection->exec($query);
      echo "New record created successfully";
      $insertConnection = null;

    } catch (PDOException $e) {
      echo "Connection failed: ".$e->getMessage();
    }
  }
    // public function delete($)
}






 ?>
