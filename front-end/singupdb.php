<?php
include "dp.php";
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $specialization = $_POST["specialization"];
    $year = $_POST["year"];
    $gender = $_POST["gender"];
    $password = $_POST["password"];

    $sql = "INSERT INTO singup (name, email, phone, specialization, yearr, gender, pass) VALUES ('$name', '$email', '$phone', '$specialization', '$year', '$gender', '$password')";
    if(mysqli_query($connection, $sql)){
        echo "Record added successfully";
        echo "<script>window.location.href = 'signin.php';</script>";
    }else{
        echo "Error: " . $sql . "<br>" . mysqli_error($connection);
        echo "<script>window.location.href = 'signup.php';</script>";
    }
}

?>