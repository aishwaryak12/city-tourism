<?php
	$servername="localhost";
	$username="root";
	$password="";
	$dbname="hotel";

	//Create Connection
	$conn=new mysqli($servername,$username,$password,$dbname);

	//Check Connection
	if($conn->connect_error)
	{
		die("Connection failed: ".$conn->connect-error);
	}

	//Create Table
	$sql="CREATE TABLE enquiry(name VARCHAR(30) NOT NULL, address VARCHAR(50) NOT NULL, email VARCHAR(20) NOT NULL,
						phone INT(10), city VARCHAR(15), rooms INT(2), roomtype VARCHAR(10) NOT NULL,
						persons INT(5), arrdate DATE, chkout DATE)";
	
	if($conn->query($sql)===TRUE)
	{
		echo "Table enquiry created successfully...";
	}
	else
	{
		echo "Error creating table: ".$conn->error;
	}
	$conn->close();
?>