<?php

include('config/dbcon.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

global $success_msg, $email_exist, $_emailErr;
global $emailEmptyErr,$email_verify_err, $email_verify_success;

//fetch Email

if (isset($_POST["submit"])) {
    
    $email = $_POST["email"];

    // check if email already exit
    $email_check_query = "SELECT * FROM users WHERE email = '{$email}' ";
    $query = mysqli_query($connection, $email_check_query);
    $emailcount = mysqli_num_rows($query);

    if($emailcount){

        $userdata = mysqli_fetch_array($query);
        $token = $userdata['token'];

        // Send email to a user who enters the email for recovery

        

                        $msg = 'Click on the activation link to verify your email. <br><br>
                          <a href="http://localhost:8080/Login-and-User-Aythentication-System-PHP/resetpassword.php?token='.$token.'"> Click here to verify email</a>
                        ';

                       
                        
                        require 'lib/Exception.php';
                        require 'lib/PHPMailer.php';
                        require 'lib/SMTP.php';
                        
                        
                        // Create Instance of PHPMailer
                        $mail = new PHPMailer();
                        
                        // set mailer to use SMTP
                        
                        $mail -> isSMTP();
                        
                        // define smtp host
                        $mail -> Host = "smtp.gmail.com";
                        
                        //enable smtp authentication
                        
                        $mail -> SMTPAuth = "true";
                        
                        // set type of encryption (ssl/tls)
                        
                        $mail -> SMTPSecure = "tls";
                        
                        // set port to connect smtp
                        
                        $mail -> Port = "587";
                        
                        // username
                        
                        $mail -> Username = "attirehman388@gmail.com";
                        $mail -> Password = "Like@@999";
                        
                        // Email Subject body etc
                        
                        $mail -> Subject = "Reset Password";
                        $mail -> setFrom('attirehman388@gmail.com');
                        $mail -> Body = $msg;
                        
                        // Add recipient 
                        
                        $mail -> addAddress($email);
                        
                        if($mail -> send()){

                            $_SESSION['message'] = "check ur email for password resset link";
                            header('location: index.php');
                        
                        }else{
                            echo 'error';
                        }
                        
                        // closing smtp connection
                        $mail -> smtpClose();
        
        
        
        
        

    }else{
        echo "No email found";
    }

    
}

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/styles.css">
    <title>PHP User Registration System Example</title>
    <!-- jQuery + Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <title>Login system and Authentication
    </title>
</head>
<body>

<?php 
include ('header.php');
?>

<div class="App">
        <div class="vertical-center">
            <div class="inner-block">
                <form action="" method="post">
                    <h3>Recover Email</h3>
                    <p style="color: #fff; text-align:center">Enter email to recover the password</p>
                    <?php echo $email_exist; ?>
                    

                 
                    <div class="form-group">
                        <label>Correct Email</label>
                        <input type="email" class="form-control" name="email" />

                       
                    </div>

                  

                    

                    <button type="submit" name="submit" id="submit" style="margin-bottom: 15px;" class="btn btn-outline-primary btn-lg btn-block"> Send Email
                    </button>

                    <p style="color:#fff">Have an Accoount? <a style="color: orange;" href="index.php">Log In</a></p>
                </form>
            </div>
        </div>
    </div>
   
    
</body>
</html>