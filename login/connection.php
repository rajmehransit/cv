<?php      
   
   $con = new PDO('mysql:host=localhost;port=3307;dbname=db','root','');
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }  
?>  