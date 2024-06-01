<?php

ini_set('memory_limit', '2048M');
ini_set('max_execution_time', '600');

	require 'database.php';
	require 'appshot.php';

	// Save emails

	$databaseConnect = new databaseConnect();
	$databaseConnect->saveEmail();

	// Run App Shot

	$runAppShot = new appShot();
	$runAppShot->runAppShot();
	
?>