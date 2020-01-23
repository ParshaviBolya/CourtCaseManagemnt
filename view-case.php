<?php
	if($_SERVER["REQUEST_METHOD"] == "POST") {
		$caseId = $_POST['caseId'];
	}
	else{
		header("Location: ./view-cases.php");
	}
?>

<?php
	$url = 'https://sih-ccm-2020.herokuapp.com/api/cases/'.$caseId;
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_URL, $url);
	$r = curl_exec($ch);
	$cases = json_decode($r, true);
	$case = $cases['response'];
	$case = $case[0];
	print_r($case);
?>
<html>
<body>
<br><br><br><br><br><br><br><br>
</body>
</html>
<?php
	$url = 'https://sih-ccm-2020.herokuapp.com/api/hearings?case='.$caseId;
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_URL, $url);
	$r = curl_exec($ch);
	$hearings = json_decode($r, true);
	$hearings = $cases['response'];
	print_r($hearings);
?>