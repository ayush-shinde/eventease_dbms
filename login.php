<?php


//This script will handle login
session_start();

// check if the user is already logged in
if(isset($_SESSION['username']))
{
    header("location: welcome.php");
    exit;
}
require_once "config.php";

$username = $password = "";
$err = "";

// if request method is post
if ($_SERVER['REQUEST_METHOD'] == "POST"){
    if(empty(trim($_POST['username'])) || empty(trim($_POST['password'])))
    {
        $err = "Please enter username + password";
    }
    else{
        $username = trim($_POST['username']);
        $password = trim($_POST['password']);
    }


if(empty($err))
{
    $sql = "SELECT id, username, password FROM users WHERE username = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "s", $param_username);
    $param_username = $username;
    
    
    // Try to execute this statement
    if(mysqli_stmt_execute($stmt)){
        mysqli_stmt_store_result($stmt);
        if(mysqli_stmt_num_rows($stmt) == 1)
                {
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                    if(mysqli_stmt_fetch($stmt))
                    {
                        if(password_verify($password, $hashed_password))
                        {
                            // this means the password is corrct. Allow user to login
                            session_start();
                            $_SESSION["username"] = $username;
                            $_SESSION["id"] = $id;
                            $_SESSION["loggedin"] = true;

                            //Redirect user to welcome page
                            header("location: welcome.php");
                            
                        }
                    }

                }

    }
}    


}


?>



<!DOCTYPE html>
<html>
    <head>
        <title>User Login</title>
        <link href="myStyle.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
    <form action = "" method= "post"> 
        <div class="container">
            <div class="form-box">
                <div class="button-box">
                    <div id="btn"></div>
                    <button type="button" class="toggle-btn" onclick="login()">Log In</button>
                    <button type="button" class="toggle-btn" onclick="register()">Register</button>
                 </div>
                <form id="login" class="input-group" action="store.jsp" method="post">
                    <input type="text" class="input-field" placeholder="Username" required id="username" name="username">
                    <input type="text" class="input-field" placeholder="Password" required id="password" name="password">
                    <input type="checkbox" class="check-box"><span>Remember Password</span>
                    <button type="submit" class="submit-btn">Log In</button>
                 </form>
                <form id="register" class="input-group" action="store.jsp" method="post">
                    <input type="text" class="input-field" placeholder="Name" required id="name" name="name">
                    <input type="text" class="input-field" placeholder="Username" required id="username" name="username">
                    <input type="text" class="input-field" placeholder="Password" required id="password" name="password">
                    <input type="email" class="input-field" placeholder="Email" required id="email" name="email">
                    <button type="submit" class="submit-btn">Register</button>
                 </form>
            </div>
        </div>
  
        <script>
            var x = document.getElementById("login");
            var y = document.getElementById("register");
            var z = document.getElementById("btn");

            function register(){
                x.style.left = "-400px";
                y.style.left = "50px"
                z.style.left = "110px"
            }

            function login(){
                x.style.left = "50px";
                y.style.left = "450px"
                z.style.left = "0px"
            }
        </script>
     </form>
    </body>
</html>