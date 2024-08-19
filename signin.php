<?php
include 'config/constants.php';

$username_email = $_SESSION['signin-data']['username_email'] ?? null;
$password = $_SESSION['signin-data']['password'] ?? null;

unset($_SESSION['signin-data']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UNDEREMPLOYED</title>
    <!-- CUSTOM STYLESHEET -->
    <link rel="stylesheet" href="./css/std.css">
    <!-- ICONSCOUT CDN -->
    <link rel="stylesheet" href="std.css">
    <!-- GOOGLE FONT(MONTSERATE) -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,800;1,700&display=swap" rel="stylesheet"> 
</head>
<body>
<section>
<?php
        if(isset($_SESSION['signup-success'])): 
        ?> 
        <div class="Login-box12">
            <div class="alert__message success1">
            <p>
                <?= $_SESSION['signup-success'];
                unset($_SESSION['signup-success']);
                ?>
            </p>
            </div>
            </div>
        <?php elseif(isset($_SESSION['signin'])): ?>
            <div class="Login-box12">
            <div class="alert__message error1">
                <p>
                    <?=$_SESSION['signin'];
                    unset($_SESSION['signin']); 
                    ?>
                </p>
            </div>
        </div>
        <?php endif; ?>
<div class="Login-box">
<center><h2>Sign In</h2></d<center>
<form action="<?= ROOT_URL ?>signin-logic.php" method="POST" autocomplete="off">
        <div class="input-box">
        <span class="icon"><ion-icon name="mail-outline"></ion-icon>
                </span>
            <input type="text" name="username_email" value='<?= $username_email ?>' placeholder="Username or Email" required>
            </div>
            <div class="input-box">
            <span class="icon">
                    <ion-icon name="lock-closed"></ion-icon>
                </span>
            <input type="password" name="password" value='<?= $password ?>' placeholder=" Password" required>
            </div>
            <form class="row contact_form" action="admin/add-post.php" method="post" id="contactForm" validate="validate">

            <button type="submit" class="btn" name="submit">Sign in</button>
            </form>
            <div class="register-link">
            <small>Don't have an account? <a href="signup.php">Sign up</a></small>
            </div>
        </form>
    </div>
</section>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>