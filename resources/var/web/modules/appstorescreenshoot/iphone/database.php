<?php

class databaseConnect {
	
	function saveEmail() {

		$userEmail = $_POST['email'];

		$link = mysqli_connect("localhost", "appstorescreenshotst", "appstorescreenshots", "2tex8iCXk7");

		$query = "INSERT INTO `users` (`email`) VALUES ('$userEmail')";

		mysqli_query($link, $query);

	}

}

?>