<?php include "database.php"; ?>


<?php 
if(isset($_POST["submit"])){

    $username = $_POST ['username'];
    $password = $_POST ['password'];

    if ($username != "" && $password != ""){

        $query = "select username from admin where username='".$username."' and pssword='".$password."'";
        $result = mysqli_query($connection, $query);

        $row = mysqli_fetch_array($result);

        $count = $row['username'];

        if($count > 0){
            $_SESSION['username'] = $username;
            header('Location: guests.php');
        }else{
            echo "Invalid username and/or password";
        }
    }
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <title>Login</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
    
</head>
<body>
 
    <div align="center">
    <div class="container">
    <div class="col-xs-6">
    
    <form method = "POST" style="margin-top:150px; margin-left:-40px;">

    <img src="hotellogo.jpg" class="profile_image" alt="">
    
    <div class="form-group">    
    <label for="username">Username</label>
    <input type="text" name="username" class="form-control" style="width: 300px;">
    </div> 
    
    <div class="form-group"> 
    <label for="password">Password</label>   
    <input type="password" name="password" class="form-control" style="width: 300px;">
    </div>
    
    <div class="form-group">   
    <input class="btn btn-primary" type="submit" name="submit" value="Login" style="width: 300px;"><br>
    </div>
    
    </form>   
    </div>
    </div>
    </div>
     
    
</body>
</html>