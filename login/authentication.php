<?php      
    include('connection.php');  
    $username = $_POST['user'];  
    $userpassword = $_POST['pass'];  
      
        //to prevent from mysqli injection  
        $username = stripcslashes($user_name);  
        $userpassword = stripcslashes($user_password);  
        $username = mysqli_real_escape_string($con, $user_name);  
        $userpassword = mysqli_real_escape_string($con, $user_password);  
      
        
        $sql = "SELECT *FROM register_user WHERE user_name = $username AND user_password = $usepassword"; 
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