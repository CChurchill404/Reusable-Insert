<?php
include "connectionClass.php";

class dataOperations extends Dbh
{
    public function insert_data($table, $fields)
    {
        $insertDataSQL = "";
        $insertDataSQL .= "INSERT INTO " . $table;
        $insertDataSQL .= " (" . implode(",", array_keys($fields)) . ") VALUES ";
        $insertDataSQL .= "('" . implode("','", array_values($fields)) . "')";
        echo $insertDataSQL;
        $query = mysqli_query($this->conn, $insertDataSQL);
        if ($query) {
            return true;
        }
    }

    public function fetch_data($table)
    {
        $fetchDataSQL = "SELECT * FROM" . $table;
        $array = array();
        $query = mysqli_query($this->conn, $fetchDataSQL);
        while ($row = mysql_fetch_assoc($query)) {
            $array[] = $row;
        }
        return $array;
    }

    public function select_data($table, $objectID)
    {
        $selectDataSQL = "";
        $sqlCondition = "";
        foreach ($objectID as $age => $value) {
            $sqlCondition = $age . "='" . $value . "' AND ";
        }
        $sqlCondition = substr($sqlCondition, 0, -5);
        $selectDataSQL .= "SELECT * FROM " . $table . " WHERE " . $sqlCondition;
        $query = mysqli_query($this->conn, $selectDataSQL);
        $row = mysqli_fetch_array($query);
        return $row;
    }

    public function update_data($table, $objectID, $fields){
        $updateDataSQL = "";
        $sqlUpdateCondition = "";
        foreach ($objectID as $key => $value) {
            $sqlUpdateCondition = $key . "='" . $value . "' AND ";
        }
        $sqlUpdateCondition = substr($sqlUpdateCondition, 0, -5);
        //updating a name
        foreach ($fields as $key => $value) {
            $updateDataSQL .= $key . "='".$value."', ";
        }
        $updateDataSQL = substr($updateDataSQL, 0,-2);
        $updateDataSQL = "UPDATE ".$table." SET ".$updateDataSQL." WHERE ".$sqlUpdateCondition;
        if (mysqli_query($this->conn,$updateDataSQL)) {
            return true;
        }
    }

    public function delete_data(){

    }
}
?>
