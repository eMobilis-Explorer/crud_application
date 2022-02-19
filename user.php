<?php

include 'connect.php';
if (isset($_POST['submit'])) {
    // If the button type name is set to submit the the following variables are declared
    $name = $_POST['name'];
    $email =  $_POST['email'];
    $mobile =  $_POST['mobile_no'];
    $password =  $_POST['password'];

    // Insert query
    $sql = "INSERT INTO `crud` (name, email, mobile, password) values ('$name', '$email', '$mobile', '$password')";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        // echo "Data inserted succesfuly";
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
    <title>User</title>
</head>

<body>
    <div class="container">
        <form class="form_user" action="" method="post">
            <h2>Add your details</h2>
            <label for="">Name</label>
            <input type="text" name="name" placeholder="Enter your name">
            <label for="">Email</label>
            <input type="email" name="email" placeholder="Enter your email">
            <label for="">Mobile Number</label>
            <input type="text" name="mobile_no" placeholder="Enter your mobile number">
            <label for="">Password</label>
            <input type="password" name="password" placeholder="Input password">
            <button type="submit" name="submit">Add Me!</button>


        </form>
    </div>

</body>

</html>