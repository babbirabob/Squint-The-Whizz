<?php

include "config/constants.php";

//get beck form DATA IF THERE IS A REGISTRATION ERROR
$firstname=$_SESSION['signup-data']['firstname'] ?? null;
$lastname=$_SESSION['signup-data']['lastname'] ?? null;
$username=$_SESSION['signup-data']['username'] ?? null;
$email=$_SESSION['signup-data']['email'] ?? null;
$createpassword=$_SESSION['signup-data']['createpassword'] ?? null;
$confirmpassword = $_SESSION['signup-data']['confirmpassword'] ?? null;


//delete signup data session
unset($_SESSION['signup-data']);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UNDEREMPLOYED</title>
    <!-- CUSTOM STYLESHEET -->
    <link rel="stylesheet" href="<?= ROOT_URL ?>css/1std.css">
    <!-- ICONSCOUT CDN -->
    <link rel="stylesheet" href="1std.css">
    <!-- GOOGLE FONT(MONTSERATE) -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,800;1,700&display=swap" rel="stylesheet"> 
</head>
<body>


<section>
    
<?php
        if(isset($_SESSION['signup'])): ?> 
        
            <div class="alert__message error1">
                <p>
                    <?= $_SESSION['signup'];
                unset($_SESSION['signup']);
                ?>
            </p>
            
        </div>
        <?php endif ?>
<div class="Login-box">

        <center><h2>Sign Up</h2></d<center>

        <form action="<?=ROOT_URL?>signup-logic.php" enctype="multipart/form-data" method="POST" autocomplete="off">
        <div class="input-box">
        <span class="icon"><ion-icon name="name"></ion-icon>
                </span>
            <input type="text"     name ="firstname"       value ="<?= $firstname?>"  placeholder="First Name" required>
            </div>
            <div class="input-box">  
            <span class="icon"><ion-icon name="Name"></ion-icon>
                </span>
            <input type="text"     name ="lastname"        value ="<?= $lastname?>"  placeholder="Last Name"required>
            </div>
            <div class="input-box">
            <span class="icon"><ion-icon name="username"></ion-icon>
                </span>
            <input type="username"     name ="username"        value ="<?= $username      ?>"  placeholder="Username"required>
            </div>
            <div class="input-box">
            <span class="icon"><ion-icon name="mail-outline"></ion-icon>
                </span>
            <input type="email"    name ="email"           value ="<?= $email          ?>"  placeholder="email"required>
            </div>
            <div class="input-box">
            <span class="icon">
                    <ion-icon name="lock-closed"></ion-icon>
                </span>
            <input type="password" name ="createpassword"  value ="<?= $createpassword ?>"  placeholder="Password"required>
            </div>
            <div class="input-box">
            <span class="icon">
                    <ion-icon name="lock"></ion-icon>
                </span>
            <input type="password" name ="confirmpassword" value ="<?= $confirmpassword?>"  placeholder="Confirm Password"required>
            </div>
            <div class="form__control">
                <label for="avatar">User Avatar</label>
                <input type="file" name="avatar" id="avatar"required>
            </div>
            <button type="submit" name ="submit"class="btn">Sign Up</button>
            <div class="register-link">
                <small>Already have an Account? <a href="signin.php">Sign in</a></small>
            </div>
        </form>
    </div>
        
</section>  
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</body>
</html>