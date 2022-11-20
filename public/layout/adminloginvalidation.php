<?php

$DBConnect = mysqli_connect("localhost","root","");
mysqli_select_db($DBConnect,"onlineexamdb");

if(!$DBConnect)
	die("Not connected to the server".mysqli_connect_error());
else{
$user=$_POST['username'];
$password=$_POST['password'];
$sql = "SELECT * from admin where username='$user' and password='$password'";
$retval = mysqli_query($DBConnect ,$sql);
if(mysqli_num_rows($retval)>0){
    // echo"Admin Login Successful.";
    header("location:./adminhome.blade.php");
}
else{
    echo "Admin Login Failed";
}




mysqli_close($DBConnect);
}
?>