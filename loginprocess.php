<?php 
    include "connection.php";

    $username = $_POST["username"];
    $password = md5($_POST["password"]);

    $query = "SELECT * FROM user WHERE username='$username' && password='$password'";
    $result = mysqli_query($connect, $query);
    $row = mysqli_fetch_assoc($result);

    if($row['level'] == "1"){
        header("Location:layout.home");
    }
    else if($row['id'] == "2"){
        header("Location:index.html");
    }
    else if($row['usernme'] == "satria"){
        header("Location:index.html");
    }
    else{
        header("Location:login.php?error=failed");
    }
?>