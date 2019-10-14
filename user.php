<?php
include "dbcon.php";
 
  class dataOperations extends Dbh
  {
    //insert method 
        public function insert_data($table,$fields){
            $insertUserDataSQL = "";
            $insertUserDataSQL .="INSERT INTO ".$table;
            $insertUserDataSQL .=" (".implode(",", array_keys($fields)).") VALUES ";
            $insertUserDataSQL .="('".implode("','", array_values($fields))."')";
            $query = mysqli_query($this->conn,$insertUserDataSQL);
            if($query){
              return true;
            }
        }
    //select method
      public function select_data($table){
            $selectDataSQL = "SELECT * FROM" . $table;
            $array = array();
            $query = mysqli_query($this->conn, $selectDataSQL);
            while ($row = mysql_fetch_assoc($query)) {
                $array[] = $row;
            }
            return $array;
      }
  }

  

//using the insert method
    $insertUserData = new dataOperations;
    if(isset($_POST["submit"])){
      $myArray = array(
        "userName"=> $_POST["userName"],
        "passWord"=> $_POST["Pass"]
      );

    if($insertUserData->insert_data("userdetails",$myArray)){
      header("location:index.php?msg=Record Inserted");
    }
  }

?>
