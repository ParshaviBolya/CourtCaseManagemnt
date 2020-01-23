	<?php
			include("config.php");
			session_start();
   
			if($_SERVER["REQUEST_METHOD"] == "POST") {
			// username and password sent from form 
				$email = mysqli_real_escape_string($db,$_POST['email']);
				$pass = mysqli_real_escape_string($db,$_POST['pass']);
      
				$sql = "SELECT * FROM users WHERE email = '$email' and password = '$pass'";
				$result = mysqli_query($db,$sql);
				$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
				//$active = $row['active'];
				$count = mysqli_num_rows($result);
				// If result matched $myusername and $mypassword, table row must be 1 row
				if($count == 1) {
				//session_register("email");
					$id=$row['id'];
					$role=$row['role'];
					$_SESSION['login_user'] = $email;
					$_SESSION['login_id'] = $id;
					$_SESSION['login_role'] = $role;
					switch($role){
						case 1:
							header("location: admin-home.php");
							break;
						case 2:
							header("location: lawyer-home.php");
							break;
						case 3:
							header("location: client-home.php");
							break;
					}
				}else {
					header("location: login.php");
				}
			}
		?>
	
<?php/* 
	$url = 'http://localhost:5000/api/clients';
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_URL, $url);
	$r = curl_exec($ch);
	$clients = json_decode($r, true);
	print_r($clients);
	print_r($clients['response'][0]['id']);*/
?>