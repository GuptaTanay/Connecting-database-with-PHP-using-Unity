<?php
 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname="unityapp"; 	/*give data base name here*/
 
 $conn= new mysqli($servername,$username,$password,$dbname); // creating the new connection with the database
 
 if(!$conn) // checking for the connection recieved
	{
	 die("Connection failed". mysqli_connect_error) ; // show the error and die
	}
 else
 {
	 echo "Connection success" ;
	 echo "\n";
	$sql= "select * from unitytable"; // a variable holding a DB query
	$result = mysqli_query($conn, $sql);  	// a variable that check the result from the query
	
	if(mysqli_num_rows($result))   // checks if we got some rows from the result
	{	
		//show me the data on the page
		while($row=mysqli_fetch_assoc($result))  // mysqli_fetch_assoc fetches the associated result passed in the result from conn and sql
		{
				echo "Name:".$row['Name']."|Score:".$row['Score']. ";";  //prints the results
				// semicolon is used to seperate data
				//| is used to sepeate values in the table
				// these both are used as seperators
				
		}
	}
	
 }
 
?>