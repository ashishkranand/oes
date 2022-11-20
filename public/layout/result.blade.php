<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Result - Online Examination system</title>
    <link rel="stylesheet" href="./result.css">
</head>
<body>
    <form action="result.blade.php" method="POST">
        <input type="text" name="name" id="" placeholder="Enter your name">
        <input type="submit" value="Search" name="search">
    </form>
    <div class="result">
        
            
    <?php
    $name=$_POST['name'];
    $DBConnect = mysqli_connect("localhost","root","");
    mysqli_select_db($DBConnect,"onlineexamdb");
    if(!$DBConnect)
        die("Not connected to the server".mysqli_connect_error());
    else
    $sql = "SELECT * FROM result where name='$name'";
    $retval = mysqli_query($DBConnect ,$sql);
    if(mysqli_num_rows($retval)>0){
        ?><table border="2" align="center" width="60%">
            <tr>
                <th>Name</th>
                <th>Total question</th>
                <th>Attempted</th>
                <th>Correct</th>
                <th>Wrong</th>
                <th>Percentage</th>
            </tr>
            <?php
        while($row=mysqli_fetch_assoc($retval)){
            
            echo '
            
            <tr>
            <td>'.$row["name"].'</td>
            <td>'.$row["Totalquestion"].'</td>    
            <td>'.$row["Attempted"].'</td>
            <td>'.$row["correct"].'</td>
            <td>'.$row["wrong"].'</td>
            <td>'.$row["percentage"].'</td>
            </tr><br>
            ';
       
        }
    }
    else{
        echo "0 results.";
    }
    
    mysqli_close($DBConnect);
    ?>
    </table>
    </div>
</body>
</html>