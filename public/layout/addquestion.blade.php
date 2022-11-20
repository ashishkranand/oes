<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Examination System</title>
    <link rel="stylesheet" href="./addquestionstyle.css">
    <style>
       
    </style>
</head>
<body>
   <div class="navbar">
    <div class="left">
<img src="https://onlineexammanagement.com/wp-content/uploads/2020/08/cropped-online-logo.png" alt="Logo">
    </div>
    <div class="right">
        <nav>
            <ul>
                <li onclick="location.href='./adminhome.blade.php';">Home</li>
                <li onclick="location.href='./adminlogin.blade.php';">Logout</li>
            </ul>
           </nav>
    </div>
   </div>

   <div class="addquestion">
    <form action="questionadd.php" method="POST">
        <select name="subject" class="choosesubject" id="">
            <option value="HTML">Select Subject</option>
            <?php     

$DBConnect = mysqli_connect("localhost","root","");
mysqli_select_db($DBConnect,"onlineexamdb");
if(!$DBConnect)
	die("Not connected to the server".mysqli_connect_error());
else
$sql = "SELECT * FROM subject";
$retval = mysqli_query($DBConnect ,$sql);
if(mysqli_num_rows($retval)>0){
    while($row=mysqli_fetch_assoc($retval)){
        
        echo '
        
        <option>'.$row["subject"].'</option>
        <br>
        
        <br> <?php
        ';
        ?></select><?php
    }
}
else{
    echo "0 results.";
}

?>
        </select>
        <input type="text" name="question" id="" class="question" placeholder="Enter question"><br>
        <input type="text" name="answer" id="" class="answer" placeholder="Enter answer"><br>
        <input type="text" name="firstoption" id="" class="answer" placeholder="Enter First option"><br>
        <input type="text" name="secondoption" id="" class="answer" placeholder="Enter Second option"><br>
        <input type="text" name="thirdoption" id="" class="answer" placeholder="Enter Third option"><br>
        <input type="text" name="forthoption" id="" class="answer" placeholder="Enter Forth option"><br>
        <input type="submit" value="Add question" class="button" name="addquestion">
    </form>
   </div>
  
      


</body>
</html>