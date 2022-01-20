 <?php 

$toEmail = 'rajmehra09887766@gmail.com';
$fromName = 'Sender Name';
$formEmail = 'sender@example.com';

$conn = new PDO('mysql:host=localhost;port=3307;dbname=db','root','');

  
$postData = $statusMsg = $valErr = '';
$status = 'error'; 

// If the form is submitted
if(isset($_POST['submit'])){
        
    // Get the submitted form data
    $postData = $_POST;
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    $subject = trim($_POST['subject']);
    $message = trim($_POST['message']);
    
    
    $sql ="INSERT INTO register_user(user_name,user_email,user_password) VALUES(?,?,?)";
    $stmtinsert =$conn->prepare($sql);
    $result=$stmtinsert->execute([$name,$email,$password]);
    if($result){
        echo 'sucess db';
}
else{
    echo"faildb";

    }

    // Validate form fields             
    if(empty($name)){
         $valErr .= 'Please enter your name.<br/>';
         $error_name="<label class='text-danger'></label>";
    }
          
    if(empty($email) || filter_var($email, FILTER_VALIDATE_EMAIL) === false){
        $valErr .= 'Please enter a valid email.<br/>';
        $error_email="<label class='text-danger'></label>";
    }
    if(empty($password)){
        $valErr .= 'Please enter a valid password.<br/>';
        $error_password ="<label class='text-danger'>Enter password<label>";

    }
    if(empty($subject)){
        $valErr .= 'Please enter subject.<br/>';
    }
    if(empty($message)){
        $valErr .= 'Please enter your message.<br/>';
    }

    if(empty($valErr)){
        // Send email notification to the site admin
        $subject = 'New contact request submitted';
        $htmlContent = "
            <h2>Contact Request Details</h2>
            <p><b>Name: </b>".$name."</p>
            <p><b>Email: </b>".$email."</p>
            <p><b>Email: </b>".$password."</p>
            <p><b>Subject: </b>".$subject."</p>
            <p><b>Message: </b>".$message ."</p>
        ";

        // Always set content-type when sending HTML email
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        // Header for sender info
        $headers .= 'From:'.$fromName.' <'.$formEmail.'>' . "\r\n";

        // Send email
        
        @mail($toEmail, $subject, $htmlContent, $headers);

        $status = 'success';
        $statusMsg = 'Thank you! Your request has submitted successfully';
        $postData = '';
    }else{
        $statusMsg = '<p>Please fill all the mandatory fields:</p>'.trim($valErr, '<br/>');
    }
}
?>