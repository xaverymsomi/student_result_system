<?php include 'config/header.php';  ?>
<?php $title = "login form" ?>
<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
    <title><?php  echo "$title"; ?></title>
    <link rel="shortcut icon" href="uploads/logo//rms_icon.png">
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/custom.css" rel="stylesheet" type="text/css" />
    <style type="text/css">
        .form{
            position: relative;
            left: 30em;
            top: 3em;
        }
    </style>
    </head>
    <body class="login-page" style="background-color: #123; overflow: hidden ;">
        <div class="login-box form">
            <div class="login-box-body">
                <h3 class="login-box-msg">Result Management System</h3>
                <div class="row">
                	<div class="col-md-12">
                		<div class="row">
                			<div class="col-md-12">
                				
                			</div>
                		</div>
                	</div>
                </div>
                <form action="config/processing.php" method="POST">
                	<div class="form-group has-feedback">
                		<input type="text" class="form-control" placeholder="username" name="username" required />
                        <span class="glyphicon glyphicon-user form-control-feedback"></span>
                    </div>

                    <div class="form-group has-feedback">
                        <select class="form-group has-feedback" name="roles">
                            <option class="form-group has-feedback" value="#">---select your role---</option>
                            <option class="form-group has-feedback" value="Admin">Admin</option>
                            <option class="form-group has-feedback" value="Teacher">Teacher</option>
                            <option class="form-group has-feedback" value="Student">Student</option>
                        </select>
                    </div>

                    <div class="form-group has-feedback">
                    	<input type="password" class="form-control" placeholder="Password" name="password" required />
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    </div>

                    <div class="row">
                    	<div class="col-xs-8">
                    		<div class="checkbox">
                    			<label><input type="checkbox"> Remember me</label>
                            </div>                    
                        </div>
                        <div class="col-xs-4">
                        	<input type="submit" class="btn btn-primary btn-block btn-flat" value="Login" name="login" />
                        </div>
                    </div>
                </form>
<a href="forgotpassword">Forget password</a><br><br>
<p>do you have account <a href="forgotpassword">register here</a></p>
                
            </div>
        </div>

        <script src="assets/js/jQuery-2.1.4.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    </body>
</html>