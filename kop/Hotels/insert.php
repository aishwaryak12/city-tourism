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

	$name=$_GET['name'];
	$address=$_GET['address'];
	$mail=$_GET['email'];
	$phone=$_GET['phone'];
	$city=$_GET['city'];
	$rooms=$_GET['rooms'];
	$roomtype=$_GET['roomtype'];
	$persons=$_GET['persons'];
	$arrival=$_GET['arrdate'];
	$checkout=$_GET['chkout'];

	$sql="INSERT INTO enquiry(name,address,email,phone,city,rooms,roomtype,persons,arrdate,chkout) 
		VALUES('".$name."','".$address."','".$mail."',".$phone.",'".$city."',".$rooms.",'".$roomtype."',".$persons.",'".$arrival."','".$checkout."')";

	if ($conn->query($sql) === TRUE)
	{
    		echo "New record inserted successfully...";
	} 	
	else
	{
    		echo "Error: ".$sql."<br>".$conn->error;
	}

	$conn->close();
?> 

