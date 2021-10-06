

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <title>PHP Login System</title>
    <!-- jQuery + Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>

<body>
     
    <!-- Include Header Script -->
    <?php include('header.php'); ?>

     <!-- Login script -->
     <?php include('./controllers/login.php'); ?>

    <!-- Login form -->
    <div class="App">
        <div class="vertical-center">
            <div class="inner-block">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSC-wm6_089pLSBSCkzKLlx6hDkYt1rI-lYMz8-Uglyw_fQPJ3O-zxANjEoMjAx4tFyvBk&usqp=CAU" alt="image">
                <form action="" method="post">
                    <h3>Login</h3>
                    <?php 
                    
                        echo  $_SESSION['message'];
                    
                    ?>
                    

                    <?php echo $accountNotExistErr; ?>
                    <?php echo $emailPwdErr; ?>
                    <?php echo $verificationRequiredErr; ?>
                    <?php echo $email_empty_err; ?>
                    <?php echo $pass_empty_err; ?>

                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" name="email_signin" id="email_signin" value="<?php if(isset($_COOKIE['emailcookie'])){
                            echo $_COOKIE['emailcookie'];} ?>" />
                    </div>

                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" name="password_signin" id="password_signin" value = "<?php if(isset($_COOKIE['passqordcookie'])){
                            echo $_COOKIE['passwordcookie'];} ?>"/>
                    </div>

                    <p style="color: #fff;">Forgot Password?    <a href="RecoverEmail.php" style="color: orange;"> Click Here </a> </p>

                    <div class="form-check">
                        <input class="form-check-input" name= "remember" type="checkbox"  >
                        <label class="form-check-label" />
                            Remember Me
                        </label>
                    </div>

                    <button style= "margin-top: 12px; margin-bottom: 13px" type="submit" name="login" id="sign_in"
                        class="btn btn-outline-primary btn-lg btn-block">sign in</button>

                        
                        <p style="color: #fff;">Create Account      <a href="signup.php" style="color: orange;">          Click Here </a> </p>
                        
                </form>
            </div>
        </div>
    </div>

</body>

</html>