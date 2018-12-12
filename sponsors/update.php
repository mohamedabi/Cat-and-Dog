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

 

    <style type="text/css">

        fieldset {

            margin: auto;

            margin-top: 100px;

            width: 50%;

        }

 

        table tr th {

            padding-top: 20px;

        }

    </style>

 

</head>

<body>

 

<fieldset>

    <legend>Update sponsors</legend>

 

    <form action="a_update.php" method="post">

        <table cellspacing="0" cellpadding="0">

            <tr>

                <th>sponsors_id</th>

                <td><input type="text" name="sponsors_id" placeholder="sponsors_id" value="<?php echo $data['sponsors_id'] ?>" /></td>

            </tr>     

            <tr>

                <th>sponsors_logo</th>

                <td><input type="text" name="sponsors_logo" placeholder="sponsors_logo" value="<?php echo $data['sponsors_logo'] ?>" /></td>

            </tr>

            <tr>

                <th>sponsors_address</th>

                <td><input type="text" name="sponsors_address" placeholder="sponsors_address" value="<?php echo $data['sponsors_address'] ?>" /></td>

            </tr>

                        <tr>

                <th>sponsors_email</th>

                <td><input type="text" name="sponsors_email" placeholder="sponsors_email" value="<?php echo $data['sponsors_email'] ?>" /></td>

            </tr>

                        <tr>

                <th>sponsors_name</th>

                <td><input type="text" name="sponsors_name" placeholder="sponsors_name" value="<?php echo $data['sponsors_name'] ?>" /></td>

            </tr>
                     
            <tr>

                

                <td><button type="submit">Save Changes</button></td>

                <td><a href="../"><button type="button">Back</button></a></td>

            </tr>

        </table>

    </form>

 

</fieldset>

 

</body>

</html>

 

<?php

}

?>

