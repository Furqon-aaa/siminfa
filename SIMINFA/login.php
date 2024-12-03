<?php 

    include "service/database.php";
    session_start();

    $login_massage = "";

    if(isset($_POST['login'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $hash_password = hash("sha256", $password);

        $sql = "SELECT * FROM users WHERE username='$username' AND password='$hash_password'";

        $result = $db->query($sql);

        if($result->num_rows > 0) {
            $data = $result->fetch_assoc();
            $_SESSION['username'] = $data['username'];
            $_SESSION['is_login'] = true;
            
            header("location: dashboard.php");

        }else {
            $login_massage = "<p style='color: white;'>account has not found</p>";
        }

    }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login-siminfa</title>
    <link rel="icon" href="images/ICON_SEMINFA.png" type="image/x-icon">
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    />
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url('images/SIMINFA.png');
            display: flex;
            height: 100vh;
            margin: 0; 
        }

        .icon {
            width: 50%;
        }

        .registration-form {
            width: 100%; 
            margin-top: 15%;
            margin-left: 8%;
            max-width: 400px;
        }

        .para {
            color: grey;
            width: 100%;
            margin-bottom: 0;
            font-size: x-small;
        }

        .registration-form h2 {
            margin-top: 0;
            margin-bottom: 20px;
            color: white;
        }

        .registration-form label {
            font-weight: bold;
            color: white;
            display: block;
            margin: 10px 0 5px;
        }

        .registration-form input[type="text"], 
        .registration-form input[type="email"], 
        .registration-form input[type="password"], 
        .registration-form input[type="date"] {
            width: 65%;
            padding: 9px;
            border: 1px solid ;
            border-radius: 20px;
            margin-bottom: 15px;
            box-sizing: border-box;
        }

        .masuk {
            height:auto;
            width: 30%;
            background-color: #1E90FF;
            color: white;
            padding: 9px; 
            border: none;
            border-radius: 10px;
            cursor: pointer;
            font-size: 12px;
            font-weight: bold;
        }

        .piri {
            color: grey;
            margin-top: 0;
            margin-bottom: 40px;
            width: 100%;
            font-size: small;
        }

        .regis {
            text-decoration: none;
            list-style: none;
            color: #1E90FF;
            font-weight: bold;
        }

        .masuk[type="submit"]:hover {
            background-color: #191970;
        }
    </style>
</head>
<body>

    <div class="icon" >
        <img class="animate__animated animate__fadeInLeft animate__delay-0.5s" src="images/ICON_SEMINFA.png" alt=""/>
    </div>

       
    <div class="registration-form " >
        <p class="para">LET'S START</p>
        <h2 class="animate__animated animate__fadeInRight animate__delay-0.5s">Welcome!</h2>
        <i><?= $login_massage ?></i>

        <form action="login.php" method="POST">
            <label class="animate__animated animate__fadeInRight animate__delay-0.5s" for="username">Username</label>
            <input class="animate__animated animate__fadeInRight animate__delay-0.5s" type="text" placeholder="username" name="username"/>
            

            <label class="animate__animated animate__fadeInRight animate__delay-0.5s" for="password">Password</label>
            <input class="animate__animated animate__fadeInRight animate__delay-0.5s" type="password" placeholder="password" name="password"/>

            <p class="piri">Don't have an account?
                <a class="regis" href="register.php">Register.</a>
            </p> 
            <button type="submit" name="login" class="masuk">LOGIN</button> 
            
        </form>
    </div>
    
</body>
</html>