<?php

 

require_once 'dbh.inc.php';

 

if($_POST) {

    $sponsors_id = $_POST['sponsors_id'];

    $sponsors_logo= $_POST['sponsors_logo'];

    $sponsors_address = $_POST['sponsors_address'];

    $sponsors_email= $_POST['sponsors_email'];

    $sponsors_name= $_POST['sponsors_name'];



 

    $sql = "INSERT INTO sponsors (sponsors_id, sponsors_logo, sponsors_address,sponsors_email,sponsors_name  ) VALUES ('$sponsors_id', '$sponsors_logo', '$sponsors_address','$sponsors_email','$sponsors_name')";

    if($conn->query($sql) === TRUE) {

        echo "<p>New Record Successfully Created</p>";

        echo "<a href='create.php'><button type='button'>Back</button></a>";

        echo "<a href='index.php'><button type='button'>Home</button></a>";

    } else {

        echo "Error " . $sql . ' ' . $conn->conn_error;

    }

 

    $conn->close();

}

 

?>