<?php
include_once 'conn.php';

if(isset($_POST['submit'])){
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $number = mysqli_real_escape_string($conn, $_POST['phonenumber']);
    $gender = mysqli_real_escape_string($conn, $_POST['gender']);
    $dob = mysqli_real_escape_string($conn, $_POST['date']);
    $weight = mysqli_real_escape_string($conn, $_POST['weight']);
    $married= mysqli_real_escape_string($conn, $_POST['married']);
    $working = mysqli_real_escape_string($conn, $_POST['time']);
    
    $yooh = "INSERT INTO person (name,email,phonenumber,gender,dob,weight,married,working)
     VALUES ('$name','$email','$number','$gender','$dob','$weight','$married','$working');";
    if(mysqli_query($conn, $yooh)){
        echo "<script> alert ('person added successfully')</script>";
        header("Location: index.php");
    // header("Location:index.php?inserted=true");
    exit();
}else {
    echo "ERROR: NOT ABLE TO EXECUTE $yooh.".mysqli_error($conn);
}

    };

   
    
