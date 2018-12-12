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

    <legend>Add User</legend>

 

    <form action="a_create.php" method="post">

        <table cellspacing="0" cellpadding="0">

            <tr>

                <th>sponsors_id</th>

                <td><input type="text" name="sponsors_id" placeholder="sponsors_id" /></td>

            </tr> 

                        <tr>

                <th>sponsors_logo</th>

                <td><input type="text" name="sponsors_logo" placeholder="sponsors_logo" /></td>

            </tr>    

            <tr>

                <th>sponsors_address</th>

                <td><input type="text" name="sponsors_address" placeholder="sponsors_address" /></td>

            </tr>



                        <tr>

                <th>sponsors_email</th>

                <td><input type="text" name="sponsors_email" placeholder="sponsors_email" /></td>

            </tr>

                        <tr>

                <th>sponsors_name</th>

                <td><input type="text" name="sponsors_name" placeholder="sponsors_name" /></td>

            </tr>

            <tr>

                <td><button type="submit">Insert user</button></td>

                <td><a href="index.php"><button type="button">Back</button></a></td>

            </tr>

        </table>

    </form>

 

</fieldset>

 

</body>

</html>