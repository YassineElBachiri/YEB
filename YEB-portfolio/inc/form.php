<?php
$fullName = $_POST['fullName'];
$email = $_POST['email'];
$msg = $_POST['msg'];

if(isset($_POST['submit'])){
    $fullName = mysqli_real_escape_string($conn,$_POST['fullName']);
    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $msg = mysqli_real_escape_string($conn,$_POST['msg']);

    $sql = "INSERT INTO user(fullName, email, msg ) VALUES ('$fullName','$email','$msg')";

    if(empty($fullName)){
        echo 'Please Enter Your FullName';
    }
    elseif(empty($email)){
        echo 'Please Enter Your Email';
    }elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        echo 'Your Email is not correct';
    }
    elseif(empty($msg)){
        echo 'Please Enter Your message';
    }else{
        if(mysqli_query($conn,$sql)){
            header('Location: index.php');
        }else{
            echo 'Error: ' .mysqli_error($conn);
        }
    }

}