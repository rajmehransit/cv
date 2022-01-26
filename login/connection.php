<?php      
  
     
   $con = mysqli_connect('localhost','root','','db',3307);  
   if(!$con) {  
       die("Failed to connect with MySQL: ". mysqli_connect_error());  
   }  
 
?>  