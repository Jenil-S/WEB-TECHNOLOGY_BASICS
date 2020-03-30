<?php

$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$email=$_POST['email'];
$number=$_POST['number'];
$gender=$_POST['gender'];
$city=$_POST['city'];
$company=$_POST['company'];

			$host = "localhost";
			$dbusername = "root";
			$dbpassword = "";
			$dbname = "test";
			// Create connection
			$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
			if (mysqli_connect_error())
			{
			die('Connect Error ('. mysqli_connect_errno() .')'
			. mysqli_connect_error());
			}
			else
			{
					$sql = "INSERT INTO form (firstname,lastname,email,number,gender,city,company)
					values ('$firstname','$lastname','$email',$number','$gender','$city','$company')";

					if ($conn->query($sql)){
					echo "New record is inserted successfully...";

					header('Refresh:3; url=form.html');
			}
			else
			{
					echo "Error: ". $sql ."
					". $conn->error;

			}
			    $conn->close();
			}

			    ?>
			
