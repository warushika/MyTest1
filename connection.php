<?php

	//$connection = mysqli_connect(dbserver,dbuser,dboass,dbname);
	$connection = mysqli_connect('localhost','root','','customerdb');


	$First_name = $_POST ['first_name'];
	$Last_name = $_POST ['last_name'];
	$Address = $_POST ['address'];
	$telephone = $_POST ['tele'];
	$email = $_POST ['email'];
	$Password = $_POST ['password'];
	$Re_password= $_POST ['re_password'];

	
	$query = "INSERT INTO customer_reg(first_name,last_name,address,tele,email,password,re_password)
	VALUES('$First_name ' , '$Last_name','$Address','$telephone','$email','$Password','$Re_password')";
	$result = mysqli_query($connection ,$query);
	if(!$result){
		echo "Database query failed";
	}else{
		echo "1 record added";
	}

	
?>


