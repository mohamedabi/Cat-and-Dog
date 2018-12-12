<?php

 

require_once 'dbh.inc.php';

 

if($_GET['id']) {
	
    $sponsors_id = $_GET['id'];


 

    $sql = "SELECT * FROM sponsors WHERE sponsors_id = {$sponsors_id}";

    $result = $conn->query($sql);

    $data = $result->fetch_assoc();

 

    $conn->close();

?>

 

<!DOCTYPE html>

<html>

<head>

    <title>sponsors</title>

</head>

<body>

 

<h3>Do you really want to delete this sponsors ?</h3>

<form action="a_delete.php" method="post">

 

    <input type="hidden" name="sponsors_id" value="<?php echo $data['sponsors_id'] ?>" />

    <button type="submit">Yes, delete it!</button>

    <a href="index.php"><button type="button">No, go back!</button></a>

</form>

 

</body>

</html>

 

<?php

}

?>