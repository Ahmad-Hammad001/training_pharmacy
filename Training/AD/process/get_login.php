<?php

include("../config/db_config.php");



if(!empty($_POST)){
$error = "";


if(empty($_POST['Email']) || empty($_POST['password'])){
    $error.= "add user info";
}
if($error !=""){
    header("location:../login.php?error=$error");
}


else{
    $Email = $_POST['Email'];
    $passowrd = $_POST['password'];



    $manager = "SELECT * FROM manager WHERE password = '$passowrd' AND Email ='$Email'";


    if(mysqli_query($connection, $manager)){
        $answre = mysqli_query($connection, $manager);


        if(mysqli_num_rows($answre)==1){
            $db = mysqli_fetch_assoc($answre);
            $user = $db['id']; 
            $manager = "SELECT * FROM manager  WHERE id = '$user'";
            $managerAD = mysqli_query($connection, $manager);
            $managerdb = mysqli_fetch_assoc($managerAD);



            if($managerdb['Email'] = 'Email'){
                session_start();
                $_SESSION['Email'] = $db['Email'];
                $_SESSION['passowrd'] = $db['passowrd'];
                header("location:../managerlogin.php");
            }}

        else{
            $messages = "check password and email";
            header("location:../login.php?massage=$messages");
        }}

    else{
        echo "Error".$manager.mysqli_error($connection);
    }
}}   ?>





