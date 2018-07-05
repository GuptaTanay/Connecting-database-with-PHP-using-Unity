<?php
			//SERVER VARIABLES
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname="unityapp"; 	/*give data base name here*/
	//----------------------------------------------------------
		//APP OR DB VARIABLES
 $user="Vinay";
 $score="10";
	//--------------------------------------------------------
		//CREATING THE CONNECTION
  $conn= new mysqli($servername,$username,$password,$dbname); // creating the new connection with the database
 if(!$conn) // checking for the connection recieved
	{
	 die("Connection failed". mysqli_connect_error) ; // show the error and die
	}
 else
 {
	//INSERTING THE VALUES
	$sql= "INSERT INTO unitytable(Name, Score)
	VALUES ('".$user."','".$score."')";  //inserting values 
	//' is used in queries
	//" is used for closing the string and concatinating the variable
	//-----------------------------------------------------------
	
	$result = mysqli_query($conn, $sql);  	// a variable that check the result from the query
	 
	//------------------------------------------------------------
	
	//CHECKING THE STATUS OF THE QUERY
	if(!$result) echo "error";
	else echo "entered";
	}

?>