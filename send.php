<?php
$name = $_POST['name'];
$email = $_POST['email'];
$name = htmlspecialchars($name);
$email = htmlspecialchars($email);
$name = urldecode($name);
$email = urldecode($email);
$name = trim($name);
$email = trim($email);

?>


<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="utf-8" />

	<title>Send</title>
	<link rel="stylesheet" href="./style/reset.css" />
	<link rel="stylesheet" href="./style/send.css" />


	<link rel="apple-touch-icon" sizes="76x76" href="./favicon//apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="./favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="./favicon/favicon-16x16.png">
	<link rel="manifest" href="./site.webmanifest">
	<link rel="mask-icon" href="./favicon/safari-pinned-tab.svg" color="#5bbad5">
	<meta name="msapplication-TileColor" content="#da532c">
	<meta name="theme-color" content="#ffffff">

</head>
<html>

<body>

	<footer id="contact">
		<div>
			<h1>Contact</h1>
			<hr>
			<h3>Email us here:<br> <span>info@marvelpowergroup.com</span></h3>
		</div>
		<div class="cont">
			<?php
			if (mail("sazonleha010203@gmail.com", "Заявка с сайта", "Имя:" . $name . ". E-mail: " . $email, "From: sazonovleha030201@gmail.com \r\n")) {
				echo "<h3>
				        Thank you.<br>Your info has been<br> successfully sent
				</h3>
				<h4>
					Your can contact us <span>info@marvelpowergroup.com</span><br>
					if you need additional assistance
				</h4>";
			} else {
				echo "<h3>
				        Error.<br>not sent<br>please try again
				</h3>
				<h4>
					Your can contact us <span>info@marvelpowergroup.com</span><br>
					if you need additional assistance
				</h4>";
			}
			?>
			

		</div>
	</footer>

	<script src="./index.js"></script>

</body>

</html>

</html>