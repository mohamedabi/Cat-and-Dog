<?php

 

require_once 'dbh.inc.php';

 

if($_POST) {

    $sponsors_id = $_POST['sponsors_id'];

    $sponsors_logo= $_POST['sponsors_logo'];

    $sponsors_address = $_POST['sponsors_address'];

    $sponsors_email= $_POST['sponsors_email'];

    $sponsors_name= $_POST['sponsors_name'];

    
 


 

    $sql = "UPDATE sponsors SET sponsors_id = '$sponsors_id', sponsors_logo = '$sponsors_logo', sponsors_address = '$sponsors_address' , sponsors_email = '$sponsors_email', sponsors_name = '$sponsors_name' WHERE sponsors_id = {$sponsors_id}";

    if($conn->query($sql) === TRUE) {

        echo "<p>Succcessfully Updated</p>";

        echo "<a href='index.php?id=".$sponsors_id."'><button type='button'>Back</button></a>";

        echo "<a href='../index.php'><button type='button'>Home</button></a>";

    } else {

        echo "Erorr while updating record : ". $conn->error;

    }

 

    $conn->close();

 

}

 

?>