<!DOCTYPE html>

<html lang="en">
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>

<div class="container login-container">
            <div class="row">
			<div class="col-md-3"></div>
                <div class="col-md-6 login-form-1">
                    <h3>Login</h3>
                    <form action="LoginCode.php" method="POST">
                        <div class="form-group">
                            <input type="text" class="form-control" name="email" placeholder="Your Email *" value="" required />
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="pass" placeholder="Your Password *" value="" required/>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btnSubmit" value="Login" />
                        </div>
                    </form>
                </div>
                
            </div>
        </div>



</body>
</html>