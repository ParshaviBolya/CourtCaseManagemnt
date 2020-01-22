		<?php
			include("config.php");
			session_start();
   
			if($_SERVER["REQUEST_METHOD"] == "POST") {
			// username and password sent from form 
      
				$email = mysqli_real_escape_string($db,$_POST['email']);
				$pass = mysqli_real_escape_string($db,$_POST['pass']);  
      
				$sql = "SELECT uid FROM client WHERE email = '$email' and pass = '$pass'";
				$result = mysqli_query($db,$sql);
				$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
				//$active = $row['active'];
      
				$count = mysqli_num_rows($result);
      
				// If result matched $myusername and $mypassword, table row must be 1 row
				if($count == 1) {
				//session_register("email");
					$_SESSION['login_user'] = $email;
					header("location: client-home.php");
				}else {
					header("location: index.php");
				}
			}
		?>	
	