<?php

        use PHPMailer\PhpmAILER\PHPMailer;
        use PHPMailer\PhpmAILER\Exception;

 $connection =new mysqli("localhost","root","","admin");

 if($_POST)
{
	$email=$_POST['email'];
	$selectquery=mysqli_query($connection,"select *from newuser where email='{$email}'")or die(mysqli_error(connection));
	$count = mysqli_num_rows($selectquery);
	$row = mysqli_fetch_array($selectquery);

    if($count>0)
    {

	     echo $row['password'];

       require'vendor/autoload.php';

       $mail =new PHPMailer(true);
     try{
	    $mail->SMTPDebug= 0 ;
        $mail->Host= 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->username ='santhiyamittal@gmail.com';
        $mail->password ='8056524566';
        $mail->SMTPSecure = 'tls';
        $mail->port = 587;

        $mail->setform('santhiyamittal@gmail.com','mail Demo');
        $mail->addAddress('$email','$email');

        $mail->isHTML(true);
        $mail->Subject ='Forgot Password'; 
        $mail->Body ="Hi $email your password is {$row['password']}";
        $mail->AltBody= "Hi $email your password is {$row['password']}";  
     
       $mail->send();
       echo'your password has been sent on your Email ID ';
   } catch(Exception $e){
     echo 'Email could not be sent.';
     echo 'Mailer Error: '.$mail->ErrorInfo;
   }


    }
    else
    {
    echo"<script>alert('Email NOt Found');</script>";
    }
}
?>
<html>

<body>
<form method="post">
    Email:<input type="email" name="email">
 <input type="submit">
</form>
</body>
</html>