<?php
$subjct=$_POST['subject'];
$question=$_POST['question'];
$answer=$_POST['answer'];
$firstoption=$_POST['firstoption'];
$secondoption=$_POST['secondoption'];
$thirdoption=$_POST['thirdoption'];
$forthoption=$_POST['forthoption'];
if($subjct=="" && $question="" && $answer="" && $firstoption="" && $secondoption="" && $thirdoption="" && $forthoption="")
{
    echo ("Please insert record in textbox.");
}
else{
$DBConnect = mysqli_connect("localhost","root","","onlineexamdb");
if(!$DBConnect)
	die("Not connected to the server".mysqli_connect_error());
else
	echo"Successfully connected to server";
$sql = "Insert into exam(subject,question,answer,firstoption,secondoption,thirdoption,forthoption) VALUES
('$subjct','$question','$answer','$firstoption','$secondoption','$thirdoption','$forthoption')";
    if(mysqli_query($DBConnect,$sql)){
        header("location:./addquestion.blade.php");
    }
    else{
        die ("Sorry , Insertion failed.mysqli_error($DBConnect)");
    }
mysqli_close($DBConnect);
}

?>