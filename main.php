<?php

define("serverName","localhost");
define("userName","root");
define("password","");
define("dbName","tododb");
define("tableName","todolist");

class MyCrud{
  public function setConnection(){
    try {
      $connection = new PDO("mysql : host = serverName,dbname = dbName",userName,password);
      $connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
      echo "Connected successfully!!!";

    } catch (PDOException $e) {
      echo "Connection failed: ".$e->getMessage();
    }
    return $connection;
  }
  public function insert($insertConnection,$title,$description,$dueDate,$addDate,$editDate,$isDone){
    try {
      $insertConnection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
      $query = "INSERT INTO tableName (title,description,dueDate,addDate,editDate,isDone)
      VALUES ($title,$description,$dueDate,$addDate,$editDate,$isDone)";
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
