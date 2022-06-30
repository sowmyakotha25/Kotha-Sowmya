<?php        
    $host = "localhost";  
    $user = "root";  
    $password = '';  
    $db_name = "login";  
      
    $con = mysqli_connect($host, $user, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }  
    $Email = $_POST['Email'];  
    $Password = $_POST['Password'];   
        $username = stripcslashes($Email);  
        $password = stripcslashes($Password);  
        $username = mysqli_real_escape_string($con, $Email);  
        $password = mysqli_real_escape_string($con, $Password);  
      
        $sql = "select *from loginform where Email = '$Email' and password = '$Password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            echo "<h1><center> Login successful </center></h1>";  
        }  
        else{ 
        echo "<h1><center> try to signup</center></h1>";
        }     
?>