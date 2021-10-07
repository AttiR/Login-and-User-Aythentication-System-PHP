<?php
    include('config/dbcon.php');

    // fteching New Password 
    if(isset($_POST['submit'])){

        if(isset($_GET['token'])){

            $token = $_GET['token'];

                     $newPassword = $_POST['password'];
            $cPassword = $_POST['c_password'];

            // hashing the passwords
        
            $newPass = password_hash($newPassword, PASSWORD_BCRYPT);
            $cPass = password_hash($cPassword, PASSWORD_BCRYPT);

                    if($newPassword === $cPassword){

                        // updateQuery
                        $updatequery = "update users set password = '$newPass' where token = '$token'";
                        $uquery = mysqli_query($connection, $updatequery);

                        if($updatequery){

                            $_SESSION['updatemessage'] = "Your Passowrd has been updated";
                            header('location:index.php');

                        }else{
                            $_SESSION['nupdate'] = "Your password has not been updated";
                            header('location:resetpassword.php');
                        }

                       


                    }else{
                        echo "password not mached";
                    }
                    
                    


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
    <link rel="stylesheet" href="css/styles.css">
    <title>PHP Password Reset</title>
    <!-- jQuery + Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/d54712eab9.js" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>

<?php include('header.php'); ?>


        <div class="vertical-center">
            <div class="inner-block">
                <form action="" method="post">
                    <h3>Resset Password</h3>
                    <p style="color: #fff; text-align:center">Enter new Password</p>
                    
                    

                 
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" name="password" /> 
                    </div>

                    <div class="form-group">
                        <label>Retype-Password</label>
                        <input type="password" class="form-control" name="c_password" /> 
                    </div>

                  

                    

                    <button type="submit" name="submit" id="submit" style="margin-bottom: 15px;" class="btn btn-outline-primary btn-lg btn-block"> Resset
                    </button>

                    <?php if(isset($_SESSION['nupdate'])){

                        echo $_SESSION['nupdate'];

                    } ?>

                    <p style="color:#fff">Have an Accoount? <a style="color: orange;" href="index.php">Log In</a></p>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>