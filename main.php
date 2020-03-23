<?php
//define constants for server connection configure
define("serverName","localhost");
define("userName","root");
define("password","");
define("dbName","tododb");
define("tableName","todolist");

#define a function to setting the sequrity for variables that responsed...
function setSequrity($data){
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
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
      echo json_encode("Connected successfully to database!!!");
      return $connection;
    } catch (PDOException $e) {
      echo json_encode("Connection failed: ".$e->getMessage());
    }
  }
  //define a function for inserting datas to database
  public function insert($insertConnection,$title,$description,$dueDate,$addDate,$editDate,$isDone){
    try {
      $query ="INSERT INTO $this->tableName (title,description,dueDate,addDate,editDate,isDone)
      VALUES ('$title','$description','$dueDate','$addDate','$editDate','$isDone')";
      $insertConnection->exec($query);
      echo json_encode("New record created successfully");
      $insertConnection = null;
    } catch (PDOException $e) {
      echo json_encode("Execute failed: ".$e->getMessage());
    }
  }
  //define a function to delete a row of database by title value of that
    public function delete($deleteConnection,$id){
      try {
        $query = "DELETE FROM $this->tableName WHERE id = '$id'";
        $deleteConnection->exec($query);
        echo json_encode("Your selected record deleted successfully");
        $deleteConnection = null;
      } catch (PDOException $e) {
        echo json_encode("Execute failed: ".$e->getMessage());
      }
    }
    //define a function to read records from database by a input parameter extra '$query' that this is a string to executing requirement query
    public function read($readConnection,$query){
      try {
        $query = $readConnection->prepare($query);
        $query->execute();
        $fetchMode = $query->setFetchMode(PDO::FETCH_ASSOC);
        #set a new array variable to return executed query from database
        $fetchedRecords = array();
        #display title records
        foreach($query->fetchAll() as $key=>$value){
          $fetchedRecords[] = $value;
        }
        #check that exist nothing from fetched record
        empty($fetchedRecords) ? print json_encode("Sorry!!! Nothing") : print json_encode("Yes,exist ");
        $readConnection = null;
        return $fetchedRecords;
      } catch (PDOException $e) {
        echo json_encode("Execute failed :".$e->getMessage());
      }
    }
    //define a function to updating records of database by searching their id
    public function update($updateConnection,$id,$newTitle,$newDescription,$newDueDate,$newEditDate,$newIsDone){
      try {
        $query = "UPDATE $this->tableName
        SET title='$newTitle',description='$newDescription',dueDate='$newDueDate',editDate='$newEditDate',isDone='$newIsDone'
        WHERE id='$id'";
        $update = $updateConnection->prepare($query);
        $update->execute();
        echo json_encode("Your fields will update");
        $updateConnection = null;
      } catch (PDOException $e) {
        echo json_encode("Update failed: ".$e->getMessage());
      }

    }
}
 ?>
