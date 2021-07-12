<?php 
	session_start();

	// variable declaration
    $category = "";
	$topic = "";
	$details = "";
	$author = "";
	$datecreated = "";

	// connect to database
	$db = mysqli_connect('localhost','root','','newsmar');
   

	// connect to database? yes/no
	if ($db) {

		// REGISTER USER
	if (isset($_POST['add'])) {
		// receive all input values from the form
        $category = mysqli_real_escape_string($db, $_POST['category']);
		$topic = mysqli_real_escape_string($db, $_POST['topic']);
		$details = mysqli_real_escape_string($db, $_POST['details']);
		$author = mysqli_real_escape_string($db,  $_SESSION["USERNAME"]);
		$datecreated = mysqli_real_escape_string($db,  $_POST['datecreated']);
		
		
		

		
			$query = "INSERT INTO news(category,topic,details ,author , datecreated) 
					  VALUES('$category','$topic','$details' , '$author' , '$datecreated')";
           
			mysqli_query($db, $query);
          
         
            $category="";
            $topic="";
			$details="";
			$author = "";
			$datecreated = "";

	}
		
	}else {
		// no connection with data base
		echo('No connected');
	}
