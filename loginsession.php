<?php
$conn1 = new mysqli("localhost", "root","","signup");
 if($conn1->connect_error){
 	die("failed connection ".$conn1->connect_error);
 }
 session_start();
$email=$_POST["emailid"];
$password=$_POST["password"];
$sql="SELECT * FROM registration WHERE email='$email' AND password='$password'";
$result=mysqli_query($conn1,$sql);
$count=mysqli_num_rows($result);
if($count==1){
#$row=mysql_fetch_row($result);
#$sname=$row[0];
header('Location: liverpool1.html');
}
else {
echo "Invalid email id or password";
}
?>