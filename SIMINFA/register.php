<?php 

    include "service/database.php";

    $register_massage = "";

    if(isset($_POST["register"])) {
        $username = $_POST["username"];
        $password = $_POST["password"];
        $hash_password = hash("sha256", $password);

        try {
            $sql = "INSERT INTO users (username, password) VALUES ('$username', '$hash_password')";

        if($db->query($sql)) {
            $register_massage = "<p style='color: white;'>regist account succesed, please login</p>";
        }else {
            $register_massage = "<p style='color: white;'>regist account failed</p>";
        }
        }catch (mysqli_sql_exception) {
            $register_massage = "<p style='color: white;'>username has been created</p>";
        }

        if (empty($_POST["username"])) {
            $register_massage = "<p style='color: white;'>please fill it in well !</p>";
        } else {
            
        }

        $db->close();
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regist-Siminfa</title>
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

        .start {
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

        .teks {
            color: grey;
            margin-top: 0;
            margin-bottom: 40px;
            width: 100%;
            font-size: small;
        }

        .login {
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
   
    <div class="registration-form">
        <p class="start">START FOR FREE</p>
        <h2 class="animate__animated animate__fadeInRight animate__delay-0.5s">Create New Account</h2>
        <i><?= $register_massage ?></i>


        <form action="register.php" method="POST">
            <label class="animate__animated animate__fadeInRight animate__delay-0.5s" for="username">Username</label>
            <input class="animate__animated animate__fadeInRight animate__delay-0.5s" type="text" placeholder="username" name="username"/>
            

            <label class="animate__animated animate__fadeInRight animate__delay-0.5s" for="password">Password</label>
            <input class="animate__animated animate__fadeInRight animate__delay-0.5s" type="password" placeholder="password" name="password"/>
            <p class="teks">already have an account ?
                <a class="login" href="login.php">Login.</a>
            </p>

            <button type="submit" name="register" class="masuk">REGISTER</button> 
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>   
</body>
</html>