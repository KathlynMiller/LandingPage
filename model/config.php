<?php

	require_once(__DIR__ . "/database.php");

	//require_once(__DIR__ . "/date.php");


	// session preserve or save information that way we can use it over and over
	session_start();
	session_regenerate_id(true);


    // the path to all project files
    // variable path represent the blog-php 
    $path = "/landingpage/";

    // store variables 
	$host     =  "localhost";
	$username =  "root";
	$password =  "root";
	$database =  "blog_db";

	// use isset to determine whether or not a variable has a value
	// has been set or not
	if (!isset($_SESSION["connection"])) {

		// create a new database object call $connection
		$connection = new Database($host, $username, $password, $database);

		//$d1 = new DateTime("TOMORROW");

		// assign to session variable call connection
		// session variable is use to store information 
		// so we can use it throughout the program
		$_SESSION["connection"] = $connection;
     }