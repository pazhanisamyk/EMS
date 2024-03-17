<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Log In | Employee Management System</title>
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary" >
	<header>
		<nav><center><font face="times new roman" size="5" color="white">
			<h1>Welcome To Employee Management System</h1>						
				<a class="homeblack" href="index.php"><b><font color="white">HOME</font></b></a>
				&nbsp;&nbsp;
				<a class="homered" href="elogin.php"><b><font color="black">Employee Login</font></b></a>
				&nbsp;&nbsp;
				<a class="homeblack" href="alogin.php"><b><font color="white">Admin Login</font></b></a>
			</font>
			</center>
		</nav>
	</header>

    <div class="container">
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image">
                            	 <img src="images/ems.jpg" class="avatar" height="100%" width="100%">
                            </div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Welcome To EMS..!</h1>
                                        <img src="assets/avatar.png" class="avatar" height="20%" width="20%">
                                    </div>
                                    <form action="process/eprocess.php" method="POST">
                                        <div class="form-group">
                                            <input type="text" name="mailuid"  class="form-control form-control-user"
                                                 aria-describedby="emailHelp"
                                                placeholder="Enter Email Address..." required>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="pwd" class="form-control form-control-user"
                                                 placeholder="Enter Password" required>
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Remember
                                                    Me</label>
                                            </div>
                                        </div>
                                        <input type="submit" name="login-submit" value="Login" class="btn btn-primary btn-user btn-block">
                                        
                                    </form>
                                    <hr>                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

    </div>
    <center>
	<div>
		<h1><font face="times new roman" color="white" size="3">
			copyrights @ EMS..! All Rights Recived...
			</font>
		</h1></div></center>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>