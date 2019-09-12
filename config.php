<?php
	
	//firebase database link
	$firebaseDb_URL="https://tamilswipe-986a7.firebaseio.com/Match";
	$firebaseDb_URL_MainDb="https://tamilswipe-986a7.firebaseio.com/";
	
	
	//database configration
	$servername = "localhost";
	$database = "u588884446_binde";
	$username = "u588884446_tamil";
	$password = "Devlogin9";
    
	// Create connection

	$conn = mysqli_connect($servername, $username, $password, $database);

	// Check connection

	if (!$conn) {

	    die("Connection failed: " . mysqli_connect_error());

	}
    
	
?>