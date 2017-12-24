<!DOCTYPE HTML>
<html>

<head>
    <title>Admin Penel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
    <!-- Custom Theme files -->
    <link href="css/style.css" rel='stylesheet' type='text/css' />
    <link href="css/font-awesome.css" rel="stylesheet">
    <script src="js/jquery.min.js">
    </script>
    <script src="js/bootstrap.min.js">
    </script>
</head>

<body>

    <div class="login">
    <?php
				if (isset($_POST['submit'])) {
					include '../inc/conn.php';
					
					$email = $_POST['email'];
					$password = $_POST['password'];

					$sql = "SELECT id FROM admin WHERE email = '$email' AND password ='$password'";
					$result = mysqli_query($con,$sql);
                    $have_user = mysqli_num_rows($result);
					if ($have_user > 0) {
						session_start();
						$_SESSION['login'] = 1;
			            header('Location: index.php');
			            exit();
					} else {
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
					<input type="submit" name="submit">
					</label>
                </div>
                <div class="clearfix"> </div>
            </form>
        </div>
    </div>
    <!---->
    <div class="copy-right">
        <p class="text-center">Developed And Design by <a href="http://facebook.com/mdmortuza.hossain/" target="_blank">Mortuza Hossain</a> </p>
    </div>

    <script src="js/jquery.nicescroll.js"></script>
    <script src="js/scripts.js"></script>
</body>

</html>