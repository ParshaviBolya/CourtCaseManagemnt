<!doctype html>
<html lang="en">

    <head>

		<!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <title>Admin Panel</title>

        <!-- CSS -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500&display=swap">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
        <link rel="stylesheet" href="assets/css/jquery.mCustomScrollbar.min.css">
        <link rel="stylesheet" href="assets/css/animate.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/media-queries.css">

        <!-- Favicon and touch icons -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    </head>

    <body>
	
	<?php
		$url = 'https://sih-ccm-2020.herokuapp.com/api/clients';
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_URL, $url);
		$r = curl_exec($ch);
		$cases = json_decode($r, true);
		$clients = $cases['response'];
	?>
	

		<!-- Wrapper -->
    	<div class="wrapper">

			<!-- Sidebar -->
			<nav class="sidebar">
				
				<!-- close sidebar menu -->
				<div class="dismiss">
					<i class="fas fa-arrow-left"></i>
				</div>
				
				
				<ul class="list-unstyled menu-elements" style="padding:20%;">
					<li class="active">
						<a href="admin-home.php"><i class="fas fa-home"></i>Add Cases</a>
					</li>
					<li>
						<a href="add-client.php"><i class="fas fa-cog"></i>Add Clients</a>
					</li>
					<li>
						<a href="add-lawyer.php"><i class="fas fa-user"></i>Add Lawyers</a>
					</li>
					<li>
						<a href="view-cases.php"><i class="fas fa-cog"></i>View Cases</a>
					</li>
					<li>
						<a href="view-clients.php"><i class="fas fa-user"></i>View Clients</a>
					</li>
					<li>
						<a href="view-lawyers.php"><i class="fas fa-user"></i>View Lawyers</a>
					</li>
				</ul>
				
				
				<div class="dark-light-buttons">
					<a class="btn btn-primary btn-customized-4 btn-customized-dark" href="#" role="button">Dark</a>
					<a class="btn btn-primary btn-customized-4 btn-customized-light" href="#" role="button">Light</a>
				</div>
			
			</nav>
			<!-- End sidebar -->
			
			<!-- Dark overlay -->
    		<div class="overlay"></div>

			<!-- Content -->
			<div class="content">
			
				<!-- open sidebar menu -->
				<a class="btn btn-primary btn-customized open-menu" href="#" role="button">
                    <i class="fas fa-align-left"></i> <span>Menu</span>
                </a>
			
		        <!-- Top content -->
		        <div class="top-content section-container" id="top-content">
			        <div class="container">
			            <div class="row">
			                <div class="col col-md-10 offset-md-1 col-lg-8 offset-lg-2">
			                	<h1 class="wow fadeIn">Admin Panel</h1>
								</div>
			                </div>
			            </div>
			        </div>
		        </div>
				
			<!--form-->
			<!-- Default form login -->
			
		<div class="container-fluid mt-5">
	<div class="container">
	<div class="row ml-5">
	
	
<table class="table">
  <thead>
    <tr>
      <th scope="col">name</th>
      <th scope="col">phone number</th>
      <th scope="col">email</th>
	  <th scope="col">adhaar number</th>
	  <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach($clients as $client){?>
    <tr>
      <td><?php echo $client['name']?></td>
      <td><?php echo $client['phoneNumber']?></td>
      <td><?php echo $client['email']?></td>
	  <td><?php echo $client['aadharNumber']?></td>
	  <td><form action="" method="POST"><input type="hidden" name="clientId" value="<?php echo $client['id']?>"/><input type="submit"/ value="View Case"><form></td>
    </tr>
  <?php }?>
  </tbody>
</table>
		</div>
		</div>
		</div>
<!-- Default form login -->
		
		        
		
		        <!-- Footer -->
		        <footer class="footer-container">
		
			        <div class="container">
			        	<div class="row">
		
		                    <div class="col">
		                    	&copy; J.A.R.V.I.S.
		                    </div>
		
		                </div>
			        </div>
		
		        </footer>
	        
	        </div>
	        <!-- End content -->
        
        </div>
        <!-- End wrapper -->

        <!-- Javascript -->
		<script src="assets/js/jquery-3.3.1.min.js"></script>
		<script src="assets/js/jquery-migrate-3.0.0.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/jquery.waypoints.min.js"></script>
        <script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
        <script src="assets/js/scripts.js"></script>
		<script>
			$( "form" ).submit(function( event ) {
				 event.preventDefault();
			let a=	document.getElementById('fileId').value;
			let b=document.getElementById('type').value;
				let c = document.getElementById('lawyerId').value;
				let d =document.getElementById('clientId').value;
				obj = {
					"fileId":a ,
					"type": b,
					"lawyerId": c,
					"clientId": d
					};
				obj = JSON.stringify(obj);
				console.log(obj);
				$.ajax({
				url: "https://sih-ccm-2020.herokuapp.com/api/cases",
				method: "POST",
				crossDomain: true,
				contentType: 'application/json',
				data: obj,
				success: function(result){
					console.log(JSON.parse(result,true));
				},
				error: function(result){
					console.log(result);
				}
			  });
			});
		</script>
    </body>

</html>