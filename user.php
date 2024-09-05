<?php  


    include('dbconnection.php');  
    $fullname = $_POST['fullname'];  
    $email = $_POST['email'];  
    $password = $_POST['password'];  
       
        $fullname = stripcslashes($fullname);  
        $email = stripcslashes($email);  
        $password = stripcslashes($password);  
        $fullname = mysqli_real_escape_string($con, $fullname);  
        $email = mysqli_real_escape_string($con, $email);  
        $password = mysqli_real_escape_string($con, $password);  
        $sql = "INSERT INTO login (fullname, email, password) VALUES ('$fullname', '$email', '$password')";  
        $result = mysqli_query($con, $sql);  

// Check if insertion was successful
if ($result) {  
    echo "<h1><center> Registration successful </center></h1>";  
} else {  
    echo "<h1><center> Registration failed. Please try again. </center></h1>";  
}  
      
        $sql = "select * from login where fullname = '$fullname' and email= '$email' and password = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            echo "<h1><center> Login successful </center></h1>";  
        }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
        }     
?>      