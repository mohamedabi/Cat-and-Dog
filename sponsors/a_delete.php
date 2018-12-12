<?php

require_once 'dbh.inc.php';

 

if($_POST) {

      $sponsors_id = $_POST['sponsors_id'];



 

    $sql = "DELETE FROM sponsors WHERE sponsors_id = {$sponsors_id}";

    if($conn->query($sql) === TRUE) {

        echo "<p>Successfully deleted!!</p>";

        echo "<a href='../index.php'><button type='button'>Back</button></a>";

    } else {

        echo "Error updating record : " . $conn->error;

    }

 

    $conn->close();

}

 

?>