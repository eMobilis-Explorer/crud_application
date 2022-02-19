<?php

$conn = new mysqli('localhost', 'root', '', 'crud_app');

if (!$conn) {
    die(mysqli_error($conn));
}
