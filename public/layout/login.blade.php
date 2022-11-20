<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Examination System</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/home.css')}}">
    <link rel="stylesheet" href="./style.css">
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
                <li>about</li>
            </ul>
           </nav>
    </div>
   </div>

  
       <div class="main">
         <div class="login">
           <h1 style="text-align: center;">User Sign In</h1>
           <form action="loginvalidation.php" method="POST">
             <label for="username">Username</label><br>
             <input type="text" name="username" id="" class="input"><br>
             <label for="password">Password</label><br>
             <input type="password" name="password" id="" class="input"><br>
             <a href="#" style="font-weight: bolder;font-size: medium; color: black;margin-left: 3%;">New user/Register</a><br>
             <input type="submit" value="SIGN IN" class="button">
           </form>
         </div>
       </div>


</body>
</html>