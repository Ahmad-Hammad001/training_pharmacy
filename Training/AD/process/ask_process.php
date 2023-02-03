<?php
include("../config/db_config.php");

if (!empty($_GET)) {
    $error = "";
    if (empty($_GET['name']) || empty($_GET['phoneNumber']) || empty($_GET['Question'])) {
        $error .= "error";
        header("location:../index.php?key_error=$error");
    } else {
        $name = $_GET['name'];
        $phoneNumber = $_GET['phoneNumber'];
        $Question = $_GET['Question'];

        $query = "INSERT INTO question (name,phoneNumber, Question) VALUES('$name', '$phoneNumber', '$Question')";
        if (mysqli_query($connection, $query)) {
            header("location:../index.php?message=done");
        } else {
            echo "Error" . $query . mysqli_error($connection);
        }
    }
}
?>