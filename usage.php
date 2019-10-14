
using the insert_data method
To use any of these you'll need to include the file.
<?php

$insertData = new dataOperations;
if (isset($_POST["submit"])) {
    $myArray = array(
        "table_column1" => $_POST["post_form_data"],
        "table_column2" => $_POST["post_form_data"]
    );
    if ($insertUserData->insert_data("required_table", $myArray)) {
        //something happens
    }
}

?>
using the fetch_data method
<?php

$myData = $fetchData->fetch_data("required_table");
foreach ($myData as $row) {
    ?>
    <label><a href="file.php?update=1&id=<?php echo $row['id'] ?>"</label>
    <?php

}

?>
using the select_data method
for this method to work you will need to get the ID. Can use the fetch_data method to help with this.
<?php

if(isset($_GET["update"])) {
    if (isset($_GET["id"])) {
        $id = $_GET["id"];

//Below this line is where we establish our selectors and conditions
//Example on how to work with more than one "$objectID = array("id" => $id, "age" => "22", "name" => "Connor");"
        $objectID = array("id" => $id);
        $row = $ourObject->select_data("required_table", $objectID);
        ?>
        <input type="text" value="<?php echo $row['name'] ?>">
        <?php
    }
}

?>
using the update_data method
to do this you'll first have to do the above code as we need a hidden input with the name and values ID
<input type="hidden" name="id" value="<?php echo $row["id"]; ?>">
<?php

if (isset($_POST["edit"])) {
    $id = $_POST["id"];
    $objectID = array("id" => $id);
    $myArray = array(
        "table_column1" => $_POST["post_form_data"],
        "table_column2" => $_POST["post_form_data"]
    );
    if($updateData->update_data("required_table", $myArray)){
        //do something
    }
}

?>
using the delete_data method
<?php

?>
