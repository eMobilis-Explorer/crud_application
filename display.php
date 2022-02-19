<?php

include 'connect.php';

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Eczar:wght@400;500&family=Shizuru&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <title>Users</title>
</head>
<div class="container display_con">
    <button> <a href="user.php">Add user</a></button>

    <!-- Table -->
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Id No</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Mobile Number</th>
                <th scope="col">Password</th>
                <th scope="col">Operations</th>
            </tr>
        </thead>

        <tbody>

            <?php
            // Selecting the variables saved in the table 
            $sql = "SELECT * FROM `crud`";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                while ($row = mysqli_fetch_assoc($result)) {
                    // Take the variables assocciated to each tabble variable
                    $id = $row['id'];
                    $name = $row['name'];
                    $email = $row['email'];
                    $mobile = $row['mobile'];
                    $password = $row['password'];

                    // Echoing the variables saved in the table

                    echo '<tr>
                    <th scope="row">' . $id . '</th>
                    <td>' . $name . ' </td>
                    <td>' . $email . '</td>
                    <td>' . $mobile . '</td>
                    <td>' . $password . '</td>


            
                    <td>
                <button class="opp update"><a href="update.php?updateid=' . $id . '">Update</a></button>
                <button class="opp delete"><a href="delete.php?deleteid=' . $id . '">Delete</a></button>
            </td>
                </tr>';
                }
            }



            ?>



        </tbody>
    </table>
</div>

<body>

</body>

</html>