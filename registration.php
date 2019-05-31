<?php
#require_once("login.php");
 $conn = new mysqli("localhost", "root","","signup");
 if($conn->connect_error){
 	die("failed connection ".$conn->connect_error);
 }
	$fname=$_POST['firstname'];
	$lname=$_POST['lastname'];
	$email=$_POST['emailid'];
	$gen=$_POST['gender'];
	$date=$_POST['dob'];
	$pass=$_POST['password'];
	$key=md5($pass);
	/*if(strlen($pass)<6)
	{
		echo "<script> alert("Password must be grater than 6 letters")</script>";
		}*/
	$query="INSERT INTO registration(firstname,lastname,email,gender,dob,password) VALUES ('$fname','$lname','$email','$gen','$date','$pass')";
	if($conn->query($query)===TRUE){
		header('Location: liverpool.html');
	}
	else{
		echo "erroer: " .$query. "<br>" .$conn->error;
	}
	#$result=mysqli_query($conn,$query);
	#if($result)
	#{
	#	echo "<script>window.open('liverpool.html', '_self')</script>";
	#}
	$conn->close();

?>

