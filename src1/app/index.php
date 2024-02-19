<?php
	$conn = mysqli_connect(
		'db', # service name
		'php_docker', # username
		'password', # password
		'NEW_DB' # db table
	);
	
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    header('Location: /start.html');
    

