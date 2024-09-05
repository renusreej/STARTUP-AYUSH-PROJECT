<?php  
    include('dbconnection.php');  

    $fullname = $_POST['fullname'];  
    $email = $_POST['email'];  
    $password = $_POST['password'];  

    // Sanitize inputs to prevent SQL injection
    $fullname = stripcslashes($fullname);  
    $email = stripcslashes($email);  
    $password = stripcslashes($password);  
    $fullname = mysqli_real_escape_string($con, $fullname);  
    $email = mysqli_real_escape_string($con, $email);  
    $password = mysqli_real_escape_string($con, $password);  

    // Insert the user into the database
    $sql = "INSERT INTO login (fullname, email, password) VALUES ('$fullname', '$email', '$password')";  
    $result = mysqli_query($con, $sql);  

    // Check if the insertion was successful
    if ($result) {  
        echo "<h1><center> Registration successful </center></h1>";  
    } else {  
        echo "<h1><center> Registration failed. Please try again. </center></h1>";  
    }  
?> 
