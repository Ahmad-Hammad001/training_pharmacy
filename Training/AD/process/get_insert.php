<?php
session_start();
include("../config/db_config.php");
$name=strtolower(trim($_POST['name']));
$branch=strtolower(trim($_POST['mnue']));
$price=strtolower(trim($_POST['price']));
if(isset($_POST)){
$error = "";

if(empty($_POST['name'])){
    $error.= "empty";
}

if($error != ""){
    header("location:../insert.php?error=$error");
}
else{
        
       


        $insert_query = "INSERT INTO product (name, branchid, price) VALUES ('$name', '$branch', '$price')";
        
        $outcome = mysqli_query($connection, $insert_query);
        if(!$outcome){
            echo "Error: " . mysqli_error($connection);
        }else{
            header("location:../insert.php?message=Done");
        }
        
  }
}
?>



