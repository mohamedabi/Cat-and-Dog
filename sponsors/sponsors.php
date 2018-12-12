<?php require_once 'dbh.inc.php'; ?>

 

<!DOCTYPE html>

<html>

<head>

    <title>Sponsors</title>

  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">




</head>

<body>




<div class="manageUser">
    <a href="create.php"><button  class="btn btn-success" style="margin: 10px;">Add sponsors
</button></a>
<h1 class="page-header" style="text-align: center;"> The new Sponsors </h1>

    <table class="table table-striped">

        <thead>

            <tr>

                
                
           <th style=" text-align:center">id</th>
           <th style=" text-align:center">sponsors_logo</th>
           <th style=" text-align:center">sponsors_address</th>
           <th style=" text-align:center">sponsors_email</th>
           <th style=" text-align:center">sponsors_name</th>
           <th style=" text-align:center"> </th>
                

            </tr>

        </thead>

        <tbody>


            <?php

            $sql = "SELECT * FROM sponsors ";

            $result = $conn->query($sql);

 

            if($result->num_rows > 0) {

                while($row = $result->fetch_assoc()) {

                    echo "<tr>

             <td>".$row['sponsors_id']."</td> 
                        <td> ".$row['sponsors_logo']."</td>
            <td>".$row['sponsors_address']."</td>
                        <td>".$row['sponsors_email']."</td>
            <td>".$row['sponsors_name']."</td>
                       


                        <td>

                            <a href='update.php?id=".$row['sponsors_id']."'><button class='btn btn-info' type='button'>Edit</button></a>

                            <a href='delete.php?id=".$row['sponsors_id']."'><button  class='btn btn-danger' type='button'>Delete</button></a>

                        </td>

                    </tr>";

                }

            } else {

                echo "<tr><td colspan='5'><center>No Data Avaliable</center></td></tr>";

            }

            ?>


             

        </tbody>

    </table>

</div>

 

</body>

</html>