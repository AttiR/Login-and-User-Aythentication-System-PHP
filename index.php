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

    <!-- Login form -->
    <div class="App">
        <div class="vertical-center">
            <div class="inner-block">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSC-wm6_089pLSBSCkzKLlx6hDkYt1rI-lYMz8-Uglyw_fQPJ3O-zxANjEoMjAx4tFyvBk&usqp=CAU" alt="image">
                <form action="" method="post">
                    <h3>Login</h3>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" name="email_signin" id="email_signin" />
                    </div>

                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" name="password_signin" id="password_signin" />
                    </div>

                    <button type="submit" name="login" id="sign_in"
                        class="btn btn-outline-primary btn-lg btn-block">Sign
                        in</button>
                </form>
            </div>
        </div>
    </div>

</body>

</html>