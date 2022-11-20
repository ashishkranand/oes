<?php
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$cnfpassword=$_POST['confirmpassword'];
if($name=="" && $email="" && $password="" && $cnfpassword="")
{
    echo ("Please insert record in textbox.");
}
else{
$DBConnect = mysqli_connect("localhost","root","","onlineexamdb");
if(!$DBConnect)
	die("Not connected to the server".mysqli_connect_error());
else
	echo"Successfully connected to server";
$sql = "Insert into registration(name,email,password,cnfpassword) VALUES
('$name','$email','$password','$cnfpassword')";
    if(mysqli_query($DBConnect,$sql)){
        echo "<h1>Data Inserted succefully into table persons.</h1>";
    }
    else{
        die ("Sorry , Insertion failed.mysqli_error($DBConnect)");
    }
mysqli_close($DBConnect);
}

?>