<?php
session_start();
include("../config/db_config.php");
if(isset($_GET['id'])){
    $id = $_GET['id'];

    $delete_query = "DELETE FROM product WHERE id = '$id'";
    if(mysqli_query($connection, $delete_query)){
        $message = "delete successfully";
        header("location:../delete.php?msg=$message");
    }
    else {
        echo "Error".$delete_query." ". mysqli_error($connection);
    }
}

?>