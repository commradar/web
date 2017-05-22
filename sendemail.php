<?php
if(isset($_POST)) {
	$formtype = $_POST['formtype'];

	$to = "alerts@commradar.com";
	$to1 = "era1989reme@gmail.com";

  if ($formtype == "newsletter") {
    $usertype = $_POST['usertype'];
    $useremail = $_POST['useremail'];
    $content = "You have got a new customer signup on commradar.com. Below are the details: <br><br>";

    $content .= "User Type: " . $usertype . "<br><br>";
  	$content .= "Email: " . $useremail . "<br><br>";

  	$subject = "New customer sign up - Commradar.com";

  	$headers = "MIME-Version: 1.0" . "\r\n";
  	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
  	$headers .= 'From: Commradar<hv@commradar.com>' . "\r\n";
  }

	if ($formtype == "footerform") {
    $footerEmail = $_POST['footerEmail'];
    $footerPhone = $_POST['footerPhone'];
    $content = "You have got a new customer query on commradar.com. Below are the details: <br><br>";

    $content .= "Email: " . $footerEmail . "<br><br>";
  	$content .= "Phone Number: " . $footerPhone . "<br><br>";

  	$subject = "New customer query - Commradar.com";

  	$headers = "MIME-Version: 1.0" . "\r\n";
  	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
  	$headers .= 'From: Commradar<hv@commradar.com>' . "\r\n";
  }


	if ($formtype == "contactform") {
		$username = $_POST['username'];
    $useremail = $_POST['useremail'];
    $userphone = $_POST['userphone'];
		$usercompany = $_POST['usercompany'];
    $content = "You have got a new customer query on commradar.com. Below are the details: <br><br>";

		$content .= "Name: " . $username . "<br><br>";
    $content .= "Email: " . $useremail . "<br><br>";
  	$content .= "Phone Number: " . $userphone . "<br><br>";
		$content .= "Company: " . $usercompany . "<br><br>";

  	$subject = "New contact query - Commradar.com";

  	$headers = "MIME-Version: 1.0" . "\r\n";
  	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
  	$headers .= 'From: Commradar<hv@commradar.com>' . "\r\n";
  }

	mail($to, $subject, $content, $headers);
	mail($to1, $subject, $content, $headers);

	echo 'OK';
}
?>
