<?php include('server.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rizal Technological University</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css?v=1">
    <link rel="shortcut icon" href="assets\images\background\RTU LOGO.png" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/app.css?v=1">
	<style>
		body{
			background:  url('assets/images/background/RTU_BG1.jpg');
			background-repeat: no-repeat;
			background-size: cover;
			align-items: center;
			justify-content: center;
            margin-top: 155px;
        }

	</style>
</head>
<body>
    <div>
        <br><br><br><br>
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-sm-12 mx-auto">
                    <div class="card pt-4">
                        <div class="card-body">
                            <div class="text-center mb-5">
                                <img src="assets/images/background/RTU_AMS_BLUE.png" height="90" class='mb-4'>
                                <h3>Sign In</h3>
								<div class="divider">
									<div class="divider-text">Please sign in to use Attendance Monitoring.</div>
								</div>
							</div>
                            <form action = 'login.php' method="POST">
                                <div class="form-group position-relative has-icon-left">
                                    <label for="username">Username</label>
                                    <div class="position-relative">
                                        <input type="text" name="username" class="form-control" id="username">
                                        <div class="form-control-icon">
                                            <i data-feather="user"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group position-relative has-icon-left">
									<label for="password">Password</label>
									<div class="position-relative">
                                        <input type="password" name="password" class="form-control" id="password">
                                        <div class="form-control-icon">
                                            <i data-feather="lock"></i>
                                        </div>
                                    </div>
                                </div>
                                <?php if(count($errors) > 0):?>
                                <div class="form-group position-relative has-icon-left">
                                    <div class="position-relative">
                                        <div class="form-control-icon">
                                            <i data-feather="alert-circle" style="color:red"></i>
                                        </div>
                                        <center><p style="color:red">Incorrect Username/Password!</p></center>
                                    </div>
                                </div>
                                <?php endif ?>
								<div class="clearfix">
									<input type="submit" name="Login" value="LOGIN" class="btn btn-primary float-end">
								</div>
                            </form>
							<br><br>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <script src="assets/js/feather-icons/feather.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>
</html>