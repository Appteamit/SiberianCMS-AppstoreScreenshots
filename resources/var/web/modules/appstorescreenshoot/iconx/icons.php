<?php

ini_set('memory_limit', '2048M');
ini_set('max_execution_time', '600');

	require_once 'database.php';
	require_once 'appshot_icons.php';

	// Save emails

	$databaseConnect = new databaseConnect();
	$databaseConnect->saveEmail();

	// Run App Shot

	$runAppShot = new appShot();
	$runAppShot->runAppShot();
	
?>