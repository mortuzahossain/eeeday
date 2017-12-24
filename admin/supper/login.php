<!DOCTYPE HTML>
<html>

<head>
    <title>EEE Day Supper Admin Entry</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="../css/bootstrap.min.css" rel='stylesheet' type='text/css' />
    <link href="../css/style.css" rel='stylesheet' type='text/css' />
    <link href="../css/font-awesome.css" rel="stylesheet">
</head>

<body>
    <div class="login">
        <h1>Supper Admin Entry Point</h1>
<?php
    
    session_start();
    # If Already Login 
    if(isset($_SESSION['active'])){
        header('Location: index.php');
        exit();
    }
    # For Not Log In
    include '../../inc/constants.php';
    if (isset($_POST['submit'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        if ($email == user && $password == pass) { 
            #Login Success
            $_SESSION['active'] = 1;
            header('Location: index.php');
            exit();
        } else {
            #Login Failed
            echo "<h2 class='text-center'>Failed To Login . Please Tye Again Or contact with <a href='http://facebook.com/mdmortuza.hossain'> Me</a></h2>";
        }
    }

?>

        <div class="login-bottom">
            <h2>Login</h2>
            <form action="" method="post">
                <div class="col-md-6">
                    <div class="login-mail">
                        <input type="text" placeholder="Email" required="" name="email">
                        <i class="fa fa-envelope"></i>
                    </div>
                    <div class="login-mail">
                        <input type="password" placeholder="Password" required="" name="password">
                        <i class="fa fa-lock"></i>
                    </div>
                </div>
                <div class="col-md-6 login-do">
                    <label class="hvr-shutter-in-horizontal login-sub">
					<input type="submit" value="login" name="submit">
                </div>

                <div class="clearfix"> </div>
            </form>
        </div>
    </div>

</body>

</html>