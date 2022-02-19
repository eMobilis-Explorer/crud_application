<?php

include 'connect.php';
// Get the id from thew variable set on the display update operation button
$id = $_GET['updateid'];

// Display the data to be updated, so u don't have to wing it
$sql = "SELECT * FROM  `crud`WHERE id = $id ";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$name = $row['name'];
$email = $row['email'];
$mobile = $row['mobile'];
$password = $row['password'];

if (isset($_POST['submit'])) {
    // If the button type name is set to submit the the following variables are declared
    $name = $_POST['name'];
    $email =  $_POST['email'];
    $mobile =  $_POST['mobile_no'];
    $password =  $_POST['password'];

    // Update the user data
    // Enclose all other variables in single quotes because thwy are varchar, $id no neeed
    $sql = "UPDATE `crud` SET id = $id, name = '$name', email = '$email', mobile = '$mobile', password = '$password' WHERE id = $id ";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        // echo "Updated succesfuly";
        header('location:display.php');
    } else {
        die(mysqli_error($conn));
    }
}



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
    <title>Update User</title>
</head>

<body>
    <!-- Add value to all inpute elements to have it displayed in the browser -->
    <div class="container">
        <form class="form_user" action="" method="post">
            <h2>Add your details</h2>
            <label for="">Name</label>
            <input type="text" name="name" placeholder="Enter your name" value=<?php echo $name ?>>
            <label for="">Email</label>
            <input type="email" name="email" placeholder="Enter your email" value=<?php echo $email ?>>
            <label for="">Mobile Number</label>
            <input type="text" name="mobile_no" placeholder="Enter your mobile number" value=<?php echo $mobile ?>>
            <label for="">Password</label>
            <input type="password" name="password" placeholder="Input password" value=<?php echo $password ?>>
            <button type="submit" name="submit">Update Me!</button>


        </form>
    </div>

</body>

</html>