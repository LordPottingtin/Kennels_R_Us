<?php
    $username = "#username";
    $password = "#password";
    $dsn = "mysql:host=#host;dbname=#dbname";

    try {
		$db = new PDO($dsn, $username, $password);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} catch (PDOException $e) {
		echo "FAILURE. Reason: ", $e->getMessage();
		exit();
	}
?>