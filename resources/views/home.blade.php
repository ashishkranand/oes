<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Examination System</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/home.css')}}">
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
   <div class="card">
    <div class="card-content">
        <div class="card-image">
            <img src="{{asset('images/login.png')}}" alt="">
        </div>
        <a href="{{asset('layout/login.blade.php')}}">
            <div class="card-text">
                <h1>Login</h1>
            </div>
        </a>
    </div>

    <div class="card-content">
        <div class="card-image">
            <img src="{{asset('images/register.png')}}" alt="">
        </div>
        <a href="{{asset('layout/register.blade.php')}}">
        <div class="card-text">
            <h1>Register</h1>
        </div>
        </a>
    </div>

    <div class="card-content">
        <div class="card-image">
            <img src="{{asset('images/test.png')}}" alt="">
        </div>
        <a href="{{asset('layout/attemptest.blade.php')}}">
        <div class="card-text">
            <h1>Attempt Test</h1>
        </div>
        </a>
    </div>

    <div class="card-content">
        <div class="card-image">
            <img src="{{asset('images/practice.png')}}" alt="">
        </div>
        <a href="{{asset('layout/adminlogin.blade.php')}}">
            <div class="card-text">
                <h1>Admin login</h1>
            </div>
            </a>
    </div>
   </div>

   
</body>
</html>