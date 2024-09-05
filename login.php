<?php  
    include('dbconnection.php');  

    $email = $_POST['email'];  
    $password = $_POST['password'];  

    // Sanitize inputs to prevent SQL injection
    $email = stripcslashes($email);  
    $password = stripcslashes($password);  
    $email = mysqli_real_escape_string($con, $email);  
    $password = mysqli_real_escape_string($con, $password);  

    // Check if the user exists in the database
    $sql = "SELECT * FROM login WHERE email = '$email' AND password = '$password'";  
    $result = mysqli_query($con, $sql);  
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
    $count = mysqli_num_rows($result);  

    if($count == 1){  
        echo "<h1><center> Login successful </center></h1>";  
    } else {  
        echo "<h1> Login failed. Invalid email or password.</h1>";  
    }     
?> 
