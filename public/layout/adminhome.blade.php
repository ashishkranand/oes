<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Examination System</title>
    <link rel="stylesheet" href="./adminhomestyle.css">
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

  <div class="cards">
    <div class="mainsection">
        <div class="card" onclick="location.href='./addquestion.blade.php';">
            <div class="leftcard">
              <h1>Add Quesion</h1>
            </div>
            <div class="rightcard">
<img src="../images/addquestion.png" alt="">
            </div>
        </div>
        <div class="card">
            <div class="leftcard">
                <h1>update Quesion</h1>
            </div>
            <div class="rightcard">
                <img src="../images/updatequestion.png" alt="">
            </div>
        </div>
        <div class="card">
            <div class="leftcard">
                <h1>Delete Test</h1>
            </div>
            <div class="rightcard">
                <img src="../images/deletequestion.png" alt="">
            </div>
        </div>
        <div class="card" onclick="location.href='./viewreport.blade.php';">
            <div class="leftcard">
                <h1>View Report</h1>
            </div>
            <div class="rightcard">
                <img src="../images/viewreport.png" alt="">
            </div>
        </div>
    </div>
  </div>
      
<script>
    function addquestionshow(){

    }
</script>

</body>
</html>