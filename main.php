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
//there create a class that working as CRUD to work on database and do 4 main action(CREATE,READ,UPDATE,DELETE)
class MyCrud{
  //define a constructor function that construct the attributes
  public function __construct(){
    $this->serverName = serverName;
    $this->userName = userName;
    $this->password = password;
    $this->dbName = dbName;
    $this->tableName = tableName;
  }
  //define a function to connecting to database by PDO
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
  //define a function for inserting datas to database
  public function insert($insertConnection,$title,$description,$dueDate,$addDate,$editDate,$isDone){
    try {
      $insertConnection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
      $query ="INSERT INTO $this->tableName (title,description,dueDate,addDate,editDate,isDone)
      VALUES ('$title','$description','$dueDate','$addDate','$editDate','$isDone')";
      $insertConnection->exec($query);
      echo "New record created successfully";
      $insertConnection = null;
    } catch (PDOException $e) {
      echo "Execute failed: ".$e->getMessage();
    }
  }
  //define a function to delete a row of database by title value of that
    public function delete($deleteConnection,$title){
      try {
        $deleteConnection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $query = "DELETE FROM $this->tableName WHERE title = '$title'";
        $deleteConnection->exec($query);
        echo "Your selected record deleted successfully";
        $deleteConnection = null;
      } catch (PDOException $e) {
        echo "Execute failed: ".$e->getMessage();
      }
    }
}






 ?>
