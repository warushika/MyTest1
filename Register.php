<?php
	session_start();
	include('connection1.php');
   
 ?>

<html>
	<head>
		<title>Register</title>
			
			
			<link rel="stylesheet" type="text/css" href="Style.css">
			<link rel="stylesheet" href="2.css" type="text/css" media="screen">
			<link rel="stylesheet" href="5.css" type="text/css" media="screen">
	</head>
	<body>
		<header><!-- Defining the header-->
		<div class="header">
			<font type ="sans-serif" size="6" color="#1a0000"> E-PARTY|</font>
			<font type ="sans-serif" size="4" color="##1a0000">LET'S PLAN YOUR PARTY ONLINE</font>
			<div class="social_icons">
				<a href="#" title="Facebook"><img alt="" src="2.jpg" width="36px" height="40px"></a>
				<a href="#" title="Twitter"><img alt="" src="3.jpg"width="36px" height="40px"></a>
				<a href="#" title="gmail"><img alt="" src="4.jpg"width="36px" height="40px"></a>
			</div>
			<div class="search">
				<form action="" method="get">
					<input type="text" name="" value="" />
					<input type="submit" value="search" />
				</form>
			</div>
			<div class="clear"></div>
		</div>
   		</header>

			<div class="bg-img">
				<div class="logo">
				<a href="" title="LOGO"><img src="logo.png"></a>
		
				<form action ="connection.php" method="post">
					<div class="container">
						<p><b><i>Customer registration</i></b></p>
						<table>
							<tr>

								<td><b>First Name :</b>
								<input type="text" name="first_name" >
								<br></td>
								<td><b>Last Name :</b>
								<input type="text" name="last_name" >
								<br></td>
								
							</tr>
							<tr>
								<td><b>Address :</b>
								<input type="text" name="address" >
								<br></td>
								<td><b>Telephone :</b>
								<input type="text" name="tele" >
								<br></td>
								
							</tr>
							<tr>
								<td><b>Email :</b>
								<input type="text" name="email" >
								<br></td>

							</tr>
							<tr>
								<td><b>Password :</b>
								<input type="text" name="password">
								<br></td>
								<td><b>Re enter password :</b>
								<input type="text" name="re_password" >
								<br></td>
							</tr>
							<tr>
								<td><button type="Submit"  class="btn1">Submit</button></td>
								<td><button type="Reset" class="btn2">Reset</button></td>
							</tr>
						</table>
	
					</div>
				</form>	
				</div>
			</div>
			<div class="footer"><!-- Defining the footer section of the page -->
					 E-party. All rights reserved &copy;   &nbsp;:&nbsp; <a class="link" href="#">Contact US</a>
   			</div>
			
			
	</body>
</html>


