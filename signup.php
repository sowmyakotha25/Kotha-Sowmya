<?php
    
    $Email = $_POST['email'];
    $Password = $_POST['password'];
    

    // Database connection
    $conn = new mysqli('localhost','root','','login');
    if($conn->connect_error){
        echo "$conn->connect_error";
        die("Connection Failed : ". $conn->connect_error);
    } else {
        $stmt = $conn->prepare("insert into loginform(email, password) values(?, ?)");
        $stmt->bind_param("ss",$Email, $Password);
        $execval = $stmt->execute();
        echo $execval;
        echo "signup successfully...";
        $stmt->close();
        $conn->close();
    }
?>