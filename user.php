<?php
include "dbcon.php";
  // class User extends Dbh{
  //     protected function getAllUsers(){
  //         $sqlUserSelect = "SELECT * FROM `userdetails`";
  //
  //         $result = $this->connect()->query($sqlUserSelect);
  //         $numRows = $result->num_rows;
  //         if($numRows > 0){
  //           while($row = $result->fetch_assoc()){
  //             $data[] = $row;
  //           }
  //           return $data;
  //         }
  //     }
  // }
  class dataOperations extends Dbh
  {
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
    }

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
