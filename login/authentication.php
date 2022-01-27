<?php      
    include('connection.php');  
    $username = $_POST['user'];  
    $userpassword = $_POST['pass'];  
      
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $userpassword = stripcslashes($userpassword);  
        $username = mysqli_real_escape_string($con, $username);  
        $userpassword = mysqli_real_escape_string($con, $userpassword);  
      
        
        
        $sql = "select *from register_user where user_name = '$username' and user_password = '$userpassword'"; 
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array( $result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            header('Location:https://rajmehransit.github.io/GUITAR_WEB_APP/');  
        }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
        }     
?>  
