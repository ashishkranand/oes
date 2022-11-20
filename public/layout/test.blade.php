<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attempt Test -Online Examination System</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/home.css')}}">
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="./test.css">
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
                <li onclick="location.href='http://127.0.0.1:8000/';">Home</li>
                <li>Contact us</li>
                <li onclick="location.href='./login.blade.php';">Logout</li>
                <li>about</li>
            </ul>
           </nav>
    </div>
   </div>

   <div class="testsection">
    <div class="testdetails">
        <form action="test.blade.php" method="POST">
        <label for="subject" class="subjectlabel">Choose subject</label>
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
        
            <input type="submit" value="Start test" name="start" class="starttest">
        </form>

        <br>
         
    </div>

   </div>

   <div class="question">
    <input type="text" name="name" id="" placeholder="Enter name" style="height: 30%; width: 30%">
    <?php     
    $choosedsubject=$_POST['subject'];
    if(isset($_POST['start'])){
        $sql = "SELECT * FROM exam where subject='$choosedsubject'";
    $retval = mysqli_query($DBConnect ,$sql);
    if(mysqli_num_rows($retval)>0){
        while($row=mysqli_fetch_assoc($retval)){
            
            echo '
            <h1>'.$row["question"].'</h1>
             <?php
            ';
            ?></select> <div class="options">
                <form action="submit.php" method="POST"></form>
            <input type="radio" name="option" id="" class="radio"><?php echo '
            <h3>'.$row["firstoption"].'</h3>
            ';?>
            <input type="radio" name="option" id="" class="radio"><?php echo '
            <h3>'.$row["secondoption"].'</h3>
            ';?>
            <input type="radio" name="option" id="" class="radio"><?php echo '
            <h3>'.$row["thirdoption"].'</h3>
            ';?>
            <input type="radio" name="option" id="" class="radio"><?php echo '
            <h3>'.$row["forthoption"].'</h3>
            ';?></div>
            <?php
        }
    }
    else{
        echo "0 results.";
    }
    }
    ?>
    <input type="submit" value="Submit Test" class="buttons" onclick="location.href='./thankyou.blade.php';">
   </div>


   
  
       


</body>
</html>