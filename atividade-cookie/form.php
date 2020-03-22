<link rel="stylesheet" media="screen" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

<?php

if (isset($_COOKIE['pokemon']) && !empty($_COOKIE['pokemon'])) {
	$name = $_COOKIE['pokemon'];
	echo "<h3> Your name is: <strong> {$name}</strong> </h3>";

	echo "
		<a class='btn btn-warning' href='clear_cookei.php' >Clear cookie</a>
	";
} else {

	$valor = $_POST['name'];
	setcookie('pokemon', $valor, time() + 3600);

	header("Location: form.php");
}
