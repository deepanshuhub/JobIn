<?php
    ob_start(); 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
    <link rel="stylesheet" type="text/css" href="user_registration.css">
</head>
<style>
    .nomm a{
        font-size: 18px;
    font-weight: bold;
    margin: 0px ;
    padding: 10px 15px;
    width: 50%;
    border: 20;
    border-radius: 5px;
        color:black;
        background-color:blueviolet;
        text-decoration: none;
    }
    .nomm a:hover{
        cursor:pointer;
        background-color: burlywood;
    }

</style>
<body>
 <!--User registration-->   
    <div class="registration-form">
        <h1>
            User Registration Form
        </h1>        
        <form action="usersr.php" method="POST">
            <p>
                Full Name:
            </p>
            <input type="text" id="abcd" name="fullname" placeholder="Full Name" required >
            <p>
                User name:
            </p>
            <input type="text" name="username" placeholder="User Name" required>
            <p>
                Phone Number:
            </p>
            <input type="number" name="Phone_Number" placeholder="Phone number" required>
            <p>
                Address:
            </p>
            <input type="text" name="Address" placeholder="Address" required>
            <p>
                Email:
            </p>
            <input type="email" name="email" placeholder="Email" required>
            <p>
                Password:
            </p>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit" name="submit">Register</button>
            <p>Already have an Account ?</p>
            <button class="nomm" id="abc">
                <a href="user_loginfinal.php" class="btn">Login</a>
            </div>

        </form>
    </div>
    </div>
</body>
</html>
